@extends('layouts.app')



@section('content')
<div class="col-md-8 col-md-offset-2">
  @component('layouts.partials.header.withoutlink')
  @slot('class')
      panel-default
  @endslot

  <a href="/project/{{$project->id}}"> Project {{$project->id}}</a>

  @endcomponent
</div>

<div class="col-md-8 col-md-offset-2">
  @include('task.partials.task')
</div>

@endsection
