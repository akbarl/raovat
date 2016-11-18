@extends('layouts.admin')

@section('content')
            <div class="panel panel-default">
                <div class="panel-heading">Sửa danh mục con</div>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/subcategory') }}/{{$subcategory['id']}}">
						{{ csrf_field() }}
						
						<div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
							<label for="category" class="col-md-4 control-label">Danh mục</label>
							<div class="col-md-6">
								<select class="form-control" name="category">
								@foreach ($categories as $category)
									@if($subcategory['category_id'] == $category->id)
										<option value="{{$category->id}}" selected>{{$category->name}}</option>
									@else
										<option value="{{$category->id}}">{{$category->name}}</option>
									@endif
								@endforeach
								</select>
							</div>
						</div>
						
						<div class="form-group{{ $errors->has('subcategory') ? ' has-error' : '' }}">
						{{ csrf_field() }}
						{{ method_field('PUT') }}
							<label for="subcategory" class="col-md-4 control-label">Tên danh mục con</label>
							<div class="col-md-6">
                                <input id="subcategory" type="text" class="form-control" name="subcategory" value="{{$subcategory['name']}}" required autofocus>

                                @if ($errors->has('subcategory'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('subcategory') }}</strong>
                                    </span>
                                @endif
                            </div>
						</div>
						
						
						<div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Cập nhật
                                </button>
                            </div>
                        </div>
					</form>
                </div>
            </div>
@endsection

