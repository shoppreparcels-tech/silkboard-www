@extends('layout')

@section('title', 'About | Shoppre - International Shipping Partner')
@section('description', 'Know how Shoppre a parcel forwarding & international shipping services work for online shopping in India while ensuring fast service at unbelievably low prices.')
@section('keywords', 'know how, shoppre, parcel forwarding, international shipping services, online shopping in india, fast service, dhl, fedex, dtdc')

@section('css_style')
    <link rel="canonical" href="https://www.shoppre.com/about" />
@endsection
@section('content')
    <main>
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4 text-center jumbotron-heading">Seller Partnership</h1>
                <p class="lead text-center jumbotron-text">ShoppRe.com makes shipping super easy. Ship your products
                    Internationally starting at Rs. 500/-.<br> Fill in the form below or reach out to us at +91 9148357733</p>
            </div>
        </div>
        <div class="container mb-5">
            <h2 class="text-primary">Submit your Interest</h2>
            <div class="card shadow border-0 mt-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-9">
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Contact Person Full Name</label>
                                            <input type="text" class="form-control" id="name" placeholder="Enter name" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Mobile Number</label>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">+91</span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                                                       aria-describedby="basic-addon1" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Email Address</label>
                                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email address"
                                                   required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="businessname">Business Name (if applicable)</label>
                                            <input type="text" class="form-control" id="businessname" placeholder="Name of your store/business">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="website">Website/Page (optional)</label>
                                            <input type="text" class="form-control" id="website" placeholder="Enter url">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>No. of Shipments in a Month</label>
                                            <div class="d-flex justify-content-around domestic-row">
                                                <div class="domestic">Domestic</div>
                                                <div>Less than</div>
                                                <div>10-50</div>
                                                <div>50-100</div>
                                                <div>100-500</div>
                                                <div>500+</div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="d-flex justify-content-around international-row">
                                                <div>International</div>
                                                <div>Less than</div>
                                                <div>10-50</div>
                                                <div>50-100</div>
                                                <div>100-500</div>
                                                <div>500+</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="countries">Which are the top Countries you Ship?</label>
                                        <select class="countries form-control" name="states[]" multiple="multiple">
                                            <option value="US">United States</option>
                                            <option value="UK">United Kingdom</option>
                                            <option value="IN">India</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mt-3 btn-submit">Submit</button>
                            </form>
                        </div>
                        <div class="col-md-3">
                            <div class="advertisement d-flex">
                                <h6 class="advertisement-text">Exciting Offers</h6>
                                <div class="watsapp"><img src="images/whatsapp.png"> +91 914-835-7733</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    </body>
    <script>
        $(document).ready(function () {
            $('.countries').select2();
        });
    </script>
@endsection
