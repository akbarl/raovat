@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>{{$thread['title']}}</h3></div>

                <div class="panel-body">
					<div class="row col-md-12">
						<div class="col-md-3 col-xs-3 text-primary">Ngày Đăng</div>
						<div class="col-md-3 col-xs-3">{{$thread['created_at']}}</div>
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
							{{$user['name']}}
						</div>
					</div>
						
						
                </div>
            </div>
			
			<div class="panel panel-default">
				<div class="panel-body">
				{{$thread['description']}}
				</div>
			</div>
        </div>
		<div class="container">
		<div class="row">
			<div class="col-md-2">

					<button type="button" class="btn btn-success col-md-12 col-sm-12 col-xs-12"><i class="fa fa-phone" aria-hidden="false"></i> &nbsp; Gọi ngay</button>
				<hr>
					<button type="button" class="btn btn-success col-md-12 col-sm-12 col-xs-12"><i class="fa fa-envelope" aria-hidden="false"></i> &nbsp; Gửi email</button>
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
		</div>
		</div>
    </div>
	
	
</div>

@endsection
