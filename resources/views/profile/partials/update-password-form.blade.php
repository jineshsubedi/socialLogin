<section>
    <header>
        <h5 class="card-title">
            {{ __('Update Password') }}
        </h5>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')
            <div class="form-group mt-4 row">
                <label for="current_password" class="col-md-4">{{__('Current Password')}}</label>
                <div class="col-md-8">
                    <input type="password" name="current_password" class="form-control {{ $errors->has('current_password') ? ' is-invalid' : '' }}" required autofocus autocomplete="current_password">
                    @if ($errors->has('current_password'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('current_password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group mt-4 row">
                <label for="password" class="col-md-4">{{__('New Password')}}</label>
                <div class="col-md-8">
                    <input type="password" name="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" required autofocus autocomplete="password">
                    @if ($errors->has('password'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group mt-4 row">
                <label for="password_confirmation" class="col-md-4">{{__('Confirm Password')}}</label>
                <div class="col-md-8">
                    <input type="password" name="password_confirmation" class="form-control {{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" required autofocus autocomplete="password_confirmation">
                    @if ($errors->has('password_confirmation'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

        <div class="mt-4 row">
            <div class="col-md-4"></div>
            <div class="col-md-8">
                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
            </div>
        </div>
    </form>
</section>
