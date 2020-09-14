@extends("layout.tourGuide-layout")

@section("head")
    =
@endsection



@section('title')

    <h2>Tour detail status</h2>
    <p>Welcome <span class="bread-ntd">{{session("username")}}</span></p>

@endsection



@section("content")
    <div class="product-status mg-b-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">
                        @if($status != 2)
                            <h4>Thông tin khách hàng</h4>

                        <table>
                            <tr>
                                <th>ID</th>
                                <th>Full_name</th>

                                <th>Phone</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Created_at</th>
                                <th>Update_at</th>
                            </tr>

                            <tr>
                                <td>{{$customer->id}}</td>
                                <td>{{$customer->full_name}}</td>
                                <td>{{$customer->phone}}</td>
                                <td>{{$customer->email}}></td>
                                <td>{{$customer->address}}</td>
                                <td>{{$customer->created_at}}</td>
                                <td>{{$customer->updated_at}}</td>

                            </tr>

                        </table>
                        @endif

                    </div>

                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">
                        <h4>Thông tin chuyến đi</h4>
                        <table>
                            <tr>
                                <th>ID</th>
                                <th>Cus_ID</th>
                                <th>Province_id</th>
                                <th>Party_number</th>
                                <th>Start</th>
                                <th>End</th>
                                <th>Total_cost</th>
                                <th>Created_at</th>
                                <th>Update_at</th>
                                <th>Status</th>
                            </tr>

                            <tr>
                                <td>{{$transaction->id}}</td>
                                <td>{{$transaction->customer_id}}</td>
                                    <td>{{\App\Area::find($transaction->province_id)->province}}</td>
                                <td>{{$transaction->party_number}}</td>
                                <td>{{$transaction->start}}</td>
                                <td>{{$transaction->end}}</td>
                                <td>{{$transaction->total_cost}}</td>
                                <td>{{$transaction->created_at}}</td>
                                <td>{{$transaction->updated_at}}</td>
                                @if($transaction->status == 0)
                                <td>Đang thực hiện</td>
                            @elseif($transaction->status == 1)
                                    <td>Hoàn thành</td>

                            @endif

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection



@section("script")
    {{--    <script src="{{asset("js/header.js")}}"></script>--}}

@endsection

