<?php

namespace App\Http\Helpers;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CommonHelper
 *
 * @author ilsainteractive
 */

class CommonHelper {

	public static function error_response($msg = null){
		$response = [];
		$response['error'] = false;
		$response['messege'] = $msg;
		return $response;
	}

	public static function success_response($msg = null){
		$response = [];
		$response['success'] = true;
		$response['messege'] = $msg;
		return $response;
	}

	public static function AdminExceptions($ex){
		$exception = $ex->getMessage();
		return view::make('addStudents',compact('exception'));
	}

}
