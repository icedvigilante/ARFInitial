<?php
    define('PERCH_LICENSE_KEY', 'P21507-GWG225-MLD497-QBX790-PRB024');

    /*define("PERCH_DB_USERNAME", 'root');
    define("PERCH_DB_PASSWORD", 'root');
    define("PERCH_DB_SERVER", "localhost");
    define("PERCH_DB_DATABASE", "arf_db");*/
	
    define("PERCH_DB_USERNAME", 'c5runfest_admin');
    define("PERCH_DB_PASSWORD", 'revdLAyAuDX_8');
    define("PERCH_DB_SERVER", "localhost");
    define("PERCH_DB_DATABASE", "c5arf_db");
	
	/*define("PERCH_DB_USERNAME", 'kimo');
    define("PERCH_DB_PASSWORD", 'H00ve$');
    define("PERCH_DB_SERVER", "anchoragerunfestorg.fatcowmysql.com");
    define("PERCH_DB_DATABASE", "runfest_db");*/
	
    define("PERCH_DB_PREFIX", "perch2_");	
    define('PERCH_TZ', 'UTC');

    define('PERCH_EMAIL_FROM', 'kho@kimografix.com');
    define('PERCH_EMAIL_FROM_NAME', 'Kimberly Olmsted');

    define('PERCH_LOGINPATH', '/perch');
    define('PERCH_PATH', str_replace(DIRECTORY_SEPARATOR.'config', '', __DIR__));
    define('PERCH_CORE', PERCH_PATH.DIRECTORY_SEPARATOR.'core');

    define('PERCH_RESFILEPATH', PERCH_PATH . DIRECTORY_SEPARATOR . 'resources');
    define('PERCH_RESPATH', PERCH_LOGINPATH . '/resources');
    
    define('PERCH_HTML5', true);
	define('PERCH_RWD', true); /* removes heights and widths from image tags*/
	
	/*define('PERCH_DEBUG', true);*/