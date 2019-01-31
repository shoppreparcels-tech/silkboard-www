<div class="topbar">
  <a class="sidemenu-btn waves-effect waves-light" href="#" title=""><i class="ti-menu"></i></a><!-- Sidemenu Button -->
  <div class="logo">
    <a href="/admin" title="">Administrator</a>
  </div><!-- Logo -->

  {{--<div class="topbar-links">--}}
  	{{--@if(!$notification['customers']->isEmpty())--}}
	{{--<div class="notification">--}}
		{{--<a class="click-btn" href="#" title="">Customer <span>{{$notification['customers']->count()}}</span></a>--}}
		{{--<div class="notification-dropdown z-depth-2">--}}
			{{--<div class="notification-bottom">--}}
				{{--<div class="notification-inner scroll" style="overflow: auto;">--}}
					{{--@foreach($notification['customers'] as $notify)--}}
					{{--<div class="notification-box">--}}

							{{--<div class="notification-detail">--}}
								{{--<a href="{{route('admin.customer.edit', [$notify->customer_id])}}">--}}
									{{--<h6 class="blue-text">{{$notify->customer->name}} ({{$notify->customer->locker}})--}}
									{{--</h6>--}}
									{{--<span>{{date("M j, g:i a", strtotime($notify->created_at)) }}</span>--}}
									{{--<p>{{$notify->action_description}}</p>--}}
								{{--</a>--}}
								{{--<div class="btns">--}}
									{{--<a href="{{route('admin.notify.status', [$notify->id])}}" title="Mark Solved">--}}
										{{--Not Solved--}}
									{{--</a>--}}
								{{--</div>--}}
							{{--</div>--}}

					{{--</div><!-- Notification Box -->--}}
					{{--@endforeach--}}
				{{--</div>--}}
			{{--</div>--}}
		{{--</div><!-- Notification Dropdown -->--}}
	{{--</div><!-- Notifications -->--}}
	{{--@endif--}}

	{{--@if(!$notification['incomings']->isEmpty())--}}
	{{--<div class="notification">--}}
		{{--<a class="click-btn" href="#" title="">Incoming Alert <span>{{$notification['incomings']->count()}}</span></a>--}}
		{{--<div class="notification-dropdown z-depth-2">--}}
			{{--<div class="notification-bottom">--}}
				{{--<div class="notification-inner scroll" style="overflow: auto;">--}}
					{{--@foreach($notification['incomings'] as $notify)--}}
					{{--<div class="notification-box">--}}
						{{--<div class="notification-detail">--}}
							{{--<a href="{{route('admin.incoming.orders')}}">--}}
								{{--<h6 class="blue-text">{{$notify->customer->name}} ({{$notify->customer->locker}})</h6>--}}
								{{--<span>{{date("M j, g:i a", strtotime($notify->created_at)) }}</span>--}}
								{{--<p>{{$notify->action_description}}</p>--}}
							{{--</a>--}}
							{{--<div class="btns">--}}
								{{--<a href="{{route('admin.notify.status', [$notify->id])}}" title="Mark Solved">--}}
									{{--Not Solved--}}
								{{--</a>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</div><!-- Notification Box -->--}}
					{{--@endforeach--}}
				{{--</div>--}}
			{{--</div>--}}
		{{--</div><!-- Notification Dropdown -->--}}
	{{--</div><!-- Notifications -->--}}
	{{--@endif--}}

	{{--@if(!$notification['packages']->isEmpty())--}}
	{{--<div class="notification">--}}
		{{--<a class="click-btn" href="#" title="">Packages <span>{{$notification['packages']->count()}}</span></a>--}}
		{{--<div class="notification-dropdown z-depth-2">--}}
			{{--<div class="notification-bottom">--}}
				{{--<div class="notification-inner scroll" style="overflow: auto;">--}}
					{{--@foreach($notification['packages'] as $notify)--}}
					{{--<div class="notification-box">--}}
						{{--<div class="notification-detail">--}}
							{{--<a href="{{route('admin.package.edit', [$notify->action_id])}}">--}}
								{{--<h6 class="blue-text">{{$notify->customer->name}} ({{$notify->customer->locker}})</h6>--}}
								{{--<span>{{date("M j, g:i a", strtotime($notify->created_at)) }}</span>--}}
								{{--<p>{{$notify->action_description}}</p>--}}
							{{--</a>--}}
							{{--<div class="btns">--}}
								{{--<a href="{{route('admin.notify.status', [$notify->id])}}" title="Mark Solved">--}}
									{{--Not Solved--}}
								{{--</a>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</div><!-- Notification Box -->--}}
					{{--@endforeach--}}
				{{--</div>--}}
			{{--</div>--}}
		{{--</div><!-- Notification Dropdown -->--}}
	{{--</div><!-- Notifications -->--}}
	{{--@endif--}}

	{{--@if(!$notification['shipments']->isEmpty())--}}
	{{--<div class="notification">--}}
		{{--<a class="click-btn" href="#" title="">Shipments <span>{{$notification['shipments']->count()}}</span></a>--}}
		{{--<div class="notification-dropdown z-depth-2">--}}
			{{--<div class="notification-bottom">--}}
				{{--<div class="notification-inner scroll" style="overflow: auto;">--}}
					{{--@foreach($notification['shipments'] as $notify)--}}
					{{--<div class="notification-box">--}}
						{{--<div class="notification-detail">--}}
							{{--<a href="{{route('admin.shipping.order', [$notify->action_id])}}">--}}
								{{--<h6 class="blue-text">{{$notify->customer->name}} ({{$notify->customer->locker}})</h6>--}}
								{{--<span>{{date("M j, g:i a", strtotime($notify->created_at)) }}</span>--}}
								{{--<p>{{$notify->action_description}}</p>--}}
							{{--</a>--}}
							{{--<div class="btns">--}}
								{{--<a href="{{route('admin.notify.status', [$notify->id])}}" title="Mark Solved">--}}
									{{--Not Solved--}}
								{{--</a>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</div><!-- Notification Box -->--}}
					{{--@endforeach--}}
				{{--</div>--}}
			{{--</div>--}}
		{{--</div><!-- Notification Dropdown -->--}}
	{{--</div><!-- Notifications -->--}}
	{{--@endif--}}

	{{--@if(!$notification['shoppers']->isEmpty())--}}
	{{--<div class="notification">--}}
		{{--<a class="click-btn" href="#" title="">PS - Shoppre <span>{{$notification['shoppers']->count()}}</span></a>--}}
		{{--<div class="notification-dropdown z-depth-2">--}}
			{{--<div class="notification-bottom">--}}
				{{--<div class="notification-inner scroll" style="overflow: auto;">--}}
					{{--@foreach($notification['shoppers'] as $notify)--}}
					{{--<div class="notification-box">--}}
						{{--<div class="notification-detail">--}}
							{{--<a href="{{route('admin.shopper.order', [$notify->action_id])}}">--}}
								{{--<h6 class="blue-text">{{$notify->customer->name}} ({{$notify->customer->locker}})</h6>--}}
								{{--<span>{{date("M j, g:i a", strtotime($notify->created_at)) }}</span>--}}
								{{--<p>{{$notify->action_description}}</p>--}}
							{{--</a>--}}
							{{--<div class="btns">--}}
								{{--<a href="{{route('admin.notify.status', [$notify->id])}}" title="Mark Solved">--}}
									{{--Not Solved--}}
								{{--</a>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</div><!-- Notification Box -->--}}
					{{--@endforeach--}}
				{{--</div>--}}
			{{--</div>--}}
		{{--</div><!-- Notification Dropdown -->--}}
	{{--</div><!-- Notifications -->--}}
	{{--@endif--}}

	{{--@if(!$notification['selfshopper']->isEmpty())--}}
	{{--<div class="notification">--}}
		{{--<a class="click-btn" href="#" title="">PS - Customer <span>{{$notification['selfshopper']->count()}}</span></a>--}}
		{{--<div class="notification-dropdown z-depth-2">--}}
			{{--<div class="notification-bottom">--}}
				{{--<div class="notification-inner scroll" style="overflow: auto;">--}}
					{{--@foreach($notification['selfshopper'] as $notify)--}}
					{{--<div class="notification-box">--}}
						{{--<div class="notification-detail">--}}
							{{--<a href="{{route('admin.shopper.self.order', [$notify->action_id])}}">--}}
								{{--<h6 class="blue-text">{{$notify->customer->name}} ({{$notify->customer->locker}})</h6>--}}
								{{--<span>{{date("M j, g:i a", strtotime($notify->created_at)) }}</span>--}}
								{{--<p>{{$notify->action_description}}</p>--}}
							{{--</a>--}}
							{{--<div class="btns">--}}
								{{--<a href="{{route('admin.notify.status', [$notify->id])}}" title="Mark Solved">--}}
									{{--Not Solved--}}
								{{--</a>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</div><!-- Notification Box -->--}}
					{{--@endforeach--}}
				{{--</div>--}}
			{{--</div>--}}
		{{--</div><!-- Notification Dropdown -->--}}
	{{--</div><!-- Notifications -->--}}
	{{--@endif--}}

		{{--@if(!$notification['schedulepickup']->isEmpty())--}}
			{{--<div class="notification">--}}
				{{--<a class="click-btn" href="#" title="">Sc-Pickup--}}
					{{--<span>{{$notification['schedulepickup']->count()}}</span>--}}
				{{--</a>--}}
				{{--<div class="notification-dropdown z-depth-2">--}}
					{{--<div class="notification-bottom">--}}
						{{--<div class="notification-inner scroll" style="overflow: auto;">--}}
							{{--@foreach($notification['schedulepickup'] as $notify)--}}
								{{--<div class="notification-box">--}}
									{{--<div class="notification-detail">--}}
										{{--<a href="#">--}}
											{{--<h6 class="blue-text">{{$notify->first_name}} ({{$notify->last_name}})</h6>--}}
											{{--<span>{{date("M j, g:i a", strtotime($notify->created_at)) }}</span>--}}
											{{--<p>{{$notify->act_desc}}</p>--}}
										{{--</a>--}}
										{{--<div class="btns">--}}
											{{--<a href="{{route('schedulePickup.View',['id'=>$notify->id])}}"--}}
											   {{--title="Mark Solved">Not Seen</a>--}}
										{{--</div>--}}
									{{--</div>--}}
								{{--</div><!-- Notification Box -->--}}
							{{--@endforeach--}}
						{{--</div>--}}
					{{--</div>--}}
				{{--</div><!-- Notification Dropdown -->--}}
			{{--</div><!-- Notifications -->--}}
		{{--@endif--}}
{{--</div>--}}
  <!-- Topbar Links -->

</div><!-- Top Bar -->
