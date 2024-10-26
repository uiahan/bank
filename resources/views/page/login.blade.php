@extends('layout.master')
@section('title', 'Login')
@section('content')
    <div class="login-section d-flex align-items-center justify-content-center px-3 px-md-0">
        <div class="card rounded-5 bg-transparent border-0 shadow-lg">
            <div class="row">
                <div class="col-lg-6 col-12 d-none d-lg-block py-4 px-5 d-flex justify-content-center align-items-center rounded-start-5"
                    style="background-color: white">
                    <div>
                        <div class="d-flex justify-content-center">
                            <img src="{{ asset('img/login-logo.png') }}" alt="" width="280">
                        </div>
                        <div>
                            <h2 class="text-center fw-bold">Selamat Datang!</h2>
                            <p class=" text-center">Aplikasi ini dirancang untuk memudahkan anda melakukan
                                laporan keuangan</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 p-5">
                    <div>
                        <h3 class="card-title fw-bold text-center text-white">KOPERASI</h3>
                        <h6 class="card-title fw-bold text-center text-white">PT Lorem Ipsum Dolor Sit</h6>
                    </div>
                    <div class="mt-4">
                        <h6 class="text-center fw-normal text-white">Selamat datang di aplikasi koperasi <br> PT Lorem Ipsum Dolor Sit
                        </h6>
                    </div>
                    <div class="mt-4">
                        <small class=" text-small text-center text-white">Silahkan masukan email dan password anda</small>
                        <form action="{{ route('postLogin') }}" method="POST" class="form-group">
                            @csrf
                            <div class=" mt-2">
                                <input type="text" class="form-control border-0" required placeholder="Email"
                                    name="email" style="background-color: #ededed">
                            </div>
                            <div class="mt-2">
                                <div class="position-relative">
                                    <input type="password" id="password" class="form-control border-0" required
                                        placeholder="Password" name="password"
                                        style="background-color: #ededed; padding-right: 2.5rem;">
                                    <i class="fa fa-eye text-secondary position-absolute end-0 top-50 translate-middle-y me-3"
                                        id="togglePassword" style="cursor: pointer;"></i>
                                </div>
                            </div>
                            @if (session('notif'))
                                <div class="alert alert-success mt-2">
                                    {{ session('notif') }}
                                </div>
                            @endif
                            <div class="mt-3 d-flex justify-content-center">
                                <button type="submit" class="btn fw-semibold px-5"
                                    style="background-color: white">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const passwordInput = document.querySelector('#password');

        togglePassword.addEventListener('click', function() {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);

            this.classList.toggle('fa-eye-slash');
        });
    </script>

    <style>
        .login-section {
            position: relative;
            overflow: hidden;
            height: 100vh;
        }

        .login-section::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            z-index: -1;
            background-image: url(img/bg-login.jpg);
        }

        .rounded-start-5 {
            border-top-left-radius: 32px;
            border-bottom-left-radius: 32px;
        }

        .card {
            backdrop-filter: blur(35px)
        }

        @media (min-width: 768px) {
            .card {
                width: 65% !important;
            }
        }

        @media (min-width: 992px) {
            .card {
                width: 80% !important;
            }
        }

        @media (min-width: 1200px) {
            .card {
                width: 50% !important;
            }
        }
    </style>
@endsection
