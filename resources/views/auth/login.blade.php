<x-guest-layout>
    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 align-items-center justify-content-center">
                    <div class="d-flex justify-content-center py-4">
                        <a href="index.html" class="logo d-flex align-items-center w-auto">
                            <img src="{{asset('assets/img/demo-logo.jpg')}}" alt="">
                            <span class="d-none d-lg-block">Social Login</span>
                        </a>
                    </div>

                    <div class="card mb-3">

                        <div class="card-body">
                            <div class="block mt-4 text-center">
                                <p class="text-center"><b>LOGIN WITH</b></p>
                                <div class="flex items-center justify-center mt-4">
                                    <a class="btn btn-primary" href="{{ url('auth/facebook') }}" id="btn-fblogin" style="font-size: 20px; color: #fff; padding: 0px 13px; border: 1px solid #1771ed; background: #1771ed; border-radius: 5px;">
                                        <i class="bi bi-facebook" aria-hidden="true"></i> facebook
                                    </a>
                                    <a class="btn" href="{{ url('auth/linkedin') }}" style="font-size: 20px; color: #fff; padding: 0px 13px; border: 1px solid #003f67; background: #003f67; border-radius: 5px; margin: 5px;">
                                        <i class="bi bi-linkedin" aria-hidden="true"></i> LinkedIn
                                    </a>
                                </div>
                            </div>
                            <p class="text-center text-sedondary">OR</p>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="col-12 row">
                                    <label for="email" class="col-md-4 form-label text-center">{{__('Email')}}</label>
                                    <div class="col-md-8">
                                        <input type="email" name="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" required autofocus>
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-12 mt-4 row">
                                    <label for="yourPassword" class="col-md-4 form-label text-center">{{__('Password')}}</label>
                                    <div class="col-md-8">
                                        <input type="password" name="password" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" id="yourPassword" autocomplete="current-password" required>
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="block mt-4 row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-8">
                                        <label for="remember_me" class="inline-flex items-center">
                                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="text-center mt-5">
                                    <button type="submit" class="btn btn-sm btn-primary">{{ __('Log in') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="credits">
                        <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>