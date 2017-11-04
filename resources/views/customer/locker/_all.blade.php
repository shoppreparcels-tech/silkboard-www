<div class="table-responsive">
    @if(!$packages->isEmpty())
    <table class="table table-bordered">
        <tr>
            <th></th>
            <th>Package ID</th>
            <th>From</th>
            <th>Date Received</th>
            <th>Cost</th>
            <th>Weight</th>
            <th>Status</th>
        </tr>
        @php ($i = 0)
        @foreach ($packages as $package)
            <tr>
                <td>{{++$i}}</td>
                <td>{{$package->order_id}}</td>
                <td>{{$package->seller}}</td>
                <td>{{$package->received}}</td>
                <td>{{number_format($package->price, 2)}}</td>
                <td>{{number_format($package->weight, 2)}} Kg</td>
                <td>
                    @php
                        switch($package->status){
                            case 'values':
                                echo 'Customer Action Required';
                            break;
                            case 'invoice':
                                echo 'Upload Invoice Required';
                            break;
                            case 'review':
                                echo 'In Shoppre Review';
                            break;
                            case 'ship':
                                echo 'Ready to Ship';
                            break;
                        }
                    @endphp
                </td>
            </tr>
        @endforeach
    </table>
    @else
        <div class="well">
            <p class="alert alert-danger text-center" role="alert">There are currently no package received by shoppre team. Please shop with your locker address.</p>
        </div>
    @endif
</div>