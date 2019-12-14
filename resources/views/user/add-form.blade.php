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
            <a href="{{route('adminsuper')}}">Tài khoản</a>
          </li>
        </ul>
      </div>
      <!-- END PAGE HEADER-->
      <!-- BEGIN DASHBOARD STATS -->
		<div class="row">
			<div class="portlet light">
				<div class="portlet-title">
					<div class="caption font-red-sunglo">
						<span class="caption-subject bold uppercase">Thêm tài khoản</span>
					</div>
					
				</div>
				<div class="portlet-body form" style="height: auto;">
					<form action="{{route('user.add')}}" method="post" enctype="multipart/form-data">
						@csrf
						<div class="form-body">
							<div class="form-group form-md-line-input has-success form-md-floating-label">
								<div class="input-icon right">
									<input type="text" name="name" value="" class="form-control">
									<label for="form_control_1">Tên tài khoản</label>
									<span class="help-block">Mời bạn nhập tên tài khoản</span>
									 
								</div>
							</div>
							<div class="form-group form-md-line-input has-success form-md-floating-label">
								<div class="input-icon right">
									<input type="file" name="image" value="" class="form-control">
									<span class="help-block">Mời bạn nhập ảnh đại diện</span>
									 
								</div>
							</div>
							<div class="form-group form-md-line-input has-success form-md-floating-label">
								<div class="input-icon right">
									<input type="text" name="email" value="" class="form-control">
									<label for="form_control_1">Email</label>
									<span class="help-block">Mời bạn nhập email</span>
									  
								</div>
							</div>
							<div class="form-group form-md-line-input has-success form-md-floating-label">
								<div class="input-icon right">
									<input type="text" name="phone_number" value="" class="form-control">
									<label for="form_control_1">Số điện thoại</label>
									<span class="help-block">Mời bạn nhập số điện thoại</span>
									  
								</div>
							</div>
							<div class="form-group form-md-line-input has-success form-md-floating-label">
								<div class="input-icon right">
									<input type="text" name="password" value="" class="form-control">
									<label for="form_control_1">Mật khẩu</label>
									<span class="help-block">Mời bạn nhập mật khẩu</span>
									  
								</div>
							</div>
							<div class="form-group form-md-line-input has-success form-md-floating-label">
								<div class="input-icon right">
									<input type="text" name="cf_password" value="" class="form-control">
									<label for="form_control_1">Nhập lại mật khẩu</label>
									<span class="help-block">Mời bạn nhập lại mật khẩu</span>
									  
								</div>
							</div>
							<div class="form-group form-md-line-input has-success form-md-floating-label">
								<div class="input-icon right">
									<input type="text" name="address" value="" class="form-control">
									<label for="form_control_1">Địa chỉ</label>
									<span class="help-block">Mời bạn nhập địa chỉ</span>
									  
								</div>
							</div>
							<div class="form-group form-md-line-input has-success form-md-floating-label">
								<div class="input-icon right">
									<label for="form_control_1">Giới tính</label>
									<select name="gender" class="form-control">
										<option value="1">Nam</option>
										<option value="2">Nữ</option>
									</select>
									  
								</div>
							</div>
							<div class="form-group form-md-line-input has-success form-md-floating-label">
								<div class="input-icon right">
									<label for="form_control_1">Quyền</label>
									<select name="role" class="form-control">
										<option value="Editor">Editor</option>
										<option value="Shipper">Shipper</option>
									</select>
									  
								</div>
							</div>
						</div>
						<div class="form-actions noborder">
							<button type="submit" class="btn btn-primary">Gửi thông tin</button>
							<button type="button" class="btn btn-danger"><a href="{{route('adminsuper')}}" style="text-decoration: none; color: #fff;">Quay lại</a></button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection();

