<div class="modal fade" id="myModalHorizontal2" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <button type="button" class="close" 
                     data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Register</h4>
      </div>
      <!-- Modal Body -->
      <div class="modal-body">
        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
	        {{ csrf_field() }}
          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <div class="col-sm-12">
              <input type="text" class="form-control" autocomplete="off" name="name" placeholder="Name"/>
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
          </div>
          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <div class="col-sm-12">
              <input type="email" name="email" autocomplete="off" class="form-control"  placeholder="Email"/>
              @if($errors->has('email'))
              	<span class="help-block">
                	<strong>{{$errors->first('email')}}</strong>
                </span>
              @endif
            </div>
          </div>
          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <div class="col-sm-12">
              <input type="password" class="form-control" autocomplete="off" name="password" placeholder="Password"/>
              @if ($errors->has('password'))
              	<span class="help-error">
                	<strong>{{$errors->first('password')}}</strong>
                </span>
              @endif
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12">
              <input type="password" class="form-control" autocomplete="off" name="password_confirmation" placeholder="Confirm password"/>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12">
              <button type="submit" class="btn btn-default button-1">Create a Account</button>
            </div>
          </div>
          
        </form>
      </div>
      <!-- Modal Footer -->
    </div>
  </div>
</div>