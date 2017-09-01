<div class="sidemenu">
    <div class="sidemenu-inner scroll">
      <div class="admin">
        <img src="{{asset('admin_asset/images/profile.png')}}" alt="" />
        <div class="admin-detail">
          <h2>Shoppre</h2>
          <a class="dropdown-button" href='#' title="" data-activates='dropdown2'><span class="green"></span> Online <i class="ti-angle-down"></i></a>
          <ul id='dropdown2' class='dropdown-content'>
            <li><a href="{{route('admin.logout')}}">Signout</a></li>
          </ul>   
        </div>
      </div><!-- Admin -->
      <nav class="admin-nav">
        <h6>Menu</h6>
        <ul>
          <li><a class="waves-effect" href="{{route('admin.dashboard')}}"><i class="ti-home red lighten-1"></i> Dashboard</a></li>
          <li><a class="waves-effect" href="#" title=""><i class="ti-user green lighten-1"></i> Customers</a>
            <ul>
              <li><a href="{{route('admin.customers')}}" title="">View Profiles</a></li>
              <li><a href="#" title="">Login Activity</a></li>
              <li><a href="#" title="">Blocked</a></li>
            </ul>
          </li>
          <li><a class="waves-effect" href="#" title=""><i class="ti-gift pink lighten-3"></i> Packages</a>
            <ul>
              <li><a href="{{route('admin.package.add')}}" title="">Add Package</a></li>
              <li><a href="{{route('admin.packages.confirm')}}" title="">For Confirmation</a></li>
              <li><a href="{{route('admin.packages.review')}}" title="">Under Review</a></li>
              <li><a href="{{route('admin.packages.ready')}}" title="">Ready to Ship</a></li>
              <li><a href="{{route('admin.packages')}}" title="">View All</a></li>
            </ul>
          </li>
          <li><a class="waves-effect" href="#" title=""><i class="ti-truck orange lighten-2"></i> Incoming Orders</a></li>
          <li><a class="waves-effect" href="#" title=""><i class="ti-shopping-cart blue lighten-3"></i> Shipping</a>
            <ul>
              <li><a href="#" title="">Shipping Orders</a></li>
              <li><a href="#" title="">Delivered Orders</a></li>
              <li><a href="{{route('admin.shipping.charges')}}" title="">Shipping Charges</a></li>
              <li><a href="{{route('admin.country.list')}}" title="">Countries</a></li>
            </ul>
          </li>
          <li><a class="waves-effect" href="#" title=""><i class="ti-wand teal lighten-3"></i> Assisted Purchase</a>
            <ul>
              <li><a href="#" title="">View Orders</a></li>
              <li><a href="#" title="">Confirmed Orders</a></li>
              <li><a href="#" title="">Purchased Charges</a></li>
            </ul>
          </li>
          <li><a class="waves-effect" href="#" title=""><i class="ti-bag light-green accent-4"></i> Stores/Brands</a>
            <ul>
              <li><a href="{{route('admin.stores')}}" title="">View Stores</a></li>
              <li><a href="{{route('admin.categories')}}" title="">Store Categories</a></li>
            </ul>
          </li>
          <li><a class="waves-effect" href="{{route('admin.faq.category')}}" title=""><i class="ti-ruler-pencil blue darken-4"></i> FAQ</a></li>
          <li><a class="waves-effect" href="#" title=""><i class="ti-layers-alt pink accent-3"></i> Pages</a>
            <ul>
              <li><a href="{{route('admin.pages')}}" title="">View Pages</a></li>
              <li><a href="{{route('admin.pages.add')}}" title="">Add New</a></li>
            </ul>
          </li>
          <li><a class="waves-effect" href="{{route('admin.logout')}}" title=""><i class="ti-lock deep-purple lighten-1"></i> Logout</a></li>
        </ul>
      </nav>
    </div>
</div><!-- Sidemenu -->