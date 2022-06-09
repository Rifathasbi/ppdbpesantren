<style>
  #tbl_input{width:50px;text-align: center;}
  #tbl_input2{width:100px;text-align: center;}
  #th_center > th {text-align: center;}
</style>

<?php
  $user = $user->row();
  $id_user = $user->id_siswa;
  $nama    = $user->nama_lengkap;
  $poto = (empty($user->foto) || !file_exists("fotoo/".$user->foto) )?"img/users.jpg":"fotoo/".$user->foto;
  $nota = (empty($user->buktibayar || !file_exists("bukti/".$user->buktibayar)))?"img/image-placeholder.jpg":"psb/bukti/".$user->buktibayar;
  $tgllahir=explode("-",$user->tgl_lahir);
  $arrbln = ["Pilih Bulan","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];
?>
<!-- Main content -->
<div class="content-wrapper">

  <!-- Content area -->
  <div class="content">

    <!-- Dashboard content -->
    <div class="row">
      <div class="col-md-3">
      <div class="panel panel-flat">
          <div class="panel-body">
              <center>
                 <form action="<?=site_url('panel_siswa/douploadfoto');?>" method="POST" enctype="multipart/form-data" >
                    <input type="hidden" name="act" value="edit"/>
                    <img id="img" src="<?=$poto;?>" alt="Upload File" class="img-responsive img-fluid">
                    <input accept="image/*" type="file" name="fotoo" id="fotoo" class=" form-control bg-success">
                    <hr style="margin:0px;margin-bottom:3px;">
                    <button class="btn btn-default btn-lg" type="submit"><i class="icon-upload"></i> Perbaharui Foto</button>
                  </form>
              </center>
            <br>
            <fieldset class="content-group">
              <hr style="margin-top:0px;">
              <i class="icon-calendar"></i> <b>Tanggal Daftar</b> :
              <?=$this->Model_data->tgl_id(date('d-m-Y H:i:s', strtotime($user->tgl_siswa))); ?>
              <hr>
            </fieldset>
          </form>
          </div>
      </div>
      </div>

    <form action="<?=site_url('panel_siswa/doupdate');?>" method="POST" enctype="multipart/form-data" >
      <div class="col-md-9">
      <div class="panel panel-flat">
          <div class="panel-body">
            <fieldset class="content-group">
              <legend class="text-bold"><i class="icon-user"></i> Biodata Siswa</legend>
              <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <tr>
                      <th width="20%">NO. PENDAFTARAN</th>
                      <th width="1%">:</th>
                      <td><?=$user->no_pendaftaran; ?></td>
                    </tr>
                    <tr>
                      <th>N.I.S.N</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->nisn; ?>" name="nisn"/></td>
                    </tr>
                    <tr>
                      <th>NIK</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->nik; ?>" name="nik"></td>
                    </tr>
                    <tr>
                      <th>Nama Lengkap</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->nama_lengkap; ?>" name="nama_lengkap"></td>
                    </tr>
                    <tr>
                      <th>Jenis Kelamin</th>
                      <th>:</th>
                      <td>
                          <?php
                            $js = 'id="jk" class="form-control"';
                            echo form_dropdown('jk', $v_jekel, $user->jk,$js);
                          ?>
                      </td>
                    </tr>
                    <tr>
                      <th>Alamat</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->alamat; ?>" name="alamat"></td>
                    </tr>
                    <tr>
                      <th>Provinsi</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->provinsi; ?>" name="provinsi"></td>
                    </tr>
                    <tr>
                      <th>Kabupaten</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->kabupaten; ?>" name="kabupaten"></td>
                    </tr>
                    <tr>
                      <th>Kecamatan</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->kecamatan; ?>" name="kecamatan"></td>
                    </tr>
					<tr>
                      <th>Desa</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->desa; ?>" name="desa"></td>
                    </tr>
					<tr>
                      <th>Kode Pos</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->kode_pos; ?>" name="kode_pos"></td>
                    </tr>
                    <tr>
                      <th>Tempat, Tgl Lahir</th>
                      <th>:</th>
                      <td>
                          <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Kelahiran Calon Siswa" value="<?=$user->tempat_lahir;?>" required>
                          <div class="col-sm-4" style="padding:0px">
                            <select class="form-control class"  name="tgl_lahir" required>
                              <option value="" selected>Pilih Tanggal</option>
                              <?php for ($i=1; $i <=31 ; $i++) {
                                $i = sprintf("%02d",$i);
                                $selected = "";
                                if($tgllahir[0] == $i){$selected = "selected";}
                              ?>
                                <option <?=$selected;?> value="<?=$i;?>"><?=$i;?></option>
                              <?php } ?>
                            </select>
                          </div>
                          <div class="col-sm-4">
                            <select class="form-control class" data-placeholder="Pilih Bulan" name="bln_lahir" required>
                              <?php foreach ($arrbln as $key => $i) {
                                  $bln = sprintf("%02d",$key);
                                  $selected = "";
                                  if($tgllahir[1] == $bln){$selected = "selected";}
                                  ?>
                                  <option <?=$selected;?> value="<?=$bln;?>"><?=$i;?></option>
                                <?php } ?>
                            </select>
                          </div>
                          <div class="col-sm-4">
                          <select class="form-control " data-placeholder="Pilih Tahun Lahir" name="thn_lahir" required>
                            <option value="" >Pilih Tahun Lahir</option>
                            <?php
                              $thn_max=date('Y') - 2;
                              for ($i=2000; $i <= $thn_max; $i++) {
                                $selected = "";
                                if($tgllahir[2] == $i){$selected = "selected";}
                            ?>
                                <option  <?=$selected;?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
                              <?php } ?>
                          </select>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th>Cita - Cita</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->cita_cita; ?>" name="cita_cita"></td>
                    </tr>
                    <tr>
                      <th>Hobi</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->hobi; ?>" name="hobi"></td>
                    </tr>
                    <tr>
                      <th>Anak Ke</th>
                      <th>:</th>
                      <td>
                        <select class="form-control class"  name="anak" required>
                          <option value="" selected>Jumlah Anak</option>
                          <?php for ($i=0; $i <=10 ; $i++) {
                            $selected = "";
                            if($user->anak == $i){$selected = "selected";}
                          ?>
                            <option <?=$selected;?> value="<?=$i;?>"><?=$i;?></option>
                          <?php } ?>
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <th>Jumlah Saudara</th>
                      <th>:</th>
                      <td>
                        <select class="form-control class"  name="saudara" required>
                          <option value="" selected>Jumlah Saudara</option>
                          <?php for ($i=0; $i <=10 ; $i++) {
                            $selected = "";
                            if($user->saudara == $i){$selected = "selected";}
                          ?>
                            <option <?=$selected;?> value="<?=$i;?>"><?=$i;?></option>
                          <?php } ?>
                        </select>
                      </td>
                    </tr>
					<tr>
                      <th>Tinggi Badan</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->tinggi_badan; ?>" name="tinggi_badan"> CM</td>
                    </tr>
					<tr>
                      <th>Berat Badan</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->berat_badan; ?>" name="berat_badan"> KG</td>
                    </tr>
					<tr>
                      <th>Pernah Tk</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->pernah_tk; ?>" name="pernah_tk"></td>
                    </tr>
					<tr>
                      <th>Nama Tk</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->nama_tk; ?>" name="nama_tk"></td>
                    </tr>
					<tr>
                      <th>Pernah Paud</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->pernah_paud; ?>" name="pernah_paud"></td>
                    </tr>
					<tr>
                      <th>Nama Paud</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->nama_paud; ?>" name="nama_paud"></td>
                    </tr>
                </table>
              </div>
            </fieldset>
          </div>
      </div>
      </div>

      <div class="col-md-6">
      <div class="panel panel-flat">
          <div class="panel-body">
            <fieldset class="content-group">
              <legend class="text-bold"><i class="icon-user"></i> Data Ayah</legend>
              <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <tr>
                      <th width="20%">Nama Lengkap</th>
                      <th width="1%">:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->nama_ayah; ?>" name="nama_ayah"></td>
                    </tr>
					<tr>
                      <th>NIK</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->nik_ayah; ?>" name="nik_ayah"></td>
                    </tr>
					<tr>
                      <th>Tempat Lahir</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->tempat_lahir_ayah; ?>" name="tempat_lahir_ayah"></td>
                    </tr>
					<tr>
                      <th>Tanggal Lahir</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->tgl_lahir_ayah; ?>" name="tgl_lahir_ayah"></td>
                    </tr>
                    <tr>
                      <th>Pendidikan</th>
                      <th>:</th>
                      <td>
                          <?php
                            $js = 'id="pdd_ayah" class="form-control"';
                            echo form_dropdown('pdd_ayah', $v_pdd, $user->pdd_ayah,$js);
                          ?>
                      </td>
                    </tr>
                    <tr>
                      <th>Pekerjaan</th>
                      <th>:</th>
                      <td>
                        <?php
                          $js = 'id="pekerjaan_ayah" class="form-control"';
                          echo form_dropdown('pekerjaan_ayah', $v_pekerjaan, $user->pekerjaan_ayah,$js);
                        ?>
                      </td>
                  </tr>
                    <tr>
                      <th>Penghasilan</th>
                      <th>:</th>
                      <td>
                        <?php
                          $js = 'id="penghasilan_ayah" class="form-control"';
                          echo form_dropdown('penghasilan_ayah', $v_penghasilan, $user->penghasilan_ayah,$js);
                        ?>
                      </td>
                    </tr>
                    <tr>
                      <th>No. Handphone</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->no_hp_ayah; ?>" name="no_hp_ayah"></td>
                    </tr>
                </table>
              </div>
            </fieldset>
          </div>
      </div>
      </div>

      <div class="col-md-6">
      <div class="panel panel-flat">
          <div class="panel-body">
            <fieldset class="content-group">
              <legend class="text-bold"><i class="icon-user"></i> Data Ibu</legend>
              <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <tr>
                      <th width="20%">Nama Lengkap</th>
                      <th width="1%">:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->nama_ibu; ?>" name="nama_ibu"></td>
                    </tr>
					<tr>
                      <th>NIK</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->nik_ibu; ?>" name="nik_ibu"></td>
                    </tr>
					<tr>
                      <th>Tempat Lahir</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->tempat_lahir_ibu; ?>" name="tempat_lahir_ibu"></td>
                    </tr>
					<tr>
                      <th>Tanggal Lahir</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->tgl_lahir_ibu; ?>" name="tgl_lahir_ibu"></td>
                    </tr>
                    <tr>
                      <th>Pendidikan</th>
                      <th>:</th>
                      <td>
                          <?php
                            $js = 'id="pdd_ibu" class="form-control"';
                            echo form_dropdown('pdd_ibu', $v_pdd, $user->pdd_ibu,$js);
                          ?>
                      </td>
                    </tr>
                    <tr>
                      <th>Pekerjaan</th>
                      <th>:</th>
                      <td>
                       <?php
                          $js = 'id="pekerjaan_ibu" class="form-control"';
                          echo form_dropdown('pekerjaan_ibu', $v_pekerjaan, $user->pekerjaan_ibu,$js);
                        ?>
                      </td>
                    </tr>
                    <tr>
                      <th>Penghasilan</th>
                      <th>:</th>
                      <td>
                      <?php
                          $js = 'id="penghasilan_ibu" class="form-control"';
                          echo form_dropdown('penghasilan_ibu', $v_penghasilan, $user->penghasilan_ibu,$js);
                        ?>
                        </td>
                    </tr>
                    <tr>
                      <th>No. Handphone</th>
                      <th>:</th>
                     <td><input type="input" required class="form-control" value="<?=$user->no_hp_ibu; ?>" name="no_hp_ibu"></td>
                    </tr>
                </table>
              </div>
            </fieldset>
          </div>
      </div>
      </div>

      <div class="col-md-6">
      <div class="panel panel-flat">
          <div class="panel-body">
            <fieldset class="content-group">
              <legend class="text-bold"><i class="icon-user"></i> Data Wali</legend>
              <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <tr>
                      <th width="20%">Nama Lengkap</th>
                      <th width="1%">:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->nama_wali; ?>" name="nama_wali"></td>
                    </tr>
					<tr>
                      <th>NIK</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->nik_wali; ?>" name="nik_wali"></td>
                    </tr>
					<tr>
                      <th>Tempat Lahir</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->tempat_lahir_wali; ?>" name="tempat_lahir_wali"></td>
                    </tr>
					<tr>
                      <th>Tanggal Lahir</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->tgl_lahir_wali; ?>" name="tgl_lahir_ayah"></td>
                    </tr>
                    <tr>
                      <th>Pendidikan</th>
                      <th>:</th>
                      <td>
                          <?php
                            $js = 'id="pdd_wali" class="form-control"';
                            echo form_dropdown('pdd_wali', $v_pdd, $user->pdd_wali,$js);
                          ?>
                      </td>
                    </tr>
                    <tr>
                      <th>Pekerjaan</th>
                      <th>:</th>
                      <td>
                       <?php
                          $js = 'id="pekerjaan_wali" class="form-control"';
                          echo form_dropdown('pekerjaan_wali', $v_pekerjaan, $user->pekerjaan_wali,$js);
                        ?>
                      </td>
                    </tr>
                    <tr>
                      <th>Penghasilan</th>
                      <th>:</th>
                      <td>
                        <?php
                          $js = 'id="penghasilan_wali" class="form-control"';
                          echo form_dropdown('penghasilan_wali', $v_penghasilan, $user->penghasilan_wali,$js);
                        ?>
                      </td>
                    </tr>
                    <tr>
                      <th>No. Handphone</th>
                      <th>:</th>
                     <td><input type="input" required class="form-control" value="<?=$user->no_hp_wali; ?>" name="no_hp_wali"></td>
                    </tr>
                </table>
              </div>
            </fieldset>
          </div>
      </div>
      </div>


      <div class="col-md-6">
        <div class="panel panel-flat">
          <div class="panel-body">
            <fieldset class="content-group">
              <legend class="text-bold"><i class="icon-library2"></i> Data Sekolah</legend>
              <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <tr>
                      <th width="30%">NPSN Sekolah</th>
                      <th width="1%">:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->npsn_sekolah; ?>" name="npsn_sekolah"></td>
                    </tr>
                    <tr>
                      <th>Nama Sekolah</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->nama_sekolah; ?>" name="nama_sekolah"></td>
                    </tr>
                    <tr>
                      <th>Alamat Sekolah</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->alamat_sekolah; ?>" name="alamat_sekolah"></td>
                    </tr>
                    <tr>
                      <th>Status Sekolah</th>
                      <th>:</th>
                      <td>
                        <?php
                          $js = 'id="status_sekolah" class="form-control"';
                          echo form_dropdown('status_sekolah', $v_status_sekolah, $user->status_sekolah,$js);
                        ?>
                      </td>
                    </tr>
                    <tr>
                      <th>Tamatan/Lanjutan</th>
                      <th>:</th>
                      <td>
                        <?php
                          $js = 'id="verifikasi_data" class="form-control"';
                          echo form_dropdown('verifikasi_data', $v_verifikasi_data, $user->verifikasi_data,$js);
                        ?>
                      </td>
                    </tr>
                    <tr>
                      <th>No Skhu</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->no_skhu; ?>" name="no_skhu"></td>
                    </tr>
                    <tr>
                      <th>No Ijazah</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->no_ijazah; ?>" name="no_ijazah"></td>
                    </tr>
                    <tr>
                      <th>Nilai Terakhir</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->nilai_terakhir; ?>" name="nilai_terakhir"></td>
                    </tr>
                    <tr>
                      <th>No Peserta Ujian</th>
                      <th>:</th>
                      <td><input type="input" required class="form-control" value="<?=$user->no_peserta_ujian; ?>" name="no_peserta_ujian"></td>
                    </tr>
                    <tr>
                      <th>Tahun Lulus</th>
                      <th>:</th>
                      <td>
                          <select class="form-control " data-placeholder="Pilih Tahun Lulus" name="thn_lulus" required>
                            <option value="" >Pilih Tahun Lulus</option>
                            <?php
                              $thn_max=date('Y');
                              for ($i=$thn_max; $i >= 2010; $i--)  {
                                $selected = "";
                                if($i ==$user->thn_lulus){$selected = "selected";}
                            ?>
                                <option  <?=$selected;?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
                              <?php } ?>
                          </select>
                    </tr>
                </table>
              </div>
            </fieldset>
          </div>
      </div>

      </div>
      <div class="col-md-12 ">
          <button class="btn btn-primary btn-lg pull-right" type="submit"><i class="icon-floppy-disk"></i> Perbaharui Data</button>
      </div>


                  </form>
      </div>
    </div>
    <!-- /dashboard content -->
