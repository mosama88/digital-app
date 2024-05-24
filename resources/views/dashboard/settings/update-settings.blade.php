
<form action="" method="POST" wire:submit.prevent='submit'>
    <div class=" card-body row">
        @if (session()->has('success'))
        <div class="alert alert-primary">
            {{ session('success') }}
        </div>
    @endif
        <h5 class="card-header">Add Settings</h5>
{{-- Name Input --}}
<div class=" col-md-6 mb-3">
    <label for="defaultFormControlInputname" class="form-label">Name</label>
    <input type="text" class="form-control @error('settings.name') is-invalid @enderror" id="defaultFormControlInputname"  wire:model='settings.name' placeholder="Name" aria-describedby="defaultFormControlHelp"/>
    @error('settings.name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>
{{-- Phone Input --}}
<div class=" col-md-6 mb-3">
    <label for="defaultFormControlInputPhone" class="form-label">Phone</label>
    <input type="text" class="form-control @error('settings.phone') is-invalid @enderror"  id="defaultFormControlInputPhone" wire:model='settings.phone' placeholder="Phone" aria-describedby="defaultFormControlHelp"/>
    @error('settings.phone')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>

{{-- Address Input --}}
<div class=" col-md-6 mb-3">
<label for="defaultFormControlInputAddress" class="form-label">Address</label>
<input type="text" class="form-control @error('settings.address') is-invalid @enderror" id="defaultFormControlInputAddress"  wire:model='settings.address' placeholder="Address" aria-describedby="defaultFormControlHelp"/>
@error('settings.address')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>
{{-- Email Input --}}
<div class=" col-md-6 mb-3">
<label for="defaultFormControlInputEmail" class="form-label">Email</label>
<input type="text" class="form-control  @error('settings.email') is-invalid @enderror" id="defaultFormControlInputEmail" wire:model='settings.email' placeholder="Email" aria-describedby="defaultFormControlHelp"/>
@error('settings.email')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>  

{{-- Facbook Input --}}
<div class=" col-md-6 mb-3">
<label for="defaultFormControlInputFacebook" class="form-label">Facebook</label>
<input type="text" class="form-control @error('settings.facebook') is-invalid @enderror" id="defaultFormControlInputFacebook" wire:model='settings.facebook'  placeholder="Facebook" aria-describedby="defaultFormControlHelp"/>
@error('settings.facebook')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
</div> 

 {{-- Instgram Input --}}
 <div class=" col-md-6 mb-3">
    <label for="defaultFormControlInputInstgram" class="form-label">Instgram</label>
    <input type="text" class="form-control @error('settings.instgram') is-invalid @enderror" id="defaultFormControlInputInstgram" wire:model='settings.instgram'  placeholder="Instgram" aria-describedby="defaultFormControlHelp"/>
    @error('settings.instgram')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
</div> 

  {{-- Linkedin Input --}}
  <div class=" col-md-6 mb-3">
    <label for="defaultFormControlInputLinkedin" class="form-label">Linkedin</label>
    <input type="text" class="form-control @error('settings.linkedin') is-invalid @enderror" id="defaultFormControlInputLinkedin" wire:model='settings.linkedin'  placeholder="Linkedin" aria-describedby="defaultFormControlHelp"/>
    @error('settings.linkedin')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
</div> 

   {{-- Twitter Input --}}
   <div class=" col-md-6 mb-3">
    <label for="defaultFormControlInputTwitter" class="form-label">Twitter</label>
    <input type="text" class="form-control @error('settings.twitter') is-invalid @enderror" id="defaultFormControlInputTwitter" wire:model='settings.twitter'   placeholder="Twitter" aria-describedby="defaultFormControlHelp"/>
    @error('settings.twitter')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>

    {{-- Submit Button --}}
<div class=" col-md-6 mb-3">
    <button type="submit" class="btn btn-primary">Send</button>
</div>
</form>
