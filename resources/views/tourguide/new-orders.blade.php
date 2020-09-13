@extends('layout.tourGuide-layout')

@section('title')

    <h2>New order</h2>
    <p>Welcome <span class="bread-ntd">{{session("username")}}</span></p>

@endsection
@section('content')


    <div class="product-status mg-b-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">

                        <h4>New orders List</h4>
                        {{--                        <div class="add-product">--}}
                        {{--                            <a href="#">Add TourGuide</a>--}}
                        {{--                        </div>--}}
                        <table>
                            <tr>
                                <th></th>
                                <th>Mã dặt</th>
                                <th>Tg Bắt đầu</th>
                                <th>Tg kết thúc</th>
                                <th>Điểm đến</th>
                                <th>Sô lượng</th>
                                <th>Tg gửi yêu cầu</th>
                            </tr>
                            @foreach($listTransaction as $item)
                                <tr>

                                    <td>
                                        <form action="/tourGuide/new-orders/accept/{{$item->id}}" method="post">
                                            @csrf

                                            <input type="submit" class="btn btn-primary" value="Nhận">
                                        </form>
                                    </td>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->start}}</td>
                                    <td>{{$item->end}}</td>
                                    <td>{{\App\Area::find($item->transaction->province_id)->province}}</td>
                                    <td>{{$item->transaction->party_number}}</td>
                                    <td>{{$item->transaction->created_at}}</td>
                                    <td>
                                        <form action="" method="post">
                                            @csrf
                                            <a>
                                                <button data-toggle="tooltip" title="More Info"
                                                        class="pd-setting-ed" type="submit"><i
                                                        class="fa fa-info-circle" aria-hidden="true"></i>
                                                </button>
                                            </a>
                                        </form>
                                        <form action="" method="post">
                                            @csrf
                                            <a>
                                                <button data-toggle="tooltip" title="contact"
                                                        class="pd-setting-ed" type="submit"><i
                                                        class="fa fa-trash-o" aria-hidden="true"></i>
                                                </button>
                                            </a>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach


                        </table>

                        {{--//more detail--}}
                        <div class="breadcome-area">
                            <div class="modal fade" id="detailModal" role="dialog">
                                <div class="container">
                                    <div class="modal-dialog modal-dialog-scrollable">

                                        <!-- Modal content-->

                                    </div>
                                </div>
                            </div>
                        </div>


                        {{--                        deactive comfirm--}}
                        <div class="breadcome-area">
                            <div class="modal fade" id="comfirmModal" role="dialog">
                                <div class="container">
                                    <div class="modal-dialog modal-dialog-scrollable">

                                        <!-- Modal content-->
                                        <div class="product-status-wrap" class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;
                                                </button>
                                                <h4 class="modal-title">TourGuide DeActive comfirm</h4>
                                            </div>
                                            <div class="product-status-wrap">

                                                <div class="modal-body">
                                                    <h2 class="text-warning">DeActive this tourGuide?</h2>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-danger"
                                                            data-dismiss="modal"
                                                            id="do-deactive">
                                                        DeActive
                                                    </button>
                                                    <button type="button" class="btn btn-close btn-primary"
                                                            data-dismiss="modal">
                                                        Close
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="custom-pagination">
                            {{--                            {{ $list->appends(['sort' => 'id'])->links() }}--}}
                            <ul class="pagination">
                                <li class="page-item">
                                    {{--                                    {{ $list->appends(['sort' => 'votes'])->links() }}--}}
                                </li>


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


