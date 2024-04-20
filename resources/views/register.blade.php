@extends('layout.layoutLogin.mainlogin')
@section('loginBody')
    <form class="login100-form validate-form" method="post">
					<span class="login100-form-title p-b-43">
						Register To Continue
					</span>
        <div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger">
                    <ul>
                        <li>{{ session('error')}}</li>
                    </ul>
                </div>
                @endif
                @if(session('success'))
                <div class="alert alert-success">
                    <ul>
                        <li>{{session('success')}}</li>
                    </ul>
                </div>

            @endif
        </div>

        <div class="wrap-input100 " data-validate = "name is required">
            <input class="input100" type="text" name="name">
            <span class="focus-input100"></span>
            <span class="label-input100">Name</span>
        </div>

        <div class="wrap-input100 " >
            <input class="input100" type="text" name="email">
            <span class="focus-input100"></span>
            <span class="label-input100">Email</span>
        </div>


        <div class="wrap-input100 " data-validate="Password is required">
            <input class="input100" type="password" name="pass">
            <span class="focus-input100"></span>
            <span class="label-input100">Password</span>
        </div>
        <div class="wrap-input100 " data-validate="Password is required">
            <input class="input100" type="password" name="pass_confirmation">
            <span class="focus-input100"></span>
            <span class="label-input100">confirm password</span>
        </div>
        @csrf
        <div class="flex-sb-m w-full p-t-3 p-b-32">
{{--            <div class="contact100-form-checkbox">--}}
{{--                <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">--}}
{{--                <label class="label-checkbox100" for="ckb1">--}}
{{--                    Remember me--}}
{{--                </label>--}}
{{--            </div>--}}

            <div>
                <span class="txt1"> have a account ?</span> <a href="/login" class="txt1">
                    sign in
                </a>
            </div>
        </div>


        <div class="container-login100-form-btn">
            <button type="submit" class="login100-form-btn">
                Register
            </button>
        </div>

        <div class="text-center p-t-46 p-b-20">
						<span class="txt2">
							or sign up using
						</span>
        </div>

        <div class="login100-form-social flex-c-m">
            <a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
                <i class="fa fa-facebook-f" aria-hidden="true"></i>
            </a>

            <a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
                <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
        </div>
    </form>
@endsection
