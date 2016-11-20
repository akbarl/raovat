

@section('menu')
<div class="col-md-3">
	<div class="panel panel-primary panel-default">
		<div class="panel-body">
			<div class="media">
			  <div class="media-left">
				<img src="/uploads/avatar.png" class="media-object" style="width:60px">
			  </div>
			  <div class="media-body">
				<h4 class="media-heading">{{Auth::user()->name}}</h4>
				<p>Welcome</p>
			  </div>
			</div>
			<ul class="list-group">
				<a href="/account" class="list-group-item">Thông tin của tôi</a>
				<a href="/thread" class="list-group-item">Bài viết của tôi</a>
				<a href="/account/edit" class="list-group-item">Sửa thông tin cá nhân</a>
			</ul>
		</div>
	</div>
</div>
@endsection