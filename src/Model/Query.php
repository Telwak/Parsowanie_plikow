<?php

Class ADD

{
	private $_Add_query = null;
	
	public function __construct($Query)
     {
		$this->_Add_query = $Query;
    } 
	public function Send_Add_query()
	{
		require'Data/Conection_string.php';
		$query = "INSERT INTO `xml` (ID,TEXT) VALUES (null,'$this->_Add_query')";
		$mysqli->query($query);
	}
}
Class Select

{
	private $_Select_query = null;
	private $_Select_query_fetch = null;
	private $_Localization = null;
	
	
	public function __construct($Query,$Localization)
     {
		$this->_Select_query = $Query;
		$this->_Localization = $Localization;
    } 
	public function Send_Select_query()
	{
		if($this->_Localization == false)
		{
			require 'Data/Conection_string.php';
			
		}else if ($this->_Localization == true)
		{
			require 'src/Data/Conection_string.php';
		}
		
		$query = "SELECT $this->_Select_query FROM xml ORDER BY ID DESC";
		//$mysqli->query($query);
		$this->_Select_query_fetch = $mysqli->query($query);
		
	}
	public function Get_Select_query()
	{
		 return $this->_Select_query_fetch;
	}
}
?>