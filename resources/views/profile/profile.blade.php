@extends('layouts/main')


@section('content')
<div class = 'container'>
    <div class = 'row'>
        <div class = 'col-md-8 col-md-offset-2'>
            <dif class = 'panel-heading'> Profile </div>

            <div class = 'panel-body'>
                <form class = "form-horizontal" method = "POST" action = "{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class = "form-group{{ $errors->has('email') ? 'has-error' : '' }}">
                        <label for = 'email' class = "col-md-4-control-label">E-mail Address</label>

                        <div class = "col-md-6">
                            <!-- <input id='email' type = 'email'
                            class = 'form-control' name = 'email'
                            value = "{{ old('email') }}" required autofocus> -->

                            @if ($errors->has('email'))
                                <span class = 'help-block'>
                                    <strong> {{ $errors->first('exif_thumbnail') }}</strong>
                                </span>
                            @endif
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
