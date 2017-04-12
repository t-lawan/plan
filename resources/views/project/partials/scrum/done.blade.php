
<div class=col-md-4>
  @component('layouts.partials.header.withoutlink')
  @slot('class')
      panel-success
  @endslot

  Done
  @endcomponent

    <div class="panel-group">
      @foreach($tasks as $task)
        @if($task->stage_id === 3)
        @include('task.partials.task')
        @endif
      @endforeach

    </div>
  </div>
