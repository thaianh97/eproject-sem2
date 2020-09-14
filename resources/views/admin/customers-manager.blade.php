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
{{--                        <div class="add-product">--}}
{{--                            <a href="#">Add Product</a>--}}
{{--                        </div>--}}
                        <table>
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

 </script>
@endsection

