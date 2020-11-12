<div class="container">


    @foreach ($daftarKatalog as $item)
    <div class="row">
        <div class="col-sm-4">
            <a href="{{url('/detailsbarang')}}">
            <div class="panel panel-primary">
                <div class="panel-heading">{{$item->NAMA_BARANG}}</div>
                <div class="panel-body" style="width: 250px;
                height: 250px;"><img src="{{$item->FOTO_KIRI}}" class="img-responsive"alt="Image"></div>
                <div class="panel-footer">{{$item->DESKRIPSI_BARANG}}</div>
            </div>
        </a>
        </div>
        @endforeach

    </div><br><br>
