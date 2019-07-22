@extends('layout')

@section('title', 'FAQ - International Shipping | Shopping at Indian Stores | ShoppRe')
@section('description', 'Learn more about ShoppRe, International shipping services from India, shopping at Indian stores, shipping rates, virtual address, courier delivery & more.')
@section('keywords', 'frequently asked questions, membership plan, shipping rates, virtual address, app, account information, receipts')

@section('css_style')
    <link rel="canonical" href="https://www.shoppre.com/faq"/>

@endsection
@section('content')
    <section class="bannerfaq text-center clrwhite">
        <div class="container">
            <center>
                <h1 class="header1 p-color-white">FREQUENTLY ASKED QUESTIONS</h1>
                <p>Have a question? Consult our shipping FAQ. We are dedicated to making our members happy, so your
                    online account management tools and these FAQ resources are available 24/7.
                </p>
            </center>

        </div>
    </section>
    <section class="accsec">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12" id="custom-search-input">
                        <div class="input-group search-bar">
                            <span class="input-group-btn">
                                <button class="btn btn-info btn-lg" type="button">
                                    <i class="glyphicon glyphicon-search"></i>
                                </button>
                            </span>

                            <input
                                type="text"
                                class="form-control input-lg  search-bar-input"
                                name="faq"
                                placeholder="What type of issue are you facing with us?"
                                ng-model="Faq.model"
                                uib-typeahead="faq.question for faq in Faqs.get($viewValue)"
                                typeahead-loading="Faqs.loadingFaqs"
                                typeahead-no-results="Faqs.noResults"
                                typeahead-on-select='Faqs.select($item)'
                                typeahead-wait-ms="10"
                                autocomplete="off"
                            />

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div id="container">
                <h3 class="header4 p-color-cement-dark">CATEGORY</h3>
                <br/>
                <div id="parentVerticalTab">
                    <ul class="resp-tabs-list hor_1">
                        @foreach($categories as $category)
                            <li>{{$category->heading}}&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right mobhide"
                                                                           aria-hidden="true"></i></li>
                        @endforeach
                    </ul>
                    <div class="resp-tabs-container hor_1">
                        @foreach($categories as $category)
                            <div>
                                @foreach($category->faqs as $faq)
                                    <div class="panel-group" id="accordion">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion"
                                                       href="#faq_{{$faq->id}}">{{$faq->question}}</a>
                                                </h4>
                                            </div>
                                            <div id="faq_{{$faq->id}}" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <a href="{{route('faq.new')}}/{{$faq->question}}" style="color: black" >{!!$faq->answer!!}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                        <p class="pull-right padrt18 p-color-red">Still need help?</p>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="contact-details-section">
        <div class="container " id="contact-support">
            <div class="row">
                <div class="col-md-3 col-lg-3 col-sm-10 col-xs-10 ">
                    <div class="div-phone">
                        <center>
                            <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/phone.svg" id="phone">
                            <p class="header6 p-color-white ">Didn't find the answer you need? Contact us!</p>
                        </center>
                    </div>
                </div>

                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 contact-details contact-text-align">
                    <p class="header7">
                        <i class="fa fa-phone" aria-hidden="true"></i>Call us</p>
                    <a href="tel:+91-80 4094 4077" class="header2 p-color-white">+91 80 4094 4077</a>

                </div>

                <div class="col-md-3 col-md-3 col-lg-3 col-sm-12 col-xs-12 contact-details contact-text-align ">
                    <p class="header7"><i class="fa fa-envelope" aria-hidden="true"></i>SUPPORT EMAIL</p>
                    <a href="mailto:support@shoppre.com" class="header2 p-color-white">support@shoppre.com</a>

                </div>

                <div class="col-md-3 col-md-3 col-lg-3 col-sm-12 col-xs-12 contact-details pull-right contact-text-align">
                    <p class="header7">
                        <i class="fa fa-envelope" aria-hidden="true">
                        </i>Live Chat</p>
                    {{--<a href="https://shoppre-international-shipping-courier.zendesk.com/hc/en-us#" class="header2 p-color-white">Chat Now</a>--}}
                    <a href="{{Constant::CHATURL}}" target="_blank"
                       class="header2 p-color-white">Chat Now</a>
                </div>
            </div>
        </div>
    </section>



@endsection
@section('js_script')
    <script type="text/javascript">
        $(document).ready(function(){$("#parentVerticalTab").easyResponsiveTabs({type:"vertical",width:"auto",fit:!0,closed:"accordion",tabidentify:"hor_1",activate:function(t){var e=$(this),a=$("#nested-tabInfo2");$("span",a).text(e.text()),a.show()}})});
    </script>
@endsection
