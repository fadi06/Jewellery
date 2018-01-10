<?php

namespace App\Http\Controllers;

use Exception;
use App\Banner;
use Illuminate\Http\Request;
use App\Http\Helpers\BannerHelper;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::allBanners();
        return view('Banners/viewBanner',compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Banners/addBanner');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $inputs = Input::except('_token');
            $validator = Validator::make($inputs, Banner::$bannerValidation);
            if($validator->fails()){
                return Redirect::route('addBanner')->withInput($inputs)->with('messege','danger='.$validator->messages()->first());
            }else{
                $image = $inputs['image'];
                $fileName = time().$image->getClientOriginalName();
                $img_upload = $image->move(public_path('/images/banners'),$fileName);
                $inputs['image'] = $fileName;

                $response = BannerHelper::addBanners($inputs);
                if($response){
                    return Redirect::route('viewBanner')->with('success_messege','Successfully Inserted');
                }else{
                    return Redirect::back()->with('messege','Something went wrong');
                }
            }
        }catch(Exception $ex){
            return $ex;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try{
            $banner = Banner::getBannerById($id);
            return view('Banners.editBanner',compact('banner'));
        }catch(Exception $ex){

        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        try{
            $inputs = Input::except('_token');
            $validator = Validator::make($inputs, Banner::$bannerValidation);
            if($validator->fails()){
                return Redirect::route('editBanner')->withInput($inputs)->with('messege','danger='.$validator->messages()->first());
            }else{
                $img_del = Banner::delImage($inputs['old_img']);
                $inputs = Input::except('_token','old_img');    
                
                $image = $inputs['image'];
                $fileName = time().$image->getClientOriginalName();
                $img_upload = $image->move(public_path('/images/banners'),$fileName);
                $inputs['image'] = $fileName;

                $response = BannerHelper::editBanners($inputs);
                if($response){
                    return Redirect::route('viewBanner')->with('success_messege','Successfully Updated');
                }else{
                    return Redirect::back()->with('messege','Something went wrong');
                }
            }
        }catch(Exception $ex){
            return $ex;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $response = Banner::deleteBanner($id);
            if($response){
                return Redirect::route('viewBanner')->with('messege','Record Successfully delete');
            }else{
                return Redirect::back()->with('message','something went wrong.');
            }
        }catch(Exception $ex){
            return $ex;
        }
    }
}
