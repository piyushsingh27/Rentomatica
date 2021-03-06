@extends('Admin.homepage.layouts.app')
@section('title', 'Admins')


@section('body')

<section class="content-header">
	<h1><span style="color: #d73925;"><strong>Admin</strong></span> Add New Admin<small> &nbsp create new Sub-Admin</small></h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Add New Admin</li>
	</ol>
</section>

<section class="content">

	<!-- Default box -->
	<div class="box">
		<div class="box-header with-border">
			<h3 class="box-title"><b>New Sub-Admin</b></h3>
		</div>

		<div class="box-body">
			@if (Session::has('messageFail'))
			<div class="alert alert-danger">{!! Session::get('messageFail') !!}
				<button type="button" class="close" data-dismiss="alert"><i class="fa fa-times"></i></button>
			</div>
			@endif
			@if (Session::has('messageSuccess'))
			<div class="alert alert-success">{!! Session::get('messageSuccess') !!}
				<button type="button" class="close" data-dismiss="alert"><i class="fa fa-times"></i></button>
			</div>
			@endif
			@if(count($errors) > 0)
			<center>
				<div class="alert alert-danger">
					<button type="button" class="close" data-dismiss="alert"><i class="fa fa-times"></i></button>
					<strong>
						You Have Errors while submitting. Please Fill up the information in the Fields that are Highlighted in Red.
					</strong>
					<hr>
					@foreach ($errors->all() as $error)
					{{ $error }} <br>
					@endforeach
				</div>
			</center>
			@endif
			<form action="{{ route('admin.addAdmin.add') }}" method="post" class="form-horizontal">
				{{csrf_field()}}
				
				<h4><span style="color: #d73925;">Name</span></h4>

				<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
					<label for="name" class="col-md-3 control-label">Admin Name</label>
					<div class="col-md-6">
						<input type="text" class="form-control pull-right" id="name" name="name" placeholder="Admin Name" value="{{ old('name') }}">
					</div>
				</div>
				<hr>
				<h4><span style="color: #d73925;">Credentials</span></h4>
				
				<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
					<label for="email" class="col-md-3 control-label">E-Mail</label>
					<div class="col-md-6">
						<input type="email" class="form-control pull-right" id="email" name="email" placeholder="E-Mail" value="{{ old('email') }}">
					</div>
				</div>

				<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
					<label for="password" class="col-md-3 control-label">Password</label>
					<div class="col-md-6">
						<input type="password" class="form-control pull-right" id="password" name="password" placeholder="Password">
					</div>
				</div>

				<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
					<label for="password_confirmation" class="col-md-3 control-label">Confirm Password</label>
					<div class="col-md-6">
						<input type="password" class="form-control pull-right" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password">
					</div>
				</div>

				<hr>
				<h4><span style="color: #d73925;">Contact</span></h4>

				
				<div class="form-group{{ $errors->has('phoneNo') ? ' has-error' : '' }}">
					<label for="phoneNo" class="col-md-3 control-label">Phone Number</label>
					<div class="col-md-6">
						<input type="number" class="form-control pull-right" id="phoneNo" name="phoneNo" placeholder="(Phone Number)" min="0" maxlength="16" value="{{ old('phoneNo') }}">
					</div>
				</div>

				<hr>
				
				<div class="col-md-offset-2 col-xs-8">
					<div class="box box-danger">
						<div class="box-header with-border">
							<h4 class="text-danger"><strong>Your Password</strong></h4>
						</div>
						<div class="box-body">
							<div class="form-group{{ $errors->has('yourPassword') ? ' has-error' : '' }}">
								<div class="col-md-10 col-md-offset-1">
									<input type="password" class="form-control pull-right" id="yourPassword" name="yourPassword" placeholder="Your Password">
								</div>
							</div>
						</div>
					</div>
					
				</div>

				<div class="form-group">
					<div class="col-xs-10 col-md-offset-3">
						<div class="checkbox icheck col-md-6">
							<label>
								<input type="checkbox" name="remember"> &nbsp The Information that is entered is correct!
							</label>
						</div>
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-offset-5 col-md-2">
						<button type="submit" class="btn btn-danger btn-block pull-right">Submit</button>
					</div>
				</div>
				{{-- end form --}}
			</form>
		</div>

		<!-- /.box-body -->
	</div>
	<!-- /.box -->

</section>

@endsection