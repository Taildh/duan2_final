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
      <form action="" method="get">
        <div class="row">
          <div class="col-md-12">
            <div class="col-md-3"></div>
            <div class="col-md-9">
              <div class="col-md-7">
                <input style="border: 1px solid" class="nav-item form-control mr-sm-2" type="text" name="keyword" placeholder="Tìm kiếm.....">
              </div>
              <div class="col-md-2">
                <button class="btn btn-sx yellow"><i class="fa fa-search"></i> Search</button>
              </div>
            </div>
            <div class="col-md-3"></div>
          </div>
        </div>
      </form>
<div class="row">
  <div class="col-md-12">
        <div class="col-md-12">
          <!-- BEGIN CONDENSED TABLE PORTLET-->
          <div class="portlet box green">
            <div class="portlet-title">
              <div class="caption">
                <i class="fa fa-picture"></i>Danh sách slide show
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
                     Tên sự kiện
                  </th>
                  <th>
                     Mô tả sự kiện
                  </th>
                  <th>
                     Trạng thái
                  </th>
                  <th>
                     <a href="{{route('slideshow.add')}}" class="btn btn-primary">
                      <i class="fa fa-plus"></i> Thêm</a>
                  </th>
                </tr>
              </thead>
              @foreach($slide as $sl)
              <tbody>
              <tr>
                  <td>
                     {{$sl->id}}
                  </td>
                  <td>
                      {{$sl->name}}
                  </td>
                  <td>
                      {{$sl->description}}
                  </td>
                  <td>
                     @if($sl->status == 0)
                       <p class="btn btn-warning">Ẩn slideshow</p>
                      @elseif($sl->status == 1)
                       <p class="btn btn-success">Hiển thị</p>
                      @endif
                  </td>
                  <td>
                    <a href="{{route('imageSlide', ['id' => $sl->id])}}" class="btn btn-info">
                    <i class="fa fa-edit"></i> List ảnh slide </a>
                    <a href="{{route('slideshow.edit', ['id' => $sl->id])}}" class="btn btn-success">
                    <i class="fa fa-edit"></i> Sửa </a>
                    <a href="javascript:;" linkurl="{{route('slideshow.remove', ['id' => $sl->id])}}" class="btn btn-danger xoa">
                    <i class="fa fa-trash-o"></i> Xóa </a>
                  </td>
                </tr>
              </tbody>
              @endforeach
              <tr>
                <td colspan="5" class="text-center">{{$slide->links()}}</td>
              </tr>
              </table>
          </div>
                  </div>
                  <!-- END CONDENSED TABLE PORTLET-->
                </div>
          </div>
      </div>

    </div>
</div>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">
  $('.xoa').on('click', function(){
    var removeUrl = $(this).attr('linkurl');
    swal({
      title: "Cảnh báo",
      text: "Bạn có chắc chắn muốn xoá danh mục này không?",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        window.location.href = removeUrl;
      } 
    });
  });
</script>
@endsection();