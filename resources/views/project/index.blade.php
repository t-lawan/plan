@extends('layouts.app')


@if(Auth::guest())

@else
  @section('content')
<div class="col-md-7 ">

    @component('layouts.partials.header.withoutlink')
    @slot('class')

    @endslot
      <div class="row">
        <div class="col-xs-8">
          <span>My Projects</span>
        </div>

        <div class="col-xs-1 col-xs-offset-3">
          <button class="btn btn-sm icon-button" data-toggle="collapse" data-target="#addProject">
            <span class="glyphicon glyphicon-plus"></span>
          </button>
        </div>
      </div>


    @endcomponent






  <div id="addProject" class="collapse">
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


<div class="col-md-5">
  @include('task.partials.pending')
  @foreach($tasks as $task)
    @if( ($task->user_id === Auth::user()->id) && ($task->stage_id < 3) )
      @include('task.partials.task')
    @endif
  @endforeach
</div>


  @endsection
@endif
