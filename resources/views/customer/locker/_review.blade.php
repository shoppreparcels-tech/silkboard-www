<div class="table-responsive">
    @if(!$reviews->isEmpty())
    <table class="table table-bordered">
        <tr>
            <th></th>
            <th>Package ID</th>
            <th>From</th>
            <th>Date Received</th>
            <th>Item Values</th>
            <th>Weight</th>
        </tr>
        @php ($i = 0)
        @foreach ($reviews as $review)
            <tr>
                <td>{{++$i}}</td>
                <td>{{$review->order_id}}</td>
                <td>{{$review->seller}}</td>
                <td>{{$review->received}}</td>
                <td>{{number_format($review->price, 2)}}</td>
                <td>{{number_format($review->weight, 2)}} Kg</td>
            </tr>
        @endforeach
    </table>
    @else
        <div class="well">
            <p class="alert alert-danger text-center" role="alert">You currently have no packages under review by Shoppre.</p>
        </div>
    @endif

</div>