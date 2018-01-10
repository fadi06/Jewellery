<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Banner extends Model
{
    protected $table = 'banners';
    protected $primeryKey = 'id';
    public $timestamps = true;

    protected $fillable = ['text1','text2','text3','type','status','image','archive'];
    public static $bannerValidation = [
    	'text1' => 'required',
    	'text2' => 'required',
    	'text3' => 'required',
    	'type'  => 'required',
    	'image' => 'required',
    ];

    public static function allBanners(){
    	$response = Banner::where('archive','=',0)->get();
    	return ($response) ? $response->toArray() : [] ;
    }

    public static function addBanners($inputs){
    	$inputs['archive'] = 0;
    	$response =  Banner::create($inputs);
    	return $response;

    }

    public static function getBannerById($id){
    	$response = Banner::where('id','=',$id)->where('archive','=',0)->first();
    	return ($response) ? $response->toArray() : [] ;
    }

    public static function delImage($img){
    	$path = public_path('/images/banners/');
    	return  File::delete($path.$img);
    }

    public static function editBanners($inputs){
    	$inputs['archive']=0;
    	return Banner::where('id','=',$inputs['id'])->update($inputs);
    }

    public static function deleteBanner($id){
    	return Banner::where('id','=',$id)->update(['archive'=>1]); 
    }

    	

}
