@if ($message = Session::get('success'))
{{-- <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>    
    <strong>{{ $message }}</strong>
</div> --}}
<div class="alert alert-success d-flex align-items-center baz-notif" role="alert">
    {{-- <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg> --}}
    <i class="bi bi-check-circle-fill me-2"></i>
    <div>
        {{ $message }}
    </div>
    <button type="button" class="btn-close ms-4" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if ($message = Session::get('error'))
<div class="alert alert-danger d-flex align-items-center baz-notif" role="alert">
    {{-- <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg> --}}
    <i class="bi bi-exclamation-triangle-fill me-2"></i>
    <div>
        {{ $message }}
    </div>
    <button type="button" class="btn-close ms-4" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
   
{{-- @if ($message = Session::get('warning'))
<div class="alert alert-warning alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>    
    <strong>{{ $message }}</strong>
</div>
@endif
   
@if ($message = Session::get('info'))
<div class="alert alert-info alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>    
    <strong>{{ $message }}</strong>
</div>
@endif --}}
  
@if ($errors->any())
<div class="alert alert-danger d-flex align-items-center baz-notif" role="alert">
    {{-- <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg> --}}
    <i class="bi bi-exclamation-triangle-fill me-2"></i>
    <div>
        Please check the form below for errors.
    </div>
    <button type="button" class="btn-close ms-4" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
