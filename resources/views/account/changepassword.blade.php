@extends('layouts.app')
@extends('menu.user')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="panel panel-info">
                <div class="panel-heading">Đổi mật khẩu</div>
				@if($m)
						<div class="alert alert-{{$stt}}">
							{{$m}}
						</div>
				@endif
                <div class="panel-body">
				<form class="form-horizontal" role="form" method="POST" action="{{ url('/account/changepassword/update') }}">
						{{ csrf_field() }}
						<div class="form-group{{ $errors->has('oldpassword') ? ' has-error' : '' }}">
							<label for="oldpassword" class="col-md-4 control-label">Mật khẩu cũ</label>
							<div class="col-md-6">
                                <input id="oldpassword" type="password" class="form-control" name="oldpassword" required autofocus>

                                @if ($errors->has('oldpassword'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('oldpassword') }}</strong>
                                    </span>
                                @endif
                            </div>
						</div>
						
						<div class="form-group{{ $errors->has('newpassword') ? ' has-error' : '' }}">
							<label for="newpassword" class="col-md-4 control-label">Mật khẩu mới</label>
							<div class="col-md-6">
                                <input id="newpassword" type="password" class="form-control" name="newpassword" required autofocus>

                                @if ($errors->has('newpassword'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('newpassword') }}</strong>
                                    </span>
                                @endif
                            </div>
						</div>
						
						<div class="form-group{{ $errors->has('confirmnewpassword') ? ' has-error' : '' }}">
							<label for="confirmnewpassword" class="col-md-4 control-label">Xác nhận mật khẩu mới</label>
							<div class="col-md-6">
                                <input id="confirmnewpassword" type="password" class="form-control" name="confirmnewpassword" required autofocus>

                                @if ($errors->has('confirmnewpassword'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('confirmnewpassword') }}</strong>
                                    </span>
                                @endif
                            </div>
						</div>
						
						<div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Đổi mật khẩu
                                </button>
                            </div>
                        </div>
						
					</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
