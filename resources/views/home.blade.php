@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        
            <div class="intro" style="background-image: url(images/bg3.jpg);">
				<div class="container text-center">
					<h1 class="intro-title"> TÌM KIẾM RAO VẶT</h1>
					<p> Chọn nơi ở hiện tại và nội dung </p>
					<form action="search">
						<div class="col-lg-2 col-sm-2">
							  <select name="location" class="form-control">
							  @foreach($locations as $l)
								<option value="{{$l->id}}">{{$l->name}}</option>
							  @endforeach
							  </select>
						</div>
						<div class="col-lg-6 col-sm-6"></i>
							<input type="text" name="content" class="form-control" placeholder="Bạn đang tìm gì?" value="">
						</div>
						<div class="col-lg-4 col-sm-4">
							<button class="btn btn-primary btn-search btn-block"><i class="fa fa-search"></i><strong> Tìm kiếm</strong></button>
						</div>
					</form>
				</div>
			</div>
			
			<div class="content">
				<div class="panel panel-default">
					  <div class="panel-heading">Danh mục</div>
					  <div class="panel-body">
							@foreach($categories as $c)
								<div class="col-md-3"><a href="category/{{$c->id}}">{{$c->name}}</a></div>
							@endforeach
					  </div>
				</div>
				
				<div class="panel panel-default">
					  <div class="panel-heading">Bài viết mới nhất</div>
					  <div class="panel-body">
							
							@foreach(App\Thread::all()->take(5) as $thread)
							<!-- <a class="list-group-item" href="{{url('thread')}}/{{$thread->id}}">{{$thread->title}} <span class="badge">{{number_format($thread->price)}}</span></a> -->
							<div class="media">
							  <div class="media-left">
							  
								<a href="/thread/{{$thread->id}}"><img src="/uploads/{{App\Image::where('thread_id',$thread->id)->firstOrFail()['name']}}" class="media-object" style="width:60px"></a>
							  </div>
							  <div class="media-body">
								<h4 class="media-heading"><a href="/thread/{{$thread->id}}">{{$thread->title}}</a></h4>
								<p>{{$thread->description}}</p>
							  </div>
							</div>
							
							@endforeach
					  </div>
				</div>
				
			</div>
    </div>
</div>

@endsection
