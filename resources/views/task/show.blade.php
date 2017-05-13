@extends('layouts.app')



@section('content')
<div class="col-md-8 col-md-offset-2">
  @component('layouts.partials.header.withoutlink')
  @slot('class')
      panel-default
  @endslot

  <a href="/project/{{$task->project->id}}"> Project {{$task->project->id}}</a>

  @endcomponent
</div>

<div class="col-md-8 col-md-offset-2">
  @include('task.partials.task')

  <ul class="list-unstyled">
    @foreach ($task->comments as $comment)
      @include('comment.comment')
    @endforeach
  </ul>

  @include('comment.partials.form.create')
</div>



@endsection
