@extends('layouts.admin')

@section('content')
            <div class="panel panel-default">
                <div class="panel-heading">Thống kê</div>

                <div class="panel-body">
					<div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="panel panel-primary">
								<div class="panel-heading">
									<div class="row">
										<div class="col-xs-3">
											<i class="fa fa-comments fa-5x"></i>
										</div>
										<div class="col-xs-9 text-right">
											<div class="huge h4">{{count(App\Thread::all())}}</div>
											<div>Bài viết!</div>
										</div>
									</div>
								</div>
								<a href="thread">
									<div class="panel-footer">
										<span class="pull-left">Xem chi tiết</span>
										<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
										<div class="clearfix"></div>
									</div>
								</a>
							</div>
						</div>
						
						<div class="col-lg-3 col-md-6">
							<div class="panel panel-success">
								<div class="panel-heading">
									<div class="row">
										<div class="col-xs-3">
											<i class="fa fa-user fa-5x"></i>
										</div>
										<div class="col-xs-9 text-right">
											<div class="huge h4">{{count(App\User::all())}}</div>
											<div>Tài khoản!</div>
										</div>
									</div>
								</div>
								<a href="user">
									<div class="panel-footer">
										<span class="pull-left">Xem chi tiết</span>
										<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
										<div class="clearfix"></div>
									</div>
								</a>
							</div>
						</div>
						
						<div class="col-lg-3 col-md-6">
							<div class="panel panel-warning">
								<div class="panel-heading">
									<div class="row">
										<div class="col-xs-3">
											<i class="fa fa-hourglass-start fa-5x"></i>
										</div>
										<div class="col-xs-9 text-right">
											<div class="huge h4">{{count(App\Thread::where('approval',0)->get())}}</div>
											<div>Chờ duyệt!</div>
										</div>
									</div>
								</div>
								<a href="approval">
									<div class="panel-footer">
										<span class="pull-left">Xem chi tiết</span>
										<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
										<div class="clearfix"></div>
									</div>
								</a>
							</div>
						</div>
						
						<div class="col-lg-3 col-md-6">
							<div class="panel panel-warning">
								<div class="panel-heading">
									<div class="row">
										<div class="col-xs-3">
											<i class="fa fa-hourglass-3 fa-5x"></i>
										</div>
										<div class="col-xs-9 text-right">
											<div class="huge h4">{{count(App\Thread::where('approval',1)->get())}}</div>
											<div>Đã duyệt!</div>
										</div>
									</div>
								</div>
								<a href="approval">
									<div class="panel-footer">
										<span class="pull-left">Xem chi tiết</span>
										<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
										<div class="clearfix"></div>
									</div>
								</a>
							</div>
						</div>
						
					</div>
                </div>
            </div>
@endsection
