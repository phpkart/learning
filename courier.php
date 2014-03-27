<?php 
namespace shipping;

class Courier{
	public $name;
	public $home_country;

	public function __construct($namer){
		$this->name = $namer;
		return true;		
	}
	public function ship($parcel){
		// parcle the content
		return true;
	}

	public static function norules($var){
		return "Loved $var";
	}
}
 ?>
