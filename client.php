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
		$wsdl = "http://192.168.15.3:7101/ServerFootball-ServerFootball-context-root/ServicesPort?WSDL";
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
		$this->client->call('create', array( "arg0"=>$player));
	}

	public function read($id){
		return $this-> client->call('read', array( "arg0"=>$id));
	}

	public function update($player){
		$this->client->call('update', array( "arg0"=>$player));
	}

	public function listM(){
		return $this->client->call('list');
	}

	public function delete($id){
		$this->client->call('delete', array( "arg0"=>$id));
	}
}

?>
