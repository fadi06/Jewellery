@include('includes.header')

<div class="col-md-3 col-sm-3">
	@include('includes.sidebar')
</div>
	

<!--body content-->
<div class="col-md-9 col-sm-9">
	@yield('content')
</div>
    
</div>

    <!-- Scripts -->
    
	<script src="{{ asset('public/js/app.js') }}"></script>

	
    
</body>
</html>
