@extends('layout.admin-layout')

@section('content')



@section('title')

    <h2>Transaction manager</h2>
    <p>Welcome <span class="bread-ntd">Admin</span></p>

@endsection
@section('content')




    <div class="breadcome-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">


                    <div class="product-status-wrap">
                        <form action="/admin/tourGuides" method="get" id="product_form">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="exampleFormControlSelect1"><h2 style="color:white; ">
                                                Area</h2></label>
                                        <select name="chosen_area_id" class="form-control" id="chosen_area_id">
                                            <option value="0">All</option>
                                            @foreach($areas as $area)
                                                <option
                                                    value="{{$area->id}}" {{$area->id == $chosen_area ? 'selected':''}}>{{$area->province}}</option>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                            <div>
                                <input class="btn btn-large btn-success" type="submit" value="Lọc">
                            </div>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>


    <div class="product-status mg-b-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">
{{--                            <div class="add-product">--}}
{{--                                <a href="/admin">Add Product</a>--}}
{{--                            </div>--}}
                        <h4>Transactions List</h4>
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
                            @foreach($list as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->customer_id}}</td>
                                    <td>{{$item->province_id}}</td>
                                    <td>{{$item->party_number}}</td>
                                    <td>{{$item->start}}</td>
                                    <td>{{$item->end}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->created_at}}</td>
                                    <td>{{$item->updated_at}}</td>
                                    <td>
                                       {{$item->status == 1 ? 'Hoàn thành' : 'Đang thực hiện' }}

                                    </td>


                                    <td>

                                        <form action="/admin/transactions/{{$item->id}}" method="post">
                                            @csrf
                                            <a>
                                                <button type="submit" class="btn btn-info " id="{{$item->id}}">
                                                    <i class="fa fa-info" aria-hidden="true"></i></button>
                                            </a>
                                        </form>

                                        <a>
                                            <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i
                                                    class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                            </button>
                                        </a>


                                    </td>
                                </tr>

                            @endforeach
                        </table>


                        <div class="custom-pagination">
                            {{--                            {{ $list->appends(['sort' => 'id'])->links() }}--}}
                            <ul class="pagination">
                                <li class="page-item">
                                    {{ $list->appends(['sort' => 'votes'])->links() }}
                                </li>


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>







@endsection

@section('script')
    <script>


        $('#detailModal').on('shown.bs.modal', 'showDetail')

        function showDetail() {
            var title = document.getElementById('title-name');

            title.textContent = "hay"
        }

        $('#comfirmModal').on('shown.bs.modal', function () {

        })

    </script>
@endsection


