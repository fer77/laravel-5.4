<?php 

namespace App\Services;

 class Curl
 {
 	
 	public function __construct()
 	{
 		# code...
 	}
 	public function post($status)
 	{
 		var_dump('Using curl to post: ' . $status);
 	}
 } 
 ?>