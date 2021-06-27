@if ($message = Session::get('success'))
<div class="toast ml-auto" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="true" data-delay="2000">
    <div class="toast-header">
      <i class="far fa-check-circle mr-1 text-green-500" style="color: #009900; font-size: 1.5rem"></i>
      <strong class="mr-auto" style="font-size: 1.1rem; color: #009900;">Successful</strong>
      {{-- <small>11 mins ago</small> --}}
      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="toast-body">
      {{ $message }}
    </div>
</div>
@endif

{{-- @if ($message = Session::get('error'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Error</strong> {{ $message }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif --}}
@if ($message = Session::get('staking-success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong> <i class="fa fa-check-square" aria-hidden="true"></i> Successful</strong> {{ $message }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif