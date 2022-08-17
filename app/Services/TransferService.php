<?php

namespace App\Services;

use Log;
use DB;

class TransferService{

	public static $instance;

	public static function getInstance(){

		if(self::$instance == null){

			self::$instance = new TransferService();
		}
		return self::$instance;
	}

	public function transfer($user){


	}
}