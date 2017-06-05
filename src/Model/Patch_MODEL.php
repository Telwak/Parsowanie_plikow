<?php
class XML_OUT
{
	private $_File_patch_xml_out = null;
	private $_File_patch_xml_out_full = null;
public function __construct($Patch_xml,$Full_Patch_XML)
     {
        
		$this->_File_patch_xml_out = $_File_patch_xml;
		$this->_File_patch_xml_out_full = "../Rezultat_parsowania/".$_Full_Patch_XML.".xml";
    } 
 
	public function get_File_patch_xml_out()
    {
       return $this->_File_patch_xml;            
    } 
	public function get_File_full_patch_xml_out()
	{
		return $this->_File_patch_xml_out;  
	}
	
}

class XML
{
private $_File_patch_xml = null;
private $_File_patch_xml_full = null;
public function __construct($Patch_xml,$Patch_xml_full)
     {
        
		$this->_File_patch_xml = $_File_patch_xml;
		$this->_File_patch_xml_full = "../Parsery/".$_Patch_xml_full.".xml";
    } 
 


	public function get_File_patch_xml()
    {
       return $this->_File_patch_xml;            
    } 
	public function get_File_full_patch_xml()
	{
		return $this->_File_patch_xml_full;  
	}
	}
	
	
	
	class CSV
{
private $_File_patch_csv = null;
private $_File_patch_csv_full = null;
public function __construct($Patch_csv,$Patch_csv_full)
     {
        
		$this->_File_patch_csv = $_File_patch_csv;
		$this->_File_patch_csv_full = "../Parsery/".$_Patch_csv_full.".csv";
    } 
 


	public function get_File_patch_csv()
    {
       return $this->_File_patch_csv;            
    } 
		public function get_File_full_patch_csv()
    {
       return $this->_File_patch_csv;            
    } 
	}
?>