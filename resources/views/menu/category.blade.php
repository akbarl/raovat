

@section('menu')
<div class="col-md-3">
	<div class="panel panel-primary panel-default">
		<div class="panel-heading">Danh mục</div>
		<div class="panel-body">
				@foreach(App\Category::all() as $c)
				<a href="#" class="list-group-item" data-toggle="collapse" data-target="#{{$c->id}}">
					<i class="{{$c->icon}}"></i> {{$c->name}}
					<span class="fa fa-caret-down"></span>
				</a>			
				<div id="{{$c->id}}" class="collapse">
					<ul>
						@foreach(App\SubCategory::where('category_id',$c->id)->get() as $s)
							<a href="/subcategory/{{$s->id}}" class="list-group-item"><i class="{{$s->icon}}"></i> {{$s->name}}</a>
						@endforeach
					</ul>
				</div>
				@endforeach
		</div>
	</div>
</div>
@endsection