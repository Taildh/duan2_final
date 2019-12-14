<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Chi tiết sản phẩm </title>

    @include('shop.script')
    <link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>
    
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
                    <h3> Trái cây việt </h3>
                    <div class="back-directional">
                        <a href="home.html">
                            <a href="home.html"> Trang chủ </a>
                        </a> &nbsp;
                        <i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;
                        <a href="product.html"> Trái cây việt </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main product detail -->
    <div class="main-product-detail">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="img-detail" style="padding: 30px 30px;">
                        <img src="{{$cate->image}}" width="100%">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product-information">
                        <h2> {{$cate->name}} </h2>
                        
                        <!-- phần này là inclu cái đánh giá sao nhé-->
                        @include('shop.dist.star')

                        <p style="text-decoration:line-through;"> {{number_format($cate->price)}} VNĐ</p>
                        <p> {{number_format($cate->sell_price)}} VNĐ</p>
                        <p> {{$cate->short_desc}} </p>
                        <button type="submit" class="btn btn-info"><a href="{{ url('add-to-cart/'.$cate->id) }}" style="color: white; text-decoration: none;"> Cho vào giỏ hàng</a> </button>
                        <p style="margin-top: 10px;"> Gọi đặt mua:
                            <span style="color: #80B435">0968 373 262</span> để nhanh chóng đặt hàng </p>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2> Thông tin sản phẩm </h2>
                    <p>{!!$cate->description!!}</p>
                </div>
            </div>
        </div>

        <!-- Nếu mà có tài khoản thì mới hiển thị bình luận ở đây nhé còn nếu cái tài khoản mà null thì ẩn form này đi-->

        <!-- @if(Illuminate\Support\Facades\Auth::check())
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2> Để lại nhận xét cho chúng tôi</h2>
                    <div class="contact-form">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1"> Họ tên
                                    <span style="color: red">*</span>
                                </label>
                                <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" value="{{ Illuminate\Support\Facades\Auth::user()->name }}" readonly="true">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1"> Nội dung
                                    <span style="color: red">*</span>
                                </label>
                                <textarea class="form-control" name="comment" id="exampleFormControlTextarea1"  rows="4" placeholder=""></textarea>
                            </div>
                            <input type="hidden" name="product_id" value="{{$cate->id}}">
                            <button type="submit" style="margin-top: 30px; margin-bottom: 30px;" class="btn btn-info">
                                Gửi nhận xét </button>
                        </form>
                       
                    </div>
                </div>
            </div>
        </div> 
        @endif -->

        <div class="container">
            <h2 style="text-align: center; color: #306ac2;"> Sản phẩm liên quan </h2>
            <div class="row task-products">
                @foreach($model as $splq)
                <div class="col-md-3">
                    <div class="detail-category-products">
                        <div class="category-products-img">
                            <a href="{{route('chitietsp', ['id' => $splq->id])}}">
                                <img src="{{$splq->image}}" width="100%">
                            </a>
                        </div>
                        <div class="overlay">
                            <a href="{{route('chitietsp', ['id' => $splq->id])}}" class="icon one" title="User Profile">
                                <i style="font-size: 14px;" class="fa fa-search" aria-hidden="true"></i>
                            </a>
                            <a href="cart.html" class="icon two" title="User Profile">
                                <i style="font-size: 14px;" class="fa fa-cart-plus" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="category-products-information">
                            <div class="category-products-name">
                                <a href="{{route('chitietsp', ['id' => $splq->id])}}">
                                    <span style="display: inline-block; font-weight: bold;"> {{$splq->name}} </span>
                                </a>
                            </div>
                            <div class="category-products-price">
                                <span> <strike style="padding: 0 10px; color: #acacac;"> {{$cate->price}} VNĐ</strike></span>
                        {{$cate->sell_price}} VNĐ
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Main footer -->
    @include('shop.brand')

</html>