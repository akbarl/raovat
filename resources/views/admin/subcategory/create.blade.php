@extends('layouts.admin')

@section('content')
            <div class="panel panel-default">
                <div class="panel-heading">Thêm danh mục con</div>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/subcategory') }}">
						{{ csrf_field() }}
						<div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
							<label for="category" class="col-md-4 control-label">Danh mục</label>
							<div class="col-md-6">
								<select class="form-control" name="category">
								@foreach ($categories as $category)
									@if(old('category') == $category->id)
										<option value="{{$category->id}}" selected>{{$category->name}}</option>
									@else
										<option value="{{$category->id}}">{{$category->name}}</option>
									@endif
								@endforeach
								</select>
							</div>
						</div>
						
						<div class="form-group{{ $errors->has('icon') ? ' has-error' : '' }}">
							<label for="icon" class="col-md-4 control-label">Biểu tượng</label>
							<div class="col-md-6">
                                <input id="icon" type="text" class="form-control" name="icon" value="{{ old('icon') }}" required autofocus>

                                @if ($errors->has('icon'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('icon') }}</strong>
                                    </span>
                                @endif
                            </div>
						</div>
						
						
						<div class="form-group{{ $errors->has('subcategory') ? ' has-error' : '' }}">
							<label for="subcategory" class="col-md-4 control-label">Tên danh mục con</label>
							<div class="col-md-6">
                                <input id="subcategory" type="text" class="form-control" name="subcategory" value="{{ old('subcategory') }}" required autofocus>

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
                                    Thêm danh mục con
                                </button>
                            </div>
                        </div>
					</form>
                </div>
            </div>
@endsection

