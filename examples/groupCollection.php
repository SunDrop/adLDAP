<?
/*
Test for the new user collections object
*/

//error_reporting(E_ALL ^ E_NOTICE);

use adLDAP\adLDAP;
use adLDAP\adLDAPException;

include(dirname(__FILE__) . '/../lib/adLDAP/adLDAP.php');
try {
    $adldap = new adLDAP($options);
} catch (adLDAPException $e) {
    echo $e;
    exit();
}

echo("<pre>\n");

$collection = $adldap->group()->infoCollection('groupname');

print_r($collection->member);
print_r($collection->description);
