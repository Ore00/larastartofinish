@extends('layouts.app')
@section('content')
    <div class="body">
        {{ $task-title }}
    </div>
    <div class="card-body">
        {{ $task->body }}
    </div>

@endsection
