<?php $this->view('header'); ?>

    <div class="row no-gutters mt-5">
      <?php $this->view('left_navbar'); ?>

      <?php
          $alert = $this->session->flashdata('alert');
      ?>

      <div class="col-md-10 p-5 pt-2">
        <form action="<?= $form_action ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id_pegawai" class="form-control" value="<?= $this->Ternary->isset_value($pegawai['id_pegawai'])?>">
        <div class="container text-left">
          <h5><i class="fas fa-user mr-2"></i>Data Pegawai</h5>
          <span style="color: green"> <i> <?= $alert['message'] ?> </i> </span>
          <hr>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>NIP</label>
                <input type="text" name="nip" class="form-control" value="<?= $this->Ternary->isset_value($pegawai['nip'])?>" required>
              </div>
              <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" value="<?= $this->Ternary->isset_value($pegawai['nama'])?>" required>
              </div>
              <div class="form-group">
                <label>Tgl Lahir</label>
                <input type="date" name="tgl_lahir" class="form-control" value="<?= $this->Ternary->isset_value($pegawai['tgl_lahir'])?>" required>
              </div>
              <div class="form-group">
                <label>Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control">
                  <?php foreach ($this->UserConstant->get_gender() as $key => $value) { ?>
                    <option value="<?=$key?>" <?= $this->Ternary->istrue_value($pegawai['jenis_kelamin'] == $key, 'selected')?> > <?=$value?> </option>
                  <?php } ?>
                </select>           
              </div>
              <div class="form-group">
                <label>No Telepon</label>
                <input type="text" name="no_telepon" class="form-control" value="<?= $this->Ternary->isset_value($pegawai['no_telepon'])?>" required>
              </div>
              <div class="form-group">
                <label>Alamat Lengkap</label>
                <textarea class="form-control" rows="2" name="alamat"><?= $this->Ternary->isset_value($pegawai['alamat'])?></textarea>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Golongan</label>
                 <select name="golongan" class="form-control">
                  <?php foreach ($this->PegawaiConstant->golongan() as $key => $value) { ?>
                    <option value="<?=$key?>" <?= $this->Ternary->istrue_value($pegawai['golongan'] == $key, 'selected')?> > <?=$value?> </option>
                  <?php } ?>
                </select>
              </div>
              <div class="form-group">
                <label>Gaji</label>
                <input type="number" name="gaji" class="form-control" value="<?= $this->Ternary->isset_value($pegawai['gaji'])?>" required>
              </div>
              <div class="form-group">
                <label>Tgl Mengajukan KGB</label>
                <input type="date" name="tgl_mengajukan_kgb" class="form-control" value="<?= $this->Ternary->isset_value($pegawai['tgl_mengajukan_kgb'])?>">
              </div>
              <div class="form-group">
                <label>Berkas <?php if ($pegawai['berkas_url'] != '') { ?>  <a target="blank" href="<?= base_url() . 'asset/images/berkas/' .$pegawai['berkas_url'] ?>"> <i class="fa fa-external-link mr-2"> </i> </a>  <?php } ?> </label>
                <input type="file" name="berkas_url" class="form-control" value="<?= $this->Ternary->isset_value($pegawai['berkas_url'])?>">
              </div>
              <div class="form-group">
                <label>Status</label>
                <select name="status" class="form-control">
                  <?php foreach ($this->PegawaiConstant->verifikasi_data() as $key => $value) { ?>
                    <option value="<?=$key?>" <?= $this->Ternary->istrue_value($pegawai['status'] == $key, 'selected')?> > <?=$value?> </option>
                  <?php } ?>
                </select>
              </div>
              <div class="form-group">
                <label>Diverifikasi Oleh</label>
                <input type="text" class="form-control" value="<?= $this->Ternary->isset_value($pegawai['full_name'])?>" disabled>
              </div>
            </div>
          </div>
              <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#TambahKasus">
              <i class=" fas fa-plus-circle mr-3"></i>TAMBAH KONTAK ERAT</button> -->
            <div class="footer text-right mt-5">
              <button type="submit" class="btn btn-primary mt-8">Submit</button>
            </div>
          </div>
          </div>  
          </div>        
        </div>
        </form>
      </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" src="admin.js"></script>
  </body>
</html>