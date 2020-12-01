<style>
    .card {
    /* Add shadows to create the "card" effect */
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
        width: fit-content;
        margin-left: auto;
        margin-right: auto;
    }

    /* On mouse-over, add a deeper shadow */
    .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }

    /* Add some padding inside the card container */
    .container {
        padding: 2px 16px;
    }
</style>

<div class="addAdmin-form">
    <form action="{{"/deleteBank"}}" method="post">
        @csrf
        <div class="login-form">
            @if ($pengiriman[0]->resi == null)
                <div class="card">
                    <h1><strong>Status: Penjual Menyiapkan barang</strong></h1>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100" style="width:25%">
                            25%
                        </div>
                    </div>
                </div>

            @elseif($pengiriman[0]->resi != null)
                <div class="card">
                    <h1><strong>Status: Cargo Siap Dikirim</strong></h1>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="50"
                        aria-valuemin="0" aria-valuemax="100" style="width:50%">
                            50%
                        </div>
                    </div>
                </div>
            @elseif($pengiriman[0]->tanggal_diterima != null)
            <div class="card">
                <h1><strong>Status: Cargo Siap Dikirim</strong></h1>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="75"
                    aria-valuemin="0" aria-valuemax="100" style="width:75%">
                        75%
                    </div>
                </div>
            </div>
            @endif
            @if($pengiriman[0]->status != 0)
            <div class="card">
                <h1><strong>Status: Cargo Siap Dikirim</strong></h1>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" aria-valuenow="100"
                    aria-valuemin="0" aria-valuemax="100" style="width:100%">
                        100%
                    </div>
                </div>
            </div>
            @endif
        </div>
    </form>
</div>
