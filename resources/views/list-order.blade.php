@extends('admin_material_design.admin')
@section('styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
    <link rel='stylesheet' type='text/css'
          href='https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css'>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.2.7/css/select.dataTables.min.css">
    <link rel='stylesheet' type='text/css'
          href='https://gyrocode.github.io/jquery-datatables-checkboxes/1.2.10/css/dataTables.checkboxes.css'>
@endsection
@section('content')
    <div class="page-content-wrapper">
        <div class="page-content">
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
                        <a href="{{route('home')}}">Danh sách đơn hàng</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <!-- BEGIN CONDENSED TABLE PORTLET-->
                        <div class="portlet box green">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa fa-picture"></i>Danh sách đơn hàng
                                </div>
                            </div>
                            <div class="portlet-body flip-scroll">
                                <table class="table table-striped " id="listOrders">
                                    <thead class="flip-content">
                                    <tr>
                                        <th>Id</th>
                                        <th>Tên khách hàng</th>
                                        <th>Số điện thoại</th>
                                        <th>Tổng tiền</th>
                                        <th>Địa chỉ</th>
                                        <th>Ngày đặt</th>
                                        <th>Ngày gửi </th>
                                        <th>Trạng thái </th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                        <!-- END CONDENSED TABLE PORTLET-->
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('scripts')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script>
        $(function () {
            listOrders = $('#listOrders').DataTable(
                {
                    dom: 'lifrtBp',
                    processing: true,
                    serverSide: true,
                    ajax: {
                        url: route('orders.getData'),
                    },
                    buttons: [
                        'excel',
                    ],
                    columns: [
                        {data:'id', name: 'id'},
                        {data: 'name', name: 'name'},
                        {data: 'phone_number', name: 'phone_number'},
                        {data: 'total_price',
                            name: 'total_price',
                            render: function(data) {
                                return data+" VNĐ";
                            }
                        },
                        {data: 'order_address', name: 'order_address'},
                        {data: 'order_date', name: 'order_date'},
                        {data: 'sent_date', name: 'sent_date'},
                        {
                            data: 'status',
                            name: 'status',
                            
                        },
                        { "data": "action",
                            "name": "action",
                            "orderable": false,
                            "searchable": false,

                        },
                    ],
                    columnDefs: [
                        {
                            'targets': 0,
                            'checkboxes': {
                                'selectRow': true
                            }
                        }
                    ],
                    "lengthMenu": [[5, 10, 15, -1], [5, 10, 15, "All"]],
                    select: {
                        'style': 'multi'
                    },
                    order: [1, 'asc'],

                }
            );
        });
        $(function() {
            $.getScript("{{asset('js/bootstrap-confirm-delete.js')}}", function(){
                $('.delete').bootstrap_confirm_delete({
                    heading: 'Delete',
                    message: 'Bạn có chắc chắn muốn xóa không?'
                });
            });
        });
    </script>
@endsection
