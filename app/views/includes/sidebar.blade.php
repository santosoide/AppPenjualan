<div id="navside" class="side-left" data-collapse="navbar">
    <form class="form-inline search-module" action="search.aspx" method="get" >
        <div class="controls">
            <div class="input-append input-append-inline">
                <input id="search" class="input-block-level" name="cari" placeholder="Cari no nota" type="text" title="masukkan no nota kemudian tekan [Enter]" />
                <span class="add-on"><i class="aweso-search"></i></span>
            </div>
        </div>
    </form>
    <ul class="nav nav-list">
        <li id="li-trans-penjualan"><a href="{{url('/transaksi-penjualan')}}">Transaksi Penjualan</a></li>
        <li id="li-master-barang"><a href="{{url('/master-barang')}}">Master Barang</a></li>
        <li id="li-master-jenis"><a href="{{url('/master-jenis-barang')}}">Master Jenis Barang</a></li>
        <li class="dropdown-list" id="li-dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown-list">Setting</a>
            <ul class="dropdown-menu" id="ul-menu">
                <li id="li-profil"><a href="{{url('/user-profile')}}">User Profile</a></li>
                <li id="li-lay"><a href="{{url('/pegawai')}}">Pegawai</a></li>
                <li id="li-lay"><a href="{{url('/laporan')}}">Laporan</a></li>
            </ul>
        </li>
    </ul>
</div>