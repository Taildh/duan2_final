<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nền tảng quản lý & bán hàng tốt nhất cho bạn</title>


    <!-- Link cdn fontawesome -->
    <link rel="stylesheet" href="  https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    <!-- Link Getbootstrap -->
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
    <link rel="stylesheet" type="text/css" href="../../../shop/plugins/style.css">

    <!-- Change number -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Fonts-->
    <link href="https://fonts.googleapis.com/css?family=ZCOOL+XiaoWei&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Galada&display=swap" rel="stylesheet">
    <!-- <script language="javascript">
        alert('Xin chào các bạn');
    </script> -->

</head>

<body>
    <!-- Main-Header -->
    <div class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="header-static hidden-xs hidden-sm">
                        <ul>
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <li>
                                <a href="#" title="nst135@gmail.com">thucpham304@gmail.com</a>
                            </li>
                            <li>
                                <a href="#" title="nst135@gmail.com">Miễn phí ship cho đơn hàng trên 1tr VNĐ</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="header-login">
                        <ul>
                            <li>
                                <a href="login.html" title="đăng nhập"> Đăng nhập </a>
                            </li>
                            <li>
                                <a href="dangki.html" title="đăng kí"> Đăng kí </a>
                            </li>
                            <a href="cart.html">
                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-menu">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="home.html">
                        <img src="../../../shop/../../../shop/image/logo1.png" width="150">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item ">
                                <a class="nav-link" href="home.html">Trang chủ
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="introduce.html">Giới thiệu</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Sản phẩm
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    @foreach($cate_pro as $pr)
                                    <a class="dropdown-item" href="product.html">$pr->name</a>
                                    <div class="dropdown-divider"></div>
                                    @endforeach
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Tin tức
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="blog.html">Tin mới hằng ngày</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="blog.html">Tin giá cả</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="blog.html">Mẹo vặt</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Liên hệ</a>
                            </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <!-- Main-Slide -->
    <div class="main-slide">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../../../shop/image/banner-banchuan.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../../shop/image/banner-banchuan1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../../shop/image/banner-banchuan2.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!-- Main-About-us-->
    <div class="main-about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about-us-video">
                        <iframe width="100%" height="310" src="https://www.youtube.com/embed/HD7T8xyxc6A" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-us-text">
                        <h2> Về chúng tôi </h2>
                        <p> Phần lớn các nền văn hóa đều có nghệ thuật ẩm thực. </p>
                        <p>Văn hóa ẩm thực là một tập hợp cụ thể của các truyền thống, thói quen, sở thích, cách thức chọn lựa
                            thực phẩm và tập quán trong nấu ăn.</p>
                        <p>Việc nghiên cứu các khía cạnh của ẩm thực gọi là khoa học về nghệ thuật ẩm thực. Nhiều nền văn hóa
                            đã đa dạng hóa các chủng loại thực phẩm của mình bằng các phương pháp chế biến, nấu nướng và
                            sản xuất.</p>
                        <a href="#">
                            <button type="button" class="btn" id=""> Xem thêm </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main service-->
    <div class="main-service">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-service">
                        <h2> Dịch vụ </h2>
                        <p> Hiện tại vùng nguyên liệu của chúng tôi có thể cung cấp các thực tập tươi sạch với số lượng lớn vì
                            đang vào vụ mùa thu hoạch nên chúng tôi có thể cung ứng cho tất cả các đối tác xuất khẩu nông
                            sản trên cả nước. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="content-service">
                        <div class="pulse">
                            <img src="../../../shop/image/service1.png" width="100%" class="responsive">
                            <div class="title-content-service">
                                <h4> Trang trại hữu cơ </h4>
                                <p> Cung cấp 100% thực phẩm sạch đảm bảo an toàn và ngon nhất </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="content-service">
                        <div class="pulse">
                            <img src="../../../shop/image/service2.png" width="100%" class="responsive">
                            <div class="title-content-service">
                                <h4> Thực phẩm sạch </h4>
                                <p> Cung cấp 100% thực phẩm sạch đảm bảo an toàn và ngon nhất </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="content-service">
                        <div class="pulse">
                            <img src="../../../shop/image/service3.png" width="100%" class="responsive">
                            <div class="title-content-service">
                                <h4> An toàn sinh học </h4>
                                <p> Cung cấp 100% thực phẩm sạch đảm bảo an toàn và ngon nhất </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="content-service">
                        <div class="pulse">
                            <img src="../../../shop/image/service4.png" width="100%" class="responsive">
                            <div class="title-content-service">
                                <h4> Đa dạng sinh học </h4>
                                <p> Cung cấp 100% thực phẩm sạch đảm bảo an toàn và ngon nhất </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main-products -->
    <div class="main-products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-products">
                        <h3 id="title" style="font-weight: bold;"> Sản phẩm nổi bật </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row task-products">
                <div class="col-md-4">
                    <div class="detail-category-products">
                        <div class="category-products-img">
                            <a href="chitietsanpham.html">
                                <img src="../../../shop/image/produc-buoixanh-banchuan.jpg" width="100%">
                            </a>
                        </div>
                        <div class="overlay">
                            <a href="chitietsanpham.html" class="icon one" title="Xem chi tiết">
                                <i style="font-size: 14px;" class="fa fa-search" aria-hidden="true"></i>
                            </a>
                            <a href="cart.html" class="icon two" title="Giỏ hàng">
                                <i style="font-size: 14px;" class="fa fa-cart-plus" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="category-products-information">
                            <div class="category-products-name">
                                <a href="chitietsanpham.html">
                                    <span style="display: inline-block; font-weight: bold;"> Nho đen mỹ </span>
                                </a>
                            </div>
                            <div class="category-products-price">
                                <span> 150.000đ </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="detail-category-products">
                        <div class="category-products-img">
                            <a href="chitietsanpham.html">
                                <img src="../../../shop/image/produc-nhoden-banchuan.jpg" width="100%">
                            </a>
                        </div>
                        <div class="overlay">
                            <a href="chitietsanpham.html" class="icon one" title="Xem chi tiết">
                                <i style="font-size: 14px;" class="fa fa-search" aria-hidden="true"></i>
                            </a>
                            <a href="cart.html" class="icon two" title="Giỏ hàng">
                                <i style="font-size: 14px;" class="fa fa-cart-plus" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="category-products-information">
                            <div class="category-products-name">
                                <a href="chitietsanpham.html">
                                    <span style="display: inline-block; font-weight: bold;"> Nho đen mỹ </span>
                                </a>
                            </div>
                            <div class="category-products-price">
                                <span> 150.000đ </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="detail-category-products">
                        <div class="category-products-img">
                            <a href="chitietsanpham.html">
                                <img src="../../../shop/image/produc-mangcut-banchuan.jpg" width="100%">
                            </a>
                        </div>
                        <div class="overlay">
                            <a href="chitietsanpham.html" class="icon one" title="Xem chi tiết">
                                <i style="font-size: 14px;" class="fa fa-search" aria-hidden="true"></i>
                            </a>
                            <a href="cart.html" class="icon two" title="Giỏ hàng">
                                <i style="font-size: 14px;" class="fa fa-cart-plus" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="category-products-information">
                            <div class="category-products-name">
                                <a href="chitietsanpham.html">
                                    <span style="display: inline-block; font-weight: bold;"> Nho đen mỹ </span>
                                </a>
                            </div>
                            <div class="category-products-price">
                                <span> 150.000đ </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="detail-category-products">
                        <div class="category-products-img">
                            <a href="chitietsanpham.html">
                                <img src="../../../shop/image/produc-xoaixanh-banchuan.jpg" width="100%">
                            </a>
                        </div>
                        <div class="overlay">
                            <a href="chitietsanpham.html" class="icon one" title="Xem chi tiết">
                                <i style="font-size: 14px;" class="fa fa-search" aria-hidden="true"></i>
                            </a>
                            <a href="cart.html" class="icon two" title="Giỏ hàng">
                                <i style="font-size: 14px;" class="fa fa-cart-plus" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="category-products-information">
                            <div class="category-products-name">
                                <a href="chitietsanpham.html">
                                    <span style="display: inline-block; font-weight: bold;"> Nho đen mỹ </span>
                                </a>
                            </div>
                            <div class="category-products-price">
                                <span> 150.000đ </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="detail-category-products">
                        <div class="category-products-img">
                            <a href="chitietsanpham.html">
                                <img src="../../../shop/image/produc-nhoden-banchuan.jpg" width="100%">
                            </a>
                        </div>
                        <div class="overlay">
                            <a href="chitietsanpham.html" class="icon one" title="Xem chi tiết">
                                <i style="font-size: 14px;" class="fa fa-search" aria-hidden="true"></i>
                            </a>
                            <a href="cart.html" class="icon two" title="Giỏ hàng">
                                <i style="font-size: 14px;" class="fa fa-cart-plus" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="category-products-information">
                            <div class="category-products-name">
                                <a href="chitietsanpham.html">
                                    <span style="display: inline-block; font-weight: bold;"> Nho đen mỹ </span>
                                </a>
                            </div>
                            <div class="category-products-price">
                                <span> 150.000đ </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Why -->
    <div class="main-why">
        <div class="container-fluid">
            <div class="advertisement">
                <div class="container">
                    <h2> Vì sao chọn chúng tôi </h2>
                    <p>Những dịch vụ có thể mang lại cho bạn, phục vụ tốt nhất cho những bữa ăn hằng ngày của bạn </p>
                    <div class="row">
                        <div class="col-sm-6 col-lg-3 col-md-3 col-md-6">
                            <div class="counter" data-count="10"> 0 </div>
                            <p> Năm hoạt động </p>
                        </div>
                        <div class="col-sm-6 col-lg-3 col-md-3 col-md-6">
                            <div class="counter" data-count="27000"> 0 </div>
                            <p> Khách hàng tin tưởng </p>
                        </div>
                        <div class="col-sm-6 col-lg-3 col-md-3 col-md-6">
                            <div class="counter" data-count="500"> 0 </div>
                            <p> Nhân viên </p>
                        </div>
                        <div class="col-sm-6 col-lg-3 col-md-3 col-md-6">
                            <div class="counter" data-count="50"> 0 </div>
                            <p> Đối tác </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Trusted Products-->
    <div class="main-trusted-products">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2> Sản phẩm khuyến mãi </h2>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <div class="media">
                        <div class="wiggle">
                            <a href="chitietsanpham.html">
                                <img src="../../../shop/image/produc-chuoi-banchuan.jpg" class="mr-3" alt="" width="100" class="responsive">
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="chitietsanpham.html">
                                <p class="mt-2" style="font-weight: bold;"> Chuối vàng </p>
                            </a>
                            <span style="color: #3b9048; font-size: 16px;">
                                50.000đ
                            </span>
                            <strike style="padding: 0 10px; color: #acacac;">
                                70.000đ
                            </strike>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="media">
                        <div class="wiggle">
                            <a href="chitietsanpham.html">
                                <img src="../../../shop/image/produc-dua-banchuan.jpg" class="mr-3" alt="" width="100" class="responsive">
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="chitietsanpham.html">
                                <p style="font-weight: bold;" class="mt-2"> Quả dứa miền nam </p>
                            </a>
                            <span style="color: #3b9048; font-size: 16px;">
                                50.000đ
                            </span>
                            <strike style="padding: 0 10px; color: #acacac;">
                                70.000đ
                            </strike>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="media">
                        <div class="wiggle">
                            <a href="chitietsanpham.html">
                                <img src="../../../shop/image/produc-dudu-banchuan.jpg" class="mr-3" alt="" width="100" class="responsive">
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="chitietsanpham.html">
                                <p style="font-weight: bold;" class="mt-2"> Quả đu đủ </p>
                            </a>
                            <span style="color: #3b9048; font-size: 16px;">
                                50.000đ
                            </span>
                            <strike style="padding: 0 10px; color: #acacac;">
                                70.000đ
                            </strike>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="media">
                        <div class="wiggle">
                            <a href="chitietsanpham.html">
                                <img src="../../../shop/image/produc-mangcut-banchuan.jpg" class="mr-3" alt="" width="100" class="responsive">
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="chitietsanpham.html">
                                <p style="font-weight: bold;" class="mt-2"> Măng cụt miền nam </p>
                            </a>
                            <span style="color: #3b9048; font-size: 16px;display: inline-block;">
                                50.000đ
                            </span>
                            <strike style="padding: 0 10px; color: #acacac;">
                                70.000đ
                            </strike>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="media">
                        <div class="wiggle">
                            <a href="chitietsanpham.html">
                                <img src="../../../shop/image/produc-saurieng-banchuan.jpg" class="mr-3" alt="" width="100" class="responsive">
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="chitietsanpham.html">
                                <p style="font-weight: bold;" class="mt-2"> Sầu riêng miền nam </p>
                            </a>
                            <span style="color: #3b9048; font-size: 16px;">
                                50.000đ
                            </span>
                            <strike style="padding: 0 10px; color: #acacac;">
                                70.000đ
                            </strike>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="media">
                        <div class="wiggle">
                            <a href="chitietsanpham.html">
                                <img src="../../../shop/image/produc-thanglong-banchuan.jpg" class="mr-3" alt="" width="100" class="responsive">
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="chitietsanpham.html">
                                <p style="font-weight: bold;" class="mt-2"> Thăng long miền nam </p>
                            </a>
                            <span style="color: #3b9048; font-size: 16px;">
                                50.000đ
                            </span>
                            <strike style="padding: 0 10px; color: #acacac;">
                                70.000đ
                            </strike>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="media">
                        <div class="wiggle">
                            <a href="chitietsanpham.html">
                                <img src="../../../shop/image/produc-camngot-banchuan.jpg" class="mr-3" alt="" width="100" class="responsive">
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="chitietsanpham.html">
                                <p style="font-weight: bold;" class="mt-2"> Cam vàng ngọt </p>
                            </a>
                            <span style="color: #3b9048; font-size: 16px;">
                                50.000đ
                            </span>
                            <strike style="padding: 0 10px; color: #acacac;">
                                70.000đ
                            </strike>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="media">
                        <div class="wiggle">
                            <a href="chitietsanpham.html">
                                <img src="../../../shop/image/produc-duahau-banchuan.jpg" class="mr-3" alt="" width="100" class="responsive">
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="chitietsanpham.html">
                                <p style="font-weight: bold;" class="mt-2"> Dưa hấu đỏ </p>
                            </a>
                            <span style="color: #3b9048; font-size: 16px;">
                                50.000đ
                            </span>
                            <strike style="padding: 0 10px; color: #acacac;">
                                70.000đ
                            </strike>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="media">
                        <div class="wiggle">
                            <a href="chitietsanpham.html">
                                <img src="../../../shop/image/produc-taodo-banchuan.jpg" class="mr-3" alt="" width="100" class="responsive">
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="chitietsanpham.html">
                                <p class="mt-2" style="font-weight: bold;"> Táo đỏ </p>
                            </a>
                            <span style="color: #3b9048; font-size: 16px;">
                                50.000đ
                            </span>
                            <strike style="padding: 0 10px; color: #acacac;">
                                70.000đ
                            </strike>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Blog -->
    <div class="main-blog">
        <div class="container">
            <div class="title-blog">
                <h2> Tin tức - Blog </h2>
                <p> Những dịch vụ có thể mang lại cho bạn, phục vụ tốt nhất cho những bữa ăn hằng ngày của bạn </p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="box-blog">
                        <div class="blog-img">
                            <a href="chitietbaiviet.html">
                                <img src="../../../shop/image/blog1.jpg" width="100%">
                            </a>
                        </div>
                        <div class="blog-content">
                            <a href="chitietbaiviet.html"> Giá rau củ tăng mạnh vì trời mưa </a>
                            <p> Khoảng 1 tuần gần đây, do ảnh hưởng của những cơn mưa kéo dài liên tiếp nên ...</p>
                            <div class="day-blog" style="margin: 5px 0;">
                                <span class="post-time">
                                    <i class="fa fa-user" aria-hidden="true"></i> Bởi sơn
                                </span>
                                <span class="short-time">
                                    <i class="fa fa-calendar" aria-hidden="true"></i> 14/10/2019
                                </span>
                            </div>
                            <a href="#" class="viewmore-blog" href="#">Đọc thêm</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="box-blog">
                        <div class="blog-img">
                            <a href="chitietbaiviet.html">
                                <img src="../../../shop/image/blog2.jpg" width="100%">
                            </a>
                        </div>
                        <div class="blog-content">
                            <a href="chitietbaiviet.html"> Giá rau củ tăng mạnh vì trời mưa </a>
                            <p> Khoảng 1 tuần gần đây, do ảnh hưởng của những cơn mưa kéo dài liên tiếp nên ...</p>
                            <div class="day-blog" style="margin: 5px 0;">
                                <span class="post-time">
                                    <i class="fa fa-user" aria-hidden="true"></i> Bởi sơn
                                </span>
                                <span class="short-time">
                                    <i class="fa fa-calendar" aria-hidden="true"></i> 14/10/2019
                                </span>
                            </div>
                            <a href="#" class="viewmore-blog" href="#">Đọc thêm</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="box-blog">
                        <div class="blog-img">
                            <a href="chitietbaiviet.html">
                                <img src="../../../shop/image/blog3.jpg" width="100%">
                            </a>
                        </div>
                        <div class="blog-content">
                            <a href="chitietbaiviet.html"> Giá rau củ tăng mạnh vì trời mưa </a>
                            <p> Khoảng 1 tuần gần đây, do ảnh hưởng của những cơn mưa kéo dài liên tiếp nên ...</p>
                            <div class="day-blog" style="margin: 5px 0;">
                                <span class="post-time">
                                    <i class="fa fa-user" aria-hidden="true"></i> Bởi sơn
                                </span>
                                <span class="short-time">
                                    <i class="fa fa-calendar" aria-hidden="true"></i> 14/10/2019
                                </span>
                            </div>
                            <a href="#" class="viewmore-blog" href="#">Đọc thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Brands -->
    <div class="main-brands">
        <div class="container">
            <div class="title-brands">
                <h2 title="top thương hiệu"> Top thương hiệu </h2>
            </div>
            <div class="row task-brands">
                <div class="col-md-2 col-xs-12 col-md-6">
                    <div class="box-brands">
                        <img src="../../../shop/image/brand_1.png" class="img-thumbnail">
                    </div>
                </div>
                <div class="col-md-2 col-xs-12 col-md-6">
                    <div class="box-brands">
                        <img src="../../../shop/image/brand_2.png" class="img-thumbnail">
                    </div>
                </div>
                <div class="col-md-2 col-xs-12 col-md-6">
                    <div class="box-brands">
                        <img src="../../../shop/image/brand_3.png" class="img-thumbnail">
                    </div>
                </div>
                <div class="col-md-2 col-xs-12 col-md-6">
                    <div class="box-brands">
                        <img src="../../../shop/image/brand_4.png" class="img-thumbnail">
                    </div>
                </div>
                <div class="col-md-2 col-xs-12 col-md-6">
                    <div class="box-brands">
                        <img src="../../../shop/image/brand_5.png" class="img-thumbnail">
                    </div>
                </div>
                <div class="col-md-2 col-xs-12 col-md-6">
                    <div class="box-brands">
                        <img src="../../../shop/image/brand_5.png" class="img-thumbnail">
                    </div>
                </div>
                <div class="col-md-2 col-xs-12 col-md-6">
                    <div class="box-brands">
                        <img src="../../../shop/image/brand_5.png" class="img-thumbnail">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main footer -->
    <div class="main-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="box-footer-1">
                        <h2> Về chúng tôi </h2>
                        <div class="box-border"></div>
                        <div class="pulse">
                            <div class="box-footer-style">
                                <a href="home.html">
                                    <img src="../../../shop/image/logo1.png" width="200">
                                </a>
                            </div>
                            <p> Với cửa hàng phục vụ khách hàng một cách chân thành nhất và luôn mang lại cho khách hàng sự tin
                                cậy nhờ luôn thực hiện đúng các cam kết về chất lượng hàng hóa luôn tươi ngon, có nguồn gốc
                                rõ ràng.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box-footer-2">
                        <h2> Giới thiệu </h2>
                        <div class="box-border"></div>
                        <ul class="box-footer-intro">
                            <li>
                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                <a href="home.html">Trang chủ
                                </a>
                            </li>
                            <li>
                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;
                                <a href="introduce.html">Giới thiệu
                                </a>
                            </li>
                            <li>
                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;
                                <a href="product.html">Sản phẩm
                                </a>
                            </li>
                            <li>
                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;
                                <a href="blog.html">Tin tức
                                </a>
                            </li>
                            <li>
                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;
                                <a href="contact.html">Liên hệ
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box-footer-3">
                        <h2> Dịch vụ </h2>
                        <div class="box-border"></div>
                        <ul class="box-footer-intro">
                            <li>
                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;
                                <a href="home.html">Trang chủ
                                </a>
                            </li>
                            <li>
                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;
                                <a href="introduce.html">Giới thiệu
                                </a>
                            </li>
                            <li>
                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;
                                <a href="product.html">Sản phẩm
                                </a>
                            </li>
                            <li>
                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;
                                <a href="blog.html">Tin tức
                                </a>
                            </li>
                            <li>
                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>&nbsp;
                                <a href="contact.html">Liên hệ
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="box-footer-4">
                        <h2> Thông tin liên hệ </h2>
                        <div class="box-border"></div>
                        <ul class="box-footer-intro">
                            <li>
                                <i class="fa fa-phone" aria-hidden="true"></i>&nbsp;
                                <a href="#"> 0968 373 262 </a>
                            </li>
                            <li>
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;
                                <a href="#">thucpham304@gmail.com</a>
                            </li>
                            <li>
                                <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;
                                <a href="#">257 Trần Cung - Hà Nội </a>
                            </li>
                            <li>
                                <a class="style-btn" href="#">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                                <a class="style-btn" href="#">
                                    <i class="fa fa-google" aria-hidden="true"></i>
                                </a>
                                <a class="style-btn" href="#">
                                    <i class="fa fa-twitter-square" aria-hidden="true"></i>
                                </a>
                                <a class="style-btn" href="#">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                                <a class="style-btn" href="#">
                                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                        <img src="../../../shop/image/footer2.png" width="150">
                    </div>
                </div>
            </div>
        </div>
        <div class="end-bottom">
            <div class="container">
                © Bản quyền thuộc về
                <p> NST Fruits</p> | Cung cấp bởi NST Fruits
            </div>
        </div>
    </div>
</body>

<!-- Script Slick -->
<script src="../../../shop/plugins/slick/slick.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.task-products').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autospeed: 1,
            responsive: [
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
            ]
        });
        $('.task-brands').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            autospeed: 10,
            responsive: [
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
            ]
        });
    });
</script>


<!-- Change number -->
<script>
    $('.counter').each(function () {
        var $this = $(this),
            countTo = $this.attr('data-count');

        $({ countNum: $this.text() }).animate({
            countNum: countTo
        },
            {
                duration: 10000,
                easing: 'linear',
                step: function () {
                    $this.text(Math.floor(this.countNum));
                },
                complete: function () {
                    $this.text(this.countNum);
                    //alert('finished');
                }
            });
    });
</script>

</html>