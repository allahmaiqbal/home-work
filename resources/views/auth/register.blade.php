<x-guest-layout>
    <div class="register-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="{{ url('/') }}" class="h1">
                    <x-common.site-name-gust />
                </a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Register a new membership</p>

                <form action="{{ route('register') }}" method="post">
                    @csrf

                    <div class="mb-3">
                        <x-form.input-group name="name" icon="fas fa-user" placeholder="Full name" required />
                    </div>

                    <div class="mb-3">
                        <x-form.input-group name="email" type="email" icon="fas fa-envelope" required />
                    </div>

                    <div class="mb-3">
                        <x-form.input-group name="phone" icon="fas fa-phone" required />
                    </div>

                    <div class="mb-3">
                        <x-form.input-group name="password" type="password" icon="fas fa-lock" required />
                    </div>

                    <div class="mb-3">
                        <x-form.input-group name="password_confirmation" type="password" icon="fas fa-lock"
                            placeholder="Retype password" required />
                    </div>

                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary @error('terms') is-invalid @enderror">
                                <input type="checkbox" id="agreeTerms" name="terms" @checked(old('terms'))>
                                <label for="agreeTerms">
                                    I agree to the <a href="#">terms</a>
                                </label>
                            </div>
                            @error('terms')
                                <div class="error invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="error invalid-feedback">
                            <p>where isd</p>
                        </div>

                        <!-- /.col -->
                        <div class="col-4">
                            <x-form.button block primary>Register</x-form.button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <div class="social-auth-links text-center">
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i>
                        Sign up using Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i>
                        Sign up using Google+
                    </a>
                </div>

                @if (Route::has('login'))
                    <a href="{{ route('login') }}" class="text-center">I already have a membership</a>
                @endif
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>

    {{-- <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header text-center fw-semibold fs-2">
                    Register
                </div>
                <div class="card-body">

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}"
                                placeholder="Write your name">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}"
                                placeholder="Write your email address">
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}"
                                placeholder="Write your phone number">
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Write your password">
                        </div>

                        <div class="mb-3">
                            <label for="confirm-password" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="confirm-password"
                                name="password_confirmation" placeholder="Write your password">
                        </div>

                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>

                    @if (Route::has('login'))
                    <div class="text-center">
                        <p>
                            Already registered?
                            <a href="{{ route('login') }}">Login</a>
                        </p>
                    </div>
                    @endif
                </div>
                <div class="card-footer text-muted text-center">
                    <x-common.copyright />
                </div>
            </div>
        </div>
    </div> --}}

    {{-- <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                    autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card> --}}
</x-guest-layout>
