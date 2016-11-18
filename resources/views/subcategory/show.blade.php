@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
		<div class="col-md-3">
			<div class="panel panel-primary panel-default">
				<div class="panel-heading">Danh mục</div>
				<div class="panel-body">
						@foreach(App\Category::all() as $c)
						<a href="#" class="list-group-item" data-toggle="collapse" data-target="#{{$c->id}}">
							<i class="fa fa-edit fa-fw"></i> {{$c->name}}
							<span class="fa fa-caret-down"></span>
						</a>			
						<div id="{{$c->id}}" class="collapse">
							<ul class="list-group">
								@foreach(App\SubCategory::all() as $s)
									<a href="/subcategory/{{$s->id}}"><li class="list-group-item">{{$s->name}}</li></a>
								@endforeach
							</ul>
						</div>
						@endforeach
				</div>
			</div>
		</div>
        <div class="col-md-9">
            <div class="panel panel-default">
				<div class="panel-heading">
				
					
					<ul class="breadcrumb">
					  <li><a href="/">Trang chủ</a> <span class="divider"></span></li>
					  <li><a href="/category/{{$category['id']}}">{{$category['name']}}</a> <span class="divider"></span></li>
					  <li><a href="{{Request::url()}}">{{$subcategory['name']}}</a> <span class="divider"></span></li>
					</ul>
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
								<p>{{$thread->description}}</p>
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
    </div>
</div>
@endsection
