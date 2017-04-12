@extends('layouts.app')

@section('content')

<div class="col-md-8 col-md-offset-2">
  @include('project.partials.project')
</div>

  @include('project.partials.scrum.index')



@endsection
