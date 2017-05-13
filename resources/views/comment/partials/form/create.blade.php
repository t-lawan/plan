<!-- Create Comment-->




        <div class="panel panel-default col-md-10 col-md-offset-1" id="comment_form">
          <div class="panel-body">
            <form method="post" action="/task/{{$task->id}}/comment">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                        <input class="form-control input-lg" name="body" placeholder="Your comment here." required="true" />
                    </div>
                    @include('layouts.errors')

                      <button type="submit" class="btn btn-outline-secondary btn-block offset-sm-9">Add Comment</button>

            </form>
          </div>
        </div>
