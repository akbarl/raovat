@extends('layouts.app')
@extends('menu.category')
@section('content')
        <div class="col-md-9">
            <div class="panel panel-default">
				<div class="panel-heading">
				
					
					<ul class="breadcrumb">
					  <li><a href="/">Trang chủ</a> <span class="divider"></span></li>
					  <li><a href="/category/{{$category['id']}}">{{$category['name']}}</a> <span class="divider"></span></li>
					  <li><a href="{{Request::url()}}">{{$subcategory['name']}}</a> <span class="divider"></span></li>
					</ul>
					
					<div class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
									Sắp xếp theo<span class="caret"></span>
						</a>
						<ul class="dropdown-menu" role="menu">
								<li>
									<a href="?sort=time&orderby=asc">Thời gian tăng dần</a>
								</li>
								<li>
									<a href="?sort=time&orderby=desc">Thời gian giảm dần</a>
								</li>
								<li>
									<a href="?sort=price&orderby=asc">Giá tăng dần</a>
								</li>
								<li>
									<a href="?sort=price&orderby=asc">Giá giảm dần</a>
								</li>
						</ul>
					</div>
					
				</div>
                <div class="panel-body">
				@if(count($threads))
				<div class="col-md-12">
					<ul class="list-group">
					
						@foreach($threads as $thread)
							<!-- <a class="list-group-item" href="{{url('thread')}}/{{$thread->id}}">{{$thread->title}} <span class="badge">{{number_format($thread->price)}}</span></a> -->
							<div class="media">
							  <div class="media-left">
							  
								<a href="/thread/{{$thread->id}}"><img src="/uploads/{{App\Image::where('thread_id',$thread->id)->firstOrFail()['name']}}" class="media-object" style="width:60px"></a>
							  </div>
							  <div class="media-body">
								<h4 class="media-heading"><a href="/thread/{{$thread->id}}">{{$thread->title}}</a></h4>
									<div class="col-md-3">{{$thread->price}} đ ở {{App\Location::find($thread->location)["name"]}}</div> 
									<div class="text-right">Đăng lúc {{date('d-m-y h:m:s',strtotime($thread->created_at))}} </div>
							  </div>
							</div>
							
						@endforeach
						
					</ul>
				</div>
				<div class="pagination"> {{ $threads->links() }} </div>
				
				@else
					<p class="text-danger">Hiện chưa có bài viết nào ở mục này</p>
				@endif
                </div>
            </div>
        </div>
@endsection
