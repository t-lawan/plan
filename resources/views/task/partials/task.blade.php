<div class="panel panel-default ">


      <div class="panel-heading">
        <div class="row">
          <div class="col-xs-7">
            <a href="/project/{{$project->id}}/task/{{$task->id}}">
            <span> {{$task->title}}</span>
            </a>
          </div>

          @if($task->user->id === auth()->id())


            <div class="col-xs-1 col-xs-offset-1">

                <!--- <i class="material-icons md-18 align-right ">
                   edit
                 </i>-->

                 @include('task.partials.form.incrementstage')

            </div>

            <div class="col-xs-1 col-xs-offset-1">

              @include('task.partials.form.delete')


               </button>
            </div>


          @endif
        </div>


      </div>

      <div class="panel-body">
        {{$task->body}}



      </div>

  </a>
</div>
