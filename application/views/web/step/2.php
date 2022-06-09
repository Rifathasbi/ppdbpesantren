<div class="panel panel-primary">
  <div class="panel-heading">
    <h2><strong class="text-success" style="color:#eee;">Data Siswa</strong></h2>
  </div>
  <div class="panel-body">

  <div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label"style="text-align:right; margin-top:6px">N.I.S.N <span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon" style="margin-top:1px;">
        <input type="text" name="nisn" class="form-control bg-blue class" onkeypress="return hanyaAngka(this);" maxlength="30" placeholder="Nomor Induk Siswa Nasional" data-parsley-group="block1" data-parsley-errors-container='div[id="error-nisn"]' required>
        <i class="fa fa-users" style="margin-left:15px;"></i>
        <div id="error-nisn" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
         <div id="pesan_komentar">*isi 10 Angka bisa di tulis Nis Tk/Ra  <a target="_blank" href="http://nisn.data.kemdikbud.go.id">http://nisn.data.kemdikbud.go.id</a></div>
      </div>
  </div>
  
 
  
  <div class="form-group">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">NIK<span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon" >
        <input type="text" name="nik" class="form-control bg-blue class" placeholder="Nomor Induk Kependudukan" data-parsley-group="block1" data-parsley-errors-container='div[id="error-nik"]' required>
        <i class="fa fa-building" style="margin-left:15px;"></i>
        <div id="error-nik" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        <div id="pesan_komentar">*Sesuai dengan Kartu Keluarga</div>
      </div>
	  </div>
	  
	  <div class="form-group">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Alamat<span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon" >
        <input type="text" name="alamat" class="form-control bg-blue class" placeholder="Alamat" data-parsley-group="block1" data-parsley-errors-container='div[id="error-akta"]' required>
        <i class="fa fa-building" style="margin-left:15px;"></i>
        <div id="error-akta" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        <div id="pesan_komentar"></div>
      </div>
	  </div>

  <div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Nama Lengkap <span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon">
        <input type="text" name="nama_lengkap" class="form-control bg-blue" placeholder="Nama lengkap Calon Siswa" maxlength="100" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-nama_lengkap"]' required>
        <i class="fa fa-user" style="margin-left:15px;"></i>
        <div id="error-nama_lengkap" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        <div id="pesan_komentar">*Sesuai dengan ijazah</div>
      </div>
  </div>
  
  
 <div class="form-group">
    <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Jenis Kelamin <span class="text-danger">*</span></label>
    <div class="col-sm-9" style="margin-top:3px;">
      <select class="form-control bg-blue class" data-placeholder="Pilih Jenis Kelamin" name="jk" data-parsley-group="block1" data-parsley-errors-container='div[id="jk"]' required>
              <option value="">Pilih Jenis Kelamin</option>
              <option value="L">Laki - laki</option>
              <option value="P">Perempuan</option>
      </select>
      <div id="error-jk" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
    </div>
</div>

  <div class="form-group">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Tempat Kelahiran <span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon" >
        <input type="text" name="tempat_lahir" class="form-control bg-blue class" placeholder="Tempat Kelahiran Calon Siswa" data-parsley-group="block1" data-parsley-errors-container='div[id="error-tempat_lahir"]' required>
        <i class="fa fa-building" style="margin-left:15px;"></i>
        <div id="error-tempat_lahir" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
      </div>
  </div>
 <div class="form-group" >
    <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Tanggal Kelahiran <span class="text-danger">*</span></label>
    <div class="col-sm-9" style="margin-top:3px;">
      <div class="col-sm-4" style="padding:0px">
         <select class="form-control bg-blue class"  name="tgl_lahir" data-parsley-group="block1" data-parsley-errors-container='div[id="error-tgl_lahir"]' required>
              <option value="" selected>Pilih Tanggal</option>
              <?php for ($i=1; $i <=31 ; $i++) {
                if ($i < 10) {
                  $i = "0".$i;
                }?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
              <?php } ?>
         </select>
         <div id="error-tgl_lahir" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
      </div>
      <div class="col-sm-4"  style="padding-left:3px;">
        <select class="form-control bg-blue class" data-placeholder="Pilih Bulan" name="bln_lahir" data-parsley-group="block1" data-parsley-errors-container='div[id="error-bln_lahir"]' required>
              <option value="" selected>Pilih Bulan</option>
              <option value="01">Januari</option>
              <option value="02">Februari</option>
              <option value="03">Maret</option>
              <option value="04">April</option>
              <option value="05">Mei</option>
              <option value="06">Juni</option>
              <option value="07">Juli</option>
              <option value="08">Agustus</option>
              <option value="09">September</option>
              <option value="10">Oktober</option>
              <option value="11">November</option>
              <option value="12">Desember</option>
         </select>
        <div id="error-bln_lahir" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
      </div>
      <div class="col-sm-4" style="margin-left:-27px;">

         <select class="form-control bg-blue class" data-placeholder="Pilih Tahun Lahir" name="thn_lahir" data-parsley-group="block1" data-parsley-errors-container='div[id="error-thn_lahir"]' required>
          <option value="" selected>Pilih Tahun Lahir</option>
          <?php
          $thn_max=date('Y') - 2;
          for ($i=2000; $i <= $thn_max; $i++) {?>
          <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
          <?php } ?>
         </select>
          <div id="error-thn_lahir" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
      </div>

    </div>
</div>


<div class="form-group">
    <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Provinsi<span class="text-danger">*</span></label>
    <div class="col-sm-9" style="margin-top:3px;">
    <select class="form-control bg-blue class" data-placeholder="Pilih Provinsi" name="provinsi" data-parsley-group="block1" data-parsley-errors-container='div[id="error-kwg"]' required>
              <option value="">Pilih Provinsi</option>
              <option value="sumut">Sumatera Utara</option>
              <option value="sumbar">Sumatera Barat</option>
              <option value="aceh">Aceh</option>
              <option value="riau">Riau</option>
              <option value="kepriau">Kep.Riau</option>
              <option value="jambi">Jambi</option>
              <option value="sumsel">Sumatera Selatan</option>
              <option value="babel">Bangka Belitung</option>
              <option value="bengkulu">Bengkulu</option>
              <option value="lampung">Lampung</option>
              <option value="jakarta">Jakarta</option>
              <option value="banten">Banten</option>
              <option value="jabar">Jawa Barat</option>
              <option value="jateng">Jawa Tengah</option>
              <option value="yogya">Yogyakarta</option>
              <option value="jatim">Jawa Timur</option>
              <option value="bali">Bali</option>
              <option value="ntb">Nusa Tenggara Barat</option>
              <option value="ntt">Nusa Tenggara Timur</option>
              <option value="kalbar">Kalimantan Barat</option>
              <option value="kaltim">Kalimantan Timur</option>
              <option value="kalteng">Kalimantan Tengah</option>
              <option value="kalsel">Kalimantan Selatan</option>
              <option value="sulut">Sulawesi Utara</option>
              <option value="goron">Gorontalo</option>
              <option value="sulteng">Sulawesi Tengah</option>
              <option value="sulbar">Sulawesi Barat</option>
              <option value="sulsel">Sulawesi Selatan</option>
              <option value="sultenga">Sulawesi Tenggara</option>
              <option value="maluku">Maluku</option>
              <option value="malukut">Maluku Utara</option>
              <option value="papbar">Papua Barat</option>
              <option value="papua">Papua</option>
      </select>
      <div id="error-kwg" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
    </div>
</div>
<div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Kabupaten <span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon">
        <input type="text" name="kabupaten" class="form-control bg-blue" placeholder="Kecamatan" maxlength="100" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-nama_lengkap"]' required>
        <i class="fa fa-user" style="margin-left:15px;"></i>
        <div id="error-nama_lengkap" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        <div id="pesan_komentar"></div>
      </div>
  </div>
<div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Kecamatan <span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon">
        <input type="text" name="kecamatan" class="form-control bg-blue" placeholder="Kecamatan" maxlength="100" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-nama_lengkap"]' required>
        <i class="fa fa-user" style="margin-left:15px;"></i>
        <div id="error-nama_lengkap" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        <div id="pesan_komentar"></div>
      </div>
  </div>
  <div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Desa <span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon">
        <input type="text" name="desa" class="form-control bg-blue" placeholder="Desa" maxlength="100" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-nama_lengkap"]' required>
        <i class="fa fa-user" style="margin-left:15px;"></i>
        <div id="error-nama_lengkap" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        <div id="pesan_komentar"></div>
      </div>
  </div>
  <div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Kode Pos<span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon">
        <input type="number" name="kode_pos" class="form-control bg-blue" placeholder="Kode Pos" maxlength="100" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-nama_lengkap"]' required>
        <i class="fa fa-user" style="margin-left:15px;"></i>
        <div id="error-nama_lengkap" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        <div id="pesan_komentar"></div>
      </div>
  </div>
  <div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Cita-Cita<span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon">
        <input type="text" name="cita_cita" class="form-control bg-blue" placeholder="Cita-Cita" maxlength="100" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-nama_lengkap"]' required>
        <i class="fa fa-user" style="margin-left:15px;"></i>
        <div id="error-nama_lengkap" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        <div id="pesan_komentar"></div>
      </div>
      <div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Hobi<span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon">
        <input type="text" name="hobi" class="form-control bg-blue" placeholder="Hobi" maxlength="100" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-nama_lengkap"]' required>
        <i class="fa fa-user" style="margin-left:15px;"></i>
        <div id="error-nama_lengkap" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        <div id="pesan_komentar"></div>
      </div>
  </div>

<div class="form-group">
    <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Jumlah Saudara <span class="text-danger">*</span></label>
    <div class="col-sm-9" style="margin-top:3px;">
      <select class="form-control bg-blue class" data-placeholder="Pilih Jumlah Saudara" name="saudara" data-parsley-group="block1" data-parsley-errors-container='div[id="error-jumlah_kakak"]' required>
              <option value="">Pilih Jumlah Saudara</option>
			  <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
			  <option value="3">3</option>
			  <option value="4">4</option>
			  <option value="5">5</option>
			  <option value="6">6</option>
			  <option value="7">7</option>
			  <option value="8">8</option>
			  <option value="9">9</option>
			  <option value="10">10</option>
      </select>
      <div id="error-jumlah_kakak" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
    </div>
</div>


<div class="form-group">
    <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Anak Ke <span class="text-danger">*</span></label>
    <div class="col-sm-9" style="margin-top:3px;">
      <select class="form-control bg-blue class" data-placeholder="Pilih Anak Ke" name="anak" data-parsley-group="block1" data-parsley-errors-container='div[id="error-anak_ke"]' required>
              <option value="">Pilih Anak Ke</option>
              <option value="1">1</option>
              <option value="2">2</option>
			  <option value="3">3</option>
			  <option value="4">4</option>
			  <option value="5">5</option>
			  <option value="6">6</option>
			  <option value="7">7</option>
			  <option value="8">8</option>
			  <option value="9">9</option>
			  <option value="10">10</option>
      </select>
      <div id="error-anak_ke" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
    </div>
</div>
<div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Tinggi Badan<span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon">
        <input type="text" name="tinggi_badan" class="form-control bg-blue" placeholder="Tinggi Badan" maxlength="100" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-nama_lengkap"]' required>
        <i class="fa fa-user" style="margin-left:15px;"></i>
        <div id="error-nama_lengkap" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        <div id="pesan_komentar">Satuan cm</div>
      </div>
  </div>
  <div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Berat Badan<span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon">
        <input type="text" name="berat_badan" class="form-control bg-blue" placeholder="Berat Badan" maxlength="100" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-nama_lengkap"]' required>
        <i class="fa fa-user" style="margin-left:15px;"></i>
        <div id="error-nama_lengkap" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        <div id="pesan_komentar">Satuan kg</div>
      </div>
  </div>
  
<div class="form-group">
    <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Pernah TK?<span class="text-danger">*</span></label>
    <div class="col-sm-9" style="margin-top:3px;">
      <select class="form-control bg-blue class" data-placeholder="Penah Tk?" name="pernah_tk" data-parsley-group="block1" data-parsley-errors-container='div[id="error-seragam"]' required>
              <option value=""></option>
              <option value="ya">Ya</option>
              <option value="tidak">Tidak</option>
      </select>
      <div id="error-seragam" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
    </div>
</div>
<div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Nama TK<span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon">
        <input type="text" name="nama_tk" class="form-control bg-blue" placeholder="Nama TK" maxlength="100" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-nama_lengkap"]'>
        <i class="fa fa-user" style="margin-left:15px;"></i>
        <div id="error-nama_lengkap" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
        <div id="pesan_komentar"></div>
      </div>
  </div>

<div class="form-group">
    <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Pernah Paud?<span class="text-danger">*</span></label>
    <div class="col-sm-9" style="margin-top:3px;">
      <select class="form-control bg-blue class" data-placeholder="Pernah Paud?" name="pernah_paud" data-parsley-group="block1" data-parsley-errors-container='div[id="error-seragam"]' required>
              <option value=""></option>
              <option value="ya">Ya</option>
              <option value="tidak">Tidak</option>
      </select>
      <div id="error-seragam" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
    </div>
</div>
    </div>
    </div>
    <div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Nama Paud<span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon">
        <input type="text" name="nama_paud" class="form-control bg-blue" placeholder="Nama Paud" maxlength="100" data-parsley-group="block1" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-nama_lengkap"]'>
        <i class="fa fa-user" style="margin-left:15px;"></i>
       
        <div id="pesan_komentar"></div>
      </div>
  


<div class="col-md-12">
  <hr>
  <blockquote>
    <p><b>CATATAN:</b> Field isian dengan tanda <span class="text-danger ">*</span><b class="text-danger">wajib diisi</b>.</p>
  </blockquote>
<div>
