<div class="modal fade" id="myModalHorizontal" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog">
	<div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Login</h4>
      </div>
      <!-- Modal Body -->
      <div class="modal-body">
        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
          <div class="form-group">
            <div class="col-sm-12">
              <input type="email" class="form-control"  placeholder="Email"/>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12">
              <input type="password" class="form-control"  placeholder="Password"/>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
          </div>
          
          <!--<div class="form-group">
            <div class="col-sm-12">
              <label>
                 <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
              </label>
            </div>
          </div>-->
          
          <div class="form-group">
            <div class="col-sm-12">
              <button type="submit" class="btn btn-default button-1">Login</button>
            </div>
          </div>
          <div class="boder3"></div>
          <div class="form-group">
            <div class="col-sm-12">
              <p><a href="#" data-toggle="modal" data-target="#myModalHorizontal2">Create New Account</a>&nbsp; |&nbsp;<a href="#" data-toggle="modal" data-target="#myModalHorizontal4">Forgot Password</a></p>
		  <div class="boder3"></div>
            </div>
          </div>
        </form>
      </div>
      <!-- Modal Footer -->
    </div>
  </div>
</div>