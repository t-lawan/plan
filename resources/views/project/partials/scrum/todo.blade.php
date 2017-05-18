
<div class=col-md-4>
  @component('layouts.partials.header.withoutlink')
    @slot('class')
        panel-info
    @endslot

<div class="row">
  <div class="col-xs-8">
    <span>To Do</span>
  </div>

  <div class="col-xs-1 col-xs-offset-2">
    <button class="btn btn-sm icon-button" data-toggle="collapse" data-target="#addTask">
      <span class="glyphicon glyphicon-plus"></span>
    </button>
  </div>
</div>

  @endcomponent

  <div id="addTask" class="collapse">
    @include('task.partials.form')
  </div>

  <div class="panel-group">
    @foreach($tasks as $task)
      @if($task->stage_id === 1)
      @include('task.partials.task')
      @endif
    @endforeach

  </div>
  </div>
