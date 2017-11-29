@extends('layout')

@section('title', 'FAQ | Shoppre - International Shipping Partner')
@section('description', 'Frequently Asked Questions about Shoppre, international shipping services from India. More info such as membership plan, shipping rates, virtual address & App.')
@section('keywords', 'frequently asked questions, membership plan, shipping rates, virtual address, app, account information, receipts')

@section('content')

  <section class="page_head">
      <div class="pagebanner">
        <img src="img/banner1.jpg" width="100%">
        <div class="banner-cap">
          <h2>FAQ</h2>
        </div>
      </div>
  </section>
  <section class="faq_content">
    <div class="container">
      <div class="col-sm-8 col-sm-offset-2">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

        @foreach($categories as $category)
          <div class="panel panel-default">
            <div class="panel-heading" role="tab">
              <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#cat_{{$category->id}}" aria-expanded="true">
                  {{$category->heading}}
                </a>
              </h4>
            </div>
            <div id="cat_{{$category->id}}" class="panel-collapse collapse">
              <div class="panel-body nested">

                @foreach($category->faqs as $faq)
                <div class="panel">
                  <div class="panel-heading nested" role="tab">
                    <h4 class="panel-title">
                      <a role="button" data-toggle="collapse" href="#faq_{{$faq->id}}" aria-expanded="true">
                        {{$faq->question}}
                      </a>
                    </h4>
                  </div>
                  <div id="faq_{{$faq->id}}" class="panel-collapse collapse">
                    <div class="panel-body">
                      {!!$faq->answer!!}
                    </div>
                  </div>
                </div>
              @endforeach

              </div>
            </div>
          </div>
        @endforeach

        </div>
      </div>
    </div>
  </section>
  <section class="faq_contact">
    <div class="container">
      <div class="col-sm-6 col-sm-offset-3">
        <h3>Please note, this FAQ is subject to updates</h3>
        <p>Please check back from time to time for the latest information.</p>
        <h3>Still Have Questions? </h3>
        <a href="{{route('contact')}}" class="btn btn-shoppre">Contact Us</a>
      </div>
    </div>
  </section>

@endsection