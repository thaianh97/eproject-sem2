@extends('layout.tourGuide-layout')


@section('styles')

    h1{
    color : white;
    }
    button{
    padding : 10px;
    }

@endsection
@section('title')

    <h2>Edit your info</h2>
    <p>Welcome <span class="bread-ntd">tourGuide</span></p>

@endsection
@section('content')
    <div class="single-product-tab-area mg-b-30">
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="review-tab-pro-inner">
                            <ul id="myTab3" class="tab-review-design">
                                <li class="active"><a href="#description"><i class="icon nalika-edit"
                                                                             aria-hidden="true"></i> Infomation Edit</a>
                                </li>
                                <li><a href="#reviews"><i class="icon nalika-picture" aria-hidden="true"></i>
                                        AVATAR</a></li>
                                {{--                                <li><a href="#INFORMATION"><i class="icon nalika-picture" aria-hidden="true"></i>--}}
                                {{--                                        Trạng thái nhận tour</a></li>--}}
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <form action="/tourGuide/edit-info" method="post" id="change-avatar">
                                        @csrf
                                        @method('put')
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon">Họ và tên: </span>
                                                        <input type="text" class="form-control"
                                                               name="full_name" placeholder="Tên đầy đủ" value="{{$tourGuide->full_name}}">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon">Giới tính: </span>
                                                        <input type="text" class="form-control"
                                                               name="gender" placeholder="Giới tính" value="{{$tourGuide->gender}}">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon" ">Số điện thoại:</span>
                                                        <input type="text" class="form-control"
                                                               name="phone" placeholder="Số điện thoại" value="{{$tourGuide->phone}}">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon">Năm sinh: </span>
                                                        <input type="text" class="form-control"
                                                               name="year_of_birth" placeholder="Năm sinh" value="{{$tourGuide->year_of_birth}}" >
                                                    </div>

                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon">Email: </span>
                                                        <input type="text" class="form-control"
                                                               placeholder="Email"  name="email" value="{{$tourGuide->email}}" >
                                                    </div>
                                                    {{--                                                    <div class="input-group mg-b-pro-edt">--}}
                                                    {{--                                                        <span class="input-group-addon"><i class="icon nalika-like"--}}
                                                    {{--                                                                                           aria-hidden="true"></i>Status</span>--}}
                                                    {{--                                                        <select name="status"--}}
                                                    {{--                                                                class="form-control pro-edt-select form-control-primary" >--}}
                                                    {{--                                                            <option value="1">Available</option>--}}
                                                    {{--                                                            <option value="0">noneAvailable</option>--}}
                                                    {{--                                                        </select>--}}
                                                    {{--                                                    </div>--}}

                                                    <div class="pro-edt-img">

                                                        <img src="{{$tourGuide->small_photo}}"alt ="" />

                                                    </div>
                                                    <div>
                                                        <button type="button" id="upload_widget"
                                                                class="btn btn-secondary">
                                                            Click to change avatar
                                                        </button>


                                                    </div>
                                                    <div class="col-md-6 col-sm-6 mt-2 thumbnails">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">

                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-info"
                                                                                           aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control"
                                                               placeholder="Mã HDV" value="{{$tourGuide->id}}">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-price-tag"
                                                                                           aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control"
                                                               name="price" placeholder="Giá" value="{{$tourGuide->price}}">
                                                    </div>
                                                    {{--                                                    <div class="input-group mg-b-pro-edt">--}}
                                                    {{--                                                        <span class="input-group-addon"><i class="fa fa-usd"--}}
                                                    {{--                                                                                           aria-hidden="true"></i></span>--}}
                                                    {{--                                                        <input type="text" class="form-control"--}}
                                                    {{--                                                               placeholder="Sale Price">--}}
                                                    {{--                                                    </div>--}}
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-credit-cards"
                                                                                           aria-hidden="true"></i></span>
                                                        <select name="card"
                                                                class="form-control pro-edt-select form-control-primary">
                                                            <option value="1" {{$tourGuide->card == 1 ?? 'selected'}}>Có thẻ</option>
                                                            <option value="0" {{$tourGuide->card == 0 ?? 'selected'}}>Không thẻ</option>
                                                        </select>
                                                    </div>

                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-music"
                                                                                           aria-hidden="true"></i></span>
                                                        <select name="mc_gala_dinner"
                                                                class="form-control pro-edt-select form-control-primary">
                                                            <option value="1" {{$tourGuide->mc_gala_dinner == 1 ?? 'selected'}}>Có làm mc</option>
                                                            <option value="0" {{$tourGuide->mc_gala_dinner == 0 ?? 'selected'}}>không làm MC</option>
                                                        </select>
                                                    </div>

                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-flag"
                                                                                           aria-hidden="true"></i></span>
                                                        <select name="team_building"
                                                                class="form-control pro-edt-select form-control-primary">
                                                            <option value="1" {{$tourGuide->team_building == 1 ?? 'selected'}}>Có làm team</option>
                                                            <option value="0" {{$tourGuide->team_building == 0 ?? 'selected'}}>không làm team</option>
                                                        </select>

                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <textarea class="form-control" rows="16" cols="74"
                                                                  name="description" placeholder="Description" >{{$tourGuide->description}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="text-center custom-pro-edt-ds">
                                                    <button type="submit"
                                                            class="btn btn-ctl-bt waves-effect waves-light m-r-10">Save
                                                    </button>
                                                    <button type="reset"
                                                            class="btn btn-ctl-bt waves-effect waves-light">Reset
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="reviews">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <label><h1>Trạng thái </h1></label>
                                                    <div class="row">


                                                        <div class="col-lg-4">

                                                            {{--                                                        <button class=" btn btn-custon-rounded btn-primary btn-lg"--}}
                                                            {{--                                                                value="">Đang nhận tour--}}
                                                            {{--                                                        </button>--}}

                                                            <button class=" btn btn-custon-rounded btn-danger btn-lg"
                                                                    value="">Không nhận tour
                                                            </button>
                                                            <input type="submit" class="btn btn-primary submit-btn"
                                                                   value="Thay đổi trạng thái">
                                                        </div>


                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <label><h1>Khu vực </h1></label>
                                                    <div class="row">

                                                        <div class="col-lg-6 row-lg-12">


                                                            <button type="button"
                                                                    class="btn btn-custon-four btn-success">
                                                                <i class="fa fa-check adminpro-checked-pro"
                                                                   aria-hidden="true"></i> Hà nôi
                                                            </button>
                                                            <button type="button"
                                                                    class="btn btn-custon-four btn-success">
                                                                <i class="fa fa-check adminpro-checked-pro"
                                                                   aria-hidden="true"></i> Hà nôi
                                                            </button>

                                                            <div>
                                                                <input type="submit"
                                                                       class="btn-button-primary-ct submit-btn"
                                                                       value="Thêm khu vực">
                                                            </div>

                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                {{--                                <div class="product-tab-list tab-pane fade" id="INFORMATION">--}}
                                {{--                                    <div class="row">--}}
                                {{--                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
                                {{--                                            <div class="review-content-section">--}}
                                {{--                                                <div class="product-status mg-b-30">--}}
                                {{--                                                    <div class="row">--}}
                                {{--                                                        <div class="col-lg-4 row-lg-3">--}}
                                {{--                                                            <label><h1>Trạng thái hoạt động hiện tại  </h1></label>--}}
                                {{--                                                            <button class=" btn btn-custon-rounded btn-primary btn-lg"--}}
                                {{--                                                                    value="">Đang nhận tour--}}
                                {{--                                                            </button>--}}
                                {{--                                                            <button class=" btn btn-custon-rounded btn-danger btn-lg"--}}
                                {{--                                                                    value="">Không nhận tour--}}
                                {{--                                                            </button>--}}
                                {{--                                                        </div>--}}

                                {{--                                                        <div class="col-lg-4 row-lg-3">--}}
                                {{--                                                            <label><h1>các khu vực đang hoạt động</h1></label>--}}
                                {{--                                                            <button type="button"--}}
                                {{--                                                                    class="btn btn-custon-four btn-success">--}}
                                {{--                                                                <i class="fa fa-check adminpro-checked-pro"--}}
                                {{--                                                                   aria-hidden="true"></i> Hà nôi--}}
                                {{--                                                            </button>--}}
                                {{--                                                            <button type="button"--}}
                                {{--                                                                    class="btn btn-custon-four btn-success">--}}
                                {{--                                                                <i class="fa fa-check adminpro-checked-pro"--}}
                                {{--                                                                   aria-hidden="true"></i> Hà nôi--}}
                                {{--                                                            </button>--}}
                                {{--                                                            <button type="button"--}}
                                {{--                                                                    class="btn btn-custon-four btn-success">--}}
                                {{--                                                                <i class="fa fa-check adminpro-checked-pro"--}}
                                {{--                                                                   aria-hidden="true"></i> Hà nôi--}}
                                {{--                                                            </button>--}}
                                {{--                                                            <button type="button"--}}
                                {{--                                                                    class="btn btn-custon-four btn-success">--}}
                                {{--                                                                <i class="fa fa-check adminpro-checked-pro"--}}
                                {{--                                                                   aria-hidden="true"></i> Hà nôi--}}
                                {{--                                                            </button>--}}
                                {{--                                                            <button type="button"--}}
                                {{--                                                                    class="btn btn-custon-four btn-success">--}}
                                {{--                                                                <i class="fa fa-check adminpro-checked-pro"--}}
                                {{--                                                                   aria-hidden="true"></i> Hà nôi--}}
                                {{--                                                            </button>--}}
                                {{--                                                            <button type="button"--}}
                                {{--                                                                    class="btn btn-custon-four btn-success">--}}
                                {{--                                                                <i class="fa fa-check adminpro-checked-pro"--}}
                                {{--                                                                   aria-hidden="true"></i> Hà nôi--}}
                                {{--                                                            </button>--}}
                                {{--                                                            <button type="button"--}}
                                {{--                                                                    class="btn btn-custon-four btn-success">--}}
                                {{--                                                                <i class="fa fa-check adminpro-checked-pro"--}}
                                {{--                                                                   aria-hidden="true"></i> Hà nôi--}}
                                {{--                                                            </button>--}}
                                {{--                                                            <button type="button"--}}
                                {{--                                                                    class="btn btn-custon-four btn-success">--}}
                                {{--                                                                <i class="fa fa-check adminpro-checked-pro"--}}
                                {{--                                                                   aria-hidden="true"></i> Hà nôi--}}
                                {{--                                                            </button>--}}

                                {{--                                                        </div>--}}

                                {{--                                                    </div>--}}
                                {{--                                                </div>--}}

                                {{--                                            </div>--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section("script")
    <script src="{{asset("js/header.js")}}"></script>
    <!-- cloudinary  -->
    <script src="https://widget.cloudinary.com/v2.0/global/all.js" type="text/javascript"></script>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {
            var myWidget = cloudinary.createUploadWidget({
                    cloudName: 'dnby4zyda',
                    uploadPreset: 'zwikurdj',
                    multiple: true,
                    form: '#change-avatar',
                    fieldName: 'thumbnails[]',
                    thumbnails: '.thumbnails'
                }, (error, result) => {
                    if (!error && result && result.event === "success") {
                        var inputValues = document.querySelectorAll('input[name="thumbnails[]"]');
                        for (let i = 0; i < inputValues.length; i++) {
                            inputValues[i].value = inputValues[i].getAttribute('data-cloudinary-public-id')
                        }
                    }
                }
            )
            document.getElementById("upload_widget").addEventListener("click", function () {
                myWidget.open();
            }, false);


            $('body').on('click', '.cloudinary-delete', function () {
                var splittedImg = $(this).parent().find('img').attr('src').split('/');
                var imgName = splittedImg[splittedImg.length - 1];
                var splittedImgName = imgName.split('.');
                var imgCode = splittedImgName[0];
                $('input[data-cloudinary-public-id="' + imgCode + '"]').remove();
            });
        })

    </script>
@endsection
