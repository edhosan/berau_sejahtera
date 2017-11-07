@if($alert = 'success')
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> {!! session('flash_message') !!}.
</div>
@endif
 