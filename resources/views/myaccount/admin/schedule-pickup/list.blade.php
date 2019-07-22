@extends('myaccount.admin.layout')

@section('title', 'Schedule Your Package Pickup Online with Shoppre - Schedule A Pickup')
@section('description', 'Need to Schedule a package pickup online? Schedule your parcel
 quickly with Shoppre from your home or office and we will deliver for you within 2-5 business days.')
@section('keywords', 'terms and conditions, set of rules and guidelines user must agree,
following guidelines, website, mobile app')
@section('css_style')
  <meta name="robots" content="noindex,nofollow"/>
@endsection
@section('content')
  <div class="content-area">
    <div class="breadcrumb-bar">
      <div class="page-title">
        <h1>Schedule Pickups</h1>
        <span>View All Schedule Pickups</span>
      </div>
    </div>
    <!-- Breadcrumb Bar -->
    <div class="widgets-wrapper">
      <div class="row">
        <div class="masonary">
          <div class="col s12">
            <div class="widget z-depth-1">
              {{ $pickups->links() }}
              <div class="projects scroll">
                <div class="projects-table">
                  <div id="outer_div">
                    <table class="table">
                      <thead>
                      <tr>
                        <th>Id</th>
                        <th>Name #</th>
                        <th>Email</th>
                        <th>Receive Date</th>
                        <th>Weight</th>
                        <th>Items</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                      @foreach ($pickups as $pickup)
                        <tr>
                          <td><a href="{{$pickup->asana_url}}" target="_blank" style="color: cadetblue;">{{$pickup->id}}</a>
                            <input type="text" class="form-control txtAsanaLink" value="{{$pickup->asana_url}}"
                                   data-id="{{$pickup->id}}" id="txt_asana_{{$pickup->id}}" style="display: none">
                            <i class="glyphicon glyphicon-edit btnEdit" data-id="{{$pickup->id}}" style="cursor: pointer;"></i>
                          </td>
                          <td>
                            {{$pickup->first_name}} {{$pickup->last_name}}
                          </td>
                          <td>{{$pickup->user_email}}</td>
                          <td>{{$pickup->created_at}}</td>
                          <td>
                            {{$pickup->package_weight}}
                          </td>
                          <td>
                            {{$pickup->package_items}}
                          </td>
                          <td>
                            {{$pickup->status}}
                          </td>
                          <td>
                            <a href="{{route('schedulePickup.View',['id'=>$pickup->id])}}"
                               class="green-text"><i class="ti-angle-double-right">
                              </i>
                            </a>
                          </td>
                        </tr>
                      @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              {{ $pickups->links() }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- Content Area -->
@endsection

@section('js_script')
  <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
  <script type="text/javascript">
      $(document).ready(function(){$(".btnEdit").click(function(){var a="#txt_asana_"+$(this).data("id");$(a).css("width","400px"),$(a).toggle(),$(a).focus()}),$(".txtAsanaLink").keypress(function(a){if(13==a.which){$("#calc_load").show();var t=$(this).val(),i=$(this).data("id");jQuery.ajax({url:"/admin/schedule-pickup/asana-tracking",type:"POST",data:{pickup_id:i,asana_url:t},success:function(a){$("#calc_load").hide(),"1"==a.error?alert("Error !"):$("#txt_asana_"+i).hide()}})}})});
  </script>
@endsection
