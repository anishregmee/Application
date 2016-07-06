<section class="margin-up margin-left">
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
		<section class="pull-right margin-right">
		  <div class="form-group">
		    {!! Form::label('search_for', 'Search for:', ['class'=>'left-margin']) !!}
		    {!! Form::text('search_for', '',['placeholder'=>'search here..', 'class'=>'form-control'] ) !!}
		  </div>
		  
		  <div class="form-group">
		    {!! Form::submit('search', ['class'=>'btn btn-success']) !!}
		  </div>
		</section>
	{!! Form::close() !!}
</section>
