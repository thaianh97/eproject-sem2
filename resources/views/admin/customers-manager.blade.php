@extends('layout.admin-layout')

@section('title')

    <h2>Customer manager</h2>
    <p>Welcome <span class="bread-ntd">Admin</span></p>

@endsection
@section('content')

    <div class="breadcome-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="/admin/products-list" method="get" id="product_form">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group mb-4">
                                                {{--                                                <label for="exampleFormControlSelect1">Product</label>--}}
                                                {{--                                                <select name="product" class="form-control" id="categorySelect" onchange='this.form.submit()'>--}}
                                                {{--                                                    <option href="//admin/products-list/cameras" value="cameras" name = "Cameras">--}}
                                                {{--                                                        Cameras--}}
                                                {{--                                                    </option>--}}
                                                {{--                                                    <option href="/admin/products-list/accessories" value="accessories" name="Accessories" >--}}
                                                {{--                                                        Accessories--}}
                                                {{--                                                    </option>--}}
                                                {{--                                                    --}}{{--                                            @foreach($categories as $cate)--}}
                                                {{--                                                    --}}{{--                                                <option value="{{$cate->id}}" {{$cate->id == $category_id ? 'selected':''}}>{{$cate->name}}</option>--}}
                                                {{--                                                    --}}{{--                                            @endforeach--}}

                                                {{--                                                </select>--}}
                                                <label for="exampleFormControlSelect1"><h2 style="color:white; ">Product type</h2></label>
                                                <select name="product_types" class="form-control" id="categorySelect" onchange='this.form.submit()'>

{{--                                                    @foreach($product_types as $type)--}}
{{--                                                        <option--}}
{{--                                                            value="{{$type->id}}"   >{{$type->name}}</option>--}}
{{--                                                    @endforeach--}}
                                                    {{--                                                        {{$type->id == $camera_types_id? 'selected':''}}--}}

                                                </select>
                                                <label for="exampleFormControlSelect1">Category</label>
                                                <select name="category_id" class="form-control" id="categorySelect">
                                                    <option href="/admin" value="1">Cameras
                                                    </option>
                                                    <option href="/admin" value="2">
                                                        Accessories
                                                    </option>
                                                    {{--                                            @foreach($categories as $cate)--}}
                                                    {{--                                                <option value="{{$cate->id}}" {{$cate->id == $category_id ? 'selected':''}}>{{$cate->name}}</option>--}}
                                                    {{--                                            @endforeach--}}

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Search by keyword</label>
                                                <input value="keyword" type="text" name="keyword" class="form-control"
                                                       placeholder="Search by keyword">
                                                <input type="submit" style="visibility: hidden;"/>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="bread-ntd"><label for="exampleFormControlSelect1">Search by
                                                        time</label></div>
                                                <input type="text" name="dates" class="form-control">
                                                <input type="hidden" name="start">
                                                <input type="hidden" name="end">
                                            </div>
                                        </div>
                                    </div>
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
                            <a href="/admin/add-product">Add Product</a>
                        </div>
                        <table data-check-all-container >
                            <tr>
                                <th>ID</th>
                                <th>Full_name</th>
                                <th>Account_id</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Status</th>
                                <th>Created_at</th>
                                <th>Update_at</th>
                            </tr>
                            @foreach($list as $item)
                                <tr >
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->full_name}}</td>
                                    <td>{{$item->account_id}}</td>
                                    <td>{{$item->phone}}</td>
                                    <td>{{$item->email}}></td>
                                    <td>{{$item->address}}</td>
                                    <td>{{$item->status}}</td>
                                    <td>{{$item->created_at}}</td>
                                    <td>{{$item->updated_at}}</td>
                                    <td>
                                        <a href="/admin/edit-product/{{$item->id}}">  <button   data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i  class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                        <a href="">  <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        <div class="custom-pagination">
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
     checkAll(document.querySelector('[data-check-all-container]')){
     <style>
         .breadcome-area{
            color:white;
         }
     </style>
     }
 </script>
@endsection

