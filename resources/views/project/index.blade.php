@extends('layouts.app')


@if(Auth::guest())

@else
  @section('content')
<div class="col-md-6 col-md-offset-3">
  <div>
    @component('layouts.partials.header.withoutlink')
    @slot('class')

    @endslot

      My Projects
    @endcomponent
  </div>

  <div>
    @include('project.partials.form')
  </div>
  @foreach($projects as $project)
    @if($project->user_id === Auth::user()->id)
      <div>
        @include('project.partials.project')
      </div>
    @endif
  @endforeach
</div>


<div class="col-md-3">
  @include('task.partials.pending')
  @foreach($tasks as $task)
    @if( ($task->user_id === Auth::user()->id) && ($task->stage_id === 1) )
      @include('task.partials.task')
    @endif
  @endforeach
</div>


  @endsection
@endif
