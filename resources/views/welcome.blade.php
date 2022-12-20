<x-guest-layout>

    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="{{ url('/') }}" class="h1">
                    <x-common.site-name-gust />
                </a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Comming soon...</p>

                @if (Route::has('login'))
                    <p class="mb-0">
                        @env('local')
                        <a href="{{ route('login') }}" type="button" class="btn btn-block btn-outline-primary">Login</a>
                        @endenv
                    </p>
                @endif

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>

</x-guest-layout>
