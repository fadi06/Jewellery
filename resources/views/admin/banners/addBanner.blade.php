@extends('layouts.app')

@section('content')
		<div class="col-md-8 m-t-30">
            <div class="panel panel-default">
                <div class="panel-heading">Add Banners</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('admin/banners/addBanner')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="{{ $errors->has('text1') ? ' has-error' : '' }}">
                            <div class="col-md-4">
                            	<label for="text1" class="control-label">Text1</label>
                                <input id="text1" type="text" class="form-control" name="text1" value="{{ old('text1') }}" placeholder='Enter Text... ' required autofocus>

                                @if ($errors->has('text1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('text1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="{{ $errors->has('text2') ? ' has-error' : '' }}">
                            
                            <div class="col-md-4">
                            	<label for="text2" class="control-label">Text2</label>
                                <input id="text2" type="text" class="form-control" name="text1" value="{{ old('text2') }}" placeholder='Enter Text...' required autofocus>

                                @if ($errors->has('text2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('text2') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="{{ $errors->has('text3') ? ' has-error' : '' }}">
                            
                            <div class="col-md-4">
	                            <label for="text3" class="control-label">Text3</label>
                                <input id="text3" type="text" class="form-control" name="text3" value="{{ old('text1') }}" placeholder='Enter Text...' required autofocus>

                                @if ($errors->has('text3'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('text3') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="{{ $errors->has('type') ? ' has-error' : '' }}">
                            <div class="col-md-4">
                            	<label for="type" class="control-label">Type</label>
                                <input id="type" type="text" class="form-control" name="type" value="{{old('type')}}" placeholder='Enter Type...' required>

                                @if ($errors->has('type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="{{ $errors->has('status') ? ' has-error' : '' }}">
                            <div class="col-md-4">
                            	<label for="status" class="control-label">Status</label>
                                <select id="status" class="form-control" name="status" value="{{old('status')}}"  required>
                                	<option value="1"> Active</option>
                                    <option value="0"> DisActive</option>
                                </select>

                                @if ($errors->has('status'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('status') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						<div class="clearfix">&nbsp;</div>
                        <div class="{{ $errors->has('image') ? ' has-error' : '' }}">
                            <div class="col-md-4">
                            	<label for="image" class="control-label">Image</label>
                                <input name="image" id="image" type="file" class="btn btn-info col-md-12">
                                
                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('status') }}</strong>
                                    </span>
                                @endif
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