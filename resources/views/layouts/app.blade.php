@include('admin.includes.header')

@guest
@else
	@include('admin.includes.sidebar')
@endguest
<!--body content-->
    @yield('content')
</div>

    <!-- Scripts -->
    
	<script src="{{ asset('public/js/app.js') }}"></script>
	<!-- <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
	<script>
		CKEDITOR.replace( 'editor1' );
	</script> -->
    
</body>
</html>
