@extends('layouts.admin')

@section('content')
            <div class="panel panel-default">
                <div class="panel-heading">Sửa cấu hình website</div>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/setting') }}/{{$setting['id']}}">
						{{ csrf_field() }}
						{{ method_field('PUT') }}
						<div class="form-group{{ $errors->has('setting') ? ' has-error' : '' }}">
							<label for="description" class="col-md-4 control-label">Mô tả</label>
							<div class="col-md-6">
                                <input id="description" type="text" class="form-control" name="description" value="{{$setting['description']}}" required autofocus>

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
						</div>
						
						<div class="form-group{{ $errors->has('value') ? ' has-error' : '' }}">
							<label for="value" class="col-md-4 control-label">Giá trị</label>
							<div class="col-md-6">
                                <input id="value" type="text" class="form-control" name="value" value="{{$setting['value']}}" required autofocus>

                                @if ($errors->has('value'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('value') }}</strong>
                                    </span>
                                @endif
                            </div>
						</div>
						
						<div class="form-group{{ $errors->has('key') ? ' has-error' : '' }}">
							<label for="key" class="col-md-4 control-label">Từ khóa</label>
							<div class="col-md-6">
                                <input id="key" type="text" class="form-control" name="key" value="{{$setting['key']}}" required autofocus>

                                @if ($errors->has('key'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('key') }}</strong>
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

