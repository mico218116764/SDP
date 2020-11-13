<style>
    td {
        text-align: center;
    }
</style>
<div class="profile-form">
    <div style="padding-left: 200px;padding-right: 200px; margin-left: 20%">
    <h1>Edit Profile</h1>
    <br>
       <form method="get" action="/doApprove">
        @csrf
            <h4>Email: </h4>
            <input type="email" style="width:70%;" class="form-control" name="EMAIL_USER" placeholder="Masukkan Email Anda">

            <h4>Nama: </h4>
            <input type="text" style="width:70%;" class="form-control" name="NAMA_USER" placeholder="Masukkan Nama Anda">

            <h4>Nomor Telefon: </h4>
            <input type="text" style="width:70%;"class="form-control" name="NOMOR_TELFON" placeholder="Masukkan Nomor Telfon Anda">
            
            <h4>Alamat: </h4>
            <input type="text" style="width:70%;" class="form-control" name="ALAMAT_USER" placeholder="Masukkan Alamat Anda">

            <h4>NIK: </h4>
            <input type="number" style="width:70%;" class="form-control" name="NIK_USER" placeholder="Masukkan NIK Anda">
            
            <div class="form-group">
                <h4>Foto KTP </h4>
                <input type="file" style="width:70%;" class="form-control-file" id="exampleFormControlFile1" name='FOTO_KTP'>
            </div>

            <div class="form-group">
                <label>Nama Bank</label><BR>
                <select class="form-control" style="width:70%; font-size: 12pt;" name="USERPB_NMBANK" id="">
                    <option value="BRI">BRI</option>
                    <option value="BCA">BCA</option>
                    <option value="BNI">BNI</option>
                </select>
            </div>

            <div class="form-group">
                <label>Nomor Rekening</label>
                <input type="text" class="form-control" style="width:70%;" name="USERPB_NOREK" placeholder="Masukkan Nomor Rekening">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" style="width:70%;" name="USERPB_PASSWORD" placeholder="Masukkan Password">
            </div>
            
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" class="form-control" style="width:70%;" name="USERPB_PASSWORD_confirmation" placeholder="Masukkan Confirm Password">
            </div>
            
            <br><br><br>
            <input name="butSave" style="width:70%;font-size:13pt;" class="btn btn-primary" type="submit" value="SAVE DATA">
            <br><br><br>
        </form>
        
    </div>
</div>
@if (session('alert'))
    <div class="alert alert-warning">
        {{ session('alert') }}
    </div>
@endif
