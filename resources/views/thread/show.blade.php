@extends('layouts.app')
@extends('menu.category')
@section('content')
        <div class="col-md-7">
			@if($m)
				<div class="alert alert-{{$stt}}">
							{{$m}}
				</div>
			@endif
            <div class="panel panel-default">
                <div class="panel-heading">{{$thread['title']}}</div>

                <div class="panel-body">
					<div class="row col-md-12">
						<div class="col-md-3 col-xs-3 text-primary">Ngày Đăng</div>
						<div class="col-md-3 col-xs-3">{{date('d-m-y h:m:s',strtotime($thread['created_at']))}}</div>
						<div class="col-md-3 col-xs-3 text-primary">Tình Trạng</div>
						<div class="col-md-3 col-xs-3">
							@foreach($conditions as $condition)
								@if($condition->id == $thread['condition'])
									{{$condition->name}}
								@endif
							@endforeach
						</div>
					</div>
					
					<div class="row col-md-12">
						<div class="col-md-3 col-xs-3 text-primary">Vị Trí</div>
						<div class="col-md-3 col-xs-3">
							@foreach($locations as $location)
								@if($location->id == $thread['location'])
									{{$location->name}}
								@endif
							@endforeach
						</div>
						<div class="col-md-3 col-xs-3 text-primary">Người Đăng</div>
						<div class="col-md-3 col-xs-3">
							<a href="/profile/{{$user['id']}}">{{$user['name']}}</a>
						</div>
					</div>
						
						
                </div>
            </div>
			
			<div class="panel panel-default">
				<div class="panel-heading">Chi tiết</div>
				<div class="panel-body">
				{!! nl2br(e($thread['description'])) !!}
				</div>
			</div>
			
			<div class="panel panel-default">
				<div class="panel-heading">Hình ảnh</div>
				<div class="panel-body">
				@if(count($images))
					@foreach($images as $i)
						<img class="img-responsive" src="/uploads/{{$i->name}}"/>
					@endforeach
				@else
						Không có hình ảnh
				@endif
				</div>
			</div>
			
        </div>
		<div class="col-md-2">

				<button type="button" class="btn btn-success col-md-12 col-sm-12 col-xs-12" onclick="showModal('Số điện thoại','{{$user['phone']}}')" data-toggle="modal" data-target="#info"><i class="fa fa-phone" aria-hidden="false"></i> &nbsp; Gọi ngay</button>
			<hr>
				<button type="button" class="btn btn-success col-md-12 col-sm-12 col-xs-12" onclick="showModal('Email','{{$user['email']}}')" data-toggle="modal" data-target="#info"><i class="fa fa-envelope" aria-hidden="false"></i> &nbsp; Gửi email</button>
			<hr>
			<hr>
			@if(Auth::check() && Auth::user()->isAdmin())
			<form class="form-horizontal" role="form" method="POST" action="{{ url('admin/approval') }}/{{$thread['id']}}">
				{{ csrf_field() }}
				{{ method_field('PUT') }}
				@if(!$thread['approval'])
						<button type="submit" class="btn btn-info col-md-12 col-sm-12 col-xs-12 active"><i class="fa fa-check" aria-hidden="true"></i> &nbsp; Duyệt bài nhanh</button>
				@else
						<button type="submit" class="btn btn-danger col-md-12 col-sm-12 col-xs-12 active"><i class="fa fa-close" aria-hidden="true"></i> &nbsp; Bỏ phê duyệt</button>
				@endif
			</form>
			@endif
		</div>
		
		<script>
			function showModal(_title,_content)
			{
				if(_content == "")
					_content = "Không có";
				var info = document.getElementById("info");
				var title = info.getElementsByClassName("modal-title")[0];
				var content = info.getElementsByClassName("modal-body")[0];
				title.innerHTML = _title;
				content.innerHTML = _content;
			}
		</script>
		<!-- Modal -->
		<div id="info" class="modal fade" role="dialog">
		  <div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Modal Header</h4>
			  </div>
			  <div class="modal-body">
				<p>Some text in the modal.</p>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
			  </div>
			</div>

		  </div>
		</div>

@endsection
