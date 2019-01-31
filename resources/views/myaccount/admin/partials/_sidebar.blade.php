<div class="sidemenu">
    <div class="sidemenu-inner scroll">

      <nav class="admin-nav">
        @if(Auth::guard('admin')->check())
          <center><h5 style="margin-left: 20px">{{Auth::guard('admin')->user()->name}}</h5></center>
        @endif
        <h6>Menu</h6>
        <ul>
          <li><a class="waves-effect" href="{{route('admin.dashboard')}}"><i class="ti-home red lighten-1"></i> Dashboard</a></li>
          <li><a class="waves-effect" href="{{route('admin.reports')}}"><i class="ti-home red lighten-1"></i> Reports</a></li>
          <li><a class="waves-effect" href="#"><i class="ti-user green lighten-1"></i>Customers</a>
            <ul>
              <li><a href="{{route('admin.customer.add')}}">Add Customer</a></li>
              <li><a href="{{route('admin.customers')}}">Customer Profiles</a></li>
            </ul>
          </li>
          <li><a class="waves-effect" href="#"><i class="ti-archive pink darken-4"></i> Packages</a>
            <ul>
              <li><a href="{{route('admin.package.add')}}">Add Package</a></li>
              <li><a href="{{route('admin.packages.inreview')}}">In Review</a></li>
              <li><a href="{{route('admin.packages.inaction')}}">Action Required</a></li>
              <li><a href="{{route('admin.packages.ready')}}">Ready to Ship</a></li>
              <li><a href="{{route('admin.packages')}}">All Packages</a></li>
            </ul>
          </li>
          <li><a class="waves-effect" href="#"><i class="ti-shopping-cart-full blue darken-3"></i> Shipments</a>
            <ul>
              <li><a href="{{route('admin.shipping.queue')}}">In Queue</a></li>
              <li><a href="{{route('admin.shipping.review')}}">In Review</a></li>
              <li><a href="{{route('admin.shipping.dispatch')}}">Dispatched</a></li>
              <li><a href="{{route('admin.shipping.deliver')}}">Delivered</a></li>
              <li><a href="{{route('admin.shipping.cancel')}}">Cancelled</a></li>
              <li><a href="{{route('admin.shipping')}}">View All</a></li>
            </ul>
          </li>
          <li><a class="waves-effect" href="{{route('admin.incoming.orders')}}"><i class="ti-truck orange dark"></i> Incoming Orders</a></li>
          <li><a class="waves-effect" href="#"><i class="ti-map-alt blue dark"></i> Shipping Charges</a>
            <ul>
              <li><a href="{{route('admin.shippingrates')}}">Shipping Charges</a></li>
              <li><a href="{{route('admin.country.list')}}">Countries</a></li>
            </ul>
          </li>
          <li><a class="waves-effect" href="#"><i class="ti-wand teal darken-3"></i> Personal Shopper</a>
            <ul>
              <li><a href="{{route('admin.shopper.self.orders')}}">Orders - Self Shopper</a></li>
              <li><a href="{{route('admin.shopper.awaiting')}}">Payment Awaiting</a></li>
              <li><a href="{{route('admin.shopper.received')}}">Received</a></li>
              <li><a href="{{route('admin.shopper.processed')}}">Processed</a></li>
              <li><a href="{{route('admin.shopper.canceled')}}">Cancelled</a></li>
              <li><a href="{{route('admin.shopper.completed')}}">Completed</a></li>
              <li><a href="{{route('admin.shopper.orders')}}">View All Orders</a></li>
            </ul>
          </li>
          <li><a class="waves-effect" href="#"><i class="ti-wand teal darken-3"></i> Schedule Pickup </a>
            <ul>
              <li>
                <a href="<?php echo e(route('schedulePickup.list')); ?>">
                  Schedule Pickup List
                </a>
              </li>
            </ul>
          </li>
          <li><a class="waves-effect" href="#"><i class="ti-wand teal darken-3"></i> Flash Sale </a>
            <ul>
              <li>
                <a href="<?php echo e(route('flash-sale.create-sale')); ?>">
                  Create Flash Sale
                </a>
              </li>
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
          <li><a class="waves-effect" href="#"><i class="ti-layers-alt pink accent-3"></i> Stories</a>
            <ul>
              <li><a href="{{route('admin.story.index')}}"> List </a></li>
            </ul>
          </li>
          <li><a class="waves-effect" href="{{route('admin.promos')}}"><i class="ti-cup amber darken-4"></i> Promo Codes</a></li>
          <li><a class="waves-effect" href="{{route('admin.reviews')}}"><i class="ti-star purple accent-3"></i> Reviews</a></li>
          <li><a class="waves-effect" href="#"><i class="ti-bell red accent-3"></i> Notifications</a>
            <ul>
              <li><a href="{{route('admin.notify.customer')}}">Customer</a></li>
              <li><a href="{{route('admin.notify.incoming')}}">Incoming Alert</a></li>
              <li><a href="{{route('admin.notify.package')}}">Packages</a></li>
              <li><a href="{{route('admin.notify.shipment')}}">Shipments</a></li>
              <li><a href="{{route('admin.notify.psshoppre')}}">PS - Shoppre</a></li>
              <li><a href="{{route('admin.notify.psself')}}">PS - Customer</a></li>
            </ul>
          </li>
          <li><a class="waves-effect" href="{{route('admin.scheduled.mails')}}"><i class="ti-email green accent-4"></i> Scheduled Mails</a></li>
          <li><a class="waves-effect" href="{{route('admin.cguide.index')}}"><i class="ti-flag-alt blue accent-4"></i> Country Guides</a></li>
          <li><a class="waves-effect" href="{{route('admin.logout')}}"><i class="ti-lock deep-purple lighten-1"></i> Logout</a></li>
        </ul>
      </nav>
    </div>
</div><!-- Sidemenu -->
