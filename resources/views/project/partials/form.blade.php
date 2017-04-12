<div class="panel panel-default" id='form'>
  <div class="panel-body ">
    <h1 class="panel-title">

        <form method="post" action="/project">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">


                <div class="form-group">

                  <input type="text" class="form-control  no-border" id="title" name="title" placeholder="Add project title" required="true" v-model="project">


                </div>
                <div class="form-group" >
                  <textarea class="form-control no-border " rows="2" id="description" name="description" placeholder="Add project description" required="true" v-show ="!project"></textarea>
                </div>

            @include('layouts.partials.errors')
              <div class="form-group" v-show ='title'>
                <button type="submit" class="btn btn-outline-secondary offset-sm-9 btn-block" id ='submitbutton' >Add Project</button>
              </div>




        </form>



    </h1>
  </div>
</div>

<script>
new Vue({
  el: '#form',
  data: {
    project: ''
  }
});
</script>
