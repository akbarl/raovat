@extends('layouts.admin')

@section('content')
            <div class="panel panel-default">
                <div class="panel-heading">Cấu hình website</div>

                <div class="panel-body">
					@if(isset($m))
						<div class="alert alert-{{$stt}}">
							{{$m}}
						</div>
					@endif
					<table class="table table-bordered grocery-crud-table table-hover">
						<div style="padding: 0 0 15px 0">
								<a class="btn btn-primary"  href="{{url('admin/setting/create')}}"><i class="fa fa-plus"></i> &nbsp; Thêm cấu hình website </a>
						</div>
						<thead>
							<tr>
								<th>ID</th>
								<th>Mô tả</th>
								<th>Giá trị</th>
								<th>Xóa</th>
							</tr>
						</thead>
						<tbody>
							@foreach($settings as $c)
								<tr>
									<td>{{$c->id}}</td>
									<td>{{$c->description}}</td>
									<td>{{$c->value}}</td>
									<td>
										<a class="btn btn-info" href="{{ url('admin/setting') }}/{{$c->id}}/edit"><i class="fa fa-pencil"></i> &nbsp; Sửa</a>
									</td>
								</tr>
							@endforeach
						</tbody>
					</table>
                </div>
            </div>
@endsection