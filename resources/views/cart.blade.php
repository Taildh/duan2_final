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
    <!-- <div class="bread-crumb-background">
        <div class="container-fluid">
            <div class="directional">
                <div class="container">
                    
                </div>
            </div>
        </div>
    </div> -->

    <!-- Main blog -->
    <div class="main-content-blog">
        <div class="container">
                @if(session('cart'))
                <h2 title="Tin tức"> Giỏ Hàng </h2>
                <div class="row">
                <div class="col-9">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <table id="cart" class="table table-hover table-condensed">
                        <thead>
                        <tr>
                            <th style="width:10%">Ảnh sản phẩm</th>
                            <th style="width:20%">Tên sản phẩm</th>
                            <th style="width:18%">Đơn giá</th>
                            <th style="width:10%">Số lượng</th>
                            <th style="width:20%" class="text-center">Thành tiền</th>
                            <th style="width:10%"></th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php $total = 0 ?>

                        @if(session('cart'))
                            @foreach(session('cart') as $id => $details)

                                <?php $total += $details['price'] * $details['quantity'] ?>

                                <tr>
                                    <td data-th="Product">
                                        <div class="row">
                                            <div class="col-sm-3 hidden-xs"><img src="{{ $details['photo'] }}" width="100" height="100" class="img-responsive"/></div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="col-sm-9">
                                            <h5 class="nomargin">{{ $details['name'] }}</h5>
                                        </div>
                                    </td>
                                    <td data-th="Price">{{ $details['price'] }} VNĐ</td>
                                    <td data-th="Quantity">
                                        <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity" />
                                    </td>
                                    <td data-th="Subtotal" class="text-center">{{ $details['price'] * $details['quantity'] }} VNĐ</td>
                                    <td class="actions" data-th="">
                                        <button class="btn btn-info btn-sm update-cart" data-id="{{ $id }}"><i class="fa fa-refresh"></i></button>
                                        <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i class="fa fa-trash-o"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                        @endif

                        </tbody>
                        <tfoot>
                        <tr>
                            <td><a href="{{ url('/') }}" class="btn btn-warning" style="font-size: 15px; width: 170px;"><i class="fa fa-angle-left" ></i> Tiếp tục mua hàng</a></td>
                            <td colspan="3" class="hidden-xs"></td>
                            <td class="hidden-xs text-center" style="font-size: 15px;"><strong>Tổng tiền: 
                                @if (session()->has('coupon'))
                                        {{$total = $total-(session()->get('coupon')['totalM']*session()->get('coupon')['discount'])/100 }}
                                @else
                                    {{$total}}
                                @endif VNĐ</strong></td>
                        </tr>
                        </tfoot>
                    </table>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12" style="padding: 10px 0; margin-top: 20px;">
                                <h4> Thông tin mua hàng </h4>
                                    <form action="{{route('cart.add')}}" method="post" class="form-pay">
                                       @csrf
                                        <?php $total = 0 ?>

                                        @if(session('cart'))
                                            @foreach(session('cart') as $id => $details)
                                                @if (session()->has('coupon'))
                                                    <?php $total = session()->get('coupon')['totalM']-(session()->get('coupon')['totalM']*session()->get('coupon')['discount'])/100 ?>
                                                @else
                                                    <?php $total ?>
                                                @endif
                                                

                                                <input type="hidden" name="price" value="{{ $details['price'] }}">
                                                <input type="hidden" name="image" value="{{ $details['photo'] }}">
                                                <input type="hidden" name="product_id" value="{{ $details['idpro'] }}">
                                                <input type="hidden" name="quantity" value="{{ $details['quantity'] }}">

                                                <input type="hidden" name="total_price" value="{{ $total }}">
                                                    
                                            @endforeach
                                        @endif

                                        @if(Illuminate\Support\Facades\Auth::check())
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"> Họ tên
                                                    <span style="color: red">*</span>
                                                </label>
                                            <input type="text" class="form-control" value="{{ Illuminate\Support\Facades\Auth::user()->name }}" id="exampleInputEmail1" name="name" value="{{old('name')}}" aria-describedby="emailHelp" placeholder="">
                                            </div>
                                             @if(count($errors) > 0)
                                                <small><span style="color: red">{{$errors->first('name')}}</span></small>
                                            @endif
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"> Số điện thoại
                                                    <span style="color: red">*</span>
                                                </label>
                                            <input type="text" name="phone_number" value="{{old('phone_number')}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" Số điện thoại ">
                                             @if(count($errors) > 0)
                                                <small><span style="color: red">{{$errors->first('phone_number')}}</span></small>
                                            @endif
                                            </div>

                                            <input type="hidden" name="user_id" value="{{ Illuminate\Support\Facades\Auth::user()->id }}">
                                            @else
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"> Họ tên
                                                    <span style="color: red">*</span>
                                                </label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" placeholder="">
                                            </div>
                                             @if(count($errors) > 0)
                                                <small><span style="color: red">{{$errors->first('name')}}</span></small>
                                            @endif
                                            
                                        @endif


                                        <div class="form-group">
                                            <label for="exampleInputEmail1"> Địa chỉ
                                                    <span style="color: red">*</span>
                                                </label>
                                            <input type="text" name="order_address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('order_address')}}" placeholder=" Địa chỉ ">
                                             @if(count($errors) > 0)
                                                <small><span style="color: red">{{$errors->first('order_address')}}</span></small>
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1"> Ghi chú
                                                </label>
                                            <textarea class="form-control" name="note" id="exampleFormControlTextarea1" rows="3" placeholder=" Ghi chú "></textarea>
                                        </div>

                                        <input type="hidden" name="status" value="0">
                                            <button type="submit" class="btn btn-success">Gửi đơn hàng</button>
                                        
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th> Tổng tiền đơn hàng </th>
                            </tr>
                        </thead>
                    </table>
                    <table>
                        <tbody>
                        <?php $total = 0 ?>

                        @if(session('cart'))
                            @foreach(session('cart') as $id => $details)

                                <?php $total += $details['price'] * $details['quantity'] ?>
                                <tr class="order-total" style="margin-bottom: 10px; display: inline-block;">
                                    <th style="width: 150px;"> Tổng cộng</th>
                                    <td data-title="Tổng cộng">
                                        <span> {{ $details['price'] * $details['quantity'] }} VNĐ </span>
                                    </td>
                                </tr>
                            @endforeach
                            <tr>
                                @if (session()->has('coupon'))
                                    <tr class="order-total" style="margin-bottom: 10px; display: inline-block;">
                                        <th style="width: 150px;"> Mã giảm giá({{session()->get('coupon')['name']}})</th>
                                        <td data-title="Tổng cộng">
                                                <span> -{{session()->get('coupon')['discount']}} % </span>
                                        </td>
                                    </tr>
                                    <tr class="order-total" style="margin-bottom: 10px; display: inline-block;">
                                        <th style="width: 150px;"> Thành tiền</th>
                                        <td data-title="Tổng cộng">
                                                <span>{{$total = $total-(session()->get('coupon')['totalM']*session()->get('coupon')['discount'])/100 }} VNĐ</span>
                                        </td>
                                    </tr>
                                    <form action="{{route('coupon.destroy')}}" method="post">
                                        @csrf
                                        <button type="submit">Xóa mã</button>
                                    </form>
                                @endif
                            </tr>
                        @endif
                        </tbody>
                    </table>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th> Phiếu ưu đãi </th>
                            </tr>
                        </thead>
                    </table>
                    @if(Session::has('errCoupon'))
                        <p class="alert alert-danger">{{ Session::get('errCoupon') }}</p>
                    @endif
                    @if(Session::has('errPrice'))
                        <p class="alert alert-danger">{{ Session::get('errPrice') }}</p>
                    @endif
                    @if(Session::has('removeCoupon'))
                        <p class="alert alert-success">{{ Session::get('removeCoupon') }}</p>
                    @endif
                    @if(Session::has('successCoupon'))
                        <p class="alert alert-success">{{ Session::get('successCoupon') }}</p>
                    @endif
                    @if(count($errors) > 0)
                            <p class="alert alert-danger">{{$errors->first('code')}}</p>
                    @endif
                    <form action="{{route('coupon.store')}}" method="post">
                        @csrf
                        <input style="width: 100%;height: 2.507em; margin-bottom: 10px; border: 1px solid #ddd;box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);padding: 0 5px;" type="text" name="code" placeholder="Mã ưu đãi">
                        
                        <input type="hidden" name="current_date" value="{{\Carbon\Carbon::now('Asia/Ho_Chi_Minh')->toDateTimeLocalString()}}"/>
                        <div class="thanhtoan" style="margin-bottom: 10px; max-width: 100%; font-family: 'Times New Roman', Times, serif; background: #80B435; text-align: center;padding: 10px; text-transform: uppercase; color: #fff;">
                            <button style="border:none; background: #80B435; color: #fff; font-family: 'Times New Roman', Times, serif; ">Áp dụng mã giảm giá</button>
                    </form>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="thanhtoan">
                                    <p> Thanh toán khi giao hàng (COD) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <i class="fa fa-money" aria-hidden="true"></i>
                                    </p>
                                    <p> Bạn chỉ phải thanh toán khi nhận được hàng </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <img style="padding-left: 67px;" src="{{ asset('admin/assets/admin/layout/img/mascot.png')}}">
                            <span style="padding: 10px; display: block; margin-block-start: 1em;margin-block-end: 1em;">
                                Không có sản phẩm nào trong giỏ hàng của bạn.
                            </span>

                            <a href="{{route('trangchu')}}" class="btn btn-yellow" style="background-color: #fdd835;
                                color: #4a4a4a;
                                font-size: 14px;
                                font-weight: 500;
                                padding: 9.5px 55.5px;
                                margin-left: 60px;">
                                <b>Tiếp tục mua sắm</b>
                            </a>
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Main post banner -->
    <div class="main-banner-post">
        <img src="../../../shop/image/banner-baiviet.png" width="100%">
        <div class="main-banner-post-title">
        </div>
    </div>
    </div>


    <script type="text/javascript">
        $(".update-cart").click(function (e) {
           e.preventDefault();
           var ele = $(this);
            $.ajax({
               url: '{{ url('update-cart') }}',
               method: "patch",
               data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
               success: function (response) {
                   window.location.reload();
               }
            });
        });
        $(".remove-from-cart").click(function (e) {
            e.preventDefault();
            var ele = $(this);
            if(confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });
    </script>


    <!-- Main footer -->
    @include('shop.brand')

</html>