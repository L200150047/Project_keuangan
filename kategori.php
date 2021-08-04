<?php include 'header.php'; ?>

<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Data Komplain Nasabah 165
      <small>Data dari folder 165</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <section class="col-lg-12">
        <div class="box box-info">

          <div class="box-header">
            <h3 class="box-title">Daftar Komplain Nasabah</h3>
            <div class="btn-group pull-right">            

              <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal">
                <i class="fa fa-plus"></i> &nbsp Upload Data
              </button>
            </div>
          </div>
          <div class="box-body">

            <!-- Modal -->
            <form action="kategori_act.php" method="post">
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">

                   <div class="form-group">
                        <label>Nama Kategori</label>
                        <input type="text" name="kategori" required="required" class="form-control" placeholder="Nama Kategori ..">
                      </div>

                      <div class="form-group">
                        <label>Tanggal</label>
                        <input type="text" name="tanggal" required="required" class="form-control datepicker2">
                      </div>

                      </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                      <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>


            <div class="table-responsive">
              <table class="table table-bordered table-striped" id="table-datatable">
                <thead>
                <tr>
                    <th width="1%" rowspan="2">NO</th>
                    <th width="10%" rowspan="2" class="text-center">TANGGAL ESKALASI</th>
                    <th rowspan="2" class="text-center">ID KOMPLAIN</th>
                    <th rowspan="2" class="text-center">NAMA NASABAH</th>
                    <th rowspan="2" class="text-center">NO REK</th>
                    <th rowspan="2" class="text-center">NO KARTU</th>
                    <th rowspan="2" class="text-center">JENIS TRANSAKSI</th>
                    <th rowspan="2" class="text-center">TANGGAL TRANSAKSI</th>
                    <th rowspan="2" class="text-center">NOMINAL</th>
                    <th rowspan="2" class="text-center">ID ATM</th>
                    <th rowspan="2" class="text-center">WILAYAH</th>
                    <th rowspan="2" class="text-center">RECORD</th>
                    <th rowspan="2" class="text-center">KATEGORI MESIN</th>
                    <th colspan="2" width="10%" class="text-center">OPSI</th>
                  </tr>

                </thead>
                <tbody>
                  <?php 
                  include '../koneksi.php';
                  $no=1;
                  $data = mysqli_query($koneksi,"SELECT * FROM kategori ORDER BY kategori ASC");
                  while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo date('d-m-Y', strtotime($d['kategori'])); ?></td>
                      <td><?php echo $d['kategori_id']; ?></td>
                      <td><?php echo $d['nama']; ?></td>
                      <td><?php echo $d['no_rekening']; ?></td>
                      <td><?php echo $d['no_kartu']; ?></td>
                      <td><?php echo $d['jenis_trx']; ?></td>
                      <td><?php echo date('d-m-Y', strtotime($d['tgl_trx'])); ?></td>
                      <td><?php echo number_format($d['nominal'])." ,-";?></td>
                      <td><?php echo $d['id_atm']; ?></td>
                      <td><?php echo $d['wilayah']; ?></td>
                      <td><?php echo $d['no_record']; ?></td>
                      <td><?php echo $d['kategori_mesin']; ?></td>

                      <td>    
                        <?php 
                        if($d['kategori_id'] != 1){
                          ?> 
                          <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit_kategori_<?php echo $d['kategori_id'] ?>">
                            <i class="fa fa-cog"></i>
                          </button>

                          <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus_kategori_<?php echo $d['kategori_id'] ?>">
                            <i class="fa fa-trash"></i>
                          </button>
                          <?php 
                        }
                        ?>

                        <form action="kategori_update.php" method="post">
                          <div class="modal fade" id="edit_kategori_<?php echo $d['kategori_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Edit Kategori</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">

                                  <div class="form-group" style="width:100%">
                                    <label>Nama Kategori</label>
                                    <input type="hidden" name="id" required="required" class="form-control" placeholder="Nama Kategori .." value="<?php echo $d['kategori_id']; ?>">
                                    <input type="text" name="kategori" required="required" class="form-control" placeholder="Nama Kategori .." value="<?php echo $d['kategori']; ?>" style="width:100%">
                                  </div>

                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                  <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </form>

                        <!-- modal hapus -->
                        <div class="modal fade" id="hapus_kategori_<?php echo $d['kategori_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Peringatan!</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">

                                <p>Yakin ingin menghapus data ini ?</p>

                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <a href="kategori_hapus.php?id=<?php echo $d['kategori_id'] ?>" class="btn btn-primary">Hapus</a>
                              </div>
                            </div>
                          </div>
                        </div>

                      </td>
                    </tr>
                    <?php 
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>

        </div>
      </section>
    </div>
  </section>

</div>
<?php include 'footer.php'; ?>