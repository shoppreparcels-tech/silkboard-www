@extends('layout')


@section('title', 'インドで買い日本に発送する | ShoppRe 日本 | 国際配送')
@section('description', 'インドの商品をShopperの住所を使い、日本に配送する。＃1国際配送会社. アカウントを無料で作成')
@section('keywords', 'インドのお店、日本への配送、インドのオンラインストア、配送住所、flipkart 日本に配送')
@section('css_style')
    <link rel="canonical" href="https://www.shoppre.com/ja-jp"/>
    <link rel="alternate" href="https://www.shoppre.com/ja-jp" hreflang="ja-jp" />

    <style>
        .bg-diwali-lp{background-image:url(../../img/images/overlay1.png);height:900px;width:100%;background-position:center;background-repeat:no-repeat;background-size:cover;background-color:#fafafb;padding-top:60px}.select-control{float:left;width:90px!important;height:40px!important;font-size:13px;font-weight:400;font-style:italic;border-left:0;border-radius:3px;background-color:#fafafb;border:none}.select2-container--default.select2-selection--single{background-color:#fff!important;border:none!important;border-radius:4px!important;height:40px!important;padding-top:5px!important}.select2-container--default .select2-selection--single .select2-selection__arrow b{margin-top:4px!important}@media only screen and (max-width:600px){.bg-diwali-lp{height:700px}}
    </style>
@endsection
@section('content')

    <section class="bg-diwali-lp">
        <div class="container">
            <div class="col-md-12 col-xs-12">
                <center>

                    <h1 class="f-s-28 p-color-white header-spacing">最大で<span class="p-color-yellow">80%</span>の節約
                        </h1>
                    <h2 class="f-c-yellow header-spacing f-s-36 font-weight-900">インドで買い日本に発送する
                    </h2>
                    <h1 class="f-s-20 p-color-white header-spacing font-weight-900">発送料金は
                        <span class="p-color-yellow">2441円から始まる</span>
{{--                        <span class="offerprice">690/-</span>--}}
                    </h1>
                    <br>
                    <br>
                    <div class="col-md-4 col-md-offset-4 col-xs-12 div-diwali-coupon">
                        <div class="col-md-4 col-xs-4">
                            <h3 class="header4 p-color-white">クーポン <br> コード:</h3>
                        </div>
                        <div class="col-md-8 col-xs-8">
                            <h1 class="f-s-36 f-c-yellow">FRST50</h1>
                        </div>
                    </div>
                </center>
            </div>

            <div class="col-md-5 col-md-offset-4 col-xs-12 diwali-form-img">
                <br>
                <br>
                   <div class="form-group text-center">
                       {{--<button type="submit" name="btnActivate" class="btn btn-s-r btn-l btn-b-r">--}}
                       <a href="/customer/register" class="btn btn-b-r btn-s-r font-weight-900 col-xs-12" target="_blank">アカウントを無料で作成
                       </a>
                       {{--</button>--}}
                       <br>
                       <br>
                       {{--<button type="submit" name="btnActivate" class="btn btn-s-b btn-l btn-b-g">--}}
                       <a  style="margin-top: 10px;" href="https://api.whatsapp.com/send?phone=918277919191&text=I%27m%20Wish%20to%20Shop%20from%20Indian%20Stores"
                           target="_blank" class="btn btn-s-b btn-a-l btn-b-g col-xs-12">
                           私たちにチャットしてください
                       </a>
                       {{--</button>--}}
                   </div>

            </div>
        </div>
    </section>


    <section >
        <div class=" container shopContainer no-padding">
            <div class="col-md-12" style="padding:20px;">
                <div class="col-md-10">
{{--                    <div>--}}
{{--                        <marquee style="margin-top: 30px;" class="f-s-16 f-c-red f-w-9">--}}
{{--                            <a href="https://www.jaypore.com/eoss2019" title="flipkart" target="_blank">1. Jaypore 👉Monsoon Madnees Sale(Up to 65% Off) </a> |--}}
{{--                            <a href="https://www.amazon.in/rakhis-rakhi-hampers/b?ie=UTF8&node=5143508031" title="Amazon" target="_blank">2. Amazon.in 👉The Rakhi Store</a> |--}}
{{--                            <a href="https://www.ajio.com" title="ajio" target="_blank">3. AJIO.com 👉Everything on  Sale(Min. 50% Off)</a>--}}
{{--                        </marquee>--}}
{{--                    </div>--}}
                    <center>
                        <h1 class="f-s-22 font-weight-900 f-c-d-greay">インドのショップから購入し、そして私たちは日本のあなたの家の戸口までお届けします。</h1>
                    </center>
                </div>
            </div>

            <label class="shop">以下のものを含む<span class="font-weight-900">1000</span>以上のオンラインサイトから買いたいものを選ぶことができます。</label>
            <div class="row" style="padding-right:10px;padding-left: 30px">
                <center>
                    <div class="col-md-1 col-md-offset-2 d-stores-box col-xs-6 col-xs-offset-2 ">
                        <center class="d-online-stores">
                            <a href="{{route('flipkart.landing')}}" target="_blank">
                            <img class="shoppingKart" src="{{env('AWS_CLOUD_FRONT')}}/img/images/flipkart-logo.png" alt="FlipKart"/>
                            </a>
                        </center>

                    </div>
                    <div class="col-md-1  d-stores-box col-xs-6">
                        <center class="d-online-stores">
                            <a href="https://ship.shoppre.com/shopping-from-amazon-in-india-shipping-worldwide/" target="_blank">
                            <img class="shoppingKart" src="{{env('AWS_CLOUD_FRONT')}}/img/images/amazon_logo_RGB.png" alt="Amazon"/>
                            </a>
                        </center>
                    </div>
                    {{--<div class="col-md-1  d-stores-box col-xs-4">--}}
                        {{--<center class="d-online-stores">--}}
                            {{--<img class="shoppingKart" src="{{env('AWS_CLOUD_FRONT')}}/img/images/Jabong-com-925660222-1939026-1.png"--}}
                                 {{--alt="Jabong"/>--}}
                        {{--</center>--}}
                    {{--</div>--}}
                    <div class="col-md-1  d-stores-box col-xs-4">
                        <center class="d-online-stores">
                            <a href="https://ship.shoppre.com/online-stores-india/snapdeal-international-delivery-shopping-from-india/" target="_blank">
                            <img class="shoppingKart" src="{{env('AWS_CLOUD_FRONT')}}/img/images/myntra.png" alt="Myntra"/>
                            </a>
                        </center>
                    </div>
                    <div class="col-md-1  d-stores-box col-xs-4">
                        <center class="d-online-stores">
                            <a href="{{route('myntra.landing')}}" target="_blank">
                            <img class="shoppingKart"
                                 src="{{env('AWS_CLOUD_FRONT')}}/img/images/Jabong-com-925660222-1939026-1(1).png" alt="Myntra"/>
                            </a>
                        </center>
                    </div>

                </center>
            </div>
            <div class="col-md-12 rowdetails">
                <center>
                    <div class="col-md-3 col-md-offset-1">
                        <center>
                            <p class="startsvalid">STARTS FROM :<span
                                    class="startsValidValue"> 20th JAN 2020</span></p>
                        </center>
                    </div>
                    <div class="col-md-3">
                        <center>
                            <p class="startsvalid">VALID TILL :<span
                                    class="startsValidValue"> 31st MARCH 2020</span></p>
                        </center>
                    </div>
                    <div class="col-md-3">
                        <center>
                            <p class="startsvalid">COUPON CODE :<span
                                    class="startsValidValue"> FRST50</span></p>
                        </center>

                    </div>
                </center>
            </div>
            <div class=" col-md-12 offer-description">
                <h5 class="f-s-20 font-weight-900 f-c-d-greay ">インドからの買い物＆面倒なことがなく日本への送料が80％も安く済みます！</h5> <br>
                <h4 class="header4 p-color-cement"> あなたが愛する製品やブランドを<a href="/indian-online-stores" target="_blank">インドのオンラインストア</a>から購入できます。そして、保管、整理、再梱包して3~6日以内で日本に出荷いたします。そして我社ShoppRe.comを使えば簡単にインドからのパッケージ配送が可能です。</h4>
                <br>
                <p class="header4 p-color-cement">また、私たちは国際貨物にかかるコストを50％オフにするクーポン提供しています。これはお会計をする際ShoppReアカウントでクーポンコードFRST50を使用することで最大で200ルピーまで割引することが可能です。
                </p> <br>
                <br>
                <div class="offerDesc">
                    <h5 class="f-s-16">お客様がこの他に得ることができるものは？</h5>
                    <ul>
                        <li>20日なら無料で倉庫の商品を保管することができます。</li>
                        <li>24時間年中無休のオンラインサポートを受けられる。</li>
                        <li>送料が最大で80％オフ</li>
                        <li>3～6日以内の安心な配送</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <br>
    <section style="background-color: #fafafb; margin-top: 10px">
        <div class="container" style="padding-top: 30px;">
            <center>
                <h2 class="header2 p-color-cement-dark"><strong>ShoppReがインドのお店とどのように連携を取っているのか？</strong></h2>
                <h1 class="header3 p-color-cement">インドのオンラインショップで購入し、私たちは日本まで配送いたします。</h1>
            </center>
            <div class="row text-center">
                <br/>
                <div class="col-sm-4">
                    <div class="panel ">
                        <br/><br/>
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/d-step1.svg" alt="">
                        <br/><br/>
                        <h1 class="header3 p-color-cement">ステップ１</h1>
                        <br/>
                        <h1 class="header3 p-color-cement">まずは、インドのShoppReの住所を取得。
                            日本で座っていながらインドのお店でお買い物できます。
                        </h1>
                        <br/>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel ">
                        <br/><br/>
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/d-step2.svg" alt="">
                        <br/><br/>
                        <h1 class="header3 p-color-cement">ステップ2</h1>
                        <br>
                        <h1 class="header3 p-color-cement">どのインドのオンラインストアからでも買い物可能。 <br> <br></h1>
                        <br>

                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel ">
                        <br/><br/>
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/d-step3.svg" alt="">
                        <br/><br/>
                        <h1 class="header3 p-color-cement">ステップ3</h1>
                        <br>
                        <h1 class="header3 p-color-cement">私たちがお客様のお荷物を受け取り、３～６日以内であなたの家までお届けいたします。</h1>
                        <br>

                    </div>
                </div>
                <div class="text-center">
                    <a href="/customer/register" class="btn btn-s-b btn-b-g" target="_blank">アカウントを無料で作成
                    </a>
                </div>
                <br/><br/>
            </div>
        </div>

    </section>

    <section class="chris-benefits">
        <div class="container " >
            <center>
                <h1 class="p-color-cement-dark flipkart-h1 font-weight-900" >ShoppReアドレスの住所で1000以上のインドのオンラインストアからお買い物が可能です</h1>
            </center>
            <div class="row text-center">
                <div class="col-sm-4">
                    <div class="panel boxed outer border-1px">
                        <ul>
                            <li><span><a href="myntra-online-shopping-shipping-from-india">Myntra Online Fashion Store</a></span></li>
                            <li><span><a href="flipkart-shopping-with-shoppre-from-india">Flipkart.com Online Shop</a></span></li>
                            <li><span><a href="amazon-india-shop-international-shipping">Amazon.in Shopping India</a></span></li>
                            <li><span><a href="jaypore-international-shipping-from-india">Jaypore Handpicked Products</a></span></li>
                            <li><span><a href="ajio-online-shopping-international-shipping">AJIO Fashion & Lifestyle Brand</a></span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel outer border-1px">
                        <ul>
                            <li><span><a href="limeroad-shopping-international-shipping">Limeroad Online Shopping Site</a></span></li>
                            <li><span><a href="https://ship.shoppre.com/online-stores-india/suta-online-shopping-india/" target="_blank">Suta Sarees Online Shopping</a></span></li>
                            <li><span><a href="https://ship.shoppre.com/online-stores-india/firstcry-baby-products-international-shipping/" target="_blank">FirstCry Baby & Kids Shopping</a></span></li>
                            <li><span><a href="https://ship.shoppre.com/online-stores-india/patanjali-ayurved-products-international-delivery/" target="_blank">Patanjali Ayurvedic Shopping</a></span></li>
                            <li><span><a href="https://ship.shoppre.com/online-stores-india/snapdeal-international-delivery-shopping-from-india/" target="_blank">Snapdeal Online Shopping</a></span></li>

                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel outer border-1px">
                        <ul>
                            <li><span><a href="https://ship.shoppre.com/online-stores-india/shop-pepperfry-online-furniture-international-shipping-india/" target="_blank">Pepperfry Furniture Shopping</a></span></li>
                            <li><span><a href="https://ship.shoppre.com/online-stores-india/ishashoppe-organic-yoga-clothing-india-international-shipping/" target="_blank">IshaShoppe Yoga Clothing</a></span></li>
                            <li><span><a href="https://ship.shoppre.com/online-stores-india/nykaa-india-beauty-products-international-shipping/" target="_blank">Nykaa Cosmetics Products</a></span></li>
                            <li><span><a href="https://ship.shoppre.com/online-stores-india/biba-india-international-shipping/" target="_blank">Biba Ethnic Wear Shopping</a></span></li>
                            <li><span><a href="https://ship.shoppre.com/online-stores-india/boodmo-care-spare-parts-international-shipping-from-india/" target="_blank">Boodmo - Spare Parts for CARS</a></span></li>
                        </ul>
                    </div>
                </div>
                <br/><br/>
            </div>
        </div>
        <div class="text-center">
            <a href="/indian-online-stores" class="btn btn-s-b btn-b-r" target="_blank">インドのオンラインストアの一覧
            </a>
        </div>
        <br/><br/>
        </div>
    </section>

    <section class="chris-benefits">
        <div class="container" >
            <center>
                <h1 class="p-color-cement-dark flipkart-h1 font-weight-900" >私たちのサービスを使う利点</h1>
            </center>
            <div class="row text-center">
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>個人の配送先住所</span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>20日間の無料パッケージストレージ</span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>パッケージ統合</span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>再梱包</span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>パーソナルショッパーサービス</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>手頃な料金</span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>年中無休のカスタマーサポート</span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>スキャンしたドキュメント</span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>国固有の割引</span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>追跡可能な3-6日間の配達</span></li>

                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel ">
                        <ul>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>商品写真の更新</span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>ウォレットキャッシュバック</span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>荷物返却サービス</span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>国際宅配便</span></li>
                            <li><img src="{{env('AWS_CLOUD_FRONT')}}/img/images/chris-circle.png" alt=""><span>製品の推奨事項</span></li>
                        </ul>
                    </div>
                </div>
                <br/><br/>
            </div>
        </div>
        <br>
    </section>
    <br>
    <br>
    <section class="d-contact-details-section">
        <div class="container " id="contact-support">
            <div class="col-md-12">
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
                        <i class="fa fa-phone" aria-hidden="true"></i> 私たちへの電話</p>
                    <a href="tel:+91-8277919191" class="header2 p-color-white">+91 8277 919191</a>

                </div>

                <div class="col-md-3 col-md-3 col-lg-3 col-sm-12 col-xs-12 contact-details contact-text-align ">
                    <p class="header7"><i class="fa fa-envelope" aria-hidden="true"></i> 私たちへのメール
                    </p>
                    <a href="mailto:support@shoppre.com" class="header2 p-color-white">support@shoppre.com</a>

                </div>

                <div
                    class="col-md-3 col-md-3 col-lg-3 col-sm-12 col-xs-12 contact-details pull-right contact-text-align">
                    <p class="header7">
                        <i class="fa fa-envelope" aria-hidden="true">
                        </i> リアルタイムでのチャット
                    </p>
                    {{--<a href="https://shoppre-international-shipping-courier.zendesk.com/hc/en-us#" class="header2 p-color-white">Chat Now</a>--}}
                    <a onclick="{{Constant::CHATURL}}" href=""
                       class="header2 p-color-white">Chat Now</a>

                </div>
            </div>
        </div>
    </section>
    <section class="d-contact-section-desktop">
        <div class="container " id="contact-support">
            <div class="row" id="d-contcat">
                <div class="col-md-3 col-lg-3 col-sm-10 col-xs-10 " style="display: none">
                    <div class="div-phone">
                        <center>
                            <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/phone.svg" id="phone">
                            <p class="header6 p-color-white ">Contact Our <br>Support Team </p>
                        </center>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-10 col-xs-10 ">
                    <div class="d-contact-div">
                        <img src="{{env('AWS_CLOUD_FRONT')}}/img/svg/phone.svg" id="phone">
                        <p class="header6 p-color-white " style="margin-left: 51px;margin-top: -36px;">Contact Our <br>Support
                            Team </p>
                    </div>
                </div>


                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12  contact-text-align" style="color: #fdf699">
                    <p class="header7">
                        <i class="fa fa-phone" aria-hidden="true"></i> 私たちへの電話</p>
                    <a href="tel:+91-8277919191" class="header2 p-color-white">+91 8277 919191</a>

                </div>

                <div class="col-md-3 col-md-3 col-lg-3 col-sm-12 col-xs-12  contact-text-align " style="color: #fdf699">
                    <p class="header7"><i class="fa fa-envelope" aria-hidden="true"></i> 私たちへのメール</p>
                    <a href="mailto:support@shoppre.com" class="header2 p-color-white">support@shoppre.com</a>

                </div>

                <div class="col-md-3 col-md-3 col-lg-3 col-sm-12 col-xs-12 pull-right contact-text-align"
                     style="color: #fdf699">
                    <p class="header7">
                        <i class="fa fa-envelope" aria-hidden="true">
                        </i> リアルタイムでのチャット
                    </p>
                    <a href="{{Constant::CHATURL}}" target="_blank"
                       class="header2 p-color-white">Chat Now</a>

                </div>
            </div>
        </div>
    </section>
@endsection
