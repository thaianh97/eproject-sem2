@extends('layout.admin-layout')

@section('content')



@section('title')

    <h2>New TourGuides </h2>
    <p>Welcome <span class="bread-ntd">Admin</span></p>

@endsection
@section('content')




    <div class="breadcome-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">


                    <div class="product-status-wrap">
                        {{--                        <form action="/admin/tourGuides" method="get" id="product_form">--}}
                        {{--                            @csrf--}}
                        {{--                            <div class="form-body">--}}
                        {{--                                <div class="row">--}}
                        {{--                                    <div class="col-md-4">--}}
                        {{--                                        <label for="exampleFormControlSelect1"><h2 style="color:white; ">--}}
                        {{--                                                Area</h2></label>--}}
                        {{--                                        <select name="chosen_area_id" class="form-control" id="chosen_area_id">--}}
                        {{--                                            <option value="0">All</option>--}}
                        {{--                                            @foreach($areas as $area)--}}
                        {{--                                                <option--}}
                        {{--                                                    value="{{$area->id}}" {{$area->id == $chosen_area ? 'selected':''}}>{{$area->province}}</option>--}}
                        {{--                                        @endforeach--}}

                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                                <div class="row">--}}
                        {{--                                    <div class="col-md-4">--}}
                        {{--                                        <a href=""><i class="fa fa-search"></i></a>--}}


                        {{--                                        <input value="" type="text" name="keyword" class="form-control"--}}
                        {{--                                               placeholder="Search by keyword">--}}


                        {{--                                    </div>--}}
                        {{--                                    <div class="col-md-4">--}}
                        {{--                                        --}}{{--                                            <div class="form-group">--}}
                        {{--                                        --}}{{--                                                <div class="bread-ntd"><label for="exampleFormControlSelect1">Search by--}}
                        {{--                                        --}}{{--                                                        time</label></div>--}}
                        {{--                                        --}}{{--                                                <input type="text" name="dates" class="form-control">--}}
                        {{--                                        --}}{{--                                                <input type="hidden" name="start">--}}
                        {{--                                        --}}{{--                                                <input type="hidden" name="end">--}}
                        {{--                                        --}}{{--                                            </div>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                            <div>--}}
                        {{--                                <input class="btn btn-large btn-success" type="submit" value="Lọc">--}}
                        {{--                            </div>--}}
                        {{--                        </form>--}}
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

                        <h4>TourGuide List</h4>
                        <div class="add-product">
                            <a href="#">Add TourGuide</a>
                        </div>
                        <table>
                            <tr>

{{--                                <th>--}}
{{--                                    <button class="btn btn-primary">Duyệt</button>--}}

{{--                                </th>--}}
                                <td colspan="2"></td>
                                <th>ID</th>
                                <th>Full_name</th>
                                <th>Year_of_birth</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Avatar</th>
                                <th>Card</th>
                                <th>Created_at</th>
                                <th>Update_at</th>
                                <th>Status</th>
                            </tr>
                            @foreach($list as $item)
                                <tr>

                                    <td colspan="2">
                                        <form action="/admin/accept/{{$item->id}}" method="post">
                                            @csrf

                                            <input type="submit" class="btn btn-primary" value="Duyệt">
                                        </form>
                                    </td>


                                    <td>{{$item->id}}</td>

                                    <td>{{$item->full_name}}</td>
                                    <td>{{$item->year_of_birth}}</td>
                                    <td>{{$item->phone}}</td>
                                    <td>{{$item->email}}</td>

                                    <td>
                                        <img src="{{$item->small_photo}}">
                                    </td>

                                    @if($item->card == 1)
                                        <td>
                                            Có
                                        </td>
                                    @elseif($item->card == 0)
                                        <td>
                                            Không
                                        </td>
                                    @endif
                                    <td>{{$item->created_at}}</td>
                                    <td>{{$item->updated_at}}</td>

                                    <td>


                                        {{$item->status == 1 ? 'Đã duyệt' : 'Chưa duyệt' }}

                                    </td>
                                        <td>
                                            <form action="/admin/new-tourGuide/{{$item->id}}" method="post">
                                                @csrf
                                                <a>
                                                    <button data-toggle="tooltip" title="More Info"
                                                            class="pd-setting-ed" type="submit"><i
                                                            class="fa fa-info-circle" aria-hidden="true"></i>
                                                    </button>
                                                </a>
                                            </form>
                                            <form action="/admin/new-tourGuide-contact/{{$item->id}}" method="post">
                                                @csrf
                                                <a>
                                                    <button data-toggle="tooltip" title="contact"
                                                            class="pd-setting-ed" type="submit"><i
                                                            class="fa fa-envelope" aria-hidden="true"></i>
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
        $('#select-all').click(function (event) {
            if (this.checked) {
                // Iterate each checkbox
                $(':checkbox').each(function () {
                    this.checked = true;
                });
            } else {
                $(':checkbox').each(function () {
                    this.checked = false;
                });
            }
        });
    </script>
@endsection


