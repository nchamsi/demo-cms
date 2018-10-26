@extends('templates.index')

@section('asset_header')
    {{--<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">--}}
@endsection

@section('content')
    <div class="m-portlet m-portlet--mobile">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        Quản lý người dùng
                    </h3>
                </div>
            </div>
            <div class="m-portlet__head-tools">
                <ul class="m-portlet__nav">
                    <li class="m-portlet__nav-item">
                        <a href="javascript:;"  class="btn btn-accent m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air" data-toggle="modal" data-target="#user-modal">
						<span>
							<i class="la la-plus"></i>
							<span>Thêm người dùng</span>
						</span>
                        </a>
                    </li>
                    <li class="m-portlet__nav-item"></li>
                </ul>
            </div>
        </div>
        <div class="m-portlet__body">
            <!--begin: Datatable -->
            <div id="m_table_1_wrapper" class="dataTables_wrapper no-footer">
                <div class="row">
                    <div class="col-sm-12">
                        <table class="m-table table-striped table-hover dataTable no-footer" id="m_user_table" style="width: 1150px;">
                            <thead>
                            <tr>
                                <td>#</td>
                                <td>Tên tài khoản</td>
                                <td>Nhóm người dùng</td>
                                <td>Đang hoạt động</td>
                                <td>Hành động</td>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{--<user-modal :id="'user-modal'" :roles="roles" :editing="false"></user-modal>--}}
    {{--<user-modal :id="'user-modal'" :roles="roles" :editing="false"></user-modal>--}}
@endsection

@section('asset_footer')
    {{--<script src="{{url('/')}}/js/admin.users.js"></script>--}}
@endsection
