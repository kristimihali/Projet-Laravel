@extends('layouts/main')

@section('content')

<h1>Contact</h1> <br>
        <form method="post" class = "callout primary" action = "{{ route('contact.store') }}">
            Name: <input type="text" id="name" name="name" placeholder="Write your name" value="{{ old('name') }}">
            <div>{{ $errors->first('name') }}</div>
            Email:   <input type="email" id="email" name="email"  placeholder="Write an Email" value="{{ old('email') }}">
            <div>{{ $errors->first('email') }}</div>
            Description:  <textarea id="message" style="min-height: 150px" name="message" placeholder = "Write Message" value="{{ old('message') }}"></textarea>
            <div>{{ $errors->first('message') }}</div>
            <input type="submit" class="button" value="Envoie">
            {{ csrf_field() }}
        </form>

@endsection
