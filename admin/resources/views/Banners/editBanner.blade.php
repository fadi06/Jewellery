@extends('layouts.app')

@section('content')
		<div class="col-md-12 m-t-30">
            <div class="panel panel-default">
                <div class="panel-heading">Add Banners</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('editBannerProcess')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        
                        <input type="hidden" name="id" value="{{ $banner['id'] }}">
                        <input type="hidden" name="old_img" value="{{ $banner['image'] }}">

                        <div class="{{ $errors->has('text1') ? ' has-error' : '' }}">
                            <div class="col-md-4">
                            	<label for="text1" class="control-label">Text1</label>
                                <input id="text1" type="text" class="form-control" name="text1" value="{{ $banner['text1'] }}" placeholder='Enter Text... '  autofocus>
                            </div>
                        </div>
                        
                        <div class="{{ $errors->has('text2') ? ' has-error' : '' }}">
                            
                            <div class="col-md-4">
                            	<label for="text2" class="control-label">Text2</label>
                                <input id="text2" type="text" class="form-control" name="text2" value="{{ $banner['text2'] }}" placeholder='Enter Text...'  autofocus>
                            </div>
                        </div>
                        
                        <div class="{{ $errors->has('text3') ? ' has-error' : '' }}">
                            
                            <div class="col-md-4">
	                            <label for="text3" class="control-label">Text3</label>
                                <input id="text3" type="text" class="form-control" name="text3" value="{{ $banner['text3'] }}" placeholder='Enter Text...'  autofocus>

                            </div>
                        </div>

                        <div class="{{ $errors->has('type') ? ' has-error' : '' }}">
                            <div class="col-md-4">
                            	<label for="type" class="control-label">Type</label>
                                <input id="type" type="text" class="form-control" name="type" value="{{ $banner['type'] }}" placeholder='Enter Type...' >
                            </div>
                        </div>
                        
                        <div class="{{ $errors->has('status') ? ' has-error' : '' }}">
                            <div class="col-md-4">
                            	<label for="status" class="control-label">Status</label>
                                <select id="status" class="form-control" name="status" value="{{old('status')}}"  >
                                	<option value="1" @if($banner['status'] == 1)
                                     selected @endif> Active</option>
                                    <option value="0" @if($banner['status'] == 0)
                                     selected @endif> DisActive</option>
                                </select>
                            </div>
                        </div>
						<div class="clearfix">&nbsp;</div>
                        <div class="{{ $errors->has('image') ? ' has-error' : '' }}">
                            <div class="col-md-4">
                            	<label for="image" class="control-label">Image</label>
                                <input name="image" id="image" type="file" class="btn btn-info col-md-12">
                            </div>

                            <div class="col-md-2 m-t-20">
                                <img src="{{ asset('/public/images/banners/'.$banner['image']) }}" style="width: 50px;">
                            </div>
                        </div>
                        
                        
                        <div class="clearfix">&nbsp;</div>
                        <div class="form-group">
                            <div class="col-md-8 m-l-15 m-t-20">
                                <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

@endsection