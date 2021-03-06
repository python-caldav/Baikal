<?php
# If you change this value, you'll have to re-generate passwords for all your users
define("BAIKAL_AUTH_REALM", 'BaikalDAV');

# Should begin and end with a "/"
define("BAIKAL_CARD_BASEURI", PROJECT_BASEURI . "card.php/");

# Should begin and end with a "/"
define("BAIKAL_CAL_BASEURI", PROJECT_BASEURI . "cal.php/");

# Should begin and end with a "/"
define("BAIKAL_DAV_BASEURI", PROJECT_BASEURI . "dav.php/");

# Define path to Baïkal Database SQLite file
define("PROJECT_SQLITE_FILE", PROJECT_PATH_SPECIFIC . "db/db.sqlite");

# MySQL > Use MySQL instead of SQLite ?
define("PROJECT_DB_MYSQL", FALSE);

# MySQL > Host, including ':portnumber' if port is not the default one (3306)
define("PROJECT_DB_MYSQL_HOST", '');

# MySQL > Database name
define("PROJECT_DB_MYSQL_DBNAME", '');

# MySQL > Username
define("PROJECT_DB_MYSQL_USERNAME", '');

# MySQL > Password
define("PROJECT_DB_MYSQL_PASSWORD", '');

# A random 32 bytes key that will be used to encrypt data
define("BAIKAL_ENCRYPTION_KEY", '00d48db32698d6aebf41785b3706b006');

# The currently configured Baïkal version
define("BAIKAL_CONFIGURED_VERSION", '0.5.0');
