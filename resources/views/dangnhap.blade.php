    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Chi tiết sản phẩm </title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    <!-- Slick -->
    <link rel="stylesheet" href="../../../shop/plugins/slick/slick.css">
    <link rel="stylesheet" href="../../../shop/plugins/slick/slick-theme.css">

    <!-- Css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/styles.css')}}">

    <!-- Change number -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Fonts-->
    <link href="https://fonts.googleapis.com/css?family=ZCOOL+XiaoWei&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Galada&display=swap" rel="stylesheet">

    
</head>

<body>

    <div class="main-header">
    @include('shop.header')
    </div>
    <div class="main-background">
    </div>
    <div class="main-login">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="loginbox">
                        <h1 style="margin-bottom: 20px;"> Đăng nhập tại đây </h1>
                        <form action="">
                            <input type="text" style="font-size: 13px;" name="" placeholder="Email">
                            <input type="password" style="font-size: 13px;" name="" placeholder="Mật khẩu">
                            <input type="submit" name="" value="Đăng nhập">
                            <a href="dangki.html">
                                <input type="button" name="" value="Đăng kí">
                            </a>
                            <p>
                                <a href="home.html"> Trở về </a>
                            </p>
                            <a href="#"> Quên mật khẩu ? </a>
                            <br>
                            <a href="#"> Không có tài khoản ?</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>


    <!-- <div class="container">
        <div class="loginbox">
            <img src="../../../shop/image/produc-dautay-banchuan.jpg" class="avatar">
            <h1 style="margin-bottom: 20px;"> Đăng nhập </h1>
            <form action="{{route('dangnhap.add')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="text" style="font-size: 13px;" value="{{old('email')}}" name="email" placeholder="Email">
                <input type="password" style="font-size: 13px;" value="" name="password" placeholder="Mật khẩu">
                @if (session('errmsg'))
                  <p class="text-danger">{{session('errmsg')}}</p>
                @endif
                <button type="submit" name="">Đăng nhập</button>
                <p>
                <a href="{{ URL::previous() }}"> Trở về </a>
                </p>
            </form>
        </div>
    </div> -->
</body>
@include('shop.brand')
</html>