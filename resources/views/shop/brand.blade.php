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
 @include('sweetalert::alert')
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
