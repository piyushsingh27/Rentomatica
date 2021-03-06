@extends('JobSeeker.homepage.layouts.app')
@section('title', 'JobSeekers')

@section('body')
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		<span style="color:#367fa9;"><b>JobSeeker</b> </span> Contact Admin
		<small>ask for Help</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Contact Admin</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">

	<!-- Default box -->
	<div class="box">

		<div class="box-body">
			<form action="{{ route('allUsers.sendMessage') }}" method="post" class="form-horizontal">
				{{csrf_field()}}
				<h4><strong>Just Get In Touch!</strong></h4>
				@if (Session::has('message'))
				<div class="alert alert-success">{{ Session::get('message') }}<button type="button" class="close" data-dismiss="alert"><i class="fa fa-times"></i></button></div>
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
				<div class="hline"></div>
				<hr>
				<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
					<label for="name" class="col-md-3 control-label">Name</label>
					<div class="col-md-6">
						<input type="text" id="name" name="name" class="form-control pull-right" value="{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}">
					</div>
				</div>

				<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
					<label for="email" class="col-md-3 control-label">Email</label>
					<div class="col-md-6">
						<input type="email" id="email" name="email" class="form-control pull-right" value="{{ Auth::user()->email }}">
					</div>
				</div>

				<div class="form-group{{ $errors->has('subject') ? ' has-error' : '' }}">
					<label for="subject" class="col-md-3 control-label">Subject</label>
					<div class="col-md-6">
						<input type="text" id="subject" name="subject" class="form-control pull-right" placeholder="Subject">
					</div>
				</div>

				<div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
					<label for="message" class="col-md-3 control-label">Message</label>
					<div class="col-md-6">
						<textarea id="message" name="message" class="form-control pull-right" placeholder="Message" rows="10"></textarea>
					</div>
				</div>

				<hr>
				<input type="hidden" name="userType" id="userType" value="jobseeker - {{Auth::user()->id}}">
				<div class="form-group">
					<div class="col-md-offset-4 col-md-4">
						<button type="submit" class="btn btn-primary btn-block pull-right"><strong>Submit</strong></button>
					</div>
				</div>
				{{-- end form --}}
			</form>
		</div>
	</div>
	<!-- /.box -->

</section>
<!-- /.content -->

@endsection