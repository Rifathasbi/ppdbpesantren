<?php
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=export_$v_thn.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <title><?php echo $judul_web; ?></title>
    <base href="<?php echo base_url();?>"/>
  	<link rel="icon" type="image/png" href="assets/images/favicon.png"/>
    <style>
    table {
        border-collapse: collapse;
    }
    thead > tr{
      background-color: #0070C0;
      color:#f1f1f1;
    }
    thead > tr > th{
      background-color: #0070C0;
      color:#fff;
      padding: 10px;
      border-color: #fff;
    }
    th, td {
      padding: 2px;
    }

    th {
        color: #222;
    }
    body{
      font-family:Calibri;
    }
    tr:nth-child(even) {
        background-color: #f2f2f2
    }
    </style>
  </head>
  <body>

    <table width="100%" border="1">
     
      <tr>
	    <th>NO.</th>
        <th>NO. PENDAFTARAN</th>
        <th>NISN</th>
        <th>NIK</th>
        <th>NAMA LENGKAP</th>
        <th>JENIS KELAMIN</th>
		<th>TEMPAT Tanggal Lahir</th>
		<th>PROVINSI</th>
		<th>KABUPATEN</th>
		<th>KECAMATAN</th>
		<th>DESA</th>
        <th>KODEPOS</th>
		<th>CITACITA</th>
        <th>HOBI</th>
        <th>JUMLAH SAUDARA</th>
		<th>ANAK KE</th>
		<th>TINGGI BADAN</th>
		<th>BERAT BADAN</th>
		<th>PERNAH TK?</th>
		<th>NAMA TK</th>
		<th>PERNAH PAUD?</th>
		<th>NAMA PAUD</th>
		<th>NAMA AYAH</th>
		<th>NIK AYAH</th>
		<th>TEMPAT LAHIR AYAH</th>
		<th>TANGAL LAHIR AYAH</th>
		<th>PENDIDIKAN AYAH</th>
		<th>PEKERJAAN AYAH</th>
		<th>PENGHASILAN AYAH</th>
		<th>NO. HP AYAH</th>
		<th>NAMA IBU</th>
		<th>NIK IBU</th>
		<th>TEMPAT LAHIR IBU</th>
		<th>TANGAL LAHIR IBU</th>
		<th>PENDIDIKAN IBU</th>
		<th>PEKERJAAN IBU</th>
		<th>PENGHASILAN IBU</th>
		<th>NO. HP IBU</th>
		<th>NAMA WALI</th>
		<th>NIK WALI</th>
		<th>TEMPAT LAHIR WALI</th>
		<th>TANGAL LAHIR WALI</th>
		<th>PENDIDIKAN WALI</th>
		<th>PEKERJAAN WALI</th>
		<th>PENGHASILAN WALI</th>
		<th>NO. HP WALI</th>
		<th>NPSN SEKOLAH</th>
		<th>NAMA SEKOLAH</th>
		<th>ALAMAT SEKOLAH</th>
		<th>STATUS SEKOLAH</th>
		<th>TAMATAN/LANJUTAN</th>
		<th>NOMOR SKHU</th>
		<th>NOMOR IJAZAH</th>
		<th>NILAI TERAKHIR</th>
		<th>NO PESERTA UJIAN</th>
		<th>TAHUN LULUS</th>

      </tr>

        <tr>
		  <?php $no=1;
      error_reporting(0);
      foreach ($v_siswa->result() as $baris):
	  ?>
          <th><?php echo $no++; ?></th>
          <td><?php echo $baris->no_pendaftaran; ?></td>
		  <td><?php echo $baris->nisn; ?></td>
          <td>'<?php echo $baris->nik; ?></td>
          <td>'<?php echo $baris->nama_lengkap; ?></td>
          <td>'<?php echo $baris->jk; ?></td>
		  <td><?php echo "$baris->tempat_lahir, ".$this->Model_data->tgl_id($baris->tgl_lahir); ?></td>
		  <td><?php echo $baris->provinsi;?></td>
          <td><?php echo ucwords($baris->kabupaten); ?></td>
          <td><?php echo $baris->kecamatan; ?></td>
          <td><?php echo $baris->desa; ?></td>
		  <td><?php echo $baris->kode_pos; ?></td>
		  <td><?php echo $baris->cita_cita; ?></td>
		  <td><?php echo $baris->hobi; ?></td>
		  <td><?php echo $baris->anak; ?></td>
          <td><?php echo $baris->saudara; ?></td>
		  <td><?php echo $baris->tinggi_badan; ?></td>
          <td><?php echo $baris->berat_badan; ?></td>
          <td>'<?php echo $baris->pernah_tk; ?></td>
		  <td><?php echo $baris->nama_tk; ?></td>
		  <td><?php echo $baris->pernah_paud; ?></td>
		  <td><?php echo $baris->nama_paud; ?></td>
		  <td><?php echo $baris->nama_ayah; ?></td>
		  <td><?php echo $baris->nik_ayah; ?></td>
		  <td><?php echo $baris->tempat_lahir_ayah; ?></td>
		  <td><?php echo $baris->tgl_lahir_ayah; ?></td>
		  <td><?php echo $baris->pdd_ayah; ?></td>
		  <td>'<?php echo $baris->pekerjaan_ayah; ?></td>
		  <td><?php echo $baris->penghasilan_ayah; ?></td>
		  <td><?php echo $baris->no_hp_ayah; ?></td>
		  <td><?php echo $baris->nama_ibu; ?></td>
		  <td>'<?php echo $baris->nik_ibu; ?></td>
		  <td><?php echo $baris->tempat_lahir_ibu; ?></td>
		  <td><?php echo $baris->tgl_lahir_ibu; ?></td>
		  <td><?php echo $baris->pdd_ibu; ?></td>
		  <td><?php echo $baris->pekerjaan_ibu; ?></td>
		  <td><?php echo $baris->penghasilan_ibu; ?></td>
		  <td>'<?php echo $baris->no_hp_ibu; ?></td>
		  <td><?php echo $baris->nama_wali; ?></td>
		  <td>'<?php echo $baris->nik_wali; ?></td>
		  <td><?php echo $baris->tempat_lahir_wali; ?></td>
		  <td><?php echo $baris->tgl_lahir_wali; ?></td>
		  <td><?php echo $baris->pdd_wali; ?></td>
		  <td><?php echo $baris->pekerjaan_wali; ?></td>
		  <td><?php echo $baris->penghasilan_wali; ?></td>
		  <td>'<?php echo $baris->no_hp_wali; ?></td>
		  <td><?php echo $baris->npsn_sekolah; ?></td>
		  <td><?php echo $baris->nama_sekolah; ?></td>
		  <td><?php echo $baris->alamat_sekolah; ?></td>
		  <td>'<?php echo $baris->status_sekolah; ?></td>
		  <td>'<?php echo $baris->verifikasi_data; ?></td>
		  <td>'<?php echo $baris->no_skhu; ?></td>
		  <td>'<?php echo $baris->no_ijazah; ?></td>
		  <td><?php echo $baris->nilai_terakhir; ?></td>
		  <td><?php echo $baris->no_peserta_ujian; ?> M</td>
		  <td><?php echo $baris->thn_lulus; ?></td>
		  

        </tr>
      <?php
      endforeach; ?>
    </table>

  </body>
</html>
