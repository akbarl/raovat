@extends('layouts.admin')

@section('content')
            <div class="panel panel-default">
                <div class="panel-heading">Bài viết</div>

                <div class="panel-body">
					@if($m)
						<div class="alert alert-{{$stt}}">
							{{$m}}
						</div>
					@endif
					
					<form class="form-horizontal" role="form" action="{{ url('admin/thread') }}">
						{{ csrf_field() }}
						<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
							<label for="content" class="col-md-4 control-label">Tìm kiếm theo</label>
							<div class="col-md-6">
								<select name="type" class="form-control">
									<option value="1">ID</option>
									<option value="2">Tiêu đề</option>
									<option value="3">Tên người dùng</option>
									<option value="4">ID người dùng</option>
								</select>
							</div>
						</div>
						
						<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
							<label for="content" class="col-md-4 control-label">Nội dung tìm kiếm</label>
							<div class="col-md-6">
								<input id="content" type="text" class="form-control" name="content" value="{{old('content')}}" required autofocus>

								@if ($errors->has('content'))
									<span class="help-block">
										<strong>{{ $errors->first('content') }}</strong>
									</span>
								@endif
							</div>
						</div>
						
						<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
									<button type="submit" class="btn btn-primary">
										Tìm kiếm
									</button>
								</div>
						</div>
					</form>
					
                    <div class="form-group">
						<table class="table table-bordered grocery-crud-table table-hover">
							<thead>
								<tr>
									<th>ID</th>
									<th class="col-md-7">Tiêu đề</th>
									<th>ID người đăng</th>
									<th>Sửa</th>
									<th>Xóa</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($threads as $thread)
									<tr>
										<td>{{ $thread->id}}</td>
										<td>{{ $thread->title}}</td>
										<td>{{ $thread->user_id}}</td>
										<td>
											<a class="btn btn-info" href="{{ url('admin/thread') }}/{{$thread->id}}/edit"><i class="fa fa-pencil"></i> Sửa</a>
										</td>
										<td>
										<form class="form-horizontal" role="form" method="POST" action="{{ url('admin/thread') }}/{{$thread->id}}">
											{{ csrf_field() }}
											{{ method_field('DELETE') }}
											<button type="submit" class="btn btn-danger">
												<i class="fa fa-pencil"></i> Xóa
											</button>
										</form>
									</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
                </div>
            </div>
@endsection
