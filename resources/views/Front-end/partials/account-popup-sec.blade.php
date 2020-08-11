<div class="account-popup-sec"> 

<div class="account-popup-area">
<div class="account-popup">
    <div class="row">
        <div class="col-md-6">
            <div class="account-user">
                <div class="logo">
                       <i class="fa fa-get-pocket"></i>
                       <span>KwitaraCars</span>
                       <strong>SELL VEHICULS</strong>
                </div><!-- LOGO -->
                
                <form method="POST" action="{{ route('login') }}">
                 @csrf

                   <h1>Login Form</h1>
                   
                   <div class="form-group row">
                    <div class="field">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Username" />

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                   </div>

                   <div class="form-group row">  
                    <div class="field">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="password" placeholder="Password"/>

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                   </div>

                   <div class="form-group row"> 
                    <div class="field">

                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    
                    </div>
                   </div>
                </form>
                
                <i>OR</i>
                
                <span>LOGIN WITH</span>
                
                <ul class="social-btns">
                    <li><a href="#" title=""><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" title=""><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#" title=""><i class="fa fa-twitter"></i></a></li>
                </ul>
            
            </div>
        
        </div>
        <div class="col-md-6">
            <div class="registration-sec">
                <h1>SIGNUP Form</h1>
                
                  <form method="POST" action="{{ route('register') }}">
                   @csrf

                   <div class="form-group row">
                    <div class="field">
                        <input id="name" type="text" placeholder="Your Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus />

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                   </div>
                   <div class="form-group row">
                    <div class="field">
                        <input id="email" type="email" placeholder="Your Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" />

                         @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                   </div>
                    
                   <div class="form-group row"> 
                    <div class="field">
                        <input id="password" type="password" placeholder="Type Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" />

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                   </div>

                   <div class="form-group row"> 
                    <div class="field">
                        <input type="password" placeholder="Retype Password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" />
                    </div>                                   
                   </div>

                    {{-- <label>
                        <input type="checkbox" /> By Clicking on this You are agree with our <a href="#" title="">Terms & Condition</a>
                    </label> --}}
                   
                   <div class="form-group row mb-0"> 
                    <input type="submit" value="Singup Now" class="flat-btn" />
                   </div>

                </form>
            
            </div><!-- Registration sec -->
        </div>
    </div>
    <span class="close-popup"><i class="fa fa-close"></i></span>
</div>
</div>
</div><!-- Account Popup Sec -->