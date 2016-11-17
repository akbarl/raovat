@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        
            <div class="intro" style="background-image: url(images/bg3.jpg);">
				<div class="container text-center">
					<h1 class="intro-title"> TÌM KIẾM RAO VẶT </h1>
					<p> Chọn nơi ở hiện tại và nội dung </p>
						<div class="col-lg-4 col-sm-4">
							<input type="text" name="location" class="form-control" placeholder="Nơi bạn ở" value="">
						</div>
						<div class="col-lg-4 col-sm-4"></i>
							<input type="text" name="name" class="form-control" placeholder="Bạn đang tìm gì?" value="">
						</div>
						<div class="col-lg-4 col-sm-4">
							<button class="btn btn-primary btn-search btn-block"><i class="fa fa-search"></i><strong> Tìm Ngay</strong></button>
						</div>
				</div>
			</div>
        
    </div>
</div>
@endsection
