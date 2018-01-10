
@include('includes.login')

<!--end login-->
	
@include('includes.register')



<div class="modal fade" id="myModalHorizontal4" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <button type="button" class="close" 
                     data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Forgot Password</h4>
      </div>
      <!-- Modal Body -->
      <div class="modal-body">
        <form class="form-horizontal">
          <div class="form-group">
            <div class="col-sm-12">
              <input type="email" class="form-control"  placeholder="Email"/>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-12">
              <button type="submit" class="btn btn-default button-1">Submit</button>
            </div>
          </div>
        </form>
      </div>
      <!-- Modal Footer -->
    </div>
  </div>
</div>
<!--modal popup-->