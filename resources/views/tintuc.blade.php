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
                    <h3> {{$cate->name}} </h3>
                    <div class="back-directional">
                        <a href="{{route('trangchu')}}">
                            <a href="{{route('trangchu')}}"> Trang chủ </a>
                        </a> &nbsp;
                        <i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;
                        <a href="{{route('tintuc', ['id' => $cate->id])}}"> {{$cate->name}} </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main blog -->
    <div class="main-content-blog">
        <div class="container">
            <div class="container">
                <h2 title="Tin tức"> Tin Tức </h2>
                <div class="row">
                    @foreach($model as $post)
                    @if($post->status==2)
                    <div class="col-md-4">
                        <div class="box-blog">
                            <div class="blog-img">
                                <a href="{{route('chitietbv', ['id' => $post->id])}}">
                                    <img src="{{$post->image}}" width="100%">
                                </a>
                            </div>
                            <div class="blog-content">
                                <a href="{{route('chitietbv', ['id' => $post->id])}}"> {{$post->title}} </a>
                                <p> {!!Str::limit($post->short_desc, $limit = 100, $end = '...')!!}</p>
                                <div class="day-blog" style="margin: 5px 0;">
                                    <span class="post-time">
                                        <i class="fa fa-user" aria-hidden="true"></i> {{$post->author}}
                                    </span>
                                    <span class="short-time">
                                        <i class="fa fa-calendar" aria-hidden="true"></i> {{$post->date}}
                                    </span>
                                </div>
                                <a href="{{route('chitietbv', ['id' => $post->id])}}" class="viewmore-blog" >Đọc thêm</a>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
                <p style="margin: auto;">{{$model->links()}}</p>
            </div>
        </div>
    </div>

    <!-- Main post banner -->
    <div class="main-banner-post">
        <img src="image/banner-baiviet.png" width="100%">
        <div class="main-banner-post-title">
        </div>
    </div>
    </div>


    <!-- Main footer -->
    @include('shop.brand')

</html>