<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="header-static hidden-xs hidden-sm">
                <ul>
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <li>
                        <a href="#" title="nst135@gmail.com">thucpham304@gmail.com</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-6">
            <div class="header-login">
                <ul>
                    @if(Illuminate\Support\Facades\Auth::check()) 
                    {{ Illuminate\Support\Facades\Auth::user()->name }}
                    <li>
                        <a href="{{route('logoutUser')}}" title="đăng nhập"> Đăng xuất </a>
                    </li>
                    <li>
                        <a href="{{route('info.edit', ['id'=>Illuminate\Support\Facades\Auth::user()->id])}}" title="đổi thông tin"> Đổi thông tin cá nhân </a>
                    </li>
            
                    <li>
                        <a href="{{route('lichsumuahang',['id'=>Illuminate\Support\Facades\Auth::user()->id])}}" > Lịch sử mua hàng </a>
                    </li>

                    @else

                    <li>
                        <a href="{{route('dangnhap.add')}}" title="đăng nhập"> Đăng nhập </a>
                    </li>
                    <li>
                        <a href="{{route('dangki.add')}}" title="đăng kí"> Đăng kí </a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="header-menu">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="{{route('trangchu')}}">
                <img src="../../../shop/image/logo1.png" width="150">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('trangchu')}}">Trang chủ
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('gioithieu')}}">Giới thiệu</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Sản phẩm
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach($category_product as $pr)
                            <a class="dropdown-item" href="{{route('sanpham', ['id' => $pr->id])}}">{{$pr->name}}</a>
                            <div class="dropdown-divider"></div>
                            @endforeach
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Tin tức
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach($category_post as $po)
                            <a class="dropdown-item" href="{{route('tintuc', ['id' => $po->id])}}">{{$po->name}}</a>
                            <div class="dropdown-divider"></div>
                            @endforeach
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('lienhe')}}">Liên hệ</a>
                    </li>
                </ul>
                <div class="col-lg-4 col-sm-12 col-12 main-section">
                    <div class="dropdowns">
                        <button type="button" class="btn btn-info" data-toggle="dropdown">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                        </button>
                        <div class="dropdown-menu">
                            <div class="row total-header-section">
                                <div class="col-lg-6 col-sm-6 col-6">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                                </div>

                                <?php $total = 0 ?>
                                    @foreach((array) session('cart') as $id => $details)
                                    <?php $total += $details['price'] * $details['quantity'] ?>
                                        @endforeach

                                        <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                                            <p>Total: <span class="text-info">{{ $total }} VNĐ</span></p>
                                        </div>
                            </div>

                            @if(session('cart')) @foreach(session('cart') as $id => $details)
                            <div class="row cart-detail">
                                <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                    <img src="{{ $details['photo'] }}" />
                                </div>
                                <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                    <p>{{ $details['name'] }}</p>
                                    <span class="price text-info"> {{ $details['price'] }} VNĐ</span> <span class="count"> Số lượng:{{ $details['quantity'] }}</span>
                                </div>
                            </div>
                            @endforeach @endif
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                    <a href="{{ url('cart') }}" class="btn btn-primary btn-block">Giỏ hàng của bạn</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>