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
    <div class="col-md-12">
          <div class="col-md-12">
            <!-- BEGIN CONDENSED TABLE PORTLET-->
            <div class="portlet box green">
              <div class="portlet-title">
                <div class="caption">
                  <i class="fa fa-picture"></i>Danh sách liên hệ
                </div>
                </div>
              </div>
              <div class="portlet-body flip-scroll">
                <table class="table table-striped ">
                <thead class="flip-content">
                <tr>
                    <th>
                       ID
                    </th>
                    <th>
                       ID Đơn hàng
                    </th>
                    <th>
                       Tên sản phẩm
                    </th>
                    <th>
                       Ảnh sản phẩm
                    </th>
                    <th>
                       Đơn giá
                    </th>
                    <th>
                       Số lượng
                    </th>
                    <th>
                      Thành tiền
                    </th>
                  </tr>
                </thead>
                @foreach($model as $lh)
                <tbody>
                <tr>
                    <td>
                       {{$lh->id}}
                    </td>
                    <td>
                       {{$lh->order_id}}
                    </td>
                    <td>
                       @isset($lh->pro->name)
                        {{$lh->pro->name}}
                       @endisset
                    </td>
                    <td style="width: 200px;">
                       <img src="{{$lh->image}}" style="width: 200px;">
                    </td>
                    <td>
                        {{$lh->price}}
                    </td>
                    <td>
                        {{$lh->quantity}}
                    </td>
                    <td>
                        {{$lh->price * $lh->quantity}}
                    </td>
                  </tr>
                </tbody>
                @endforeach
                </table>
            </div>
            </div>
            <!-- END CONDENSED TABLE PORTLET-->
          </div>
    </div>
  </div>
  </div>
</div>
@endsection();