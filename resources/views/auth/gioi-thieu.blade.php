@include('auth.default')

@section('content')

<label for="basicInput" class="pt-1">Giới Thiệu về Paravela</label>
<div name="content" id="content" style="min-height: 500px" ></div>

<script>
  $(document).ready(function() {
      $('#content').summernote();
  });
</script>

<label for="basicInput" class="pt-1">Giới thiệu vị trí</label>
<div name="content" id="content" style="min-height: 500px" ></div>

<script>
  $(document).ready(function() {
      $('#content').summernote();
  });
</script>

<label for="basicInput" class="pt-1">Giới thiệu về dxmb</label>
<div name="content" id="content" style="min-height: 500px" ></div>

<script>
  $(document).ready(function() {
      $('#content').summernote();
  });
</script>
@stop
