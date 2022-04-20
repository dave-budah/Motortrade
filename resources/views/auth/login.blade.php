<x-base-layout>
    <section class="authentication my-5 d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row mx-auto">
                <div class="col-md-6 mx-auto">
                    <x-jet-validation-errors class="mb-4 text-center text-danger" />
                    <form method="POST" action="{{ route('login') }}" class="auth-form mx-auto" id="login-form">
                        @csrf
                        <div class="text-center">
                            <h1 class="form_title text-uppercase">Login</h1>
                        </div>

                        <div class="form_div">
                            <input type="text" class="form_input" id="email" name="email" :value="old('email')">
                            <label for="email" class="form_label">Email</label>
                            <small class="message"></small>
                        </div>

                        <div class="form_div">
                            <input type="password" class="form_input" id="password" name="password" autocomplete="current-password">
                            <label for="password" class="form_label">Password</label>
                            <small class="message"></small>
                            <span>
                            <i id="review" class="fa fa-eye" onclick="togglePW()" aria-hidden="true"></i>
                        </span>
                        </div>


                        <div class="d-flex justify-content-between align-items-center flex-md-row flex-column-reverse">
                            <a href="{{ route('password.request') }}" class="text-black-50 fw-bold">Forgot password?</a>
                            <button type="submit" class="auth-form-button mb-2">Login</button>
                        </div>
                        <div class="w-100 text-center mt-4">
                            <span class="text-black-50">Don't have an account <a href="{{ route('register') }}" class="text-warning fw-bold">Register</a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-base-layout>
