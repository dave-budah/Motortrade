<x-base-layout>
    <section class="authentication my-5 d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="form-box">
                        <x-jet-validation-errors class="mb-3 text-center text-danger"/>
                        <form method="POST" action="{{ route('register') }}" class="auth-form" id="registration">
                            @csrf
                            <div class="text-center">
                                <h1 class="form_title text-uppercase">Register  as a Dealer</h1>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form_div">
                                        <input type="text" class="form_input" placeholder="" id="name" name="name" :value="old('name')">
                                        <label for="name" class="form_label">Name</label>
                                        <small class="message"></small>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form_div">
                                        <input type="text" class="form_input" placeholder="" id="email" name="email" :value="old('email')">
                                        <label for="email" class="form_label">Email</label>
                                        <small class="message"></small>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form_div">
                                        <input type="password" class="form_input" placeholder="" id="password" name="password">
                                        <label for="password" class="form_label">Password</label>
                                        <small class="message"></small>
                                        <span>
                                    <i id="review" class="fa fa-eye" onclick="togglePW()" aria-hidden="true"></i>
                                </span>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form_div">
                                        <input type="text" class="form_input" placeholder="" name="password_confirmation" id="confirmPassword">
                                        <label for="confirmPassword" class="form_label">Confirm Password</label>
                                        <small class="message"></small>
                                        <span>
                                    <i id="reviewer" class="fa fa-eye" onclick="togglePWD()" aria-hidden="true"></i>
                                </span>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center  flex-md-row flex-column-reverse">
                                <span class="text-black-50">Already have an account <a href="{{ route('login') }}" class="text-warning fw-bold">Login</a></span>
                                <button type="submit" class="auth-form-button mb-2">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-base-layout>
