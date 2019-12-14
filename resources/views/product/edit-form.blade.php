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
            <i class="fa fa-home"></i>
            <a href="{{route('home')}}">Sản phẩm</a>
            <i class="fa fa-angle-right"></i>
          </li>
        </ul>
      </div>
      <!-- END PAGE HEADER-->
      <!-- BEGIN DASHBOARD STATS -->
		<div class="row">
			<div class="portlet light">
	<div class="portlet-title">
		<div class="caption font-red-sunglo">
			<span class="caption-subject bold uppercase">Sửa sản phẩm</span>
		</div>
	</div>
	<div class="portlet-body form" style="height: auto;">
		<form action="{{route('product.edit', ['id' => $model->id])}}" method="post" enctype="multipart/form-data">
			@csrf
			<div class="form-body">
				<div class="form-group form-md-line-input has-success form-md-floating">
					<div class="input">
						<input type="text" name="name" value="{{old('name', $model->name)}}" class="form-control">
						<label>Tên sản phẩm</label>
						@if($errors->first('name'))
						<span class="text-danger">{{$errors->first('name')}}</span>
						@endif
					</div>
				</div>
				<div class="form-group form-md-line-input ">
					<div class="row">
						<div class="col-md-6">
							<div class="input-icon right">
								<input type="file"  value="" id="product_image" name="image" value="" class="form-control">
							</div>
							@if($errors->first('image'))
							<span class="text-danger">{{$errors->first('image')}}</span>
							@endif
						</div>
						
						<div class="col-md-6">
							<div class="input-icon right">
								<img id="imageTarget" class="img-responsive" src="../../{{old('image', $model->image)}}" style="height: 200px;">
							</div>
						</div>
					</div>
				</div>
				<div class="form-group form-md-line-input has-success form-md-floating">
					<div class="input-icon right">
						<input type="text" name="price" value="{{old('price', $model->price)}}" class="form-control">
						<label for="form_control_1">Giá niêm yết sản phẩm</label>
						@if($errors->first('price'))
						<span class="text-danger">{{$errors->first('list_price')}}</span>
						@endif
					</div>
				</div>
				<div class="form-group form-md-line-input has-success form-md-floating">
					<div class="input-icon right">
						<input type="text" name="sell_price" value="{{old('sell_price', $model->sell_price)}}" class="form-control">
						<label for="form_control_1">Giá khuyến mãi</label>
						@if($errors->first('sell_price'))
						<span class="text-danger">{{$errors->first('sell_price')}}</span>
						@endif
					</div>
				</div>
				<div class="form-group form-md-line-input has-success form-md-floating">
					<div class="input-icon right">
						<input type="text" name="short_desc" value="{{old('short_desc', $model->short_desc)}}" class="form-control">
						<label for="form_control_1">Mô tả sản phẩm</label>
						@if($errors->first('short_desc'))
						<span class="text-danger">{{$errors->first('short_desc')}}</span>
						@endif
					</div>
				</div>
				<div class="form-group form-md-line-input has-success form-md-floating-label">
					<div class="input-icon right">
						<textarea id="demo" class="form-control cheditor" rows="5" name="description">{{old('description', $model->description)}}</textarea>
						<span class="help-block">Mời bạn nhập nội dung chi tiết sản phẩm</span>
						<script type="text/javascript">
							CKEDITOR.replace("demo");
						</script>
					</div>
					@if($errors->first('description'))
					<span class="text-danger">{{$errors->first('description')}}</span>
					@endif
				</div>
				<div class="form-group form-md-line-input has-success form-md-floating">
					<div class="input-icon right">
						<label for="form_control_1">Danh mục</label>
						<select name="category_id" class="form-control">
							@foreach ($cates as $ca)
								<option value="{{$ca->id}}"
									@if($ca->id == $model->category_id)
									selected
									@endif
								>{{$ca->name}}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="form-group form-md-line-input has-success form-md-floating">
					<div class="input-icon right">
						<input type="date" name="expiry_date" value="{{old('expiry_date', $model->expiry_date)}}" class="form-control">
						<label for="form_control_1">Hạn sử dụng</label>
					</div>
				</div>
			</div>
			<div class="form-actions noborder">
				<button type="submit" class="btn btn-primary">Gửi thông tin</button>
				<button type="button" class="btn btn-danger"><a href="{{route('home')}}" style="text-decoration: none; color: #fff;">Quay lại</a></button>
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
