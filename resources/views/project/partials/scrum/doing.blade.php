
<div class=col-md-4>
  @component('layouts.partials.header.withoutlink')
  @slot('class')
      panel-warning
  @endslot
  Doing
  @endcomponent

  <div class="panel-group">
    @foreach($tasks as $task)
      @if($task->stage_id === 2)
        @include('task.partials.task')
      @endif
    @endforeach

  </div>
  </div>
