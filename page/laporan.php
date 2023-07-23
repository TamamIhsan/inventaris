<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">laporan peminjaman inventaris</div>
        <div class="panel-body">
            <form action="" class="form-inline">
                <div class="form-group">
                    <label for="">tanggal awal</label><br>
                    <input type="date" id="tanggal_awal" name="tanggal dari" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">tanggal akhir</label><br>
                    <input type="date" id="tanggal_sampai" name="tanggal sampai" class="form-control">
                </div>
                <div class="form-group"><br>
                    <input type="submit" class="btn btn-sm btn-primary" value="filter">
                    <button class="btn btn-sm btn-success">cetak laporan</button>
                </div>
            </form>
            <br>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>no</th>
                        <th>nama peminjam</th>
                        <th>nama inventaris</th>
                        <th>jumlah</th>
                        <th>tanggal peminjaman</th>
                        <th>tanggal pengembalian</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>andi</td>
                        <td>laptop</td>
                        <td>10</td>
                        <td>10-11-2021</td>
                        <td>15-11-2021</td>
                    </tr>
                </tbody>

            </table>
        </div>

    </div>

</div>