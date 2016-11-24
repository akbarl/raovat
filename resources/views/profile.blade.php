@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-info">
				<div class="panel-heading">Thông tin cá nhân của {{$user['name']}}</div>
                <div class="panel-body">
					<div class="row col-md-12">
						<div class="row">
							<div class="col-md-2 col-xs-2 text-primary">Tên</div>
							<div class="col-md-2 col-xs-2">{{$user['name']}}</div>
							<div class="col-md-2 col-xs-2 text-primary">Email</div>
							<div class="col-md-2 col-xs-2">{{$user['email']}}</div>
						</div>
						<div class="row">
							<div class="col-md-2 col-xs-2 text-primary">Ngày sinh</div>
							<div class="col-md-2 col-xs-2">{{$user['birth']}}</div>
							<div class="col-md-2 col-xs-2 text-primary">Địa chỉ</div>
							<div class="col-md-6 col-xs-6">{{$user['address']}}</div>
						</div>
						
						<div class="row">
							<div class="col-md-2 col-xs-2 text-primary">Giới tính</div>
							@if($user['sex'] == 1)
								<div class="col-md-2 col-xs-2">Nam</div>
							@elseif($user['sex'] == 2)
								<div class="col-md-2 col-xs-2">Nữ</div>
							@else
								<div class="col-md-2 col-xs-2">Không xác định</div>
							@endif
							<div class="col-md-2 col-xs-2 text-primary">Số điện thoại</div>
							<div class="col-md-2 col-xs-2">{{$user['phone']}}</div>
						</div>
						
						<div class="row">
							<div class="col-md-2 col-xs-2 text-primary">Đang sống ở</div>
							<div class="col-md-2 col-xs-2">{{$location}}</div>
							<div class="col-md-2 col-xs-2 text-primary">Ngày tạo</div>
							<div class="col-md-5 col-xs-5">{{date('d-m-y h:m:s',strtotime($user['created_at']))}}</div>
						</div>
					</div>
                </div>
            </div>
			
			<div class="panel panel-info">
				<div class="panel-heading">
					Bài viết gần đây của {{$user['name']}}
				</div>
                <div class="panel-body">
					@foreach($threads as $thread)
							<!-- <a class="list-group-item" href="{{url('thread')}}/{{$thread->id}}">{{$thread->title}} <span class="badge">{{number_format($thread->price)}}</span></a> -->
							<div class="media">
							  <div class="media-left">
							  
								@if(count(App\Image::where('thread_id',$thread->id)->get()))
									<a href="/thread/{{$thread->id}}"><img src="/uploads/{{App\Image::where('thread_id',$thread->id)->firstOrFail()['name']}}" class="media-object" style="width:60px;height:60px;"></a>
								@else
									<a href="/thread/{{$thread->id}}"><img src="/images/default.png" class="media-object" style="width:60px;height:60px;"></a>
								@endif
							  </div>
							  <div class="media-body">
								<h4 class="media-heading"><a href="/thread/{{$thread->id}}">{{$thread->title}}</a></h4>
								
									<div class="col-md-3">{{$thread->price}} đ</div> 
									<div class="text-right">Đăng lúc {{date('d-m-y h:m:s',strtotime($thread->created_at))}} </div>
									<div class="col-md-3">{{App\SubCategory::find($thread->subcategory_id)["name"]}} ở {{App\Location::find($thread->location)["name"]}}</div> 
								
							  </div>
							</div>
							
					@endforeach
				</div>
			</div>
			
			<div class="panel panel-info">
				<div class="panel-heading">
					Giới thiệu về {{$user['name']}}
				</div>
                <div class="panel-body">
					Tôi là...
				</div>
			</div>
        </div>
    </div>
</div>
@endsection
