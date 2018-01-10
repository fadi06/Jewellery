@extends('layouts.app')
@section('content')
<div class="col-md-12 col-sm-12 p-0 m-t-30">
	@if(Session::has('success_messege'))
		<div class="alert alert-success col-md-8 col-md-offset-2" id="alert">
			{{ Session::get('success_messege')}}
		</div>
	@endif

	@if(Session::get('message'))
		<div class="alert alert-danger col-md-8 col-md-offset-2" id="alert">
			{{ Session::get('messege') }}
		</div>
	@endif


	<div class="">
	    <div class="row">
	        <div class="col-md-12">
	            <div class="panel panel-default">
	                <div class="panel-heading">List Students</div>

	                <div class="panel-body">
	                    <table class="table" style="text-align: center;">
	                        <thead>
	                            <tr>
	                                <td>#</td>
	                                <td>Text1</td>
	                                <td>Text2</td>
	                                <td>Text3</td>
	                                <td>Type</td>
	                                <td>Status</td>
	                                <td>Image</td>
	                                <td>Actions</td>
	                            </tr>
	                        </thead>

	                        <tbody>
	                            @foreach($banners as $index => $banner)
	                            <tr>
	                                <td>{{ $index+1}}</td>
	                                <td>{{ $banner['text1'] }}</td>
	                                <td>{{ $banner['text2'] }}</td>
	                                <td>{{ $banner['text3'] }}</td>
	                                <td>{{ $banner['type'] }}</td>
	                                <td>
	                                	@if($banner['status']) Active @else Inactive @endif
	                                </td>
	                                <td>
	                                    @if($banner['image'])
	                                        <img src="{{ asset('/public/images/banners/'.$banner['image']) }}" class="img_border">
	                                    @else
	                                        Image Not Found.
	                                    @endif
	                                </td>
	                                <td>
	                                	<a href="{{ route('editBanner',['id'=> $banner['id']]) }}" class="edit">Edit</a>
	                                    &nbsp;&nbsp;&nbsp;&nbsp;
	                                    <a href="{{ route('deleteBanner', ['id'=>$banner['id']]) }}" onclick="return confirm('Sure You want to delete this record?')" class="delete">Delete</a>
	                                </td>
	                            </tr>
	                            @endforeach
	                        </tbody>

	                    </table>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>	
</div>


@endsection