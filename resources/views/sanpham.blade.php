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
                    <h3>{{$cate->name}}</h3>
                    <div class="back-directional">
                        <a href="{{route('trangchu')}}">
                            <a href="{{route('trangchu')}}"> Trang chủ </a>
                        </a> &nbsp;
                        <i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;
                        <a href="{{route('sanpham', ['id' => $cate->id])}}"> {{$cate->name}} </a>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Category products -->
    <div class="category-products">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="category-products-view">
                        <h2 style="margin-bottom: 20px;"> {{$cate->name}} </h2>
                       
                        <div class="row"> 
                            @foreach($model as $pr)
                            <div class="col-md-4">
                                <div class="detail-category-products">
                                    <div class="category-products-img">
                                        <a href="chitietsanpham.html">
                                            <img src="{{$pr->image}}" width="100%">
                                        </a>
                                    </div>
                                    <div class="overlay">
                                        <a href="{{route('chitietsp', ['id' => $pr->id])}}" class="icon one" title="Xem chi tiết">
                                            <i style="font-size: 14px;" class="fa fa-search" aria-hidden="true"></i>
                                        </a>
                                        <a href="{{ url('add-to-cart/'.$pr->id) }}" class="icon two" title="Giỏ hàng">
                                            <i style="font-size: 14px;" class="fa fa-cart-plus" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="category-products-information">
                                        <div class="category-products-name">
                                            <a href="{{route('chitietsp', ['id' => $pr->id])}}">
                                                <span style="display: inline-block; font-weight: bold;"> {{$pr->name}} </span>
                                            </a>
                                        </div>
                                        <div class="category-products-price">
                                            <strike style="padding: 0 10px; color: #acacac;">
                                                {{number_format($pr->price)}} VNĐ
                                            </strike>
                                            {{number_format($pr->sell_price)}} VNĐ
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <p style="margin: auto;">{{$model->links()}}</p>
                        
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="category-products-menu">
                        <h2> Tìm kiếm sản phẩm </h2>
                        <div class="menu" style="border: 1px solid #ddd; margin: 0px; margin-bottom: 20px; height: 60px; padding: 10px 0px 20px 0px;">
                            <div class="col-md-12">
                            <form class="form-inline my-3 my-lg-0" style="padding-bottom: 20px;margin: auto; padding-left: 20px;" action="" method="get">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" name="keyword" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
                            </form>
                            </div>
                        </div>
                    </div>
                    <div class="category-products-menu">
                        <h2> Danh mục </h2>
                        <div class="menu" style="border: 1px solid #ddd; margin: 0px; margin-bottom: 20px; height: 200px;">
                            <ul>
                                <li>
                                    <a href=" # "> Trang chủ </a>
                                </li>
                                <li>
                                    <a href="# "> Giới thiệu </a>
                                </li>
                                <li>
                                    <a href="# "> Sản phẩm
                                        <i class="fa fa-angle-down " aria-hidden="true "></i>
                                    </a>
                                    <ul class="sub-menu ">
                                        <li>
                                            <a href="# "> Trái cây việt </a>
                                        </li>
                                        <li>
                                            <a href="# "> Trái cây nhập khẩu </a>
                                        </li>
                                        <li>
                                            <a href="# "> Rau củ quả </a>
                                        </li>
                                        <li>
                                            <a href="# "> Thực phẩm tươi sống </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="# "> Tin tức
                                        <i class="fa fa-angle-down " aria-hidden="true "></i>
                                    </a>
                                    <ul class="sub-menu ">
                                        <li>
                                            <a href="# "> Tin mới hằng ngày </a>
                                        </li>
                                        <li>
                                            <a href="# "> Tin giá cả </a>
                                        </li>
                                        <li>
                                            <a href="# "> Mẹo vặt </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="# "> Liên hệ </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Main Brands -->
    @include('shop.brand')

</html>