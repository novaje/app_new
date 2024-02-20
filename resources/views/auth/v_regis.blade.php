<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title data-setting="app_name" data-rightJoin=" Responsive Bootstrap 5 Admin Dashboard Template">Qompac UI Responsive Bootstrap 5 Admin Dashboard Template</title>
      <meta name="description" content="Qompac UI is a revolutionary Bootstrap Admin Dashboard Template and UI Components Library. The Admin Dashboard Template and UI Component features 8 modules.">
      <meta name="keywords" content="premium, admin, dashboard, template, bootstrap 5, clean ui, qompac-ui, admin dashboard,responsive dashboard, optimized dashboard, simple auth">
      <meta name="author" content="Iqonic Design">
      <meta name="DC.title" content="Qompac UI Simple | Responsive Bootstrap 5 Admin Dashboard Template">
      <!-- Favicon -->
       {{-- include css --}}
        @include('include.v_style')
      
      <!-- Google Font -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">  </head>
  <body class=" ">
    <div class="wrapper">
      <section class="login-content overflow-hidden">
         <div class="row no-gutters align-items-center bg-white">            
            <div class="col-md-12 col-lg-6 align-self-center"> 
               <div class="row justify-content-center">
                  {{-- <div class="col-md-12 col-lg-6 align-self-center"> 
                        <a href="dashboard/index.html" class="navbar-brand d-flex align-items-center mb-3 justify-content-center text-primary">
                        <div class="logo-normal">
                           <svg class="" viewBox="0 0 32 32" width="80px" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M7.25333 2H22.0444L29.7244 15.2103L22.0444 28.1333H7.25333L0 15.2103L7.25333 2ZM11.2356 9.32316H18.0622L21.3334 15.2103L18.0622 20.9539H11.2356L8.10669 15.2103L11.2356 9.32316Z" fill="currentColor"/>
                                 <path d="M23.751 30L13.2266 15.2103H21.4755L31.9999 30H23.751Z" fill="#3FF0B9"/>
                           </svg>
                        </div>
                        <h2 class="logo-title ms-3 mb-0" data-setting="app_name">Qompac UI</h2>
                     </a>  
                  </div> --}}
                  <div class="col-md-9">
                     <div class="card auth-card  d-flex justify-content-center mb-0">
                        <div class="card-body">
                           <h2 class="mb-2 text-center">Sign Up</h2>
                           <p class="text-center">Create your Qompac UI account.</p>
                          {{-- LOGIN FORM --}}
                            <form method="post" action="{{ route('register.store') }}">
                                @csrf
                              <div class="row">
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                       <label for="full-name" class="form-label">Full Name</label>
                                       <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" style="border-color: black; width: 100%;">
                                        @error('name')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                       <label for="email" class="form-label">Email</label>
                                       <input type="text" id="email" name="email" class="form-control @error('email') is-invalid @enderror" style="border-color: black; width: 100%;">
                                        @error('email')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                       <label for="password" class="form-label">Password</label>
                                       <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" style="border-color: black; width: 100%;">
                                        @error('password')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                 </div>
                                 <div class="col-lg-12 d-flex justify-content-center">
                                    <div class="form-check mb-3">
                                       <input type="checkbox" class="form-check-input" id="customCheck1">
                                       <label class="form-check-label" for="customCheck1">I agree with the terms of use</label>
                                    </div>
                                 </div>
                              </div>
                              <div class="d-flex justify-content-center">
                                 <button type="submit" class="btn btn-primary">Sign Up</button>
                              </div>
                              <p class="text-center my-3">or sign in with other accounts?</p>
                              <p class="mt-3 text-center">
                                 Already have an Account <a href="{{ route('sign') }}" class="text-underline">Sign In</a>
                              </p>
                           </form>
                        </div>
                     </div>    
                  </div>
               </div>           
            </div>
         </div>
      </section>
    </div>
    <!-- Library Bundle Script -->
    @include('include.v_script')
    
  </body>
</html>
