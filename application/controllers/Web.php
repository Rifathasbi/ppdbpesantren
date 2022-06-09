<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	public function index()
	{
		$data['web_ppdb']	 = $this->db->get_where('tbl_web', "id_web='1'")->row();
		$data['v_user']  			  = $this->db->get_where('tbl_user', "id_user='1'")->row();
		$this->load->view('web/index', $data);
	}

	public function pendaftaran()
	{
		$data['web_ppdb']	 = $this->db->get_where('tbl_web', "id_web='1'")->row();
		$data['v_user']  			  = $this->db->get_where('tbl_user', "id_user='1'")->row();
		if ($data['web_ppdb']->status_ppdb == 'tutup') {
			redirect('404');
		}

		$this->db->order_by('id_pdd', 'ASC');
		$data['v_pdd'] = $this->db->get('tbl_pdd')->result();

		$this->db->order_by('id_penghasilan', 'ASC');
		$data['v_penghasilan'] = $this->db->get('tbl_penghasilan')->result();

		$this->db->where('ket_pekerjaan', 'ayah');
		$this->db->order_by('id_pekerjaan', 'ASC');
		$data['v_pekerjaan_ayah'] = $this->db->get('tbl_pekerjaan')->result();

		$this->db->where('ket_pekerjaan', 'ibu');
		$this->db->order_by('id_pekerjaan', 'ASC');
		$data['v_pekerjaan_ibu'] = $this->db->get('tbl_pekerjaan')->result();

		$this->db->order_by('id_pekerjaan', 'ASC');
		$this->db->group_by('nama_pekerjaan');
		$data['v_pekerjaan_wali'] = $this->db->get('tbl_pekerjaan')->result();

		$this->load->view('web/pendaftaran', $data);

		if (isset($_POST['btndaftar'])) {
			$this->db->order_by('id_siswa', 'DESC');
			$sql     = $this->db->get('tbl_siswa');
			if ($sql->num_rows() == 0) {
			  $no_pendaftaran   = "PPDB001";
			}else{
			  $noUrut      = substr($sql->row()->no_pendaftaran, 4, 3);
			  $noUrut++;
			  $no_pendaftaran    = "PPDB".sprintf($noUrut++);
			}

			$nisn							= $this->input->post('nisn');
			$nik							= $this->input->post('nik');
			$nama_lengkap					= $this->input->post('nama_lengkap');
			$jk								= $this->input->post('jk');
			$alamat							= $this->input->post('alamat');
			$provinsi						= $this->input->post('provinsi');
			$kabupaten						= $this->input->post('kabupaten');
			$kecamatan						= $this->input->post('kecamatan');
			$desa							= $this->input->post('desa');
			$kode_pos						= $this->input->post('kode_pos');
			$tempat_lahir					= $this->input->post('tempat_lahir');
			$tgl_lahir						= $this->input->post('tgl_lahir')."-".$this->input->post('bln_lahir')."-".$this->input->post('thn_lahir');
			$cita_cita						= $this->input->post('cita_cita');
			$hobi							= $this->input->post('hobi');
			$anak							= $this->input->post('anak');
			$saudara						= $this->input->post('saudara');
			$tinggi_badan					= $this->input->post('tinggi_badan');
			$berat_badan					= $this->input->post('berat_badan');
			$pernah_tk						= $this->input->post('pernah_tk');
			$nama_tk						= $this->input->post('nama_tk');
			$pernah_paud					= $this->input->post('pernah_paud');
			$nama_paud						= $this->input->post('nama_paud');
			$nama_ayah						= $this->input->post('nama_ayah');
			$nik_ayah						= $this->input->post('nik_ayah');
			$tempat_lahir_ayah				= $this->input->post('tempat_lahir_ayah');
			$tgl_lahir_ayah					= $this->input->post('tgl_lahir_ayah');
			$pdd_ayah						= $this->input->post('pdd_ayah');
			$pekerjaan_ayah					= $this->input->post('pekerjaan_ayah');
			$penghasilan_ayah				= $this->input->post('penghasilan_ayah');
			$no_hp_ayah						= $this->input->post('no_hp_ayah');
			$nama_ibu						= $this->input->post('nama_ibu');
			$nik_ibu						= $this->input->post('nik_ibu');
			$tempat_lahir_ibu				= $this->input->post('tempat_lahir_ibu');
			$tgl_lahir_ibu					= $this->input->post('tgl_lahir_ibu');
			$pdd_ibu						= $this->input->post('pdd_ibu');
			$pekerjaan_ibu					= $this->input->post('pekerjaan_ibu');
			$penghasilan_ibu				= $this->input->post('penghasilan_ibu');
			$no_hp_ibu						= $this->input->post('no_hp_ibu');
			$nama_wali						= $this->input->post('nama_wali');
			$nik_wali						= $this->input->post('nik_wali');
			$tempat_lahir_wali				= $this->input->post('tempat_lahir_wali');
			$tgl_lahir_wali					= $this->input->post('tgl_lahir_wali');
			$pdd_wali						= $this->input->post('pdd_wali');
			$pekerjaan_wali					= $this->input->post('pekerjaan_wali');
			$penghasilan_wali				= $this->input->post('penghasilan_wali');
			$no_hp_wali						= $this->input->post('no_hp_wali');
			$npsn							= $this->input->post('npsn');
			$nama_sekolah					= $this->input->post('nama_sekolah');
			$jenjang						= $this->input->post('jenjang');
			$status_sekolah					= $this->input->post('status_sekolah');
			$verifikasi_data				= $this->input->post('verifikasi_data');
			$alamat_sekolah					= $this->input->post('alamat_sekolah');
			$no_skhu						= $this->input->post('no_skhu');
			$no_ijazah						= $this->input->post('no_ijazah');
			$nilai_terakhir					= $this->input->post('nilai_terakhir');
			$no_peserta_ujian				= $this->input->post('no_peserta_ujian');
			$thn_lulus						= $this->input->post('thn_lulus');
			$tgl_siswa						= $this->Model_data->date('waktu_default');

			if ($_POST['total_nilai'] < 0) {
				$this->session->set_flashdata('msg',
					'
					<div class="alert alert-warning alert-dismissible" role="alert">
						 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
						 </button>
						 <strong>Gagal Mendaftar PPDB Online!</strong> Maaf <b>'.$nama_lengkap.'</b> tidak bisa mendaftar PPDB dikarenakan Total nilai Rata-Rata Rapor kurang dari 75. Terimakasih.
					</div>'
				);
				redirect('pendaftaran');
			}

					$data = array(
						'no_pendaftaran'			=> $no_pendaftaran,
						'password'				  	=> $nisn,
						'nisn'				  		=> $nisn,
						'nik'				  		=> $nik,
						'nama_lengkap'				=> $nama_lengkap,
						'jk'				  		=> $jk,
						'alamat'					=> $alamat,
						'provinsi'					=> $provinsi,
						'kabupaten'					=> $kabupaten,
						'kecamatan'					=> $kecamatan,
						'desa'						=> $desa,
						'kode_pos'					=> $kode_pos,	
						'tempat_lahir'				=> $tempat_lahir,
						'tgl_lahir'				  	=> $tgl_lahir,
						'cita_cita'					=> $cita_cita,
						'hobi'						=> $hobi,
						'anak'						=> $anak,
						'saudara'					=> $saudara,
						'tinggi_badan'				=> $tinggi_badan,
						'berat_badan'				=> $berat_badan,
						'pernah_tk'					=> $pernah_tk,
						'nama_tk'					=> $nama_tk,
						'pernah_paud'				=> $pernah_paud,
						'nama_paud'					=> $nama_paud,
						'nama_ayah'				  	=> $nama_ayah,
						'nik_ayah'				  	=> $nik_ayah,
						'tempat_lahir_ayah'			=> $tempat_lahir_ayah,
						'tgl_lahir_ayah'			=> $tgl_lahir_ayah,
						'pdd_ayah'				  	=> $pdd_ayah,
						'pekerjaan_ayah'			=> $pekerjaan_ayah,
						'no_hp_ayah'				=> $no_hp_ayah,
						'penghasilan_ayah'			=> $penghasilan_ayah,
						'no_hp_ayah'				=> $no_hp_ayah,
						'nama_ibu'				  	=> $nama_ibu,
						'nik_ibu'				  	=> $nik_ibu,
						'tempat_lahir_ibu'			=> $tempat_lahir_ibu,
						'tgl_lahir_ibu'				=> $tgl_lahir_ibu,
						'pdd_ibu'				  	=> $pdd_ibu,
						'pekerjaan_ibu'				=> $pekerjaan_ibu,
						'penghasilan_ibu'			=> $penghasilan_ibu,
						'no_hp_ibu'				  	=> $no_hp_ibu,
						'nama_wali'				  	=> $nama_wali,
						'nik_wali'				  	=> $nik_wali,
						'tempat_lahir_wali'			=> $tempat_lahir_wali,
						'tgl_lahir_wali'			=> $tgl_lahir_wali,
						'pdd_wali'				  	=> $pdd_wali,
						'pekerjaan_wali'			=> $pekerjaan_wali,
						'penghasilan_wali'			=> $penghasilan_wali,
						'no_hp_wali'				=> $no_hp_wali,
						'npsn_sekolah'  	  		=> $npsn,
						'nama_sekolah'				=> $nama_sekolah,
						'jenjang'					=> $jenjang,
						'alamat_sekolah'			=> $alamat_sekolah,
						'status_sekolah'			=> $status_sekolah,
						'verifikasi_data'			=> $verifikasi_data,
						'no_skhu'					=> $no_skhu,
						'no_ijazah'				  	=> $no_ijazah,
						'nilai_terakhir'			=> $nilai_terakhir,
						'no_peserta_ujian'			=> $no_peserta_ujian,
						'thn_lulus'				  	=> $thn_lulus,
						'tgl_siswa'				  	=> $tgl_siswa,
					);
					$this->db->insert('tbl_siswa',$data);


						// $this->session->set_flashdata('msg',
						// 	'
						// 	<div class="alert alert-success alert-dismissible" role="alert">
						// 		 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
						// 			 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
						// 		 </button>
						// 		 <strong>Sukses!</strong> Berhasil ditambahkan.
						// 	</div>'
						// );
						$this->session->set_userdata('no_pendaftaran', "$no_pendaftaran");
						redirect('panel_siswa');

		}


	}

	public function logcs()
	{
		$data['web_ppdb']	 = $this->db->get_where('tbl_web', "id_web='1'")->row();
		$data['v_user']  			  = $this->db->get_where('tbl_user', "id_user='1'")->row();
		if ($data['web_ppdb']->status_ppdb == 'tutup') {
			redirect('404');
		}
		$ceks = $this->session->userdata('no_pendaftaran');
		if(isset($ceks)) {
			redirect('panel_siswa');
		}else{
			$this->load->view('web/index', $data);

				if (isset($_POST['btnlogin'])){
						 $username = $_POST['username'];
						 $pass	   = $_POST['password'];

						 $this->db->like('tgl_siswa', date('Y'), "after");
						 $query  = $this->db->get_where('tbl_siswa', "no_pendaftaran='$username'");
						 $cek    = $query->result();
						 $cekun  = $cek[0]->no_pendaftaran;
						 $jumlah = $query->num_rows();

						 if($jumlah == 0) {
								 $this->session->set_flashdata('msg',
									 '
									 <div class="alert alert-danger alert-dismissible" role="alert">
									 		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;&nbsp;</span>
											</button>
											<strong>No. Pendaftaran "'.$username.'"</strong> belum terdaftar.
									 </div>'
								 );
								 redirect('logcs');
						 } else {
										 $row = $query->row();
										 $cekpass = $row->password;
										 if($cekpass <> $pass) {
												$this->session->set_flashdata('msg',
													 '<div class="alert alert-warning alert-dismissible" role="alert">
													 		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
																<span aria-hidden="true">&times;&nbsp;</span>
															</button>
															<strong>No. Pendaftaran atau NISN Salah!</strong>.
													 </div>'
												);
												redirect('logcs');
										 } else {

																$this->session->set_userdata('no_pendaftaran', "$cekun");

												 			 	redirect('panel_siswa');
										 }
						 }
				}
		}
	}


	function error_not_found(){
		$this->load->view('404_content');
	}

}