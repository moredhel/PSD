<?php
#This class will be used as the gateway to the database.
#This will make it easier to integrate the project with any custom database requirements that we may come across
#This allows any databse errors to be found and dealt with quickly and efficiently.
class db
{
	private $db_target= "127.0.0.1";
	private $db_user = "psd";
	private $db_password = "password";
	private $db_database= "PSD";

	private	function Connect() {
		mysql_connect($this->db_target,$this->db_user,$this->db_password); 
		mysql_select_db($this->db_database); 

	} 
	public function Request($sql){#this function is called when the user wants data returned from the database
		$this->Connect();
#		mysql_connect($this->db_target,$this->db_user,$this->db_password); 
#		mysql_select_db($this->db_database); 
		#insert sanitisation function here for sql!!!
		$query = mysql_query($sql);
		#$dataset = mysql_fetch_array($query);
		#insert incrementing array here which becomes a 2d array of all results from the database,
		#this is then returned to the calling function as a 2d arrayt
		while($dataset = mysql_fetch_array($query))
		{
			
		}	
	}
}
?>
