@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form class="form-horizontal" role="form" method="POST" action="{!! $form['action'] !!}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="form-group">
        <label class="col-md-4 control-label">{!! trans('myapp.name') !!}</label>
        <div class="col-md-6">
            <input type="text" class="form-control" name="name" value="{{ old('name') ? old('name') : $user['name'] }}">
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-4 control-label">{!! trans('myapp.emailAddress') !!}</label>
        <div class="col-md-6">
            <input type="email" class="form-control" name="email" value="{{ old('email') ? old('email') : $user['email'] }}">
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-4 control-label">{!! trans('myapp.password') !!}</label>
        <div class="col-md-6">
            <input type="password" class="form-control" name="password">
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-4 control-label">{!! trans('myapp.confirmPassword') !!}
        </label>
        <div class="col-md-6">
            <input type="password" class="form-control" name="password_confirmation">
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-4 control-label">{!! trans('myapp.language') !!}</label>
        <div class="col-md-6">
            <select name="language">
                @foreach( config('app.locales') as $langCode => $langCaption )
                    <option value="{!! $langCode !!}" @if ( $langCode == $user['language'] ) selected @endif >
                        {!! $langCaption !!}
                    </option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                {!! $form['submit'] !!}
            </button>
        </div>
    </div>
</form>