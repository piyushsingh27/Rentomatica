@extends('User.homepage.layouts.app')
@section('title', 'Users')

@section('extraPageSpecificHeadContent')
<link rel="stylesheet" href="{{ asset('assets/userPage/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('body')
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		<span class="text-primary"><b>User</b> </span> View Property Requests
		<!--<small>all questions in questionnare</small>-->
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">View Property Requests</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">

	<!-- Default box -->
	<div class="box">
		<div class="box-header with-border">
      <div class="container-fluid">
        <div class="row">
         <h3>
          <strong class="text-primary">My Properties</strong>
         <a href="{{ route('property.create') }}" class="btn btn-primary pull-right"><strong>Add Property To-Let</strong></a>
        </h3>
       </div>
     </div>
   </div>
   <div class="box-body table-responsive">
     <table id="questionnare" class="table table-bordered table-hover">
      <thead>
        <tr>
          <th><span class="text-primary">Sr No</span></th>
          <th><span class="text-primary">Seller Name</span></th>
          <th><span class="text-primary">Adhaar Number</span></th>
          <th><span class="text-primary">Email</span></th>
          <th><span class="text-primary">Options</span></th>
        </tr>
      </thead>
      <tbody>
        {{-- @foreach ($properties as $property)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $property->propertyType }}</td>
            <td>{{ $property->addressText }}, {{ $property->locality }}, {{ $property->landmark1 }}, {{ $property->landmark2 }}, {{ $property->street }}, {{ $property->district }}, {{ $property->city }} , {{ $property->state }}, {{ $property->pincode }}</td>
            <td>{{ $property->price }}</td>
            <td>
              @if ($property->sold)
                <span class="text-success">Renting</span>
              @else
                <span class="text-primary">Vacant</span>
              @endif
            </td>
            <td>
              <a href="{{ route('property.show', $property->id) }}">View</a> &nbsp | &nbsp
              <a href="">Delete</a>
            </td> --}}{{-- 

          </tr>
        @endforeach --}}
        <tr>
          <td>1</td>
          <td>Aravind</td>
          <td>123456789234</td>
          <td>xyz@gmail.com</td>
          <td>Approve/Deny</td>
          <td><a href="">View</a>&nbsp | &nbsp <a href="">Edit</a></td>
        </tr>
        </tbody>
      <tfoot>
        <tr>
          <th><span class="text-primary">Sr No</span></th>
          <th><span class="text-primary">Seller Name</span></th>
          <th><span class="text-primary">Adhaar Number</span></th>
          <th><span class="text-primary">Email</span></th>
          <th><span class="text-primary">Options</span></th>
        </tr>
      </tfoot>
    </table>
  </div>
</div>
<!-- /.box -->

</section>
<!-- /.content -->

@endsection

@section('extraPageSpecificLoadScriptsContent')

<script src="{{ asset('assets/userPage/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/userPage/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('assets/userPage/bower_components/fastclick/lib/fastclick.js') }}"></script>

<script>
  $(function () {
    $('#questionnare').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      
      'autoWidth'   : true
    })
  })
</script>

{{-- @foreach ($jobApplications as $jobApplication)
  <script>
    function approveApp{{ $jobApplication->id }}() {
      event.preventDefault();
      document.getElementById('applicationStatus[{{ $jobApplication->id }}]').value = "Approved";
      document.getElementById('mailBody1[{{ $jobApplication->id }}]').value = "This Mail is regarding your Job Application for the vacancy in {{ Auth::user()->companyname }}. The Employer has Approved your Application. Please Contact the employer for further details.";
    }

    function rejectApp{{ $jobApplication->id }}() {
      event.preventDefault();
      document.getElementById('applicationStatus[{{ $jobApplication->id }}]').value = "Rejected";
      document.getElementById('mailBody1[{{ $jobApplication->id }}]').value = "This Mail is regarding your Job Application for the vacancy in {{ Auth::user()->companyname }}. The Employer has Rejected your Application. Please Contact the employer for further details.";
    }
  </script>
@endforeach --}}

@endsection