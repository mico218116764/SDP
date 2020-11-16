<style>
    td {
        text-align: center;
    }
</style>
<div class="profile-form">
    <div style="padding-left: 200px;padding-right: 200px;">
        <div class="container">
            <div class="row">
              <div class="col-md-5">
                <h1>Edit Profile</h1>
                <br>
                <form method="get" action="/changeProfile">
                    @csrf
                        <input type="hidden" name="EMAIL_USERe" value="{{$dataUser[0]->USERPB_EMAIL}}">
                        <h4>Email: </h4>
                        <input type="email" style="width:70%;" class="form-control" name="EMAIL_USER" placeholder="Masukkan Email Anda" value="{{$dataUser[0]->USERPB_EMAIL}}" disabled="true">

                        <h4>Nama: </h4>
                        <input type="text" style="width:70%;" class="form-control" name="NAMA_USER" placeholder="Masukkan Nama Anda" value="{{$dataUser[0]->USERPB_NAME}}" disabled="true">

                        <h4>Nomor Telefon: </h4>
                        <input type="text" style="width:70%;"class="form-control" name="NOMOR_TELFON" placeholder="Masukkan Nomor Telfon Anda" value="{{$dataUser[0]->USERPB_PHONE_NUMBER}}" disabled="true">

                        <h4>Alamat: </h4>
                        <input type="text" style="width:70%;" class="form-control" name="ALAMAT_USER" placeholder="Masukkan Alamat Anda" value="{{$dataUser[0]->USERPB_ADDRESS}}" disabled="true">

                        <h4>NIK: </h4>
                        <input type="number" style="width:70%;" class="form-control" name="NIK_USER" placeholder="Masukkan NIK Anda"
                        @if ($dataUser[0]->NIK == null)
                            value="{{$dataUser[0]->NIK}}"
                        @else
                            value="{{$dataUser[0]->NIK}}" disabled="true"
                        @endif
                        >

                        <div class="form-group">
                            <h4>Foto KTP </h4>
                            <input type="file" style="width:70%;" class="form-control-file" id="exampleFormControlFile1" name='FOTO_KTP'
                            @if ($dataUser[0]->FOTO_KTP == null)
                                value="{{$dataUser[0]->FOTO_KTP}}"
                            @else
                                value="{{$dataUser[0]->FOTO_KTP}}" disabled="true"
                            @endif>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" style="width:70%;" name="USERPB_PASSWORD" placeholder="Masukkan Password">
                            </div>
                            @error('USERPB_PASSWORD')
                                <div style="color:red; font-weight:bold"> {{$message}}</div><br>
                            @enderror

                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control" style="width:70%;" name="USERPB_PASSWORD_confirmation" placeholder="Masukkan Confirm Password">
                            </div>
                            @error('USERPB_PASSWORD_confirmation')
                                <div style="color:red; font-weight:bold"> {{$message}}</div><br>
                            @enderror

                            <br><br><br>
                            <input name="butSave" style="width:70%;font-size:13pt;" class="btn btn-primary" type="submit" value="SAVE DATA">
                            <br><br><br>
                        </div>
                 </div>
                </form>
              <div class="col-md-4">
                <h1>Ganti Password</h1>
                <br>
                <form method="get" action="/changeProfile">
                    @csrf
                    <input type="hidden" name="EMAIL_USERe" value="{{$dataUser[0]->USERPB_EMAIL}}">
                    <div class="form-group">
                        <label>Current Password</label>
                        <input type="password" class="form-control" style="width:70%;" name="USERPB_PASSWORD_Now" placeholder="Masukkan Password">
                    </div>
                    <div class="form-group">
                        <label>New Password</label>
                        <input type="password" class="form-control" style="width:70%;" name="USERPB_PASSWORD" placeholder="Masukkan Password">
                    </div>
                    @error('USERPB_PASSWORD')
                                <div style="color:red; font-weight:bold"> {{$message}}</div><br>
                            @enderror
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" class="form-control" style="width:70%;" name="USERPB_PASSWORD_confirmation" placeholder="Masukkan Confirm Password">
                    </div>
                    @error('USERPB_PASSWORD_confirmation')
                                <div style="color:red; font-weight:bold"> {{$message}}</div><br>
                            @enderror
                    <br><br><br>
                    <input name="butSavePass" style="width:70%;font-size:13pt;" class="btn btn-primary" type="submit" value="UPDATE PASSWORD">
                    <br><br><br>
                </form>
              </div>
            </div>
          </div>
    </div>
</div>
@if (session('alert'))
    <div class="alert alert-warning">
        {{ session('alert') }}
    </div>
@endif
