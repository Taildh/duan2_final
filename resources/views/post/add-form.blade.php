@extends('admin_material_design.admin')
@section('content')
<div class="page-content-wrapper">
    <div class="page-content">
      <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
      <!-- /.modal -->
      <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->     <!-- BEGIN PAGE HEADER-->
      <h3 class="page-title">
      Coolorganic <small>thực phẩm sạch</small>
      </h3>
      <div class="page-bar">
        <ul class="page-breadcrumb">
          <li>
            <i class="fa fa-home"></i>
            <a href="{{route('homeadmin')}}">Trang chủ</a>
            <i class="fa fa-angle-right"></i>
          </li>
          <li>
            <a href="{{route('adminsuper')}}">Sản phẩm</a>
          </li>
        </ul>
      </div>
      <!-- END PAGE HEADER-->
      <!-- BEGIN DASHBOARD STATS -->
		<div class="row">\
			<div class="portlet light">
	<div class="portlet-title">
		<div class="caption font-red-sunglo">
			<span class="caption-subject bold uppercase">Thêm bài viết</span>
		</div>
	</div>
	<div class="portlet-body form" style="height: auto;">
		<form action="{{route('post.add')}}" method="post" enctype="multipart/form-data">
			@csrf
			<div class="form-body">
				<div class="form-group form-md-line-input has-success form-md-floating-label">
					<div class="input">
						<input type="text" name="title" value="" class="form-control">
						<label for="form_control_1">Tên bài viết</label>
						@if($errors->first('title'))
						<span class="text-danger">{{$errors->first('title')}}</span>
						@endif
					</div>
				</div>
				<div class="form-group form-md-line-input ">
					<div class="row">
						<div class="col-md-6">
							<div class="input-icon right">
								<input type="file" id="product_image" name="image" value="" class="form-control">
							</div>
							@if($errors->first('image'))
								<span class="text-danger">{{$errors->first('image')}}</span>
							@endif
						</div>
						<div class="col-md-6">
							<div class="input-icon right">
								<img id="imageTarget" class="img-responsive" src="{{ asset('admin/assets/admin/layout/img/default.png')}}" style="height: 200px;">
							</div>
						</div>
					</div>
				</div>
				<div class="form-group form-md-line-input has-success form-md-floating-label">
					<div class="input-icon right">
						<input type="text" name="short_desc" value="" class="form-control">
						<label for="form_control_1">Nội dung tóm tắt bài viết</label>
						@if($errors->first('short_desc'))
						<span class="text-danger">{{$errors->first('short_desc')}}</span>
						@endif
					</div>
				</div>
				<!-- <div class="form-group form-md-line-input has-success form-md-floating-label">
					<div class="input-icon right">
						<input type="text" name="description" value="" class="form-control">
						<label for="form_control_1">Chi tiết nội dung bài viết</label>
						<span class="help-block">Mời bạn nhập chi tiết nội dung bài viết</span>
						<i class="icon-user"></i>
					</div>
				</div> -->
				<span class="form_control">Nội dung chi tiết bài viết:</span>
				<div class="form-group form-md-line-input has-success form-md-floating-label">
					<div class="input-icon right">
						<textarea id="demo" class="form-control cheditor" rows="5" value="" name="description" style="margin-top: 10px;"></textarea>
						<script type="text/javascript">
							CKEDITOR.replace("demo", {
					          uiColor: '#14B8C4',
					       });
						</script>
					</div>
					@if($errors->first('description'))
					<span class="text-danger">{{$errors->first('description')}}</span>
					@endif
				</div>
					<input type="hidden" name="views" value="0" class="form-control">
				</div>
				<div class="form-group form-md-line-input has-success form-md-floating-label">
					<div class="input-icon right">
						<label for="form_control_1">Danh mục bài viết</label>
						<select name="category_post_id" class="form-control">
							@foreach ($category_post as $ca)
							<option value="{{$ca->id}}">{{$ca->name}}</option>
							@endforeach
						</select>
					</div>
				</div>
				
				<!-- div class="form-group form-md-line-input has-success form-md-floating-label">
					<div class="input-icon right">
						<input type="text" name="date" value="" class="form-control">
						<label for="form_control_1">Ngày xuất bản</label>
						<span class="help-block">Mời bạn nhập ngày xuất bản</span>
						<i class="icon-user"></i>
					</div>
				</div>
 				-->
				<div class="form-group form-md-line-input has-success form-md-floating-label">
					<div class="input-icon right">
						<input type="text" name="author" value="" class="form-control">
						<label for="form_control_1">Tác giả bài viết</label>
						@if($errors->first('author'))
						<span class="text-danger">{{$errors->first('author')}}</span>
						@endif
					</div>
				</div>
				<input type="hidden" value="1" name="status">
			</div>
			<div class="form-actions noborder">
				<button type="submit" class="btn btn-primary">Gửi thông tin</button>
				<button type="button" class="btn btn-danger"><a href="{{route('homepost')}}" style="text-decoration: none; color: #fff;">Quay lại</a></button>
			</div>
		</form>
	</div>
</div>
		</div>
	</div>
</div>
<script type="text/javascript">
 
  function getBase64(file, selector) {
     var reader = new FileReader();
     reader.readAsDataURL(file);
     reader.onload = function () {
      $(selector).attr('src', reader.result);
     };
     reader.onerror = function (error) {
       console.log('Error: ', error);
     };
  }
  var img = document.querySelector('#product_image');
  img.onchange = function(){
    var file = this.files[0];
    if(file == undefined){
      $('#imageTarget').attr('src', "{{ asset('admin/assets/admin/layout/img/default.png')}}");
    }else{
      getBase64(file, '#imageTarget');
    }
  }
</script>
@endsection();
