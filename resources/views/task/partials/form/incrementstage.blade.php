<form method="POST" action="/task/{{$task->id}}/">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
    <button class="btn btn-secondary icon-button"type="submit">
      <span class="glyphicon glyphicon-ok" role="button"></span>
    </button>

</form>
