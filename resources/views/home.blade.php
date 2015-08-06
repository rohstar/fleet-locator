@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
                    {!! Form::open(['url' => 'locations', 'data-toggle' => 'validator']) !!}
                    <div class="form-group">
                            {!! Form::label('KM Reading') !!}
                            {!! Form::text('km',null,[ 'class' => 'form-control']) !!}</div>
                        <br /><br />
                        <div class="form-group">
                            {!! Form::submit('Get Location',null,[ 'class' => 'btn btn-primary form-control']) !!}
                        </div>

                    {!! Form::close() !!}

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
