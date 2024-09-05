<link class="js-stylesheet" href="css/light.css" rel="stylesheet">
<script src="js/settings.js"></script>

<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-layout="default">
    <main class="d-flex w-100 h-100">
        <div class="container d-flex flex-column">
            <div class="row vh-100">
                <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">
                        <div class="text-center mt-4">
                            <h1 class="h2">Welcome back!</h1>
                            <p class="lead">
                                Sign in to your account to continue
                            </p>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="m-sm-3">
                                    {{-- <span style="display: flex; justify-content: center; align-items: center;">
                                        <img src="{{ asset('img/photos/logo_v1.webp') }}" alt="">
                                    </span> --}}
                                    <div class="row">
                                        <div class="col">
                                            <hr>
                                        </div>
                                        <div class="col-auto text-uppercase d-flex align-items-center">Or</div>
                                        <div class="col">
                                            <hr>
                                        </div>
                                    </div>
                                    <form action="{{ route('loginfunction') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input class="form-control form-control-lg" type="email" name="email"
                                                value="{{ old('email') }}" placeholder="Enter your email" />
                                            @error('email')
                                                <div style="color: red;">{{ $message }}</div>
                                            @enderror
                                            @if (session('error'))
                                                <div class="text-danger">
                                                    {{ session('error') }}
                                                </div>
                                            @endif

                                            @if (session('success'))
                                                <div class="text-primary">
                                                    {{ session('success') }}
                                                </div>
                                            @endif


                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <input class="form-control form-control-lg" type="password" name="password"
                                                value="{{ old('password') }}" placeholder="Enter your password" />
                                            @error('password')
                                                <div style="color: red;">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div>
                                            <div class="form-check align-items-center">
                                                <input id="customControlInline" type="checkbox" class="form-check-input"
                                                    value="1" name="remember">

                                                <label class="form-check-label text-small"
                                                    for="customControlInline">Remember me</label>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2 mt-3">
                                            <button type="submit" class="btn btn-lg btn-primary">Sign in</button>
                                            <p class="text-center"><a href="{{ route('adminRegister') }}">Sign up</a>
                                            </p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="js/app.js"></script>
</body>
