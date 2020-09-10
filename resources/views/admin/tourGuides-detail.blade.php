@extends('layout.admin-layout')




@section('title')

    <h2>TourGuides manager</h2>
    <p>Welcome <span class="bread-ntd">Admin</span></p>

@endsection
@section('content')
    <div class="single-product-tab-area mg-t-0 mg-b-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-product-pr">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                <div id="myTabContent1" class="tab-content">
                                    <div class="product-tab-list tab-pane fade active in" id="single-tab1">
                                        <img src="{{$info->large_photo}}" alt=""/>
                                    </div>
                                    <div class="product-tab-list tab-pane fade" id="single-tab2">
                                        <img src="img/product/bg-2.jpg" alt=""/>
                                    </div>
                                    <div class="product-tab-list tab-pane fade" id="single-tab3">
                                        <img src="img/product/bg-3.jpg" alt=""/>
                                    </div>
                                    <div class="product-tab-list tab-pane fade" id="single-tab4">
                                        <img src="img/product/bg-1.jpg" alt=""/>
                                    </div>
                                    <div class="product-tab-list tab-pane fade" id="single-tab5">
                                        <img src="img/product/bg-2.jpg" alt=""/>
                                    </div>
                                </div>
                                <ul id="single-product-tab">
                                    <li class="active">
                                        <a href="#single-tab1"><img src="img/product/1.jpg" alt=""/></a>
                                    </li>
                                    <li>
                                        <a href="#single-tab2"><img src="img/product/2.jpg" alt=""/></a>
                                    </li>
                                    <li>
                                        <a href="#single-tab3"><img src="img/product/3.jpg" alt=""/></a>
                                    </li>
                                    <li>
                                        <a href="#single-tab4"><img src="img/product/1.jpg" alt=""/></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                <div class="single-product-details res-pro-tb">
                                    <h1>{{$info->full_name}}</h1>
                                    <h1> Mã hdv : {{$info->id}}</h1>
                                    <span class="single-pro-star">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</span>
                                    <div class="single-pro-price">
                                        <span class="single-regular">{{$info->price}} VND/ngay</span><span
                                            class="single-old"><del>$20.00</del></span>
                                    </div>
                                    <div class="single-pro-size">
                                        <h6>Giới tính</h6>
                                        @if($info->gender == 1 )
                                            <span>Nam</span>
                                        @elseif($info->gender == 2)
                                            <span>Nữ</span>
                                        @elseif($info->gender == 3)
                                            <span>Khác</span>
                                        @endif

                                    </div>
                                    <div class="single-pro-size">
                                        <h6>Các tỉnh thành</h6>

                                        @foreach($areas as $area)
                                            <div class="single-pro-button">
                                                <a> {{(\App\Area::find($area->area_id))->province}}</a>&nbsp
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="color-quality-pro">
                                        <div class="clear"></div>
                                        <div class="single-pro-button">

                                            <div class="pro-button">

                                                @if($info->status == 1 && $acc_status == 1)
                                                    <a class="btn-primary"> Đang hoạt động </a>
                                                @elseif($info->status == 0 && $acc_status == 1)
                                                    <a class="btn-warning">Không hoạt động </a>
                                                @elseif($info->status == 0 && $acc_status == 0)
                                                    <a class="btn-danger">Đã bị khóa</a>
                                                @endif
                                            </div>
                                            <div class="pro-viwer">
                                                <button data-toggle="modal"
                                                        data-target="#comfirmModal"
                                                        class="btn btn-custon-rounded-three btn-button-warning-ct">
                                                    @if($info->status == 1 && $acc_status == 1 )
                                                        Khóa hdv
                                                    @elseif($info->status == 0 && $acc_status == 1)
                                                        Khóa hdv
                                                    @elseif($info->status == 0 && $acc_status == 0)
                                                        Mở hdv
                                                    @endif
                                                </button>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="single-social-area">
                                            <h3>Contact</h3>
                                            <a href="#"><i class="fa fa-phone"></i></a>
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                        </div>
                                    </div>
                                    <div class="single-pro-cn">
                                        <h3>OVERVIEW</h3>
                                        <p>{{$info->description}}</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Single pro tab End-->

    <!-- Comfirm deactive-->
    <div class="breadcome-area">
        <div class="modal fade" id="comfirmModal" role="dialog">
            <div class="container">
                <div class="modal-dialog modal-dialog-scrollable">

                    <!-- Modal content-->
                    <div class="product-status-wrap" class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;
                            </button>
                            <h4 class="modal-title">Xác nhận
                                @if($info->status == 1 )
                                    Khóa HDV
                                @elseif($info->status == 0)
                                    Mở Hdv
                                @endif
                            </h4>
                        </div>
                        <div class="product-status-wrap">

                            <div class="modal-body">
                                <h2 class="text-warning">
                                    @if($info->status == 1 )
                                        Khóa HDV
                                    @elseif($info->status ==  0)
                                        Mở Hdv
                                    @endif
                                    {{$info->full_name}}</h2>
                            </div>
                            <div class="modal-footer">
                                <form action="/admin/deActive-tourGuides/{{$info->id}}" method="post">
                                    @csrf
                                    <button class="btn btn-close btn-primary  " type="submit">
                                        Yes
                                    </button>
                                    <button type="button" class="btn btn-close btn-primary"
                                            data-dismiss="modal">
                                        Close
                                    </button>
                                </form>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Single pro tab review Start-->
    <div class="single-pro-review-area mt-t-30 mg-b-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-tb-pr">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <ul id="myTab" class="tab-review-design">
                                    <li class="active"><a href="#description">description</a></li>
                                    <li><a href="#reviews"><span><i class="fa fa-star"></i><i
                                                    class="fa fa-star"></i></span> reviews (1) <span><i
                                                    class="fa fa-star"></i><i class="fa fa-star"></i></span></a></li>
                                    <li><a href="#INFORMATION">Transactions</a></li>
                                </ul>
                                <div id="myTabContent" class="tab-content">
                                    <div class="product-tab-list product-details-ect tab-pane fade active in"
                                         id="description">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="review-content-section">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                        enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                                        nisi ut aliquip
                                                        ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                                                        in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa
                                                        qui officia deserunt
                                                        mollit anim id est laborum. Sed ut perspiciatis unde omnis iste
                                                        natus error sit voluptatem accusantium doloremque laudantium,
                                                        totam rem aperiam, eaque ipsa quae ab illo inventore veritatis
                                                        et quasi architecto
                                                        beatae vitae dicta sunt explicabo.</p>
                                                    <p class="pro-b-0">Lorem ipsum dolor sit amet, consectetur
                                                        adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                        exercitation ullamco labo nisi ut aliquip ex
                                                        ea commodo consequat. Duis aute irure dolor in reprehenderit in
                                                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. ut
                                                        labore et dolore magna aliqua. Ut enim ad , quis nostrud
                                                        exercitation ullamco
                                                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                                        dolor in reprehenderit.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-tab-list tab-pane fade" id="reviews">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="review-content-section">
                                                        <div class="card-block">
                                                            <div class="text-muted f-w-400">
                                                                <p>No reviews yet.</p>
                                                            </div>
                                                            <div class="m-t-10">
                                                                <div class="txt-primary f-18 f-w-600">
                                                                    <p>Your Rating</p>
                                                                </div>
                                                                <div class="stars stars-example-css detail-stars">
                                                                    <div class="review-rating">
                                                                        <fieldset class="rating">
                                                                            <input type="radio" id="star5" name="rating"
                                                                                   value="5">
                                                                            <label class="full" for="star5"></label>
                                                                            <input type="radio" id="star4half"
                                                                                   name="rating" value="4 and a half">
                                                                            <label class="half" for="star4half"></label>
                                                                            <input type="radio" id="star4" name="rating"
                                                                                   value="4">
                                                                            <label class="full" for="star4"></label>
                                                                            <input type="radio" id="star3half"
                                                                                   name="rating" value="3 and a half">
                                                                            <label class="half" for="star3half"></label>
                                                                            <input type="radio" id="star3" name="rating"
                                                                                   value="3">
                                                                            <label class="full" for="star3"></label>
                                                                            <input type="radio" id="star2half"
                                                                                   name="rating" value="2 and a half">
                                                                            <label class="half" for="star2half"></label>
                                                                            <input type="radio" id="star2" name="rating"
                                                                                   value="2">
                                                                            <label class="full" for="star2"></label>
                                                                            <input type="radio" id="star1half"
                                                                                   name="rating" value="1 and a half">
                                                                            <label class="half" for="star1half"></label>
                                                                            <input type="radio" id="star1" name="rating"
                                                                                   value="1">
                                                                            <label class="full" for="star1"></label>
                                                                            <input type="radio" id="starhalf"
                                                                                   name="rating" value="half">
                                                                            <label class="half" for="starhalf"></label>
                                                                        </fieldset>
                                                                    </div>
                                                                    <div class="clear"></div>
                                                                </div>
                                                            </div>
                                                            <div class="input-group mg-b-15 mg-t-15">
                                                                <span class="input-group-addon"><i class="fa fa-user"
                                                                                                   aria-hidden="true"></i></span>
                                                                <input type="text" class="form-control"
                                                                       placeholder="User Name">
                                                            </div>
                                                            <div class="input-group mg-b-15">
                                                                <span class="input-group-addon"><i class="fa fa-user"
                                                                                                   aria-hidden="true"></i></span>
                                                                <input type="text" class="form-control"
                                                                       placeholder="Last Name">
                                                            </div>
                                                            <div class="input-group mg-b-15">
                                                                <span class="input-group-addon"><i
                                                                        class="fa fa-envelope-o" aria-hidden="true"></i></span>
                                                                <input type="text" class="form-control"
                                                                       placeholder="Email">
                                                            </div>
                                                            <div class="form-group review-pro-edt mg-b-0-pr">
                                                                <button type="submit"
                                                                        class="btn btn-primary waves-effect waves-light">
                                                                    Submit
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-tab-list tab-pane fade" id="INFORMATION">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="product-status-wrap">
                                                    <table>
                                                        <tr>

                                                            <th>Mã dặt</th>
                                                            <th>Mã Tranasction</th>
                                                            <th>Tg Bắt đầu</th>
                                                            <th>Tg kết thúc</th>
{{--                                                                                                                        <th>Điểm đến</th>--}}
{{--                                                                                                                        <th>Sô lượng</th>--}}
{{--                                                                                                                        <th>Tg gửi yêu cầu</th>--}}
                                                            <th>Giá</th>
                                                            <th>Trạng thái</th>
                                                        </tr>
                                                        @foreach($listTransactionDetails as $item)
                                                            <tr>
                                                                <td>{{$item->id}}</td>
                                                                <td>{{$item->transaction_id}}</td>
                                                                <td>{{$item->start}}</td>
                                                                <td>{{$item->end}}</td>
{{--                                                                <td>{{\App\Area::find($item->transaction->province_id)->province}}</td>--}}
{{--                                                                <td>{{$item->transaction->party_number}}</td>--}}
{{--                                                                <td>{{$item->transaction->created_at}}</td>--}}
                                                                <td>{{$item->cost}}</td>
                                                                <td>{{$item->status}}</td>
                                                                <td>
                                                                    <form action="" method="post">
                                                                        @csrf
                                                                        <a>
                                                                            <button data-toggle="tooltip"
                                                                                    title="More Info"
                                                                                    class="pd-setting-ed" type="submit">
                                                                                <i
                                                                                    class="fa fa-info-circle"
                                                                                    aria-hidden="true"></i>
                                                                            </button>
                                                                        </a>
                                                                    </form>
                                                                    <form action="" method="post">
                                                                        @csrf
                                                                        <a>
                                                                            <button data-toggle="tooltip"
                                                                                    title="contact"
                                                                                    class="pd-setting-ed" type="submit">
                                                                                <i
                                                                                    class="fa fa-trash-o"
                                                                                    aria-hidden="true"></i>
                                                                            </button>
                                                                        </a>
                                                                    </form>
                                                                </td>
                                                            </tr>
                                                        @endforeach


                                                    </table>
                                                </div>
                                                <div class="custom-pagination">
                                                    <ul class="pagination">
                                                        <li class="page-item">
                                                            {{ $listTransactionDetails->appends(['sort' => 'votes'])->links() }}
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>


        $('#comfirmModal').on('shown.bs.modal', function () {

        })

    </script>
@endsection
