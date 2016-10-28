@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
				<div class="panel-heading">{{$name}}</div>
                <div class="panel-body">
				@if(count($threads))
				<div class="col-md-12">
					<ul class="list-group">
					
						@foreach($threads as $thread)
							<a class="list-group-item" href="{{url('thread')}}/{{$thread->id}}">{{$thread->title}} <span class="badge">{{number_format($thread->price)}}</span></a>
							
						@endforeach
						
					</ul>
				</div>
				<div class="pagination"> {{ $threads->links() }} </div>
				{{config('raovat.paginate')}}
				@else
					<p class="text-danger">Hiện chưa có bài viết nào ở mục này</p>
				@endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
