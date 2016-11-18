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
							@else
								<div class="col-md-2 col-xs-2">Nữ</div>
							@endif
							<div class="col-md-2 col-xs-2 text-primary">Số điện thoại</div>
							<div class="col-md-2 col-xs-2">{{$user['phone']}}</div>
						</div>
						
						<div class="row">
							<div class="col-md-2 col-xs-2 text-primary">Đang sống ở</div>
							<div class="col-md-2 col-xs-2">{{$location}}</div>
							<div class="col-md-2 col-xs-2 text-primary">Ngày tạo</div>
							<div class="col-md-5 col-xs-5">{{$user['created_at']}}</div>
						</div>
					</div>
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
