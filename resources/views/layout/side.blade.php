<ul class="page-sidebar-menu page-sidebar-menu-light" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
				<li class="sidebar-search-wrapper">
					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
					<!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
					<!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				</li>
				<li class="start active open">
					<a href="{{route('homeadmin')}}">
					<i class="icon-home"></i>
					<span class="title">Coolorganic</span>
					</a>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-basket"></i>
					<span class="title">Quản lý sản phẩm</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="{{route('home')}}">
							<i class="fa fa-list"></i>
							Danh sách sản phẩm</a>
						</li>
						<li>
							<a href="{{route('product.add')}}">
							<i class="fa fa-plus-square"></i>
							Thêm sản phẩm</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="fa fa-users"></i>
					<span class="title">Quản lý tài khoản</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="{{route('adminsuper')}}">
							<i class="fa fa-list"></i>
							Danh sách tài khoản</a>
						</li>
						<li>
							<a href="{{route('user.add')}}">
							<i class="fa fa-plus-square"></i>
							Thêm tài khoản</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="fa fa-shopping-cart"></i>
					<span class="title">Quản lý đơn hàng</span>
					<span class="arrow"></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="{{route('homecart')}}">
							<i class="fa fa-list"></i>
							Danh sách đơn hàng</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="fa  fa-picture-o"></i>
					<span class="title">Quản lý slideshow</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="{{route('homeslide')}}">
							<i class="fa fa-list"></i>
							Danh sách slideshow</a>
						</li>
						<li>
							<a href="{{route('homeslideimg')}}">
							<i class="icon-basket"></i>
							Ảnh slide show</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="fa fa-book"></i>
					<span class="title">Quản lý danh mục</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="{{route('homehome')}}">
							<i class="fa fa-list"></i>
							Danh sách danh mục</a>
						</li>
						<li>
							<a href="{{route('category.add')}}">
							<i class="fa fa-plus-square"></i>
							Thêm danh mục</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="fa fa-folder-o"></i>
					<span class="title">Quản lý bài viết</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="{{route('homepost')}}">
							<i class="fa fa-list"></i>
							Danh sách bài viết</a>
						</li>
						<li>
							<a href="{{route('post.add')}}">
							<i class="fa fa-plus-square"></i>
							Thêm bài viết</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="fa fa-send"></i>
					<span class="title">Quản lý liên hệ</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="{{route('homecontact')}}">
							<i class="fa fa-list"></i>
							Danh sách liên hệ</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="fa  fa-comments"></i>
					<span class="title">Bình luận, đánh giá</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="{{route('homecommentbv')}}">
							<i class="fa fa-list"></i>
							Bình luận bài viết</a>
						</li>
						<li>
							<a href="{{route('homecommentpro')}}">
							<i class="fa fa-list"></i>
							Đánh giá sản phẩm</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="fa fa-sitemap"></i>
					<span class="title">Quản lý mã giảm giá</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="{{route('homeevent')}}">
							<i class="fa fa-list"></i>
							Danh sách mã giảm giá</a>
						</li>
						<li>
							<a href="{{route('event.add')}}">
							<i class="fa fa-plus-square"></i>
							Thêm mã giảm giá</a>
						</li>
					</ul>
				</li>
			</ul>