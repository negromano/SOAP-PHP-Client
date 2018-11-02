<?php

/**
 *
 * @author Juan Pablo Rodríguez Morales
 *
 */

 //Importing libraries and models
require_once('./lib/nusoap.php');

//Creating the client
class Client{
	public $client = ':v';

	public function __construct(){
		$wsdl = "http://kecc-g3-pc:7101/ServerFootball-ServerFootball-context-root/ServicesPort?WSDL";
		$var_client = new nusoap_client($wsdl, 'wsdl');
		$this->client = $var_client;
		//Error Handling
		$err = $var_client->getError();
		if ($err) {
		echo '<h2>Constructor error</h2>' . $err;
		exit();
		}
	}

	public function create($player){
		$this->client->call('create', $player);
	}

	public function read($id){
		return $this-> client->call('read', $id);
	}

	public function update($player){
		$this->client->call('update', $player);
	}

	public function listM(){
		return $this->client->call('list');
	}

	public function delete($player){
		$this->client->call('delete', $player);
	}
}

?>
