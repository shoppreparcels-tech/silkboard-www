@extends('myaccount.admin.layout')

@section('content')

  <!-- Modal -->
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <form method="post" action="{{route('story.delete')}}">
          {{ csrf_field() }}
          <div class="modal-body">
            <p class="popup-head">Are you sure to delete this item ?</p>
            <label for="txtname"></label>
            <input type="hidden" name="story_id" id="hdn_story_id"/>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" id="btn_cancel_popup">Cancel</button>
            <button type="submit" class="btn waves-effect waves-light red " style="margin-right: 3%">Delete</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- End Modal -->

  <div class="content-area">
    <div class="breadcrumb-bar">
      <div class="page-title">
        <h1>Shoppre Stories</h1>
        <span>View All Stories</span>
      </div>
    </div>
    <!-- Breadcrumb Bar -->
    <div class="widgets-wrapper">
      <div class="row">
        <div class="masonary">
          <div class="col s12">
            <div class="widget z-depth-1">
              <div style="float: right;margin-bottom: 20px;">
                <a href="{{route('story.create')}}" class="btn btn-shoppre"> Create +</a>
              </div>
              @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
              @endif
              @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
              @endif
              <div class="projects scroll">
                <div class="projects-table">
                  <div id="outer_div">
                    <table class="table">
                      <thead>
                      <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Update</th>
                        <th>Delete</th>
                      </tr>
                      </thead>
                      <tbody>
                      @foreach ($stories as $story)
                        <tr>
                          <td>{{$story -> id}}</td>
                          <td>{{$story -> title}}</td>
                          <td>{{$story -> pre_description}}</td>
                          <td>
                            <img src="{{env('APP_URL').'/uploads/story/'.$story->id.'/'.$story -> image}}"
                                   alt="" width="100px" height="100px">
                          </td>
                          <td>
                            <a href="{{route('story.update', ['id'=>$story->id])}}" class="btn btn-danger">Update</a>
                          </td>
                          <td>
                            <a href="javascript:void(0)" class="red-text text-darken-4"
                               data-story_id='{{$story->id}}' id="btn_delete_story"><i
                                class="ti-trash"></i>Delete
                            </a>
                          </td>
                        </tr>
                      @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- Content Area -->

@endsection

@section('js_script')
  <script>
      $("#outer_div").on("click","#btn_delete_story",function(){var o=$(this).attr("data-story_id");console.log(o),$("#hdn_story_id").val(o),$("#myModal").modal("open")}),$("#btn_cancel_popup").click(function(){$("#myModal").modal("close")});
  </script>
@endsection
