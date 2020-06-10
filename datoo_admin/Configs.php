<?php
require 'vendor/autoload.php';

use Parse\ParseClient;
use Parse\ParseSessionStorage;

session_start();

try {
    ParseClient::initialize('HYCScpeir3sspdjdiffdHDOPTpjYPQVqSvGDHS', null, 'JUG4YRDEDZbOIpDSBddsdCJJDssDFfdfdUJHY87k');
    ParseClient::setServerURL('https://your.server.url','/'); // Your mount path
    ParseClient::setStorage( new ParseSessionStorage());
} catch (Exception $e) {
}

$health = ParseClient::getServerHealth();
if($health['status'] !== 200) {

}

// Website root url
$GLOBALS['WEBSITE_PATH'] = 'http://localhost:8080/';