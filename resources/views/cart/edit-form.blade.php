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
            <a href="{{route('homecart')}}">Đơn hàng</a>
          </li>
        </ul>
      </div>
      <!-- END PAGE HEADER-->
      <!-- BEGIN DASHBOARD STATS -->
		<div class="row">
			<div class="portlet light">
	<div class="portlet-title">
		<div class="caption font-red-sunglo">
			<span class="caption-subject bold uppercase">Xử lý đơn hàng</span>
		</div>
	</div>
	<div class="portlet-body form" style="height: auto;">
		<form action="{{route('cart.edit', ['id' => $model->id])}}" method="post" enctype="multipart/form-data">
			@csrf
			<div class="form-body">
				<div class="form-group form-md-line-input has-success">
					<div class="input-icon right">
						<label for="form_control_1">Trạng thái đơn hàng</label>
						<select name="status" class="form-control">
							<option value="Đang giao hàng">Đang giao hàng</option>
							<option value="Đã xử lý">Đã xử lý</option>
						</select>
					</div>
				</div>

				<div class="input-icon right">
					<label for="form_control_1">Người giao hàng</label>
					<select name="shipper_id" class="form-control">
						@foreach ($shipper as $sp)
							<option value="{{$sp->id}}"
								@if($sp->id == $model->shipper_id)
									selected
								@endif
								>{{$sp->name}}</option>
						@endforeach
					</select>
				</div>
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
@endsection();
