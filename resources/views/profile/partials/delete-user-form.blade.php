<section class="space-y-6">
    <header>
        <h5 class="card-title">
            {{ __('Delete Account') }}
        </h5>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
        @csrf
        @method('delete')

        <div class="mt-6">
            <div class="form-group mt-4 row">
                <label for="password" class="col-md-4">{{__('Password')}}</label>
                <div class="col-md-8">
                    <input type="password" name="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" value="" required autofocus autocomplete="password">
                    @if ($errors->has('password'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>
        <div class="mt-4 row">
            <div class="col-md-4"></div>
            <div class="col-md-8">
                <button type="submit" class="btn btn-danger">{{ __('Delete Account') }}</button>
            </div>
        </div>
    </form>
</section>