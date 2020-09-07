@extends('layout.tourGuide-layout')

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
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <form action="#" method="post">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">

                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-user"
                                                                                           aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control"
                                                               placeholder="Tên đầy đủ" name="full_name" >
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-edit"
                                                                                           aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control"
                                                               placeholder="Product Title" >
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-usd"
                                                                                           aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control"
                                                               placeholder="Regular Price" name="price">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-new-file"
                                                                                           aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="phone" name="phone">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-favorites"
                                                                                           aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Quantity">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-like"
                                                                                           aria-hidden="true"></i>Status</span>
                                                        <select name="status"
                                                                class="form-control pro-edt-select form-control-primary" >
                                                            <option value="1">Available</option>
                                                            <option value="0">noneAvailable</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-user"
                                                                                           aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Ages" name="year_of_birth">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i
                                                                class="icon nalika-favorites-button"
                                                                aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control"
                                                               placeholder=" Description" name="description">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-usd"
                                                                                           aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control"
                                                               placeholder="Sale Price">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-like"
                                                                                           aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Email" name="email">
                                                    </div>

                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-like"
                                                                                           aria-hidden="true"></i></span>
                                                        <span class="input-group-addon">MC_gala_dinner :</span>
                                                        <select name="mc_gala_dinner"
                                                                class="form-control pro-edt-select form-control-primary">
                                                            <option value="1">yes</option>
                                                            <option value="0">no</option>
                                                        </select>
                                                    </div>

                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-like"
                                                                                           aria-hidden="true"></i></span>
                                                        <span class="input-group-addon">Team_building :</span>
                                                        <select name="team_building"
                                                                class="form-control pro-edt-select form-control-primary">
                                                            <option value="1">Yes</option>
                                                            <option value="0">No</option>
                                                        </select>
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
                                                    <button type="button"
                                                            class="btn btn-ctl-bt waves-effect waves-light">Discard
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
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="pro-edt-img">
                                                            <img src="https://portal.staralliance.com/cms/aux-pictures/prototype-images/avatar-default.png/image_view_fullscreen?X=Y" />
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
        </div>
    </div>
@endsection
