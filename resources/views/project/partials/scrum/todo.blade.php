
<div class=col-md-4>
  @component('layouts.partials.header.withoutlink')
    @slot('class')
        panel-info
    @endslot

  To Do
  @endcomponent

  <div>
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
