@extends('layout')

@section('title', ' - Refer A Friend')

@section('content')

    <section class="dash_reffer">
        <div class="container">
            <h2>Invite Friends</h2>
            @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif
            <div class="content">
                <div class="reffer_form">
                    <form method="post" action="{{route('flash-sale.sendInvitation')}}">
                        {{csrf_field()}}
                        <h4>Select your friend's email addresses in the fields below (you can send multiple invitations
                            at
                            once)</h4>
                        <input type="checkbox" id="checkAll">Check All
                        <table border="1">
                            @foreach($contact as $contacts)
                                <tr>
                                    @if($contacts->email)
                                        <td>
                                            <input type="checkbox" name="email[]" value="{{$contacts->email}}"
                                                   id="{{$contacts->email}}">{{$contacts->email}}<br>
                                        </td>
                                        <td>
                                            {{$contacts->name}}
                                        </td>
                                    @endif
                                    @endforeach
                                </tr>
                        </table>
                        <br>
                        <br>
                        <div class="form-group">
                            <div class="col-sm-2">
                                <button type="submit" class="btn btn-shoppre ">send invitation</button>
                            </div>
                        </div>
                    </form>
                    <div class="clearfix"></div>
                    <div class="ajaxloader"></div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('js_script')
    <script>
        $(document).ready(function () {
            $("#checkAll").click(function () {
                $('input:checkbox').not(this).prop('checked', this.checked);
            });
        });
    </script>

@endsection
