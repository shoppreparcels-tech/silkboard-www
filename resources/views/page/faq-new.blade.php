@extends('layout')

@section('title', 'FAQ - International Shipping | Shopping at Indian Stores | ShoppRe')
@section('description', 'Learn more about ShoppRe, International shipping services from India, shopping at Indian stores, shipping rates, virtual address, courier delivery & more.')
@section('keywords', 'frequently asked questions, membership plan, shipping rates, virtual address, app, account information, receipts')

@section('css_style')
    <link rel="canonical" href="https://www.shoppre.com/faq"/>

@endsection
@section('content')

    {{--<section class="page_head">--}}
    {{--<div class="pagebanner">--}}
    {{--<img src="img/banner1.jpg" width="100%">--}}
    {{--<div class="banner-cap">--}}
    {{--<h2>Frequently Asked Questions - ShoppRe</h2>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</section>--}}
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



    <section class="faq_content">
        <div class="container">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                    @foreach($categories as $category)
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion"
                                       href="#cat_{{$category->id}}" aria-expanded="true">
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
                                                    <a role="button" data-toggle="collapse" href="#faq_{{$faq->id}}"
                                                       aria-expanded="true">
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

    <section class="accsec">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <form action="" class="search-form">
                        <div class="search-bar">
                            <i class="fa fa-search" aria-hidden="true"></i>
                            <input class="input-text" type="text" name="srch1"
                                   placeholder="Can't find your answer? Search ShoppRe">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <h4 class="header4 p-color-cement">CATEGORY</h4>
        <br/>
        @php
            $count=0;
        @endphp
        @foreach($categories as $category)
            <div class="container" style="margin-top:50px;">
                <div id="container">
                    <div id="parentVerticalTab">
                        <ul class="resp-tabs-list hor_1">
                            {{--<li id="">Registration and Membership&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right mobhide"--}}
                            {{--aria-hidden="true"></i></li>--}}
                            <li>
                                <a role="button" data-toggle="collapse" data-parent="#accordion"
                                   href="#cat_{{$category->id}}" aria-expanded="true">
                                    {{$category->heading}}
                                </a>
                            </li>
                        </ul>
                        <div class="resp-tabs-container hor_1">
                            <div>
                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Do
                                                    you provide a Membership Plan?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                    veniam, quis nostrud</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Is
                                                    the
                                                    address provided by Shoppre, a PO Box address?</a>
                                            </h4>
                                        </div>
                                        <div id="collapse2" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                    veniam, quis nostrud</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="panel-group" id="accordion">


                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Is
                                                    the
                                                    address provided by Shoppre, a PO Box address?</a>
                                            </h4>
                                        </div>
                                        <div id="collapse3" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                    veniam, quis nostrud</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="panel-group" id="accordion">


                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Is
                                                    the
                                                    address provided by Shoppre, a PO Box address?</a>
                                            </h4>
                                        </div>
                                        <div id="collapse4" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                    veniam, quis nostrud</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="panel-group" id="accordion">


                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Is
                                                    the
                                                    address provided by Shoppre, a PO Box address?</a>
                                            </h4>
                                        </div>
                                        <div id="collapse5" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                    veniam, quis nostrud</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="panel-group" id="accordion">

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">Is
                                                    the
                                                    address provided by Shoppre, a PO Box address?</a>
                                            </h4>
                                        </div>
                                        <div id="collapse6" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                    veniam, quis nostrud</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="panel-group" id="accordion">

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">Is
                                                    the
                                                    address provided by Shoppre, a PO Box address?</a>
                                            </h4>
                                        </div>
                                        <div id="collapse7" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                    veniam, quis nostrud</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="panel-group" id="accordion">

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">Is
                                                    the
                                                    address provided by Shoppre, a PO Box address?</a>
                                            </h4>
                                        </div>
                                        <div id="collapse8" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                    veniam, quis nostrud</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="panel-group" id="accordion">

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse9">Is
                                                    the
                                                    address provided by Shoppre, a PO Box address?</a>
                                            </h4>
                                        </div>
                                        <div id="collapse9" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                    veniam, quis nostrud</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="panel-group" id="accordion">

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse10">Is
                                                    the
                                                    address provided by Shoppre, a PO Box address?</a>
                                            </h4>
                                        </div>
                                        <div id="collapse10" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                    veniam, quis nostrud</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="panel-group" id="accordion">

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse11">Is
                                                    the
                                                    address provided by Shoppre, a PO Box address?</a>
                                            </h4>
                                        </div>
                                        <div id="collapse11" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                    veniam, quis nostrud</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div>
                                <div class="panel-group" id="accordion">

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse12">Is
                                                    the
                                                    address provided by Shoppre, a PO Box address?</a>
                                            </h4>
                                        </div>
                                        <div id="collapse12" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                    veniam, quis nostrud</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="panel-group" id="accordion">

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse13">Is
                                                    the
                                                    address provided by Shoppre, a PO Box address?</a>
                                            </h4>
                                        </div>
                                        <div id="collapse13" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                    veniam, quis nostrud</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div>
                                <div class="panel-group" id="accordion">

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse14">Is
                                                    the
                                                    address provided by Shoppre, a PO Box address?</a>
                                            </h4>
                                        </div>
                                        <div id="collapse14" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                    veniam, quis nostrud</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="panel-group" id="accordion">

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse15">Is
                                                    the
                                                    address provided by Shoppre, a PO Box address?</a>
                                            </h4>
                                        </div>
                                        <div id="collapse15" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                    veniam, quis nostrud</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="panel-group" id="accordion">

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse16">Is
                                                    the
                                                    address provided by Shoppre, a PO Box address?</a>
                                            </h4>
                                        </div>
                                        <div id="collapse16" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                    veniam, quis nostrud</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div>
                                <div class="panel-group" id="accordion">

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse17">Is
                                                    the
                                                    address provided by Shoppre, a PO Box address?</a>
                                            </h4>
                                        </div>
                                        <div id="collapse17" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                    veniam, quis nostrud</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="panel-group" id="accordion">

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse18">Is
                                                    the
                                                    address provided by Shoppre, a PO Box address?</a>
                                            </h4>
                                        </div>
                                        <div id="collapse18" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                    veniam, quis nostrud</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="panel-group" id="accordion">

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse19">Is
                                                    the
                                                    address provided by Shoppre, a PO Box address?</a>
                                            </h4>
                                        </div>
                                        <div id="collapse19" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                    veniam, quis nostrud</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="panel-group" id="accordion">

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse20">Is
                                                    the
                                                    address provided by Shoppre, a PO Box address?</a>
                                            </h4>
                                        </div>
                                        <div id="collapse20" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                    veniam, quis nostrud</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="panel-group" id="accordion">

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse21">Is
                                                    the
                                                    address provided by Shoppre, a PO Box address?</a>
                                            </h4>
                                        </div>
                                        <div id="collapse21" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                    veniam, quis nostrud</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="panel-group" id="accordion">

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse22">Is
                                                    the
                                                    address provided by Shoppre, a PO Box address?</a>
                                            </h4>
                                        </div>
                                        <div id="collapse22" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                    veniam, quis nostrud</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="panel-group" id="accordion">

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse23">Is
                                                    the
                                                    address provided by Shoppre, a PO Box address?</a>
                                            </h4>
                                        </div>
                                        <div id="collapse23" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                    veniam, quis nostrud</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="panel-group" id="accordion">

                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse24">Is
                                                    the
                                                    address provided by Shoppre, a PO Box address?</a>
                                            </h4>
                                        </div>
                                        <div id="collapse24" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                    veniam, quis nostrud</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="pull-right padrt18">Still need help?</p>
                        </div>

                    </div>

                </div>
            </div>
            $count= $count+1;
        @endforeach


    </section>

@endsection
@section('js_script')
    <script type="text/javascript">
        $(document).ready(function () {

            //Vertical Tab accordion 1
            $('#parentVerticalTab').easyResponsiveTabs({
                type: 'vertical', //Types: default, vertical, accordion
                width: 'auto', //auto or any width like 600px
                fit: true, // 100% fit in a container
                closed: 'accordion', // Start closed if in accordion view
                tabidentify: 'hor_1', // The tab groups identifier
                activate: function (event) { // Callback function if tab is switched
                    var $tab = $(this);
                    var $info = $('#nested-tabInfo2');
                    var $name = $('span', $info);
                    $name.text($tab.text());
                    $info.show();
                }
            });


        });
    </script>
@endsection
