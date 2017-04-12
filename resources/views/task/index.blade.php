@extends('layouts.app')



@section('content')

@component('layouts.partials.header.withoutlink')
@slot('class')
    panel-danger
@endslot
My Tasks
@endcomponent




@foreach($tasks as $task)
  @include('task.partials.task')
@endforeach


@endsection
