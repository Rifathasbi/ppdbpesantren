<div class="panel panel-primary">
  <div class="panel-heading">
    <h2><strong class="text-success" style="color:#eee;">Data Sekolah Asal</strong></h2>
  </div>
  <div class="panel-body">

  <div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label"style="text-align:right; margin-top:6px">NPSN Sekolah<span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon" style="margin-top:1px;">
        <input type="text" name="npsn" class="form-control bg-blue class" onkeypress="return hanyaAngka(this);" maxlength="30" placeholder="NPSN Sekolah" data-parsley-group="block3" data-parsley-errors-container='div[id="error-npsn"]' required>
        <i class="fa fa-users" style="margin-left:15px;"></i>
        <div id="error-npsn" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
      </div>
  </div>

  <div class="form-group" style="padding-bottom:30px;">
      <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Nama Sekolah<span class="text-danger">*</span></label>
      <div class="col-sm-9 prepend-icon">
        <input type="text" name="nama_sekolah" class="form-control bg-blue" placeholder="Nama Sekolah" maxlength="100" data-parsley-group="block3" data-radio="iradio_square-blue" data-parsley-errors-container='div[id="error-nama_sekolah"]' required>
        <i class="fa fa-university" style="margin-left:15px;"></i>
        <div id="error-nama_sekolah" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
      </div>
  </div>

  <div class="form-group" >
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Alamat Sekolah <span class="text-danger">*</span></label>
            <div class="col-sm-9 prepend-icon" style="margin-top:3px;">
              <input type="text" name="alamat_sekolah" class="form-control bg-blue class" placeholder="Alamat Sekolah" data-parsley-group="block3" data-parsley-errors-container='div[id="error-alamat_sekolah"]' required>
              <i class="fa fa-map-marker" style="margin-left:15px;"></i>
              <div id="error-alamat_sekolah" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>

<div class="form-group">
    <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Status Sekolah <span class="text-danger">*</span></label>
    <div class="col-sm-9" style="margin-top:3px;">
      <select class="form-control bg-blue class" data-placeholder="Pilih Status Sekolah" name="status_sekolah" data-parsley-group="block3" data-parsley-errors-container='div[id="error-status_sekolah"]' required>
              <option value="">Pilih Status Sekolah</option>
              <option value="NEGERI">NEGERI</option>
              <option value="SWASTA">SWASTA</option>
      </select>
      <div id="error-status_sekolah" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
    </div>
</div>
<div class="form-group">
    <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Tamatan/Lanjutan<span class="text-danger">*</span></label>
    <div class="col-sm-9" style="margin-top:3px;">
      <select class="form-control bg-blue class" data-placeholder="Verifikasi Data" name="verifikasi_data" data-parsley-group="block3" data-parsley-errors-container='div[id="error-status_sekolah"]' required>
              <option value="">Pilih Tingkatan</option>
              <option value="SD">SD</option>
              <option value="SMP">SMP</option>
              <option value="LANJUTAN">LANJUTAN</option>
      </select>
      <div id="error-status_sekolah" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
    </div>
</div>
<div class="form-group" >
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">No Skhu<span class="text-danger">*</span></label>
            <div class="col-sm-9 prepend-icon" style="margin-top:3px;">
              <input type="text" name="no_skhu" class="form-control bg-blue class" placeholder="No SKHU" data-parsley-group="block3" data-parsley-errors-container='div[id="error-alamat_sekolah"]' required>
              <i class="fa fa-users" style="margin-left:15px;"></i>
              <div id="error-alamat_sekolah" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>

        <div class="form-group" >
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">No Ijazah <span class="text-danger">*</span></label>
            <div class="col-sm-9 prepend-icon" style="margin-top:3px;">
              <input type="text" name="no_ijazah" class="form-control bg-blue class" placeholder="No Ijazah" data-parsley-group="block3" data-parsley-errors-container='div[id="error-alamat_sekolah"]' required>
              <i class="fa fa-users" style="margin-left:15px;"></i>
              <div id="error-alamat_sekolah" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>

        <div class="form-group" >
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Nilai Terakhir <span class="text-danger">*</span></label>
            <div class="col-sm-9 prepend-icon" style="margin-top:3px;">
              <input type="text" name="nilai_terakhir" class="form-control bg-blue class" placeholder="Nilai Terakhir" data-parsley-group="block3" data-parsley-errors-container='div[id="error-alamat_sekolah"]' required>
              <i class="fa fa-users" style="margin-left:15px;"></i>
              <div id="error-alamat_sekolah" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>

        <div class="form-group" >
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">No Peserta Ujian <span class="text-danger">*</span></label>
            <div class="col-sm-9 prepend-icon" style="margin-top:3px;">
              <input type="text" name="no_peserta_ujian" class="form-control bg-blue class" placeholder="No Peserta Ujian" data-parsley-group="block3" data-parsley-errors-container='div[id="error-alamat_sekolah"]' required>
              <i class="fa fa-users" style="margin-left:15px;"></i>
              <div id="error-alamat_sekolah" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
        </div>

        <div class="form-group" >
            <label class="col-sm-3 control-label" style="text-align:right; margin-top:6px">Tahun Lulus <span class="text-danger">*</span></label>
            <div class="col-sm-4 prepend-icon" style="margin-top:3px;">
              <select class="form-control bg-blue class" data-placeholder="Pilih Tahun Lulus" name="thn_lulus" data-parsley-group="block3" data-parsley-errors-container='div[id="error-thn_lulus"]' required>
               <option value="" selected>Pilih Tahun Lulus...</option>
               <?php
               $thn_max=date('Y');
               for ($i=$thn_max; $i >= 2010; $i--) {?>
               <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
               <?php } ?>
              </select>
              <div id="error-thn_lulus" style=" background:#FFBABA;color: #D8000C; width:auto;border-radius:5px;padding-left:10px;"></div>
            </div>
            <div class="col-sm-5"></div>
        </div>

      </div>
    </div>


<div class="col-md-12">
  <hr>
  <blockquote>
    <p><b>CATATAN:</b> Field isian dengan tanda <span class="text-danger ">*</span><b class="text-danger">wajib diisi</b>.</p>
  </blockquote>
<div>
