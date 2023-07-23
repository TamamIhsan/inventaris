<div class="row">
    <center>
        <h2>Peminjaman inventaris</h2>
    </center>
    <div class="col-lg-4">
        <div class="panel panel-primary">
            <div class="panel-heading">peminjaman</div>
            <div class="panel-body">
                <form action="">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">kode peminjaman</label>
                            <input type="text" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">nama peminjaman</label>
                            <select name="" id="" class="form-control">
                                <option value="">nama pegawai</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">pilih barang</label>
                            <select name="" id="" class="form-control">
                                <option value="">laptop</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">jumlah</label>
                            <input type="number" class="form-control">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-md btn-primary">simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-8">
    <div class="panel panel-primary">
        <div class="panel-heading">daftar barang dipinjam</div>
        <div class="panel-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>no</th>
                        <th>tgl peminjaman</th>
                        <th>nama peminjaman</th>
                        <th>nama barang</th>
                        <th>jumlah</th>
                        <th>tgl kembali</th>
                        <th>status</th>
                        <th>opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>10-11-2021</td>
                        <td>parto</td>
                        <td>laptop</td>
                        <td>10</td>
                        <td>00-001-011</td>
                        <td>
                            <label for="" class="label label-danger">belum</label>
                        </td>
                        <td>
                            <a href="?p=detail_peminjaman" class="btn btn-primary">konfirmasi</a>
                        </td>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>11-11-2021</td>
                        <td>marto</td>
                        <td>laptop</td>
                        <td>10</td>
                        <td>00-001-011</td>
                        <td>
                            <label for="" class="label label-warning">dipinjam</label>
                        </td>
                        <td>
                            <a href="" class="btn btn-primary">konfirmasi</a>
                        </td>
                    </tr>

                </tbody>
            </table>

        </div>
    </div>

</div>