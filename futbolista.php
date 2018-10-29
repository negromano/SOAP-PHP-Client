<?php 

class Futbolista{

	public $id, $forename, $surname, $position, $club, $number, $height;
	public function Futbolista( $id, $forename, $surname, $position, $club, $number, $height ){
		this->id = $id;
		this->forename = $forename;
		this->surname = $surname;
		this->position = $position;
		this->club = $club;
		this->height = $height;
		this->number = $number;
	}

	public function darId(){
		return $id;
	}
}

?>