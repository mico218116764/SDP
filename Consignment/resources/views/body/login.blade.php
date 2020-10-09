<div class="sufee-login d-flex align-content-center flex-wrap">
    <div class="container">
        <div class="login-content">
            <div class="login-logo">
                <a href="index.html">
                    <img class="align-content" src="images/logo.png" alt="">
                </a>
            </div>
            <div class="login-form">
                <form method="POST" action="/doLogin">
                    @csrf
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="email" class="form-control" name="USERPB_EMAIL" placeholder="Email">
                    </div>
                    @error('USERPB_EMAIL')
                        <div style="color:red; font-weight:bold"> {{$message}}</div><br>
                    @enderror
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="USERPB_PASSWORD" placeholder="Password">
                    </div>
                    @error('USERPB_PASSWORD')
                        <div style="color:red; font-weight:bold"> {{$message}}</div><br>
                    @enderror
                    <div class="checkbox">
                        <label class="pull-right">
                            <a href="#">Forgotten Password?</a>
                        </label>

                    </div>
                    <button type="submit" name="btnLogin" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                    <div class="register-link m-t-15 text-center">
                        <p>Don't have account ? <a href="/register"> Sign Up Here</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
