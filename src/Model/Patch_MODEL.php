<?php
class XML_OUT
{

	private $_File_patch_xml_out_full = null;
public function __construct($Full_Patch_XML)
     {
        
	
		$this->_File_patch_xml_out_full = "../Rezultat_parsowania/".$Full_Patch_XML.".xml";
    } 
 
	
	public function get_File_full_patch_xml_out()
	{
		return $this->_File_patch_xml_out;  
	}
	
}

class XML
{

private $_File_patch_xml_full = null;
public function __construct($Patch_xml_full)
     {
        
		$this->_File_patch_xml_full = "../Parsery/".$Patch_xml_full.".xml";
    } 
 


	
	public function get_File_full_patch_xml()
	{
		return $this->_File_patch_xml_full;  
	}
	}
	
	
	
	class CSV
{

private $Patch_csv_full = null;
public function __construct($Patch_csv_full)
     {
        
	
		$this->_Patch_csv_full = "../Rezultat_parsowania/".$Patch_csv_full.".csv";
    } 
 
		public function get_File_full_patch_csv()
    {
       return $this->_Patch_csv_full;            
    } 
	}
?>