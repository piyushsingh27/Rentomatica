@extends('User.homepage.layouts.app')
@section('title', 'User - Home')


@section('body')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <span style="color:#367fa9;"><b>User</b> </span> Home
    <small>Dashboard</small>
  </h1>
  <ol class="breadcrumb">
    <li class="active"><i class="fa fa-dashboard"></i> Home</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

  <div class="container-fluid">
    <div class="box box-primary">
      <div class="box-header with-border">
        <a href="/home/vacancySearchResults">
          <button class="btn btn-default btn-lg btn-block"><strong><i class="fa fa-search"></i>&nbsp &nbsp<span class="text-primary">Search Properties</span></strong></button>
        </a>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <!-- The time line -->
        <ul class="timeline">
          <!-- timeline time label -->
          <li class="time-label">
            <span class="bg-red">
              <strong>Properties</strong> that might Interest you
            </span>
          </li>
          <!-- /.timeline-label -->
          <!-- timeline item -->
          {{-- @foreach ($popEmployers as $popEmployer)
          @if ($popEmployer->description)
          <li>
            <i class="fa fa-industry bg-yellow"></i>

            <div class="timeline-item">
              <span class="time"><i class="fa fa-clock-o">&nbsp</i>{{ $popEmployer->created_at->diffForHumans() }}</span>

              <h3 class="timeline-header"><strong class="text-blue">{{ $popEmployer->companyname }} &nbsp </strong><small>{{ $popEmployer->tagline }}</small></h3>

              <div class="timeline-body">
                {{ $popEmployer->description }}
              </div>
              <div class="timeline-footer">
                <a class="btn btn-primary btn-xs" href="/home/viewEmployerProfile/{{ $popEmployer->id }}">Read more</a>
              </div>
            </div>
          </li>
          @endif
          @if ($loop->index > 5)
          @break
          @endif
          @endforeach --}}
          <!-- END timeline item -->
          <!-- timeline time label -->
          
          <!-- /.timeline-label -->
          <li class="time-label">
            <span class="bg-purple">
              Results for your recent <strong>Property Searches</strong>
            </span>
          </li>
          <!-- timeline item -->
          {{-- @foreach ($jobApplications as $jobApplication)
          @foreach ($jobseekerProfiles as $jobseekerProfile)
          @if ($jobseekerProfile->id == $jobApplication->jobseeker_profile_id && ($jobApplication->applicationStatus == 'Rejected' || $jobApplication->applicationStatus == 'Approved'))
          <li>
            <i class="fa fa-user-plus bg-maroon"></i>

            <div class="timeline-item">
              <span class="time"><i class="fa fa-clock-o"></i> &nbsp{{$jobApplication->updated_at->diffForHumans() }}</span>
              <div class="timeline-body">

                The status of your application in <strong class="text-blue">{{ $jobApplication->marks }}</strong> with your profile "<span class="text-info">{{ $jobApplication->testResult }}</span>" is 
                <span><span class="@if($jobApplication->applicationStatus == 'Applied' || $jobApplication->applicationStatus == 'Finished Test') text-yellow @elseif($jobApplication->applicationStatus == 'Rejected' || $jobApplication->applicationStatus=='Disqualified') text-red @elseif($jobApplication->applicationStatus == 'Approved') text-green @else text-muted @endif">
                  <strong>{{ $jobApplication->applicationStatus }}.</strong>
                </span></span>
                <br>
              </div>
            </div>
          </li>
          @endif
          @endforeach
          @endforeach --}}
          
          <li>
            <i class="fa-info fa bg-gray"></i>

            <div class="timeline-item">
              <div class="timeline-header no-border">
                View all your Property Requests in
                
              </div>
                {{-- <div class="timeline-footer">
                  <a href="{{ route('jobseeker.myJobApplications') }}">
                    <button class="btn btn-info"><strong>Job Applications</strong></button>
                  </a>
                </div> --}}
            </div>
          </li>

          <li>
            <i class="fa fa-clock-o bg-gray"></i>
          </li>
        </ul>
      </div>
      <br>
      <!-- /.col -->
      <!-- /.row -->

      {{-- <div class="col-md-4">
        <div class="box box-success">
          <div class="box-header with-border">
            <h3>Recent Job Vacancies</h3>
          </div>
          <div class="box-body">

            @foreach ($recVacancies as $recVacancy)
            <a href="/home/viewVacancy/{{$recVacancy->id}}">
              <button class="btn-lg btn-default">{{ $recVacancy->employers_id }}</button>
            </a> &nbsp &nbsp
            @endforeach
          </div>
        </div>
      </div> --}}

      {{-- <div class="col-md-4">
        <div class="box box-warning">
          <div class="box-header with-border">
            <h3>Popular Employers</h3>
          </div>
          <div class="box-body">

            @foreach ($popEmployers as $popEmployer)
            <button class="btn btn-lg btn-default">{{ $popEmployer->companyname }}</button> &nbsp &nbsp
            @endforeach

          </div>
        </div>
      </div> --}}

    </div>
  </div>

</section>
<!-- /.content -->

@endsection

@section('extraPageSpecificLoadScriptsContent')

<script src="{{ asset('assets/userPage/bower_components/select2/dist/js/select2.full.min.js')}}"></script>

<script>
  $('.select2').select2({
    placeholder: "Location…"
  })
</script>

@endsection