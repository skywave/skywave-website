<?php
// Copy to app/config.php on the server and fill in. app/config.php is not in git.
// (With the Docker setup in deploy/, leave this out: the settings come from deploy/.env.)
return [
    'db_host'     => 'localhost',
    'db_name'     => 'skywave_db',
    'db_user'     => 'skywave_web',
    'db_pass'     => 'change-me',
    'admin_email' => 'support@skywavetech.co.zm',
];
