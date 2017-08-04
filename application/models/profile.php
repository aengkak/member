<?php
class Profile extends CI_model {
	function select() {
		$level = $this->session->userdata('level');
		$id = $this->session->userdata('member_id');
		if ($level == "member"){
			$this->db->where('id_member', $id);
			return $this->db->get('member')->row();
		}else {
			$this->db->where('id', $id);
			return $this->db->get('user')->row();
		}
	}
	function update() {
		$no_identitas = $this->input->post('no_identitas');
		$password = $this->input->post('password');
		$nama_member = $this->input->post('nama_member');
		$alamat = $this->input->post('alamat');
		$no_telp = $this->input->post('no_telp');
		$no_hp = $this->input->post('no_hp');
		$email = $this->input->post('email');
		$tgl_lahir = $this->input->post('tgl_lahir');

		$level = $this->session->userdata('level');
		$id = $this->session->userdata('member_id');
		if ($level == "member"){
			$data = array(	'password' => md5($password),
							'no_identitas' => $no_identitas,
							'nama_member' => $nama_member,
							'alamat' => $alamat,
							'no_telp' => $no_telp,
							'no_hp' => $no_hp,
							'email' => $email,
							'tgl_lahir' => $tgl_lahir);
			$this->db->where('id_member', $id);
			$this->db->update('member', $data);
		}else {
			$this->db->where('id', $id);
			$this->db->update('user', array('password' => md5($password)));
		}
	}
}