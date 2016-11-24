@extends('layouts.admin')

@section('content')
            <div class="panel panel-default">
                <div class="panel-heading">Danh sách bài viết</div>

                <div class="panel-body">
					@if($m)
						<div class="alert alert-{{$stt}}">
							{{$m}}
						</div>
					@endif
                    <div class="form-group">
						<table class="table table-bordered grocery-crud-table table-hover">
							<thead>
								<tr>
									<th>ID</th>
									<th class="col-md-7">Tiêu đề</th>
									<th>ID người đăng</th>
									<th>Chấp nhận</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($threads as $thread)
									<tr>
										<td>{{ $thread->id}}</td>
										<td><a href="/thread/{{$thread->id}}">{{ $thread->title}}</a></td>
										<td>{{ $thread->user_id}}</td>
										
										<td>
										<form class="form-horizontal" role="form" method="POST" action="{{ url('admin/approval') }}/{{$thread->id}}">
											{{ csrf_field() }}
											{{ method_field('PUT') }}
											@if($thread->approval)
												<button type="submit" class="btn btn-danger">
													<i class="fa fa-close"></i> Hủy chấp nhận
												</button>
											@else
												<button type="submit" class="btn btn-success">
													<i class="fa fa-check"></i> Chấp nhận
												</button>
											@endif
										</form>
									</td>
									</tr>
								@endforeach
							</tbody>
						</table>
						<div class="pagination"> {{ $threads->links() }} </div>
					</div>
                </div>
            </div>
@endsection
