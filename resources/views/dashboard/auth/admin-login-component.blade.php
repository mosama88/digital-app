<form wire:submit.prevent='submit' method="POST" action="{{ route('admin.login') }}" class="mb-3">
    @csrf
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control @error('email') is-invalid @enderror" wire:model="email"
            placeholder="Enter your email" autofocus />
        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3 form-password-toggle">
        <div class="d-flex justify-content-between">
            <label class="form-label" for="password">Password</label>
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">
                    <small>Forgot Password?</small>
                </a>
            @endif
        </div>
        <div class="input-group input-group-merge">
            <input type="password" class="form-control" @error('password') is-invalid @enderror wire:model="password"
                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                aria-describedby="password" />
            <span class="input-group-text cursor-pointer "><i class="bx bx-hide"></i></span>
        </div>
        @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" wire:model="remember" />
            <label class="form-check-label" for="remember-me"> Remember Me </label>
        </div>
    </div>
    <div class="mb-3">
        <button class="btn btn-primary d-grid w-100" type="submit" wire:loading.attr='disabled'>
            <span wire:loading.remove>
                Sign in
            </span>
            <div class="text-center" wire:loading wire:target="submit">
                <span class="spinner-border text-light" role="status">
                    <span class="visually-hidden">Loading...</span>
                </span>
            </div>
        </button>


    </div>
</form>
