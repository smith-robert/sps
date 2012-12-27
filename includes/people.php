<?php

Class GroupList
{
	var $giant_list;
	var $file;

	public function __construct()
	{
		$this->giant_list = array();
	}

	public function scan_list()
	{
		if ($this->file) {
   			 while (($buffer = fgets($this->file, 4096)) !== false) {
        echo $buffer;
    	}
    }fclose($this->file);
	}
	public function initialize($file)
	{
		$handle = fopen($file,"r");
		$this->file = $handle;
	}
}
