<div class="sidemenu">
    <div class="sidemenu-inner scroll">
      <div class="admin">
        <img src="{{asset('admin_asset/images/profile.png')}}" alt="" />
        <div class="admin-detail">
          <h2>Shoppre</h2>
          <a class="dropdown-button" href='#' data-activates='dropdown2'><span class="green"></span> Online <i class="ti-angle-down"></i></a>
          <ul id='dropdown2' class='dropdown-content'>
            <li><a href="{{route('admin.logout')}}">Signout</a></li>
          </ul>   
        </div>
      </div><!-- Admin -->
      <nav class="admin-nav">
        <h6>Menu</h6>
        <ul>
          <li><a class="waves-effect" href="{{route('admin.dashboard')}}"><i class="ti-home red lighten-1"></i> Dashboard</a></li>
          <li><a class="waves-effect" href="#"><i class="ti-user green lighten-1"></i>Customers</a>
            <ul>
              <li><a href="{{route('admin.customer.add')}}">Add Customer</a></li>
              <li><a href="{{route('admin.customers')}}">Customer Profiles</a></li>
            </ul>
          </li>
          <li><a class="waves-effect" href="#"><i class="ti-archive pink darken-4"></i> Packages</a>
            <ul>
              <li><a href="{{route('admin.package.add')}}">Add Package</a></li>
              <li><a href="{{route('admin.packages')}}">View Packages</a></li>
            </ul>
          </li>
          <li><a class="waves-effect" href="#"><i class="ti-shopping-cart-full blue darken-3"></i> Shipments</a>
            <ul>
              <li><a href="{{route('admin.shipping.queue')}}">In Queue</a></li>
              <li><a href="{{route('admin.shipping.review')}}">In Review</a></li>
              <li><a href="{{route('admin.shipping.dispatch')}}">Dispatched</a></li>
              <li><a href="{{route('admin.shipping.deliver')}}">Delivered</a></li>
              <li><a href="{{route('admin.shipping.cancel')}}">Canceled</a></li>
              <li><a href="{{route('admin.shipping')}}">View All</a></li>
            </ul>
          </li>
          <li><a class="waves-effect" href="{{route('admin.incoming.orders')}}"><i class="ti-truck orange dark"></i> Incoming Orders</a></li>
          <li><a class="waves-effect" href="#"><i class="ti-map-alt blue dark"></i> Shipping Charges</a>
            <ul>
              <li><a href="{{route('admin.shipping.charges')}}">Shipping Charges</a></li>
              <li><a href="{{route('admin.country.list')}}">Countries</a></li>
            </ul>
          </li>
          <li><a class="waves-effect" href="#"><i class="ti-wand teal darken-3"></i> Personal Shopper</a>
            <ul>
              <li><a href="{{route('admin.shopper.awaiting')}}">Pending Orders</a></li>
              <li><a href="{{route('admin.shopper.received')}}">Received Orders</a></li>
              <li><a href="{{route('admin.shopper.processed')}}">Processed Orders</a></li>
              <li><a href="{{route('admin.shopper.canceled')}}">Canceled Orders</a></li>
              <li><a href="{{route('admin.shopper.completed')}}">Completed Orders</a></li>
              <li><a href="{{route('admin.shopper.orders')}}">View All Orders</a></li>
            </ul>
          </li>
          <li><a class="waves-effect" href="#"><i class="ti-bag green accent-4"></i> Stores/Brands</a>
            <ul>
              <li><a href="{{route('admin.stores')}}">View Stores</a></li>
              <li><a href="{{route('admin.categories')}}">Store Categories</a></li>
            </ul>
          </li>
          <li><a class="waves-effect" href="{{route('admin.faq.category')}}"><i class="ti-ruler-pencil blue darken-4"></i> FAQ</a></li>
          <li><a class="waves-effect" href="#"><i class="ti-layers-alt pink accent-3"></i> Pages</a>
            <ul>
              <li><a href="{{route('admin.pages')}}">View Pages</a></li>
              <li><a href="{{route('admin.pages.add')}}">Add New</a></li>
            </ul>
          </li>
          <li><a class="waves-effect" href="{{route('admin.promos')}}"><i class="ti-cup amber darken-4"></i> Promo Codes</a></li>
          <li><a class="waves-effect" href="{{route('admin.reviews')}}"><i class="ti-star purple accent-3"></i> Reviews</a></li>
          <li><a class="waves-effect" href="{{route('admin.logout')}}"><i class="ti-lock deep-purple lighten-1"></i> Logout</a></li>
        </ul>
      </nav>
    </div>
</div><!-- Sidemenu -->