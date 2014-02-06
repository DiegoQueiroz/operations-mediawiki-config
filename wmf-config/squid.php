<?php
# HTCP multicast squid purging
$wgHTCPMulticastAddress = '239.128.0.112';
$wgHTCPMulticastTTL = 8;

# Accept XFF from these proxies
$wgSquidServersNoPurge = array(
	'208.80.152.162',	# singer (secure)

	# Text
	# pmtpa
	'208.80.152.43',	# sq33, API
	'208.80.152.44',	# sq34, API
	'208.80.152.46',	# sq36, API
	'208.80.152.47',	# sq37
	'208.80.152.69',	# sq59
	'208.80.152.70',	# sq60
	'208.80.152.71',	# sq61
	'208.80.152.72',	# sq62
	'208.80.152.73',	# sq63
	'208.80.152.74',	# sq64
	'208.80.152.75',	# sq65
	'208.80.152.76',	# sq66
	'208.80.152.81',	# sq71
	'208.80.152.82',	# sq72
	'208.80.152.83',	# sq73
	'208.80.152.84',	# sq74
	'208.80.152.85',	# sq75
	'208.80.152.86',	# sq76
	'208.80.152.87',	# sq77
	'208.80.152.88',	# sq78

	# eqiad
	'10.64.0.123',	# cp1001, API
	'10.64.0.124',	# cp1002, API
	'10.64.0.125',	# cp1003, API
	'10.64.0.126',	# cp1004, API
	'10.64.0.127',	# cp1005, API
	'10.64.0.128',	# cp1006
	'10.64.0.129',	# cp1007
	'10.64.0.130',	# cp1008
	'10.64.0.131',	# cp1009
	'10.64.0.132',	# cp1010
	'10.64.0.133',	# cp1011
	'10.64.0.134',	# cp1012
	'10.64.0.135',	# cp1013
	'10.64.0.136',	# cp1014
	'10.64.0.137',	# cp1015
	'10.64.0.138',	# cp1016
	'10.64.0.139',	# cp1017
	'10.64.0.140',	# cp1018
	'10.64.0.141',	# cp1019
	'10.64.0.142',	# cp1020

	'10.64.0.159',	# cp1037, Varnish
	'10.64.0.160',	# cp1038, Varnish
	'10.64.0.161',	# cp1039, Varnish
	'10.64.0.162',	# cp1040, Varnish

	'10.64.32.104',	# cp1052, Varnish
	'10.64.32.105',	# cp1053, Varnish
	'10.64.32.106',	# cp1054, Varnish
	'10.64.32.107',	# cp1055, Varnish
	'10.64.0.102',	# cp1065, Varnish
	'10.64.0.103',	# cp1066, Varnish
	'10.64.0.104',	# cp1067, Varnish
	'10.64.0.105',	# cp1068, Varnish

	# esams
	'91.198.174.41',	# amssq31
	'91.198.174.42',	# amssq32
	'91.198.174.43',	# amssq33
	'91.198.174.44',	# amssq34
	'91.198.174.45',	# amssq35
	'91.198.174.46',	# amssq36
	'91.198.174.47',	# amssq37
	'91.198.174.48',	# amssq38
	'91.198.174.49',	# amssq39
	'91.198.174.50',	# amssq40
	'91.198.174.51',	# amssq41
	'91.198.174.52',	# amssq42
	'91.198.174.53',	# amssq43
	'91.198.174.54',	# amssq44
	'91.198.174.55',	# amssq45
	'91.198.174.56',	# amssq46

	'91.198.174.57',	# amssq47
	'2620:0:862:1:A6BA:DBFF:FE30:CFB3',

	'91.198.174.58',	# amssq48
	'2620:0:862:1:A6BA:DBFF:FE38:FFDA',

	'91.198.174.59',	# amssq49
	'2620:0:862:1:A6BA:DBFF:FE38:FAE1',

	'91.198.174.60',	# amssq50
	'2620:0:862:1:A6BA:DBFF:FE38:DB56',

	'91.198.174.61',	# amssq51
	'2620:0:862:1:A6BA:DBFF:FE38:D75F',

	'91.198.174.62',	# amssq52
	'2620:0:862:1:A6BA:DBFF:FE38:DBC0',

	'91.198.174.63',	# amssq53
	'2620:0:862:1:A6BA:DBFF:FE30:D87D',

	'91.198.174.64',	# amssq54
	'2620:0:862:1:A6BA:DBFF:FE38:FAE7',

	'91.198.174.65',	# amssq55
	'2620:0:862:1:A6BA:DBFF:FE38:E949',

	'91.198.174.66',	# amssq56
	'2620:0:862:1:A6BA:DBFF:FE38:FC71',

	'91.198.174.67',	# amssq57
	'2620:0:862:1:A6BA:DBFF:FE38:DB9F',

	'91.198.174.68',	# amssq58
	'2620:0:862:1:A6BA:DBFF:FE30:D853',

	'91.198.174.69',	# amssq59
	'2620:0:862:1:A6BA:DBFF:FE30:D844',

	'91.198.174.70',	# amssq60
	'2620:0:862:1:A6BA:DBFF:FE38:FFBF',

	'91.198.174.71',	# amssq61
	'2620:0:862:1:A6BA:DBFF:FE38:DC22',

	'91.198.174.72',	# amssq62
	'2620:0:862:1:A6BA:DBFF:FE38:DB20',

	# ulsfo
	'10.128.0.108',	# cp4008
	'10.128.0.109',	# cp4009
	'10.128.0.110',	# cp4010
	'10.128.0.116',	# cp4016
	'10.128.0.117',	# cp4017
	'10.128.0.118',	# cp4018

	# SSL
	'208.80.152.16',	# ssl1
	'208.80.152.17',	# ssl2
	'208.80.152.18',	# ssl3
	'208.80.152.19',	# ssl4

	'208.80.154.133',	# ssl1001
	'208.80.154.134',	# ssl1002
	'208.80.154.9',		# ssl1003
	'208.80.154.8',		# ssl1004
	'208.80.154.75',	# ssl1005
	'208.80.154.76',	# ssl1006
	'208.80.154.51',	# ssl1007
	'208.80.154.136',	# ssl1008
	'208.80.154.77',	# ssl1009

	'91.198.174.102',	# ssl3001
	'91.198.174.103',	# ssl3002
	'91.198.174.104', 	# ssl3003
	'91.198.174.105',	# ssl3004
	'91.198.174.106',	# ssl3005
	'91.198.174.107',	# ssl3006

	# bits
	# Not needed, but listed for completeness
	# pmtpa
	'208.80.152.77',	# sq67
	'208.80.152.78',	# sq68
	'208.80.152.79',	# sq69
	'208.80.152.80',	# sq70

	# eqiad
	'208.80.154.62',	# arsenic
	'208.80.154.143',	# niobium
	'10.64.32.133',		# cp1056
	'10.64.32.134',		# cp1057
	'10.64.0.106',		# cp1069
	'10.64.0.107',		# cp1070

	# esams
	'91.198.174.89',	# cp3019
	'91.198.174.90',	# cp3020
	'91.198.174.91',	# cp3021
	'91.198.174.92',	# cp3022

	# ulsfo
	'10.128.0.101',	# cp4001
	'10.128.0.102',	# cp4002
	'10.128.0.103',	# cp4003
	'10.128.0.104',	# cp4004

	# Upload
	# pmtpa
	'208.80.152.51',	# sq41
	'208.80.152.52',	# sq42
	'208.80.152.53',	# sq43
	'208.80.152.54',	# sq44
	'208.80.152.55',	# sq45
	'208.80.152.58',	# sq48
	'208.80.152.59',	# sq49
	'208.80.152.60',	# sq50
	'208.80.152.61',	# sq51
	'208.80.152.62',	# sq52
	'208.80.152.63',	# sq53
	'208.80.152.64',	# sq54
	'208.80.152.65',	# sq55
	'208.80.152.66',	# sq56
	'208.80.152.67',	# sq57
	'208.80.152.68',	# sq58
	'208.80.152.89',	# sq79
	'208.80.152.90',	# sq80
	'208.80.152.91',	# sq81
	'208.80.152.92',	# sq82
	'208.80.152.93',	# sq83
	'208.80.152.94',	# sq84
	'208.80.152.95',	# sq85
	'208.80.152.96',	# sq86

	# eqiad
	'10.64.0.143',	# cp1021
	'10.64.0.144',	# cp1022
	'10.64.0.145',	# cp1023
	'10.64.0.146',	# cp1024
	'10.64.0.147',	# cp1025
	'10.64.0.148',	# cp1026
	'10.64.0.149',	# cp1027
	'10.64.0.150',	# cp1028
	'10.64.0.151',	# cp1029
	'10.64.0.152',	# cp1030
	'10.64.0.153',	# cp1031
	'10.64.0.154',	# cp1032
	'10.64.0.155',	# cp1033
	'10.64.0.156',	# cp1034
	'10.64.0.157',	# cp1035
	'10.64.0.158',	# cp1036
	'10.64.32.81',	# dysprosium
	'10.64.32.100',	# cp1048
	'10.64.32.101',	# cp1049
	'10.64.32.102',	# cp1050
	'10.64.32.103',	# cp1051
	'10.64.0.98',	# cp1061
	'10.64.0.99',	# cp1062
	'10.64.0.100',	# cp1063
	'10.64.0.101',	# cp1064

	# esams
	'91.198.174.73',	# cp3003
	'91.198.174.74',	# cp3004
	'91.198.174.75',	# cp3005
	'91.198.174.76',	# cp3006
	'91.198.174.77',	# cp3007
	'91.198.174.78',	# cp3008
	'91.198.174.79',	# cp3009
	'91.198.174.80',	# cp3010

	# ulsfo
	'10.128.0.105',	# cp4005
	'10.128.0.106',	# cp4006
	'10.128.0.107',	# cp4007
	'10.128.0.113',	# cp4013
	'10.128.0.114',	# cp4014
	'10.128.0.115',	# cp4015

	# Mobile
	# eqiad
	'10.64.0.169',		# cp1041
	'10.64.0.170',		# cp1042
	'208.80.154.53',	# cp1043
	'208.80.154.54',	# cp1044
	'10.64.32.98',		# cp1046
	'10.64.32.99',		# cp1047
	'10.64.0.96',		# cp1059
	'10.64.0.97',		# cp1060

	# esams
	'91.198.174.81',	# cp3011
	'2620:0:862:1:26B6:FDFF:FEF5:B2D4',
	'91.198.174.82',	# cp3012
	'2620:0:862:1:26B6:FDFF:FEF5:ABB4',
	'91.198.174.83',	# cp3013
	'91.198.174.84',	# cp3014

	# ulsfo
	'10.128.0.111',	# cp4011
	'10.128.0.112',	# cp4012
	'10.128.0.119',	# cp4019
	'10.128.0.120',	# cp4020
	'10.2.4.26', # mobile.svc.ulsfo.wmnet, appears in XFF

	# OTHERS - Currently unused..?
);

# IP addresses that aren't proxies, regardless of what the other sources might say
$wgProxyWhitelist = array(
	'68.124.59.186',
	'202.63.61.242',
	'62.214.230.86',
	'217.94.171.96',
);
