<div class="container">


    @foreach ($daftarKatalog as $item)
    <div class="row">
        <div class="col-sm-4">
            <div class="panel panel-primary">
                <div class="panel-heading">{{$item->NAMA_BARANG}}</div>
                <div class="panel-body"><img src="{{$item->FOTO_KIRI}}" class="img-responsive" style="width:100%"
                        alt="Image"></div>
                <div class="panel-footer">{{$item->DESKRIPSI_BARANG}}</div>
            </div>
        </div>
        @endforeach

    </div><br><br>
