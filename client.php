<?php

/**
 *
 * @author Juan Pablo Rodríguez Morales
 *
 */

require_once('./lib/nusoap.php');
$wsdl = "http://desktop-3fvpk7n:7101/ServerFootball-ServerFootball-context-root/ServicesPort?WSDL";
$client = new nusoap_client($wsdl, 'wsdl');
$err = $client->getError();
if ($err) {
   // Display the error
   echo '<h2>Constructor error</h2>' . $err;
   // At this point, you know the call that follows will fail
   exit();
}


// Call the hello method
$futbolista = array(
  "arg0" => array("club" => "Tolima" )
);
$result1=$client->call('create', $futbolista);
echo( $result1['return']);
echo "hello World";


?>
