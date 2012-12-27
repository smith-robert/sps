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
   			 while (($buffer = fgets($this->file, 4096)) !== false) 
   			 {
   			 	array_push($this->giant_list, explode(" ", $buffer));
   			 }
   			 fclose($this->file);}
	}

	public function initialize($file)
	{
		$handle = fopen($file,"r");
		$this->file = $handle;
	}

	public function generate_head($person)
	{
		if(isset($person[2]))
		{
			$email = $person[2];
		}
		else
		{
			$email = $person[1].$person[0].'@knights.ucf.edu';
		}
		$mailto = "mailto:".$email;
		$size = 80;
		$default = "http://icongal.com/gallery/image/83777/science_atom.png";
		// $grav_url = "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;
		$grav_url = "http://www.gravatar.com/avatar/".md5(strtolower(trim($email)))."?d=identicon"."&s=" . $size;
		$img_tag = '<img src="'.$grav_url.'">';
		$img_tag = '<a href="'.$mailto.'" class="th"> <img src="'.$grav_url.'"></a>';
		echo $img_tag." ".$person[0]." ".$person[1]; 
	}
}
