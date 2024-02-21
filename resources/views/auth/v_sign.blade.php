<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" >
    <head>
        <meta http-equiv="content-type" content="text/html" charset="utf-8" />
        <title>SIGN-JKN</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="" >
        @include('include.v_stylelogin')
        <script src="https://secure.exportkit.com/cdn/js/ek_googlefonts.js?v=6"></script>
        <!-- Add your custom HEAD content here -->

    </head>
    <body>
        <div id="content-container" >
            <div id="_bg__login_"  ></div>
            <img src="{{ asset('template/skins/logo_dinkes_new.png') }}" id="logo_dinkes_new" />

           {{-- background ellipse --}}
            <div id="group_1"  >
                <div id="ellipse_1"></div>
                <div id="ellipse_2"></div>
            </div>
            <div id="group_2"  >
                <div id="ellipse_1_ek1"></div>
                <div id="ellipse_2_ek1"></div>
            </div>
           {{-- ==========END BACKGROUN============ --}}

           {{-- BODY BACKGROUND --}}
           <div id="rectangle_1"  ></div>
           <div id="selamat_datang_di_aplikasi_jkn_dinas_kesehatan_deli_serdang" >
                Selamat Datang di Aplikasi JKN<br/>Dinas Kesehatan Deli Serdang
           </div>
           <div id="ellipse_5"  ></div>
           <div id="ellipse_4"  ></div>

           <div id="group_6"  >
               <div id="sign_in" >
                   Sign In
               </div>
               <div id="login_in_stay_connected_" >
                   Login in Stay Connected.
               </div>
           </div>
           {{-- ================END BODY============== --}}

           {{--  LOGIN FORM --}}
           <div id="group_3">
            <label for="name" style="color: black;">Email</label>
            <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" style="border-color: black; width: 100%;">
            @error('name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
           </div>

           <div id="group_4">
                <label for="password" style="color: black;">Password</label>
                <input type="password" id="name" name="password" class="form-control @error('password') is-invalid @enderror" style="border-color: black; width: 100%;">
                @error('password')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
           </div>

           <div id="group_5"  >
               <div id="rectangle_3"></div>
               <div id="sign_in_ek1">Sign In
               </div>
           </div>

           <div id="group_7"  >
               <div id="rectangle_4"></div>
               <div id="remember_me">Remember Me
           </div>

           </div>
           <div id="forgot_password">Forgot Password
           </div>

           <div id="group_8"  >
               <div id="don_t_have_an_account_"> Don't have an account?
               </div>
               <div id="click_here_to_sign_up"> <a href="{{ route('regis') }}">Click here to Sign Up</a>
                </div>
            </div>
           {{--===== END LOGIN FORM =====--}}

        </div>
    </body>
</html>