<style>
    .card {
      box-shadow: -10px 10px 10px 10px rgba(0,0,0,0.3);
      transition: 0.3s;
      width: 40%;
      padding: 20px;
      /* border: 1px solid gray; */
      border-radius: 15px;
      margin-left: auto;
      margin-right: auto;
    }


    .container {
      padding: 2px 16px;

      margin-left: auto;
      margin-right: auto;
    }
    .containerS{
        margin: 1%;
    }
    .centered{
        margin-left: auto;
        margin-right: auto;
    }
</style>
<div class="login-form containerS" style="height: 100px">
    {{-- if($transaksi[0]->status == 0){
            dd("belum disetujui");
        }else{
            dd("disetujui");
        } --}}
    @if(count($transaksi) == 0)
        <div class="card">
        <img src="{{asset('images/sand-clock.jpg')}}" alt="Avatar" style="width:100%">
        <div class="container" >
            <h1><b>belum disetujui admin</b></h1>
            <h3><p>harap menunggu</p></h3>
            <a href="{{url('/back')}}"><button class="btn btn-primary" type="submit">back</button></a>
        </div>
        </div>
    @elseif ($transaksi[0]->status == 1)
    <div class="card">
        <img src="{{asset('images/verify.png')}}" alt="Avatar" style="width:100%">
        <div class="container" >
            <h1><b>Telah disetujui admin</b></h1>
            <br>
            <div class="form-group centered">
                <label>Input Nomor Resi</label>
                <input type="text" class="form-control" style="width: auto" name="resi" placeholder="Masukkan No Resi">
            </div>
            @error('alasan')
                <div style="color:red; font-weight:bold"> {{$message}}</div><br>
            @enderror
            <a href="{{url('/back')}}"><button class="btn btn-primary" type="submit">back</button></a>
        </div>
        </div>
    @endif
</div>




