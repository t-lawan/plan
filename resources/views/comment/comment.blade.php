<div class="panel panel-default col-md-10 col-md-offset-1">
  <div class="panel-body">
    <li class="media">
      <div class="media-body">
        <h5 class="mt-0 mb-1">
            Username<small class="text-muted"> <i>Posted  {{$comment->created_at->diffForHumans()}}</i></small>
        </h5>
        <p>
          {{$comment->body}}
        </p>
      </div>
    </li>
  </div>
</div>
