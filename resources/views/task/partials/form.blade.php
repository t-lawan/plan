<div class="panel panel-default">
  <div class="panel-body ">
    <h1 class="panel-title">

        <form method="post" action="/project/{{$project->id}}/task/">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">


                <div class="form-group">

                  <input type="text" class="form-control  no-border" id="title" name="title" placeholder="Add task title" required="true">


                </div>
                <div class="form-group">
                  <textarea class="form-control no-border " rows="2" id="body" name="body" placeholder="Add task description" required="true"></textarea>
                </div>

                <input type="hidden" name="post_id" value="$project->id">



            @include('layouts.partials.errors')
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block" id ='submitbutton'>Add Task</button>
              </div>




        </form>



    </h1>
  </div>
</div>
