<?php

class  Manage_database{

	public $mysqli;



	function connectdb(){
		$mysqli=mysqli_connect('localhost','root', '','CSVA');
		return $mysqli;
	}





}






//$mysqli= mysqli_connect()
//$ship_db->get_conn();
//$ship_db->add_shipingcompany();
//$ship_db->register_user();




  //$ship_db->getconn();


?>
