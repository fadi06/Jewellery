@extends('layouts.app')

@section('content')
		<div class="col-md-8 m-t-30">
            <div class="panel panel-default">
                <div class="panel-heading">AboutUs</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('addAboutUs')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="{{ $errors->has('content') ? ' has-error' : '' }}">
                            <div class="col-md-12">
                            	<label for="content" class="control-label">About Us</label>
                                <textarea name="edasdtor1"></textarea>

                                @if ($errors->has('content'))
                                    <span class="content-block">
                                        <strong>{{ $errors->first('content') }}</strong>
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
