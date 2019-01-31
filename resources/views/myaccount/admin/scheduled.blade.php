@extends('myaccount.admin.layout')

@section('content')

    <div class="content-area">
        <div class="breadcrumb-bar">
            <div class="page-title">
                <h1>Scheduled Mails</h1>
                <span>View Automated Mails Send To Customer</span>
            </div>
        </div>
        <!-- Breadcrumb Bar -->
        <div class="widgets-wrapper">
            <div class="row">
                <div class="masonary">
                    <div class="col s12">
                        <div class="widget z-depth-1">

                        {{ $mails->appends(Request::except('page'))->links() }}

                        <div class="projects scroll">
                            <div class="projects-table">
                              <table class="table">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Customer</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($mails as $mail)
                                        <tr>
                                            <td style="white-space: nowrap;">
                                                {{date("d-m-Y, g:i a", strtotime($mail->created_at))}}
                                            </td>
                                            <td>
                                                <a href="{{route('admin.customer.edit', [$mail->customer->id])}}">{{$mail->customer->name}}<br>
                                                <small style="font-size: 12px;">({{$mail->customer->locker}})</small>
                                                </a>
                                            </td>
                                            <td>
                                                @php
                                                    if($mail->type == 'selfshop'){

                                                        switch($mail->condition){
                                                            case('pay_awaiting'):
                                                                echo 'Submit payment to avoid rejection of incoming parcels (PS COD)';
                                                            break;
                                                            case('order_expired'):
                                                                echo 'Personal Shopper (Cash on Delivery) order has been cancelled';
                                                            break;
                                                        }

                                                    }else{

                                                        switch($mail->condition){
                                                            case('pack_storage_expiring'):
                                                                echo 'Packages in locker about to expire';
                                                            break;
                                                            case('pack_storage_expired'):
                                                                echo 'Packages incurring storage fees';
                                                            break;
                                                            case('shipment_expired'):
                                                                echo 'Ready-to-be shipped package is incurring a Storage Fee';
                                                            break;
                                                            case('shipment_expiring'):
                                                                echo 'Submit Payment to avoid Storage Fees';
                                                            break;
                                                            case('wire_transfer_2'):
                                                                echo 'Payment via Wire-Transfer Not Yet Received';
                                                            break;
                                                        }
                                                    }
                                                @endphp
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                              </table>
                            </div>
                          </div>

                          {{ $mails->appends(Request::except('page'))->links() }}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Content Area -->

@endsection
