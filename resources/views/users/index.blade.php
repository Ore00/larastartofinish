@extends('layouts.app')
@section('title') Users @endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 blog-main col-lg-8 blog-main col-sm-8 blog-main">
            <div class="p-3">
                <h4 class="font-italic">All Users</h4>
                @foreach($users as $user)
                        <li class="list-group-item">
                            <h2 class="blockquote-reverse">
                                <a href="/users/{{ $user->id }}">{{ $user->name }}</a>
                            </h2>
                        </li>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
