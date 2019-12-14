<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Chi tiết sản phẩm </title>

    @include('shop.script')
    
</head>

<body>
    <!-- Main-Header -->
    <!-- <div class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="header-static">
                        <ul>
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <li>
                                <a href="#" title="nst135@gmail.com">thucpham304@gmail.com</a>
                            </li>
                            <li>
                                <a href="#" title="Miễn phí ship cho đơn hàng trên 1tr VND">Miễn phí ship đơn hàng trên 1tr VND</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="header-login">
                        <ul>
                            <li>
                                <a href="#" title="đăng nhập"> Đăng nhập </a>
                            </li>
                            <li>
                                <a href="#" title="đăng kí"> Đăng kí </a>
                            </li>
                            <a href="cart.html">
                                <i class="fa fa-cart-plus" aria-hidden="true"></i>
                            </a>
                        </ul>
                    </div>
                </div>
            </div>
        </div> -->

     <div class="main-header">
        @include('shop.header')
    </div>

    <!-- Breadcrumb background  -->
    <div class="bread-crumb-background">
        <div class="container-fluid">
            <div class="directional">
                <div class="container">
                    <h3> Giới thiệu </h3>
                    <div class="back-directional">
                        <a href="home.html">
                            <a href="{{route('trangchu')}}"> Trang chủ </a>
                        </a> &nbsp;
                        <i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;
                        <a href="{{route('gioithieu')}}"> Giới thiệu </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main introduce -->
    <div class="main-introduce">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="box-introduce">
                        <img src="../../../shop/image/introduce1.jpg" width="100%">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="box-text">
                        <p>Organic Food là công ty thương mại điện tử chuyên cung cấp các thực phẩm hữu cơ và tự nhiên với chuỗi
                            cửa hàng thực phẩm hữu cơ với mục tiêu giúp người tiêu dùng Việt Nam có một cuộc sống khỏe mạnh
                            hơn thông qua những loại thực phẩm hữu cơ có chứng nhận, thực phẩm tự nhiên và không có nguồn
                            gốc biến đổi gene (GMO).
                            <br>
                            <br> Chúng tôi lựa chọn các loại thực phẩm hữu cơ, thực phẩm tự nhiên từ các nhà sản xuất, các công
                            ty trong và ngoài nước thông qua quá trình lựa chọn kỹ càng về khả năng cung ứng, các giấy chứng
                            nhận tiêu chuẩn do các tổ chức uy tín thế giới cấp.
                            <br>
                            <br>Chúng tôi yêu thích những gì chúng tôi làm và chúng tôi đam mê những lợi ích của một lối sống
                            lành mạnh, tìm nguồn cung cấp sản phẩm hữu cơ chất lượng cao nhất cho khách hàng và cung cấp
                            dịch vụ giao hàng tận nhà tốt nhất. Chúng tôi hoàn toàn tin tưởng rằng những sản phẩm tạo ra
                            từ quá trình canh tác và sản xuất theo phương thức hữu cơ và tự nhiên tốt cho cơ thể mọi người,
                            tốt hơn cho cộng đồng và tốt hơn cho hành tinh mà chúng ta đang sống.
                            <br>
                            <br> Một lần nữa, Organic Food Fruit được sáng lập bởi các nhà sáng lập muốn tạo dựng một cộng đồng
                            thực phẩm sạch, dựa trên nền tảng hữu cơ (organic) và thuần từ thiên nhiên, nhằm mang lại sức
                            khoẻ tốt nhất cho cộng đồng !
                            <br>
                            <br> Sứ mệnh của Cool Organic đó là giúp mọi người dễ dàng tiếp cận hơn với các loại thực phẩm hữu
                            cơ, thực phẩm tự nhiên. Không chỉ cung cấp các sản phẩm hữu cơ, chúng tôi còn đem đến những thông
                            tin hữu ích về sức khỏe mà thực phẩm hữu cơ đem lại cho con người và cộng đồng. Mỗi người có
                            nhu cầu và cách tiếp cận với thực phẩm hữu cơ, thực phẩm tự nhiên theo một cách khác nhau, vì
                            vậy, chúng tôi có mặt ở đây để hỗ trợ bạn bằng cách: Chỉ cung cấp những loại thực phẩm hữu cơ,
                            thực phẩm tự nhiên đạt những chứng nhận uy tín nói chung và được kiểm chứng bởi Cool Organic
                            nói riêng. Khởi tạo những mối quan hệ tích cực, lâu dài và tin tưởng giữa Cool Organic với khách
                            hàng, nhân viên, nhà cung cấp và cộng đồng.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main footer -->
    @include('shop.brand')

</html>