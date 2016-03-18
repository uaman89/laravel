@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">{!! trans('myapp.homeTitle') !!}</div>

				<div class="panel-body">
					<h2>{!!trans('myapp.welcome', ["name" => Auth::user()->name]) !!} </h2>
					<hr>
					<h4>{!! trans('myapp.editData') !!}</h4>
                    <br>

                    @include('userdataform')

                </div>
			</div>
		</div>
	</div>
</div>
@endsection
