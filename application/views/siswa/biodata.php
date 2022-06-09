<style>
  #tbl_input{width:50px;text-align: center;}
  #tbl_input2{width:100px;text-align: center;}
  #th_center > th {text-align: center;}
</style>

<?php
error_reporting(0);
$user                               = $user->row();
$id_user                            = $cek->id_siswa;
$nama                               = $cek->nama_lengkap;
$poto                               = (empty($user->foto) || !file_exists("fotoo/".$user->foto) )?"img/users.jpg":"fotoo/".$user->foto;
$nota                               = (empty($cek->buktibayar))?"../img/image-placeholder.jpg":"../bukti/".$cek->buktibayar;

$tgl                                = date('m-Y');
?>
<!-- Main content -->
<div class                          = "content-wrapper">

  <!-- Content area -->
  <div class                        = "content">

    <!-- Dashboard content -->
    <div class                      = "row">
      <div class                    = "col-sm-3">
      <div class                    = "panel panel-flat">
          <div class                = "panel-body">
                <center>
  <!--               <a href        = "<?=$poto;?>" target="_blank"><img src="<?=$poto;?>" alt="Upload File" class="img-responsive img-fluid" style="max-width: 10vw; margin-bottom: 1vw;"></a>   -->
                 <form action       = "<?=site_url('panel_siswa/douploadfoto');?>" method="POST" enctype="multipart/form-data" >
                    <img src        = "<?=$poto;?>" alt="Upload File" class="img-responsive img-fluid" style="max-width: 15vw; margin-bottom: 1vw;"></a>
                    <input accept   = "image/*" type="file" name="fotoo" class="btn btn-success">
                    <hr style       = "margin:0px;margin-bottom:3px;">
                    <button class   = "btn btn-default btn-lg" type="submit"><i class="icon-upload"></i> Upload Foto</button>
                  </form>

              </center>
            <br>
            <fieldset class         = "content-group">
              <hr style             = "margin-top:0px;">
              <i class              = "icon-calendar"></i> <b>Tanggal Daftar</b> :
              <?php echo $this->Model_data->tgl_id(date('d-m-Y H:i:s', strtotime($user->tgl_siswa))); ?>
              <hr>
               <center>
                <a href             = "panel_siswa/biodataedit" class="btn btn-success"><i class="fa fa-sign-in margin-r-5"></i> Perbaharui Data</a>
              </center> 

            </fieldset>
          </form>
          </div>
      </div>
      </div>

            <div class              = "col-md-9">
      <div class                    = "panel panel-flat">
          <div class                = "panel-body">
            <fieldset class         = "content-group">
              <legend class         = "text-bold"><i class="icon-user"></i> Biodata Siswa</legend>
              <div class            = "table-responsive">
                <table class        = "table table-bordered table-striped">
                    <tr>
                      <th width     = "20%">NO. PENDAFTARAN</th>
                      <th width     = "1%">:</th>
                      <td><?php echo $user->no_pendaftaran; ?></td>
                    </tr>
                    <tr>
                      <th>Nama Lengkap</th>
                      <th>:</th>
                      <td><?php echo ucwords($user->nama_lengkap); ?></td>
                    </tr>
                    <tr>
                      <th>N.I.S.N</th>
                      <th>:</th>
                      <td><?php echo $user->nisn; ?></td>
                    </tr>
                    <tr>
                      <th>NIK</th>
                      <th>:</th>
                      <td><?php echo ucwords($user->nik); ?></td>
                    </tr>
                    <tr>
                      <th>Jenis Kelamin</th>
                      <th>:</th>
                      <td><?php echo $user->jk; ?></td>
                    </tr>
                    <tr>
                      <th>Alamat</th>
                      <th>:</th>
                      <td><?php echo $user->alamat; ?></td>
                    </tr>
                    <tr>
                      <th>Provinsi</th>
                      <th>:</th>
                      <td><?php echo $user->provinsi; ?></td>
                    </tr>
                    <tr>
                      <th>Kabupaten</th>
                      <th>:</th>
                      <td><?php echo $user->kabupaten; ?></td>
                    </tr>
                    <tr>
                      <th>Kecamatan</th>
                      <th>:</th>
                      <td><?php echo $user->kecamatan; ?></td>
                    </tr>
                    <tr>
                      <th>Desa</th>
                      <th>:</th>
                      <td><?php echo $user->desa; ?></td>
                    </tr>
                    <tr>
                      <th>Kode Pos</th>
                      <th>:</th>
                      <td><?php echo $user->kode_pos; ?></td>
                    </tr>
                    <tr>
                      <th>Tempat, Tgl Lahir</th>
                      <th>:</th>
                      <td><?php echo "$user->tempat_lahir, ". $this->Model_data->tgl_id($user->tgl_lahir); ?></td>
                    </tr>
                    <tr>
                      <th>Cita-cita</th>
                      <th>:</th>
                      <td><?php echo $user->cita_cita; ?></td>
                    </tr>
                    <tr>
                      <th>hobi</th>
                      <th>:</th>
                      <td><?php echo $user->hobi; ?></td>
                    </tr>
                    <tr>
                      <th>Anak Ke</th>
                      <th>:</th>
                      <td><?php echo $user->anak; ?></td>
                    </tr>
                      <th>Jumlah Saudara</th>
                      <th>:</th>
                      <td><?php echo $user->saudara; ?></td>
                    </tr>
                    <tr>
                      <th>Tinggi Badan</th>
                      <th>:</th>
                      <td><?php echo $user->tinggi_badan; ?></td>
                    </tr>
                    <tr>
                      <th>Berat Badan</th>
                      <th>:</th>
                      <td><?php echo $user->berat_badan; ?></td>
                    </tr>
                    <tr>
                      <th>Pernah Tk</th>
                      <th>:</th>
                      <td><?php echo $user->pernah_tk; ?></td>
                    </tr>
                    <tr>
                      <th>Nama Tk</th>
                      <th>:</th>
                      <td><?php echo $user->nama_tk; ?></td>
                    </tr>
                    <tr>
                      <th>Pernah Paud</th>
                      <th>:</th>
                      <td><?php echo $user->pernah_paud; ?></td>
                    </tr>
                    <tr>
                      <th>Nama Paud</th>
                      <th>:</th>
                      <td><?php echo $user->nama_paud; ?></td>
                    </tr>
                  </tr>
                </table>
              </div>
            </fieldset>
          </div>
      </div>
      </div>

      <div class                    = "col-md-4">
      <div class                    = "panel panel-flat">
          <div class                = "panel-body">
            <fieldset class         = "content-group">
              <legend class         = "text-bold"><i class="icon-user"></i> Data Ayah</legend>
              <div class            = "table-responsive">
                <table class        = "table table-bordered table-striped">
                    <tr>
                      <th width     = "20%">Nama Lengkap</th>
                      <th width     = "1%">:</th>
                      <td><?php echo ucwords($user->nama_ayah); ?></td>
                    </tr>
          <tr>
                      <th>NIK</th>
                      <th>:</th>
                      <td><?php echo $user->nik_ayah; ?></td>
                    </tr>
          <tr>
                      <th>Tempat Lahir</th>
                      <th>:</th>
                      <td><?php echo $user->tempat_lahir_ayah; ?></td>
                    </tr>
          <tr>
                      <th>Tanggal Lahir</th>
                      <th>:</th>
                      <td><?php echo $user->tgl_lahir_ayah; ?></td>
                    </tr>
                    <tr>
                      <th>Pendidikan</th>
                      <th>:</th>
                      <td><?php echo $user->pdd_ayah; ?></td>
                    </tr>
                    <tr>
                      <th>Pekerjaan</th>
                      <th>:</th>
                      <td><?php echo $user->pekerjaan_ayah; ?></td>
                    </tr>
                    <tr>
                      <th>No.Handphone</th>
                      <th>:</th>
                      <td><?php echo $user->no_hp_ayah; ?></td>
                    </tr>
                    <tr>
                      <th>Penghasilan</th>
                      <th>:</th>
                      <td><?php echo $user->penghasilan_ayah; ?></td>
                    </tr>
                    <tr>
                      <th>No. Handphone</th>
                      <th>:</th>
                      <td><?php echo $user->no_hp_ayah; ?></td>
                    </tr>
                </table>
              </div>
            </fieldset>
          </div>
      </div>
      </div>

      <div class                    = "col-md-4">
      <div class                    = "panel panel-flat">
          <div class                = "panel-body">
            <fieldset class         = "content-group">
              <legend class         = "text-bold"><i class="icon-user"></i> Data Ibu</legend>
              <div class            = "table-responsive">
                <table class        = "table table-bordered table-striped">
                    <tr>
                      <th width     = "20%">Nama Lengkap</th>
                      <th width     = "1%">:</th>
                      <td><?php echo ucwords($user->nama_ibu); ?></td>
                    </tr>
          <tr>
                      <th>NIK</th>
                      <th>:</th>
                      <td><?php echo $user->nik_ibu; ?></td>
                    </tr>
          <tr>
                      <th>Tempat Lahir</th>
                      <th>:</th>
                      <td><?php echo $user->tempat_lahir_ibu; ?></td>
                    </tr>
          <tr>
                      <th>Tanggal Lahir</th>
                      <th>:</th>
                      <td><?php echo $user->tgl_lahir_ibu; ?></td>
                    </tr>
                    <tr>
                      <th>Pendidikan</th>
                      <th>:</th>
                      <td><?php echo $user->pdd_ibu; ?></td>
                    </tr>
                    <tr>
                      <th>Pekerjaan</th>
                      <th>:</th>
                      <td><?php echo $user->pekerjaan_ibu; ?></td>
                    </tr>
                    <tr>
                      <th>Penghasilan</th>
                      <th>:</th>
                      <td><?php echo $user->penghasilan_ibu; ?></td>
                    </tr>
                    <tr>
                      <th>No. Handphone</th>
                      <th>:</th>
                      <td><?php echo $user->no_hp_ibu; ?></td>
                    </tr>
                </table>
              </div>
            </fieldset>
          </div>
      </div>
      </div>

      <div class                    = "col-md-4">
      <div class                    = "panel panel-flat">
          <div class                = "panel-body">
            <fieldset class         = "content-group">
              <legend class         = "text-bold"><i class="icon-user"></i> Data Wali</legend>
              <div class            = "table-responsive">
                <table class        = "table table-bordered table-striped">
                    <tr>
                      <th width     = "20%">Nama Lengkap</th>
                      <th width     = "1%">:</th>
                      <td><?php echo ucwords($user->nama_wali); ?></td>
                    </tr>
          <tr>
                      <th>NIK</th>
                      <th>:</th>
                      <td><?php echo $user->nik_wali; ?></td>
                    </tr>
          <tr>
                      <th>Tempat Lahir</th>
                      <th>:</th>
                      <td><?php echo $user->tempat_lahir_wali; ?></td>
                    </tr>
          <tr>
                      <th>Tanggal Lahir</th>
                      <th>:</th>
                      <td><?php echo $user->tgl_lahir_wali; ?></td>
                    </tr>
                    <tr>
                      <th>Pendidikan</th>
                      <th>:</th>
                      <td><?php echo $user->pdd_wali; ?></td>
                    </tr>
                    <tr>
                      <th>Pekerjaan</th>
                      <th>:</th>
                      <td><?php echo $user->pekerjaan_wali; ?></td>
                    </tr>
                    <tr>
                      <th>Penghasilan</th>
                      <th>:</th>
                      <td><?php echo $user->penghasilan_wali; ?></td>
                    </tr>
                    <tr>
                      <th>No. Handphone</th>
                      <th>:</th>
                      <td><?php echo $user->no_hp_wali; ?></td>
                    </tr>
                </table>
              </div>
            </fieldset>
          </div>
      </div>
      </div>


      <div class                    = "col-md-6">
      <div class                    = "panel panel-flat">
          <div class                = "panel-body">
            <fieldset class         = "content-group">
              <legend class         = "text-bold"><i class="icon-library2"></i> Data Sekolah</legend>
              <div class            = "table-responsive">
                <table class        = "table table-bordered table-striped">
                    <tr>
                      <th width     = "30%">NPSN Sekolah</th>
                      <th width     = "1%">:</th>
                      <td><?php echo $user->npsn_sekolah; ?></td>
                    </tr>
                    <tr>
                      <th>Nama Sekolah</th>
                      <th>:</th>
                      <td><?php echo ucwords($user->nama_sekolah); ?></td>
                    </tr>
  
                      <th>Alamat Sekolah</th>
                      <th>:</th>
                      <td><?php echo $user->alamat_sekolah; ?></td>
                    </tr>
                    <tr>
                      <th>Status Sekolah</th>
                      <th>:</th>
                      <td><?php echo $user->status_sekolah; ?></td>
                    </tr>
                    <tr>
                      <th>Tamatan/Lanjutan</th>
                      <th>:</th>
                      <td><?php echo $user->verifikasi_data; ?></td>
                    </tr>
                    <tr>
                      <th>No Skhu</th>
                      <th>:</th>
                      <td><?php echo $user->no_skhu; ?></td>
                    </tr>
                    <tr>
                      <th>No Ijazah</th>
                      <th>:</th>
                      <td><?php echo $user->no_ijazah; ?></td>
                    </tr>
                    <tr>
                      <th>Nilai Terakhir</th>
                      <th>:</th>
                      <td><?php echo $user->nilai_terakhir; ?></td>
                    </tr>
                    <tr>
                      <th>No Peserta Ujian</th>
                      <th>:</th>
                      <td><?php echo $user->no_peserta_ujian; ?></td>
                    </tr>
                    <tr>
                      <th>Tahun Lulus</th>
                      <th>:</th>
                      <td><?php echo $user->thn_lulus; ?></td>
                    </tr>
                </table>
              </div>
            </fieldset>
          </div>
      </div>
      </div>
                </table>
              </div>
            </fieldset>
          </div>
      </div>
      </div>


    </div>
    <!-- /dashboard content -->
