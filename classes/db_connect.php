<?php
#This class will be used as the gateway to the database.
#This will make it easier to integrate the project with any custom database requirements that we may come across
#This allows any databse errors to be found and dealt with quickly and efficiently.
class db
{
	private $ip = "127.0.0.1";
	private $username = "psd";
	private $password = "password";
	private $db_name = "PSD";

	public function Connect() {
	    $connect = mysql_connect("$this->ip", "$this->username", "$this->password") or die ("Couldn't connect!");
   	    mysql_select_db("$this->db_name", $connect) or die("Unable to locate database."); 
		return "Connection Successful";
	}

}
?>
