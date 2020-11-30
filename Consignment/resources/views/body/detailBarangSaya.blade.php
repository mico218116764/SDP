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
</style>
<div class="login-form containerS" style="height: 100px">
    {{-- if($transaksi[0]->status == 0){
            dd("belum disetujui");
        }else{
            dd("disetujui");
        } --}}
    @if ($transaksi[0]->status == 0)
        <div class="card">
        <img src="{{asset('images/sand-clock.jpg')}}" alt="Avatar" style="width:100%">
        <div class="container" >
            <h1><b>belum disetujui</b></h1>
            <h3><p>harap menunggu</p></h3>
            <a href="{{url('/back')}}"><button class="btn btn-primary" type="submit">back</button></a>
        </div>
        </div>

    @else
        <h1>disetujui</h1>
    @endif
</div>




