<?php
namespace MyGreeter;

class Client{
	public function getGreeting()
	{
		$hour = date("H");
		if ($hour < 12) {
			return "Good morning";
		} else if ($hour < 18) {
			return "Good afternoon";
		} else {
			return "Good evening";
		}
	}
}

class PHPUnit_Framework_TestCase{

	public function assertEquals($compaire,$standard)
	{
		if($compaire ==  false)
		{
			echo "instance is not created\n";
		}
		else if($compaire != $standard)
		{
			echo  "instance is not created\n";
		}
		else
		{
			echo "instance is created\n";
		}
		
	}

	public function assertTrue($greetings)
	{
		$checkarray = array("Good morning"=>array(0,11),"Good afternoon"=>array(12,17),"Good evening"=>array(18,23));

		if(date("H") >= $checkarray[$greetings][0] && date("H") <= $checkarray[$greetings][1])
		{
			echo "true\n";
		}
		else
		{
			echo "false\n";
		}

	}
}