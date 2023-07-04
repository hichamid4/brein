<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>@yield('title') | Brein</title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="website/assets/img/favicon.png"> 
	
	<!-- Styles strat -->
  @include('web.shared.styles')
	<!-- Styles end -->
	
</head>

<body>

  
  <div class="main-wrapper">
    <!-- Content start -->
      @yield('layoutContent')
    <!-- Content end -->		

    
    <!-- Cursor -->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>
    <!-- /Cursor -->	
    
    <!-- Delete Account -->
    <div class="modal fade custom-modal" id="del-account">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header border-bottom-0 justify-content-between">
            <h5 class="modal-title">Delete Account</h5>
            <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><i class="feather-x"></i></button>
          </div>
          <div class="modal-body pt-0">
            <div class="write-review">
              <form action="https://html.truelysell.com/template3/login.html">
                <p>Are you sureyou want to delete This Account? To delete your account, Type your password.</p>
                <div class="form-group">
                  <label class="col-form-label">Password</label>
                  <div class="pass-group">
                    <input type="password" class="form-control pass-input" placeholder="*************">
                    <span class="toggle-password feather-eye"></span>
                  </div>
                </div>
                <div class="modal-submit text-end">
                  <a href="#" class="btn btn-secondary me-2" data-bs-dismiss="modal">Cancel</a>
                  <button type="submit" class="btn btn-danger">Delete Account</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /Delete Account -->
	</div>
	
  
	
	<!-- scrollToTop start -->
	<div class="progress-wrap active-progress">
		<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
		<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919px, 307.919px; stroke-dashoffset: 228.265px;"></path>
		</svg>
	</div>
	<!-- scrollToTop end -->
	
  <!-- Scripts start -->
  @include('web.shared.scripts')
  <!-- Scripts end -->
</body>

</html>