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
                    <h3> Liên hệ </h3>
                    <div class="back-directional">
                        <a href="home.html">
                            <a href="home.html"> Trang chủ </a>
                        </a> &nbsp;
                        <i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;
                        <a href="contact.html"> Liên hệ </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main-contact -->
    <div class="main-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h4 style="color: #306ac2;
                    font-family: 'ZCOOL XiaoWei', serif;
                    font-size: 30px;"> Gửi thông tin </h4>
                    <i> Bạn hãy điền nội dung tin nhắn vào form dưới đây và gửi cho chúng tôi. Chúng tôi sẽ trả lời bạn sau khi
                        nhận được. </i>
                    <div class="contact-form">
                        <form action="{{route('lienhe')}}" method="post">
                            @csrf
                            @if(Illuminate\Support\Facades\Auth::check())
                            <div class="form-group">
                                <label for="exampleInputEmail1"> Họ tên
                                    <span style="color: red">*</span>
                                </label>
                                <input type="text" class="form-control" value="{{ Illuminate\Support\Facades\Auth::user()->name }}" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" placeholder="">
                            </div>

                            @else
                            <div class="form-group">
                                <label for="exampleInputEmail1"> Họ tên
                                    <span style="color: red">*</span>
                                </label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" placeholder="">
                                @if($errors->first('name'))
                                <span class="text-danger">{{$errors->first('name')}}</span>
                                @endif
                            </div>
                            @endif

                            <div class="form-group">
                                <label for="exampleInputPassword1">Email
                                    <span style="color: red">*</span>
                                </label>
                                <input type="text" class="form-control" name="email" id="exampleInputPassword1" placeholder="">
                                @if($errors->first('email'))
                                <span class="text-danger">{{$errors->first('email')}}</span>
                                @endif
                            </div>
                            <input type="hidden" name="status" class="form-control" value="1" placeholder="">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Điện thoại
                                    <span style="color: red">*</span>
                                </label>
                                <input type="text" name="phone_number" class="form-control" id="exampleInputPassword1" placeholder="">
                                @if($errors->first('phone_number'))
                                <span class="text-danger">{{$errors->first('phone_number')}}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1"> Nội dung
                                    <span style="color: red">*</span>
                                </label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="content" rows="3" placeholder=""></textarea>
                                @if($errors->first('content'))
                                <span class="text-danger">{{$errors->first('content')}}</span>
                                @endif
                            </div>
                            <button type="submit" style="margin-top: 30px; margin-bottom: 30px;" class="btn btn-info btn-add">
                                Gửi liên hệ </button>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <h4 style="color: #306ac2;
                    font-family: 'ZCOOL XiaoWei', serif;
                    font-size: 30px;"> Thông tin liên hệ </h4>
                    <i style="display: inline-block; margin-bottom: 10px;"> Tôi là Thanh Sơn - người sáng lập ra cửa hàng thực phẩm sạch. Có lẽ tôi cũng không nên nói quá nhiều
                        về bản thân mình. Hôm nay tôi sẽ chia sẻ kinh nghiệm rất thực tế mà chính tôi là người đã trải qua,
                        trả giá bằng rất nhiều công sức, tâm huyết và tiền bạc... Tôi mong muốn các bạn, các anh chị đang
                        mong muốn khởi nghiệp thành công với ngành thực phẩm sạch, trước khi bước chân vào lĩnh vực này có
                        thêm một cái nhìn mới về ngành thực phẩm sạch hiện nay cụ thể hơn nữa là tại Hà Nội.</i>
                    <div class="main-contact-box">
                        <span style="display: inline-block; margin-bottom: 7px;">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;
                            <i> 257 Trần cung, Nam Từ Niêm, Hà Nội </i>
                        </span>
                        <br>
                        <span style="display: inline-block; margin-bottom: 7px;">
                            <i class="fa fa-phone" aria-hidden="true"></i>&nbsp;
                            <i> 0968 373 262 </i>
                        </span>
                        <br>
                        <span style="display: inline-block; margin-bottom: 7px;">
                            <i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;
                            <i> thucpham304@gmail.com </i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4793.960328997404!2d105.7827599027713!3d21.0552345772072!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab2ba1cbd68d%3A0xe7840f127f59a84c!2zMjU3IFRy4bqnbiBDdW5nLCBD4buVIE5odeG6vywgVOG7qyBMacOqbSwgSMOgIE7hu5lpLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1571623937874!5m2!1sen!2s"
                            width="100%" height="400px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('shop.brand')

</html>