<div class="col-md-12 col-sm-12 p-0" style="padding-left:0">
      <!-- menu -->
          <nav id="sidebar" class="list-group panel">
        <div class="sidebar-header">
            <h3 style="text-align:center">Al-Ahmed Jewellery</h3>
        </div>
    
        <ul class="list-unstyled components m-b-0">
        	<li class="active">
                <a class="list-group-item" href="{{ url('/') }}">Dashboard</a>
            </li>
            <li class="active">
                <a class="list-group-item" href="{{ route('aboutUs') }}">About Us</a>
            </li>
            <li>
                <a href="#bannerSubmenu" class="list-group-item" data-toggle="collapse" aria-expanded="false">
                    Banner <span class="caret" style="float: right; margin-top: 9px;"></span>
                </a>
                <ul class="collapse list-unstyled" id="bannerSubmenu">
                    <li><a class="list-group-item submenu" href="{{ route('addBanner')}}">Add Banners</a></li>
                    <li><a class="list-group-item submenu" href="{{ route('viewBanner')}}">Banner</a></li>
                </ul>
            </li>
            <li>
                <a href="#productSubmenu" class="list-group-item" data-toggle="collapse" aria-expanded="false">
                    Product <span class="caret" style="float: right; margin-top: 9px;"></span>
                </a>
                <ul class="collapse list-unstyled" id="productSubmenu">
                    <li><a class="list-group-item submenu" href="#">Products</a></li>
                    <li><a class="list-group-item submenu" href="#">Add Products</a></li>
                </ul>
            </li>
            <li>
                <a href="#categorySubmenu" class="list-group-item" data-toggle="collapse" aria-expanded="false">
                    Category <span class="caret" style="float: right; margin-top: 9px;"></span>
                </a>
                <ul class="collapse list-unstyled" id="categorySubmenu">
                    <li><a class="list-group-item submenu" href="#">Categories</a></li>
                    <li><a class="list-group-item submenu" href="#">Add Category</a></li>
                </ul>
            </li>
            <li>
                <a href="#teamSubmenu" class="list-group-item" data-toggle="collapse" aria-expanded="false">
                    Team <span class="caret" style="float: right; margin-top: 9px;"></span>
                </a>
                <ul class="collapse list-unstyled" id="teamSubmenu">
                    <li><a class="list-group-item submenu" href="#">Team Members</a></li>
                    <li><a class="list-group-item submenu" href="#">Add Members</a></li>
                </ul>
            </li>

        </ul>
    
    </nav>
    </div>
    