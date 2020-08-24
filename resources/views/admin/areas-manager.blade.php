@extends('layout.admin-layout')
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
                                                                             aria-hidden="true"></i> Bắc</a>
                                </li>
                                <li><a href="#reviews"><i class="icon nalika-picture" aria-hidden="true"></i>
                                        Trung</a></li>
                                <li><a href="#INFORMATION"><i class="icon nalika-chat" aria-hidden="true"></i>
                                        Nam</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="product-status mg-b-30">
                                                    <div class="container-fluid">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="product-status-wrap">
                                                                    <h4>Areas List</h4>
                                                                    <div class="add-product">
                                                                        <a href="/admin/add-product">Add Product</a>
                                                                    </div>
                                                                    <table>
                                                                        <tr>
                                                                            <th>

                                                                                <label>Check all: <input type="checkbox"
                                                                                                         type="checkbox"
                                                                                                         name="select-all-bac"
                                                                                                         id="select-all-bac"></label>

                                                                            </th>
                                                                            <th>ID</th>
                                                                            <th>Province</th>
                                                                            <th>Region</th>
                                                                            <th>Status</th>
                                                                            <th>Created_at</th>
                                                                            <th>Update_at</th>
                                                                        </tr>
                                                                        @foreach($listBac as $item)
                                                                            <tr>
                                                                                <td class="checkbox-toggle">
                                                                                    <input type="checkbox"
                                                                                           id="{{$item->id}}">
                                                                                </td>
                                                                                <td>{{$item->id}}</td>
                                                                                <td>{{$item->province}}</td>
                                                                                <td>{{$item->region}}</td>
                                                                                <td>1</td>
                                                                                <td>{{$item->created_at}}</td>
                                                                                <td>{{$item->updated_at}}</td>
                                                                                <td>
                                                                                    <a href="/admin/edit-product/{{$item->id}}">
                                                                                        <button data-toggle="tooltip"
                                                                                                title="Edit"
                                                                                                class="pd-setting-ed"><i
                                                                                                class="fa fa-pencil-square-o"
                                                                                                aria-hidden="true"></i>
                                                                                        </button>
                                                                                    </a>
                                                                                    <a href="">
                                                                                        <button data-toggle="tooltip"
                                                                                                title="Trash"
                                                                                                class="pd-setting-ed"><i
                                                                                                class="fa fa-trash-o"
                                                                                                aria-hidden="true"></i>
                                                                                        </button>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach
                                                                    </table>
                                                                    <div class="custom-pagination">
                                                                        <ul class="pagination">
                                                                            <li class="page-item"><a class="page-link"
                                                                                                     href="#">Previous</a>
                                                                            </li>
                                                                            <li class="page-item"><a class="page-link"
                                                                                                     href="#">1</a></li>
                                                                            <li class="page-item"><a class="page-link"
                                                                                                     href="#">2</a></li>
                                                                            <li class="page-item"><a class="page-link"
                                                                                                     href="#">3</a></li>
                                                                            <li class="page-item"><a class="page-link"
                                                                                                     href="#">Next</a>
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
                                <div class="product-tab-list tab-pane fade" id="reviews">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="product-status mg-b-30">
                                                    <div class="container-fluid">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="product-status-wrap">
                                                                    <h4>Areas List</h4>
                                                                    <div class="add-product">
                                                                        <a href="/admin/add-product">Add Product</a>
                                                                    </div>
                                                                    <table>
                                                                        <tr>
                                                                            <th>

                                                                                <label>Check all: <input type="checkbox"
                                                                                                         type="checkbox"
                                                                                                         name="select-all-trung"
                                                                                                         id="select-all-trung"></label>

                                                                            </th>
                                                                            <th>ID</th>
                                                                            <th>Province</th>
                                                                            <th>Region</th>
                                                                            <th>Status</th>
                                                                            <th>Created_at</th>
                                                                            <th>Update_at</th>
                                                                        </tr>
                                                                        @foreach($listTrung as $item)
                                                                            <tr>
                                                                                <td class="checkbox-toggle">
                                                                                    <input type="checkbox"
                                                                                           id="{{$item->id}}">
                                                                                </td>
                                                                                <td>{{$item->id}}</td>
                                                                                <td>{{$item->province}}</td>
                                                                                <td>{{$item->region}}</td>
                                                                                <td>1</td>
                                                                                <td>{{$item->created_at}}</td>
                                                                                <td>{{$item->updated_at}}</td>
                                                                                <td>
                                                                                    <a href="/admin/edit-product/{{$item->id}}">
                                                                                        <button data-toggle="tooltip"
                                                                                                title="Edit"
                                                                                                class="pd-setting-ed"><i
                                                                                                class="fa fa-pencil-square-o"
                                                                                                aria-hidden="true"></i>
                                                                                        </button>
                                                                                    </a>
                                                                                    <a href="">
                                                                                        <button data-toggle="tooltip"
                                                                                                title="Trash"
                                                                                                class="pd-setting-ed"><i
                                                                                                class="fa fa-trash-o"
                                                                                                aria-hidden="true"></i>
                                                                                        </button>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach
                                                                    </table>
                                                                    <div class="custom-pagination">
                                                                        <ul class="pagination">
                                                                            <li class="page-item"><a class="page-link"
                                                                                                     href="#">Previous</a>
                                                                            </li>
                                                                            <li class="page-item"><a class="page-link"
                                                                                                     href="#">1</a></li>
                                                                            <li class="page-item"><a class="page-link"
                                                                                                     href="#">2</a></li>
                                                                            <li class="page-item"><a class="page-link"
                                                                                                     href="#">3</a></li>
                                                                            <li class="page-item"><a class="page-link"
                                                                                                     href="#">Next</a>
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
                                <div class="product-tab-list tab-pane fade" id="INFORMATION">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="product-status mg-b-30">
                                                    <div class="container-fluid">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="product-status-wrap">
                                                                    <h4>Areas List</h4>
                                                                    <div class="add-product">
                                                                        <a href="/admin/add-product">Add Product</a>
                                                                    </div>
                                                                    <table>
                                                                        <tr>
                                                                            <th>

                                                                                <label>Check all: <input type="checkbox"
                                                                                                         type="checkbox"
                                                                                                         name="select-all"
                                                                                                         id="select-all-nam"></label>

                                                                            </th>
                                                                            <th>ID</th>
                                                                            <th>Province</th>
                                                                            <th>Region</th>
                                                                            <th>Status</th>
                                                                            <th>Created_at</th>
                                                                            <th>Update_at</th>
                                                                        </tr>
                                                                        @foreach($listNam as $item)
                                                                            <tr>
                                                                                <td class="checkbox-toggle">
                                                                                    <input type="checkbox"
                                                                                           id="{{$item->id}}">
                                                                                </td>
                                                                                <td>{{$item->id}}</td>
                                                                                <td>{{$item->province}}</td>
                                                                                <td>{{$item->region}}</td>
                                                                                <td>1</td>
                                                                                <td>{{$item->created_at}}</td>
                                                                                <td>{{$item->updated_at}}</td>
                                                                                <td>
                                                                                    <a href="/admin/edit-product/{{$item->id}}">
                                                                                        <button data-toggle="tooltip"
                                                                                                title="Edit"
                                                                                                class="pd-setting-ed"><i
                                                                                                class="fa fa-pencil-square-o"
                                                                                                aria-hidden="true"></i>
                                                                                        </button>
                                                                                    </a>
                                                                                    <a href="">
                                                                                        <button data-toggle="tooltip"
                                                                                                title="Trash"
                                                                                                class="pd-setting-ed"><i
                                                                                                class="fa fa-trash-o"
                                                                                                aria-hidden="true"></i>
                                                                                        </button>
                                                                                    </a>
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach
                                                                    </table>
                                                                    <div class="custom-pagination">
                                                                        <ul class="pagination">
                                                                            <li class="page-item"><a class="page-link"
                                                                                                     href="#">Previous</a>
                                                                            </li>
                                                                            <li class="page-item"><a class="page-link"
                                                                                                     href="#">1</a></li>
                                                                            <li class="page-item"><a class="page-link"
                                                                                                     href="#">2</a></li>
                                                                            <li class="page-item"><a class="page-link"
                                                                                                     href="#">3</a></li>
                                                                            <li class="page-item"><a class="page-link"
                                                                                                     href="#">Next</a>
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
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script>
        $('#select-all-bac').click(function (event) {
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
        $('#select-all-trung').click(function (event) {
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
        $('#select-all-nam').click(function (event) {
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

