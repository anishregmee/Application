@extends('layouts.tenant')
@section('title', 'Application Enquiry')
@section('breadcrumb')
    @parent
    <li><a href="{{url('tenant/clients')}}" title="All Clients"><i class="fa fa-users"></i> Clients</a></li>
    <li>Notes</li>
@stop

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        @if(Session::has('success'))
          <div class="alert alert-success">
            <strong>Success: </strong>{{ Session::get('success')}}
          </div>
        @endif
        <h1>Application - <small>Enquiry</small></h1>
       
       @include('Tenant::applications/partials/navbar')
      

        <section>
          {!! Form::open(['class'=>'form-inline']) !!}
              
              <div class="form-group">
                {!! Form::label('filter_id', 'Filter By:') !!}
                <select name="filter_id", class="form-control">
                    <option value="1">College Name</option>
                    <option value="2">Course Name</option>
                    <option value="3">Email</option>
                    <option value="4">Phone</option>
                </select>
              </div>
            
              <div class="form-group">
                {!! Form::label('search_for', 'Search for:') !!}
                {!! Form::text('search_for', '',['placeholder'=>'search here..', 'class'=>'form-control'] ) !!}
              </div>
              
              <div class="form-group">
                {!! Form::submit('search', ['class'=>'btn btn-success']) !!}
              </div>
              
          {!! Form::close() !!}
        </section><br>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="box box-default">
          <div class="box-body">
             <section>
          <table class="table table-striped table-bordered table-condensed">
            <thead>
              <tr>
                <th>Id</th>
                <th>Client Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>College Name</th>
                <th>Course Name</th>
                <th>Start date</th>
                <th>Invoice To</th>
                <th>Processing</th>
              </tr>
            </thead>
            <tbody>
              @foreach($applications as $application)         
                <tr>
                  <td>{{ $application->course_application_id }}</td>
                  <td>{{ $application->first_name }}</td>
                  <td>{{ $application->number }}</td>
                  <td>{{ $application->email }}</td>
                  <td>{{ $application->company }}</td>
                  <td>{{ $application->name }}</td>
                  <td>{{ format_date($application->intake_date) }}</td>
                  <td>{{ $application->company }}</td>
                  <td>
                    <a href="{{ route('applications.apply.offer',[$application->course_application_id])}}" title="apply_offer" class="btn"><i class="glyphicon glyphicon-education"></i> Apply Offer</a>
                    <a href="#" title="View" class="btn"><i class="glyphicon glyphicon-eye-open"></i> View</a>
                    <a href="#" title="Edit" class="btn"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                    <a href="{{ route('applications.cancel.application',[$application->course_application_id])}}" title="cancel_quarantine" class="btn"><i class="glyphicon glyphicon-pencil"></i> Cancel/Quarantine</a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </section>
        <section class="text-center">
        {{ $applications->render()}}  
        </section>
        
          </div>
        </div>
      </div>
    </div>
       
      </div>
    </div>
  </div>
@stop
