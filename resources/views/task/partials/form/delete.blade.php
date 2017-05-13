<form method="POST" action="/task/{{$task->id}}">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="DELETE">
    <button class="btn btn-secondary icon-button"type="submit">
                 <span class="glyphicon glyphicon-remove " role="button"></span>
     </button>
</form>
