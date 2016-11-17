@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        
            <div class="intro" style="background-image: url(images/bg3.jpg);">
				<div class="container text-center">
					<h1 class="intro-title"> TÌM KIẾM RAO VẶT</h1>
					<p> Chọn nơi ở hiện tại và nội dung </p>
						<div class="col-lg-2 col-sm-2">
							  <select class="form-control">
							  @foreach($locations as $l)
								<option value="{{$l->id}}">{{$l->name}}</option>
							  @endforeach
							  </select>
						</div>
						<div class="col-lg-6 col-sm-6"></i>
							<input type="text" name="name" class="form-control" placeholder="Bạn đang tìm gì?" value="">
						</div>
						<div class="col-lg-4 col-sm-4">
							<button class="btn btn-primary btn-search btn-block"><i class="fa fa-search"></i><strong> Tìm kiếm</strong></button>
						</div>
				</div>
			</div>
			
			<div class="content">
				<div class="panel panel-default">
					  <div class="panel-heading">Danh mục</div>
					  <div class="panel-body">
							@foreach($categories as $c)
								<div class="col-md-3">{{$c->name}}</div>
							@endforeach
					  </div>
				</div>
			</div>
    </div>
</div>

@endsection
