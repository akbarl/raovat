@extends('layouts.admin')

@section('content')
            <div class="panel panel-default">
                <div class="panel-heading">Sửa danh mục</div>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/category') }}/{{$category['id']}}">
						{{ csrf_field() }}
						<div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
						{{ csrf_field() }}
						{{ method_field('PUT') }}
							<label for="category" class="col-md-4 control-label">Tên danh mục</label>
							<div class="col-md-6">
                                <input id="category" type="text" class="form-control" name="category" value="{{$category['name']}}" required autofocus>

                                @if ($errors->has('category'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('category') }}</strong>
                                    </span>
                                @endif
                            </div>
						</div>
						
						<div class="form-group{{ $errors->has('icon') ? ' has-error' : '' }}">
							<label for="icon" class="col-md-4 control-label">Biểu tượng</label>
							<div class="col-md-6">
                                <input id="icon" type="text" class="form-control" name="icon" value="{{$category['icon']}}" required autofocus>

                                @if ($errors->has('icon'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('icon') }}</strong>
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

