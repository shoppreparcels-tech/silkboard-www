@extends('layout')

@section('title', 'Partner | Shoppre - International Shipping Partner')
@section('description', 'Know how Shoppre a parcel forwarding & international shipping services work for online shopping in India while ensuring fast service at unbelievably low prices.')
@section('keywords', 'know how, shoppre, parcel forwarding, international shipping services, online shopping in india, fast service, dhl, fedex, dtdc')

@section('content')

    <div class="container">
        <table>
            @foreach($partners as $partner)
                <tr>
                    <td>
                        {{$partner->name}}
                    </td>
                    <td>
                        {{$partner->image}}
                    </td>
                    <td>
                        {{$partner->id}}
                    </td>
                </tr>
            @endforeach
        </table>

    </div>

@endsection
