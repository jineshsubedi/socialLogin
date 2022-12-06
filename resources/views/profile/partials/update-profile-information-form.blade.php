<section>
    <header>
        <h5 class="card-title">
            {{ __('Profile Information') }}
        </h5>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')
        <div class="form-group">
            <div class="form-group mt-4 row">
                <label for="name" class="col-md-4">{{__('Name')}}</label>
                <div class="col-md-8">
                    <input type="text" name="name" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{auth()->user()->name}}" required autofocus autocomplete="name">
                    @if ($errors->has('name'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group mt-4 row">
                <label for="email" class="col-md-4">{{__('Email')}}</label>
                <div class="col-md-8">
                    <input type="text" name="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{auth()->user()->email}}" required autocomplete="email">
                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
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
