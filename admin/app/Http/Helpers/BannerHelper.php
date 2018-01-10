<?php

namespace App\Http\Helpers;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use App\Banner;

class BannerHelper {

    public static function addBanners($inputs){
		try{
			if($inputs){
				$response = Banner::addBanners($inputs);
				return true;
			}else{
				return false;
			}
		}catch(Exception $ex){
			return $ex;
		}
	}

	public static function editBanners($inputs){
		try{
			$response = Banner::editBanners($inputs);
			if($response){
				return true;
			}else{
				return false;
			}
		}catch(Exception $ex){
			return $ex;
		}
	}

}