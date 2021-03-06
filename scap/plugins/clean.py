import os
import socket

import scap.cli as cli
import scap.log as log
import scap.main as main
import scap.ssh as ssh


@cli.command('clean')
class Clean(main.AbstractSync):
    """ Scap sub-command to clean old branches """

    @cli.argument('branch', help='The name of the branch to clean.')
    @cli.argument('--l10n-only', action='store_true',
                  help='Only prune old l10n cache files.')
    def main(self, *extra_args):
        """ Clean old branches from the cluster for space savings! """

        # Update masters
        with log.Timer('clean-masters', self.get_stats()):
            clean_job = ssh.Job(self._get_master_list(),
                                user=self.config['ssh_user'])
            clean_job.exclude_hosts([socket.getfqdn()])
            clean_job.shuffle()
            clean_job.command(self._clean_command(self.config['stage_dir']))
            clean_job.progress(log.reporter('clean-masters',
                               self.config['fancy_progress']))
            succeeded, failed = clean_job.run()
            if failed:
                self.get_logger().warning(
                    '%d masters had clean errors', failed)

        # Update apaches
        with log.Timer('clean-apaches', self.get_stats()):
            clean_job = ssh.Job(self._get_target_list(),
                                user=self.config['ssh_user'])
            clean_job.shuffle()
            clean_job.command(self._clean_command(self.config['deploy_dir']))
            clean_job.progress(log.reporter('clean-apaches',
                               self.config['fancy_progress']))
            succeeded, failed = clean_job.run()
            if failed:
                self.get_logger().warning(
                    '%d apaches had clean errors', failed)

    def _clean_command(self, location):
        path = os.path.join(location, 'php-%s' % self.arguments.branch)
        if self.arguments.l10n_only:
            path = os.path.join(path, 'cache', 'l10n', '*.cdb')
        return 'rm -fR %s' % path
