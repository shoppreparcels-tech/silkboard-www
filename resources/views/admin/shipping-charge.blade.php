@extends('admin.layout')

@section('content')
    
    <div class="content-area">
        <div class="breadcrumb-bar">
            <div class="page-title">
                <h1>{{$country->name}}</h1>
                <span>Shipping Charges</span>
            </div>
        </div><!-- Breadcrumb Bar -->

        <div class="widgets-wrapper">
            <div class="row">
                <div class="masonary">
                    <div class="col s12">
                    @if (session('message'))
                        <div class="alert alert-success">{{ session('message') }}</div>
                    @endif
                    <form method="post" action="{{route('admin.shipping.submit')}}">
                        {{ csrf_field() }}
                            <input type="hidden" name="country" value="{{$country->id}}">
                            <div class="input-field col s3">
                                <input type="text" class="validate" name="min" value="{{ old('min') }}" required>
                                <label for="last_name" class="active">Min Weight</label>
                                @if ($errors->has('min'))
                                    <span class="error">{{ $errors->first('min') }}</span>
                                @endif
                            </div>
                            <div class="input-field col s3">
                                <input type="text" class="validate" name="max" value="{{ old('max') }}" required>
                                <label class="active">Max Weight</label>
                                @if ($errors->has('max'))
                                    <span class="error">{{ $errors->first('max') }}</span>
                                @endif
                            </div>
                            <div class="input-field col s3">
                                <input type="text" class="validate" name="amount" value="{{ old('amount') }}" required>
                                <label class="active">Cost</label>
                                @if ($errors->has('amount'))
                                    <span class="error">{{ $errors->first('amount') }}</span>
                                @endif
                            </div>
                            <div class="input-field col s3">
                                <select name="courier">
                                    <option value="dtdc">DTDC</option>
                                    <option value="dhl" selected>DHL</option>
                                </select>
                                <label>Courier</label>
                                @if ($errors->has('courier'))
                                    <span class="error">{{ $errors->first('courier') }}</span>
                                @endif
                            </div>
                            <div class="input-field col s4">
                                <input type="text" class="validate" name="timerange" value="2-5" required>
                                <label class="active">Time For Delivery</label>
                                @if ($errors->has('timerange'))
                                    <span class="error">{{ $errors->first('timerange') }}</span>
                                @endif
                            </div>
                            <div class="input-field col s4">
                                <select name="item_type">
                                    <option value="doc">DOC</option>
                                    <option value="nondoc" selected>NONDOC</option>
                                </select>
                                <label>Document / Non-Document</label>
                                @if ($errors->has('item_type'))
                                    <span class="error">{{ $errors->first('item_type') }}</span>
                                @endif
                            </div>
                            <div class="input-field col s4">
                                <select name="rate_type">
                                    <option value="fixed">Fixed Amount</option>
                                    <option value="multi">Multiplier (per Kg/Pounds)</option>
                                </select>
                                <label>Fixed or Multiplier(Per Kg/Pounds)</label>
                                @if ($errors->has('rate_type'))
                                    <span class="error">{{ $errors->first('rate_type') }}</span>
                                @endif
                            </div>
                            <div class="input-field col s12">
                                <input type="hidden" name="redirect" value="{{url()->current()}}">
                                <button type="submit" class="btn waves-effect waves-light red lighten-2">Submit</button>
                            </div>
                        </form>
                        <div class="clearfix"></div>
                        <br><br>
                    </div>
                    <div class="col s12">
                        <div class="projects scroll">
                            <div class="projects-table">
                                <table class="table table-bordered table-hover">
                                    <tr class="success">
                                        <th>Type</th>
                                        <th>Min</th>
                                        <th>Max</th>
                                        <th>Price(INR)</th>
                                        <th>Courier</th>
                                        <th>Delivery</th>
                                        <th>Rate</th>
                                        <th></th>
                                    </tr>
                                    @foreach($rates as $rate)
                                    <tr>
                                        <td>{{$rate->item_type}}</td>
                                        <td>{{$rate->min}}</td>
                                        <td>{{$rate->max}}</td>
                                        <td>{{$rate->amount}}</td>
                                        <td>{{$rate->courier}}</td>
                                        <td>{{$rate->timerange}} Days</td>
                                        <td>
                                        @if($rate->rate_type == 'multi')
                                            per kg/lbs
                                        @else
                                            {{$rate->rate_type}}
                                        @endif
                                        </td>
                                        <td>
                                            <form method="post" action="{{route('admin.shipping.delete')}}" class="form_del">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="rate" value="{{$rate->id}}">
                                                <button type="submit" class="btn red"><i class="ti-trash"></i></button>
                                            </form>
                                            <a href="#" class="btn slide_trigger" data-target="slidedown_{{$rate->id}}"><i class="ti-pencil-alt"></i></a>
                                        </td>
                                    </tr>

                                    <tr id="slidedown_{{$rate->id}}" style="display:none">
                                        <td colspan="8">
                                            <form method="post" action="{{route('admin.shipping.update')}}">
                                            {{ csrf_field() }}
                                                <div class="input-field col s3">
                                                    <input type="text" class="validate" name="min" value="{{$rate->min}}" autofocus required>
                                                </div>
                                                <div class="input-field col s3">
                                                    <input type="text" class="validate" name="max" value="{{$rate->max}}" required>
                                                </div>
                                                <div class="input-field col s3">
                                                    <input type="text" class="validate" name="amount" value="{{ $rate->amount }}" required>
                                                </div>
                                                <div class="input-field col s3">
                                                    <select name="courier">
                                                    @if($rate->courier  == "dtdc")
                                                        <option value="dtdc" selected>DTDC</option>
                                                        <option value="dhl">DHL</option>
                                                    @else
                                                        <option value="dtdc">DTDC</option>
                                                        <option value="dhl" selected>DHL</option>
                                                    @endif
                                                    </select>
                                                </div>
                                                <div class="input-field col s4">
                                                    <input type="text" class="validate" name="timerange" value="{{$rate->timerange}}" required>
                                                </div>
                                                <div class="input-field col s4">
                                                    <select name="item_type" required>
                                                        @if($rate->item_type == "doc")
                                                            <option value="doc" selected>DOC</option>
                                                            <option value="nondoc">NONDOC</option>
                                                        @else
                                                            <option value="doc">DOC</option>
                                                            <option value="nondoc" selected>NONDOC</option>
                                                        @endif
                                                    </select>
                                                </div>
                                                <div class="input-field col s4">
                                                    <select name="rate_type">
                                                    @if($rate->rate_type == 'multi')
                                                        <option value="fixed">Fixed Amount</option>
                                                        <option value="multi" selected>Multiplier (per Kg/Pounds)</option>
                                                    @else
                                                        <option value="fixed" selected>Fixed Amount</option>
                                                        <option value="multi">Multiplier (per Kg/Pounds)</option>
                                                    @endif
                                                    </select>
                                                </div>
                                                <div class="input-field col s12">
                                                    <input type="hidden" name="rateid" value="{{$rate->id}}">
                                                    <button type="submit" class="btn btn-sm blue">Update</button>
                                                </div>
                                            </form>
                                            <div class="clearfix"></div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Content Area -->
@endsection

@section('js_script')
<script type="text/javascript">
    $('.slide_trigger').click(function(e) {
        e.preventDefault();
        var target = $(this).attr('data-target');
        $('#'+target).slideToggle();
    });
</script>
@endsection