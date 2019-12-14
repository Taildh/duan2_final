<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nền tảng quản lý & bán hàng tốt nhất cho bạn</title>


    @include('shop.script')

</head>

<body>

    <!-- Main-Header -->
    <div class="main-header">

        @include('shop.header')
    </div>

    <!-- Breadcrumb background  -->
    <div class="bread-crumb-background">
        <div class="container-fluid">
            <div class="directional">
                <div class="container">
                    <h3> Lịch sử mua hàng </h3>
                    
                </div>
            </div>
        </div>
    </div>

    <!-- Main product detail -->
    <div class="main-product-detail">
        <div class="container">
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Số điện thoại</th>
                            <th scope="col">Địa chỉ nhận</th>
                            <th scope="col">Lời nhắn</th>
                            <th scope="col">Ngày nhận hàng</th>
                            <th scope="col">Tổng tiền</th>
                            <th scope="col">Người giao hàng</th>
                            <th scope="col">Trạng thái</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $ls)
                        <tr>
                            <td>{{$ls->phone_number}}</td>
                            <td style="width: 20%">{{$ls->order_address}}</td>
                            <td>{{$ls->note}}</td>
                            <td>{{$ls->sent_date}}</td>
                            <td>{{$ls->total_price}}</td>
                            <td>
                                @isset($ls->shipper->name) 
                                {{$ls->shipper->name}} 
                                @endisset
                                @isset($ls->shipper->id) 
                                {{$ls->id}}
                                @endisset
                                
                            </td>
                            <td>
                                @if($ls->status == 0)
                                <p class="btn btn-warning btn-sm">Chưa xử lý</p>
                                @elseif($ls->status == 1)
                                <p class="btn btn-info btn-sm">Đang giao hàng</p>
                                @elseif($ls->status == 2)
                                <p class="btn btn-success btn-sm">Đã giao</p>
                                @endif
                            </td>
                            <td>
                                <a href="#" class="btn btn-success btn-sm">
                                    <i class="fa fa-edit"></i> Chi tiết </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    </div>

    <!-- Main footer -->
    @include('shop.brand')

</html>