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

    <!-- Main-Slide -->
    <div class="main-slide">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <?php $i=0; ?>
            @foreach($slideshow as $sl)
            @if($sl->status == 1)
            <li data-target="#carouselExampleIndicators" data-slide-to="{{$i}}"

            @if($i == 0)
            class="active"
            @endif
            ></li>
            <?php $i++; ?>
            @endif
            @endforeach
          </ol>
          <div class="carousel-inner">
            <?php $i=0; ?>
            @foreach($slideshow as $sl)
            @if($sl->status == 1)
            <div
            @if($i == 0)
            class="carousel-item active"
            @else
            class="carousel-item"
            @endif
            >
            <?php $i++; ?>
              <img class="d-block w-100" src="{{$sl->image}}" alt="First slide">
            </div>
            @endif
            @endforeach

          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
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
                 @foreach($model as $spnb)
                <div class="col-md-4">
                    <div class="detail-category-products">
                        <div class="category-products-img">
                            <a href="{{route('chitietsp', ['id' => $spnb->id])}}">
                                <img src="{{$spnb->image}}" width="100%">
                            </a>
                        </div>
                        <div class="overlay">
                            <a href="{{route('chitietsp', ['id' => $spnb->id])}}" class="icon one" title="Xem chi tiết">
                                <i style="font-size: 14px;" class="fa fa-search" aria-hidden="true"></i>
                            </a>
                            <a href="{{ url('add-to-cart/'.$spnb->id) }}" class="icon two" title="Giỏ hàng">
                                <i style="font-size: 14px;" class="fa fa-cart-plus" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="category-products-information">
                            <div class="category-products-name">
                                <a href="{{route('chitietsp', ['id' => $spnb->id])}}">
                                    <span style="display: inline-block; font-weight: bold;"> {{$spnb->name}} </span>
                                </a>
                            </div>
                            <div class="category-products-price">
                                <span> {{number_format($spnb->sell_price)}} VNĐ<span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="row task-products">
                 @foreach($model2 as $spnb)
                <div class="col-md-4">
                    <div class="detail-category-products">
                        <div class="category-products-img">
                            <a href="{{route('chitietsp', ['id' => $spnb->id])}}">
                                <img src="{{$spnb->image}}" width="100%">
                            </a>
                        </div>
                        <div class="overlay">
                            <a href="{{route('chitietsp', ['id' => $spnb->id])}}" class="icon one" title="Xem chi tiết">
                                <i style="font-size: 14px;" class="fa fa-search" aria-hidden="true"></i>
                            </a>
                            <a href="{{ url('add-to-cart/'.$spnb->id) }}" class="icon two" title="Giỏ hàng">
                                <i style="font-size: 14px;" class="fa fa-cart-plus" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="category-products-information">
                            <div class="category-products-name">
                                <a href="{{route('chitietsp', ['id' => $spnb->id])}}">
                                    <span style="display: inline-block; font-weight: bold;"> {{$spnb->name}} </span>
                                </a>
                            </div>
                            <div class="category-products-price">
                                <span> {{number_format($spnb->sell_price)}} VNĐ<span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
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
                @foreach($model as $spkm)
                <div class="col-md-4">
                    <div class="media">
                        <div class="">
                            <a href="{{route('chitietsp', ['id' => $spkm->id])}}">
                                <img src="{{$spkm->image}}" class="mr-3" alt="" width="100" class="responsive">
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="{{route('chitietsp', ['id' => $spkm->id])}}">
                                <p class="mt-2" style="font-weight: bold;"> {{$spkm->name}} </p>
                            </a>
                            <span style="color: #3b9048; font-size: 16px;">
                                <strike style="padding: 0 10px; color: #acacac;">
                                   {{number_format($spkm->price)}} VNĐ
                                </strike>
                            </span>

                                {{number_format($spkm->sell_price)}} VNĐ
                        </div>
                    </div>
                </div>
                @endforeach
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
                @foreach($post as $bv)
                <div class="col-md-4">
                    <div class="box-blog">
                        <div class="blog-img">
                            <a href="{{route('chitietbv', ['id' => $bv->id])}}">
                                <img src="{{$bv->image}}" width="100%">
                            </a>
                        </div>
                        <div class="blog-content">
                            <a href="{{route('chitietbv', ['id' => $bv->id])}}"> {{$bv->title}} </a>
                            <p> {!!Str::limit($bv->short_desc, $limit = 100, $end = '...')!!}</p>
                            <div class="day-blog" style="margin: 5px 0;">
                                <span class="post-time">
                                    <i class="fa fa-user" aria-hidden="true"></i> Bởi {{$bv->author}}
                                </span>
                                <span class="short-time">
                                    <i class="fa fa-calendar" aria-hidden="true"></i> {{$bv->date}}
                                </span>
                            </div>
                            <a class="viewmore-blog" href="{{route('chitietbv', ['id' => $bv->id])}}">Đọc thêm</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@include('shop.brand')

</html>
