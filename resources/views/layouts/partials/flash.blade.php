<div class="alert alert-success slideInRight" id="flash-message" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  {{$flash}}
</div>
<script>
$('#flash-message').delay(500).fadeIn(250).delay(5000).fadeOut(500);
</script>
