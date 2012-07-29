<?php

class _
{    
    function _()
    {
    	// Core
        $this->benchmark = new CI_Benchmark();
		$this->db = new CI_DB_active_record();
		$this->input = new CI_Input();
		$this->lang = new CI_Lang();
		$this->load = new CI_Loader();
        $this->config = new CI_Config();        
        $this->output = new CI_Output();
		$this->security = new CI_Security();
		$this->uri = new CI_URI();
		
		// System libraries
        $this->calendar = new CI_Calendar();
		$this->cart = new CI_Cart();
        $this->driver = new CI_Driver();
        $this->email = new CI_Email();
        $this->encrypt = new CI_Encrypt();
        $this->form_validation = new CI_Form_validation();
        $this->ftp = new CI_FTP();
        $this->image_lib = new CI_Image_lib();
        $this->javascript = new CI_Javascript();
		$this->log = new CI_Log();
        $this->pagination = new CI_Pagination();
		$this->parser = new CI_Parser();
        $this->profiler = new CI_Profiler();
        $this->session = new CI_Session();
		$this->sha1 = new CI_SHA1();
        $this->table = new CI_Table();
		$this->trackback = new CI_Trackback();
        $this->typography = new CI_Typography();
		$this->unit = new CI_Unit_test();
		$this->upload = new CI_Upload();
		$this->agent = new CI_User_agent();
		$this->xmlrpc = new CI_Xmlrpc();
		$this->xmlrpcs = new CI_Xmlrpcs();
		$this->zip = new CI_Zip();
    }
    
}

// any classes you want autocomplete for
class CI_Controller extends _ {}
class CI_Model extends _ {}
class CI_Form_validation {
	function CI_Form_validation()
	{
		$this->CI = new _();
	}
}
class CI_Table extends _ {
	function CI_Table()
	{
		$this->CI = new _();
	}
}
