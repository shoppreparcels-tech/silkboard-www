@extends('layout')

@section('title', 'Make Payment - Shoppre Payment')
@section('description', 'Need to Schedule a package pickup online? Schedule your parcel quickly with Shoppre from your home or office and we will deliver for you within 2-5 business days.')
@section('keywords', 'terms and conditions, set of rules and guidelines user must agree, following guidelines, website, mobile app')

@section('content')
    <section class="timeline">
        <br/>
        <br/>
        <div class="col-md-4 col-sm-offset-5">
            <br/>
            <font color="#663399">
                <h1>Make Payment</h1>
            </font>
        </div>
        <br/>
      <div class="container" style="background-color: whitesmoke">
            <form class="form-horizontal" method="post" action="{{route('page.submit')}}">
                {{ csrf_field() }}
                <div class="feedback-container">
                    <br/>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <div class="form-group">
                                <label>Name <span class="mendatory_fields">*</span> :</label>
                                <input type="text" class="form-control" placeholder="Enter name" name="name" required/>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <div class="form-group label-align">
                                <label>mobile <span class="mendatory_fields">*</span> :</label>
                                <input type="text" class="form-control" placeholder="Enter mobile" name="mobile" maxlength="10" required/>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <div class="form-group label-align">
                                <label>Email <span class="mendatory_fields">*</span> :</label>
                                <input type="email" class="form-control" placeholder="Enter Email" name="email" required/>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-3">
                                <div class="form-group label-align">
                                    <label>Amount <span class="mendatory_fields">*</span> :</label>
                                    <input type="number" class="form-control" placeholder="Enter Amount" name="amount" required/>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <div class="form-group">
                                <label>Comment <span class="mendatory_fields">*</span> :</label>
                                <input type="text" class="form-control" placeholder="Enter Comment" name="comment" required/>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-offset-4">
                            <button type="submit"  class="btn btn-block btn-shoppre">Make Payment</button>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-md-6 col-sm-offset-3">
                          <center>
                            <h4 class="payment_note">Note: American Express Cards Are Not Accepted.</h4>
                          </center>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <div class="clearfix"></div>
                </div>
            </form>
        </div>
    </section>
@endsection

@section('js_script')
    <script src="{{asset('js/validate.min.js')}}"></script>
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script type="text/javascript">
        /* Magnific Popup */
        $(document).ready(function () {
            $('input[name="other"]').click(function () {

                if (this.checked) {
                    $(".other_item_box").css("display", "block");
                }
                else {
                    $(".other_item_box").css("display", "none");
                }
            });
        });
    </script>
@endsection
