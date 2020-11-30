<style>
    .card {
      box-shadow: -10px 10px 10px 10px rgba(0,0,0,0.3);
      transition: 0.3s;
      width: 100%;
      padding: 20px;
      /* border: 1px solid gray; */
      border-radius: 15px;
    }


    .container {
      padding: 2px 16px;
    }
    .containerS{
        margin: 1%;
    }
</style>
<div class="login-form containerS" style="height: 100px">
    @if (count($daftarKatalog) == 0)
        <div class="card" style="height: 500px">
    @else
        <div class="card" >
    @endif
        <h1>Barang saya</h1>
        @foreach ($daftarKatalog as $item)
        <div class="row">
            <div class="col-sm-4">
                <a href="{{url('/detailbarangku/'.$item->PENGAJUAN_ID)}}">
                <div class="panel panel-primary" >
                    <div class="panel-heading">
                        {{$item->NAMA_BARANG}}
                        @if ($item->STATUS_BARANG == 0)
                            <h6><span class="label label-warning">Terdisplay</span></h6>
                        @else
                            <h6><span class="label label-success">Telah terbeli</span></h6>
                        @endif

                    </div>
                    <div class="panel-body" style="width: 250px;height: 250px; margin-left: auto; margin-right: auto;">
                    <img src="{{asset('images/'.$item->FOTO_KIRI)}}" class="img-responsive"alt="Image">
                </div>
                <div class="panel-footer desc">
                    <?php
                        echo substr($item->DESKRIPSI_BARANG, 0, 100) . (strlen($item->DESKRIPSI_BARANG) > 100 ? "..." : '');
                    ?> </div>
                </div>
                </a>
            </div>
        @endforeach
    </div>

</div>




