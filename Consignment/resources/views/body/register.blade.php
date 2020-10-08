<div class="login-form">
    <form method="POST" action="{{url('/doRegister')}}">
        @csrf
        <div class="container" style="padding: 20px">
            <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="USERPB_NAME" placeholder="Masukkan Nama">
            </div>
            @error('USERPB_NAME')
                <div style="color:red; font-weight:bold"> {{$message}}</div><br>
            @enderror

            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="USERPB_EMAIL" placeholder="Masukkan Email">
            </div>
            @error('USERPB_EMAIL')
                <div style="color:red; font-weight:bold"> {{$message}}</div><br>
            @enderror

            <div class="form-group">
                <label>No Telp</label>
                <input type="text" class="form-control" name="USERPB_PHONE_NUMBER" placeholder="Masukkan Nomor Telephone">
            </div>
            @error('USERPB_PHONE_NUMBER')
                <div style="color:red; font-weight:bold"> {{$message}}</div><br>
            @enderror

            <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" name="USERPB_ADDRESS" placeholder="Masukkan Alamat">
            </div>
            @error('USERPB_ADDRESS')
                <div style="color:red; font-weight:bold"> {{$message}}</div><br>
            @enderror

            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="USERPB_PASSWORD" placeholder="Masukkan Password">
            </div>
            @error('USERPB_PASSWORD')
                <div style="color:red; font-weight:bold"> {{$message}}</div><br>
            @enderror

            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" class="form-control" name="USERPB_PASSWORD_confirmation" placeholder="Masukkan ConfirmPassword">
            </div>
            @error('USERPB_PASSWORD_confirmation')
                <div style="color:red; font-weight:bold"> {{$message}}</div><br>
            @enderror

            <div class="form-group">
                <label>Link Foto KTP</label>
                <input type="text" class="form-control" name="USERPB_IDENTITY" placeholder="Masukkan Link KTP">
            </div>
            @error('USERPB_IDENTITY')
                <div style="color:red; font-weight:bold"> {{$message}}</div><br>
            @enderror

            <div class="form-group">
                <label>Nama Bank</label>
                <input type="text" class="form-control" name="USERPB_NMBANK" placeholder="Masukkan Nama Bank">
            </div>
            @error('USERPB_NMBANK')
                <div style="color:red; font-weight:bold"> {{$message}}</div><br>
            @enderror

            <div class="form-group">
                <label>Nomor Rekening</label>
                <input type="text" class="form-control" name="USERPB_NOREK" placeholder="Masukkan Nomor Rekening">
            </div>
            @error('USERPB_NOREK')
                <div style="color:red; font-weight:bold"> {{$message}}</div><br>
            @enderror


            <div class="checkbox">
                <label>
                    <input type="checkbox" name='txtagree'> Agree the terms and policy
                </label>
            </div>
            <button type="submit" name="btnRegis" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>

            <div class="register-link m-t-15 text-center">
                <p>Already have account ? <a href="/login">Sign in</a></p>
            </div>
        </div>

    </form>
</div>
