@extends('layout.admin-layout')
@section('content')

    <div class="breadcome-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div >
                        <div >
                            <form action="/admin/tourGuides" method="get" id="product_form">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group mb-4">
{{--                                                <label for="exampleFormControlSelect1">Product</label>--}}
{{--                                                <select name="product" class="form-control" id="categorySelect"--}}
{{--                                                        onchange='this.form.submit()'>--}}
{{--                                                    <option href="//admin/products-list/cameras" value="cameras"--}}
{{--                                                            name="Cameras">--}}
{{--                                                        Cameras--}}
{{--                                                    </option>--}}
{{--                                                    <option href="/admin/products-list/accessories" value="accessories"--}}
{{--                                                            name="Accessories">--}}
{{--                                                        Accessories--}}
{{--                                                    </option>--}}
{{--                                                    @foreach($categories as $cate)--}}
{{--                                                        <option--}}
{{--                                                            value="{{$cate->id}}" {{$cate->id == $category_id ? 'selected':''}}>{{$cate->name}}</option>--}}
{{--                                                    @endforeach--}}

{{--                                                                                                </select>--}}
                                                <label for="exampleFormControlSelect1"><h2 style="color:white; ">
                                                        Area</h2></label>
                                                <select name="chosen_area_id"  class="form-control" id="chosen_area_id" >
                                                    <option value="0">All</option>
                                                    @foreach($areas as $area)
                                                        <option
                                                            value="{{$area->id}}" {{$area->id == $chosen_area ? 'selected':''}}>{{$area->province}}</option>
                                                    @endforeach


{{--                                                </select>--}}
{{--                                                <label for="exampleFormControlSelect1">Category</label>--}}
{{--                                                <select name="category_id" class="form-control" id="categorySelect">--}}
{{--                                                    <option href="/admin" value="1">Cameras--}}
{{--                                                    </option>--}}
{{--                                                    <option href="/admin" value="2">--}}
{{--                                                        Accessories--}}
{{--                                                    </option>--}}
{{--                                                    --}}{{--                                            @foreach($categories as $cate)--}}
{{--                                                    --}}{{--                                                <option value="{{$cate->id}}" {{$cate->id == $category_id ? 'selected':''}}>{{$cate->name}}</option>--}}
{{--                                                    --}}{{--                                            @endforeach--}}

{{--                                                </select>--}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Search by keyword</label>
                                                <input value="" type="text" name="keyword" class="form-control"
                                                       placeholder="Search by keyword">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
{{--                                            <div class="form-group">--}}
{{--                                                <div class="bread-ntd"><label for="exampleFormControlSelect1">Search by--}}
{{--                                                        time</label></div>--}}
{{--                                                <input type="text" name="dates" class="form-control">--}}
{{--                                                <input type="hidden" name="start">--}}
{{--                                                <input type="hidden" name="end">--}}
{{--                                            </div>--}}
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <input  class="btn btn-large btn-success" type="submit" value="Lọc">
                                </div>
                            </form>
                        </div>
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
                        <h4>Products List</h4>
                        <div class="add-product">
                            <a href="/admin">Add Product</a>
                        </div>
                        <table data-check-all-container>
                            <tr>
{{--                                <th>--}}

{{--                                    <label>Check all: <input type="checkbox" data-check-all></label>--}}
{{--                                    <span data-check-all-count>0</span>--}}

{{--                                </th>--}}
                                <th>ID</th>
                                <th>ACCOUNT_ID</th>
                                <th>Full_name</th>
                                <th>Year_of_birth</th>
                                <th>Price</th>
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
{{--                                    <td class="checkbox-toggle">--}}
{{--                                        <span><input type="checkbox" id="{{$item->id}}"></span>--}}
{{--                                    </td>--}}
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->account_id}}</td>
                                    <td>{{$item->full_name}}</td>
                                    <td>{{$item->year_of_birth}}</td>
                                    <td>{{$item->price}} Vnd/giờ</td>
                                    <td>{{$item->phone}}</td>
                                    <td>{{$item->email}}</td>
                                    <td><img src="https://tinmoimedia.com/upload/camnhung/2020/08/17/131531-ngoc-trinh-lo-da-nhan-nheo-tm4.jpg"></td>
                                    <td>{{$item->card}}</td>
                                    <td>{{$item->created_at}}</td>
                                    <td>{{$item->updated_at}}</td>

                                    <td>{{$item->status}}</td>
                                    <td>
                                        <a href="">
                                            <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i
                                                    class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                        </a>
                                        <a href="">
                                            <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i
                                                    class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>

                        <div class="custom-pagination">
{{--                            {{ $list->appends(['sort' => 'id'])->links() }}--}}
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
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
        checkAll(document.querySelector('[data-check-all-container]'))
        {
        <
            style >
        .
            breadcome - area
            {
                color:white;
            }
        <
            /style>
        }
    </script>
@endsection


