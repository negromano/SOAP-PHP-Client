<?php

/**
 *
 * @author Juan Pablo Rodríguez Morales
 *
 */

require_once('./lib/nusoap.php');
class Futbolista{

	public $id, $forename, $surname, $position, $club, $number, $height;
	public function __construct( $id, $forename, $surname, $position, $club, $number, $height ){
		$this->id = $id;
		$this->forename = $forename;
		$this->surname = $surname;
		$this->position = $position;
		$this->club = $club;
		$this->height = $height;
		$this->number = $number;
	}

	public function darId(){
		return $this->id;
	}
}

$futbolista = new Futbolista(':v','','','','','','');
echo($futbolista->id);
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
