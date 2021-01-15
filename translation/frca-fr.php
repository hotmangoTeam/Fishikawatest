<?php
	# Internal Resources
	define('_FRCA_DOREMOTE_ERROR', 'cURL is not available. FRCA could not access or download necessary remote resources');
	define('_FRCA_DEVENA', 'FRDeveloper Mode Enabled');
	define('_FRCA_DEVDSC', 'FRtroubleshooting information has been made available');
	define('_FRCA_DEVMI', 'FRdeveloper-mode-information');
	define('_FRCA_DBGENA', 'FRDebug Mode Enabled');
	define('_FRCA_DBGDSC', 'FRphp error_reporting and display has been enabled');
	define('_FRCA_SSLDSC', 'FRUnable to redirect to the SSL version of the site, do you have a valid SSL certificate?');
	define('_FRCA_PRXDSC', 'FRA Caching Proxy, Load Balancer or CDN Server was detected, SSL status may not be local');

	# Remote Services
	define('_RES_FRCA_GIT_URL', 'https://');
	define('_RES_FRCA_JSON_URL', 'https://hotmangoteam.github.io/Fishikawatest/pdadata/frca-pdadata.json');
	define('_RES_VEL_JSON_URL', 'https://');
	define('_RES_JOOMLA_UPDATE_URL', 'https://');

	# Confidence Dashboard
	define('_FRCA_CONFDASH_HEADING', 'Confidence Status');
	define('_FRCA_CONFDASH_SERVER_HEADING', 'Server Setup');
	define('_FRCA_CONFDASH_SERVER_TEXT', 'How well your hosting server is configured');
	define('_FRCA_CONFDASH_PHP_HEADING', 'PHP Settings');
	define('_FRCA_CONFDASH_PHP_TEXT', 'How well your php environment is setup');
	define('_FRCA_CONFDASH_JOOMLA_HEADING', 'Joomla Settings');
	define('_FRCA_CONFDASH_JOOMLA_TEXT', 'How well your Joomla instance is configured');
	define('_FRCA_CONFDASH_AGGREGATE_HEADING', 'Confidence');
	define('_FRCA_CONFDASH_AGGREGATE_TEXT', 'The aggregate rating of all confidence tests');

	# Problem Status Categories
	define('_FRCA_CRITICAL', 'Critical');
	define('_FRCA_CRITICAL_DESC', 'Showstopper issues that will cause fatal errors and installation or upgrade failures');
	define('_FRCA_MODERATE', 'Moderate');
	define('_FRCA_MODERATE_DESC', 'Potential issues that may cause difficulties with installations, updates or specific features and functions');
	define('_FRCA_MINOR', 'Minor');
	define('_FRCA_MINOR_DESC', 'Minor issues that may reduce or limit feature functionality or administration and maintenace tasks');
	define('_FRCA_BESTPRACTICE', 'Best Practice');
	define('_FRCA_BESTPRACTICE_DESC', 'Recommendations that could potentially enhance performance, security, productivity or rankings');
	define('_FRCA_NOPROBS_DESC', 'Good News! No known problems were discovered');

	# Problem Severity/Risk
	define('_FRCA_RISKHIGH', 'High');
	define('_FRCA_RISKMEDIUM', 'Medium');
	define('_FRCA_RISKLOW', 'Low');
	define('_FRCA_RISKUC', 'UC');

	# Problem Type Category
	define('_FRCA_SERVER', 'Server');
	define('_FRCA_PHP', 'PHP');
	define('_FRCA_WEBSERVER', 'Web Server');
	define('_FRCA_DATABASE', 'Database');
	define('_FRCA_PERMISSIONS', 'Permissions');
	define('_FRCA_OWNERSHIP', 'Ownership');
	define('_FRCA_PERFORMANCE', 'Performance');
	define('_FRCA_FILESYSTEM', 'File-System');
	define('_FRCA_NETWORK', 'Network');
	define('_FRCA_CACHE', 'Cache');
	define('_FRCA_JS', 'Javascript/jQuery/Ajax');
	define('_FRCA_JOOMLA', 'Joomla');
	define('_FRCA_LIBRARY', 'Library');
	define('_FRCA_COMPOENT', 'Component');
	define('_FRCA_MODULE', 'Module');
	define('_FRCA_PLUGIN', 'Plugin');
	define('_FRCA_TEMPLATE', 'Template');
	define('_FRCA_REMOTESVC', 'Remote Service');
	define('_FRCA_OPTIMISATION', 'Optimisation');
	define('_FRCA_SECURITY', 'Security');
	define('_FRCA_CODEPRACTICE', 'Coding Practice');
	define('_FRCA_KNOWNBUG', 'Known Bug');


	# Unique Problem Symptoms
	define('_FRCA_WHITESCREEN', 'White Screen');
	define('_FRCA_FATALERRORS', 'Fatal Errors');
	define('_FRCA_WARNINGS', 'Warnings');
	define('_FRCA_WRITEERRORS', 'Write Errors');
	define('_FRCA_UPLOADERRORS', 'Upload Errors');
	define('_FRCA_TIMEOUTERRORS', 'Timeout Errors');
	define('_FRCA_BADPERFORMANCE', 'Poor Performance');
	define('_FRCA_POSSEXPLOITS', 'Possible Exploits');

	# Unique Problem Effects
	define('_FRCA_INSTALLATION', 'Installation');
	define('_FRCA_DEVELOPMENT', 'Development');
	define('_FRCA_MAINTENANCE', 'Maintenance');
	define('_FRCA_ADMINISTRATION', 'Administration');
	define('_FRCA_OPERATION', 'Operation');
	define('_FRCA_SEOSMOSEM', 'SEO, SMO & SEM');

	# Unique VEL Strings
	define('_FRCA_VEL', 'VEL');
	define('_FRCA_VEL_FIXED', 'Fixed');
	define('_FRCA_VEL_NOTFIXED', 'Not Fixed');
	define('_FRCA_VEL_ALLPREV', 'All Previous');
	define('_FRCA_VEL_CVECVS30', 'CVE ID/CVS30 Score');
	define('_FRCA_VEL_AUTHSITE', 'Author Site');

	# General Strings
	define('_FRCA_Y', 'Yes');
	define('_FRCA_N', 'No');
	define('_FRCA_ENA', 'Enabled');
	define('_FRCA_DIS', 'Disabled');
	define('_FRCA_NA', 'Not Applicable');
	define('_FRCA_U', 'Unknown');
	define('_FRCA_UC', 'Unclassified');
	define('_FRCA_CATEGORY', 'Category');
	define('_FRCA_TYPE', 'Type');
	define('_FRCA_UPDATETO', 'Update To');
?>
