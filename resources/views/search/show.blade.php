@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
		<div class="col-md-3">
			<div class="panel panel-primary panel-default">
				<div class="panel-heading">Danh mục</div>
				<div class="panel-body">
					<ul>
						@foreach(App\Category::all() as $c)
							<li>{{$c->name}}</li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
        <div class="col-md-9">
            <div class="panel panel-default">
				<div class="panel-heading">{{$name}}</div>
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
					<p class="text-danger">Không tìm thấy gì cả</p>
				@endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
