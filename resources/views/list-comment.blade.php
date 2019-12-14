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
            <a href="{{route('homecommentbv')}}">Bình luận bài viết</a>
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
                  <i class="fa fa-picture"></i>Danh sách bình luận
                </div>
              </div>
              <div class="portlet-body flip-scroll">
                <table class="table table-bordered table-striped table-condensed flip-content">
                <thead class="flip-content">
                <tr>
                    <th>
                       ID
                    </th>
                    <th>
                       Tên khách hàng
                    </th>
                    <th>
                       Nội dung bình luận
                    </th>
                    <th>
                       Bài viết
                    </th>
                    <th>
                       Trạng thái
                    </th>
                    <th>
                    </th>
                  </tr>
                </thead>
                @foreach($binhluan as $lh)
                @if($lh->post_id != "")
                <tbody>
                <tr>
                    <td>
                       {{$lh->id}}
                    </td>
                    <td>
                       {{$lh->name}}
                    </td>
                    <td>
                       {{$lh->comment}}
                    </td>
                    <td>
                     @isset($lh->commentpost->title)
                        {{$lh->commentpost->title}}
                     @endisset
                    </td>
                    <td>
                      @if($lh->status == 0)
                       <p class="btn btn-warning">Ẩn bình luận</p>
                      @elseif($lh->status == 1)
                       <p class="btn btn-success">Hiển thị bình luận</p>
                      @endif
                    </td>
                    <td>
                      <a href="javascript:;" linkurl="{{route('homecommentbv.remove', ['id' => $lh->id])}}" class="btn default btn-xs red xoa">
                      <i class="fa fa-trash-o"></i> Xóa </a>
                    </td>
                  </tr>
                </tbody>
                @endif
                @endforeach
                <tr>
                  <td colspan="13" class="text-center">{{$binhluan->links()}}</td>
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
@endsection();