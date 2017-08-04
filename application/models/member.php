<?php
class Member extends CI_Model {
	public function selectAll() {
		return $this->db->get('member')->result();
	}
	public function add() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$nama = $this->input->post('nama');
		$no = $this->input->post('identitas');
		$alamat = $this->input->post('alamat');
		$no_telp = $this->input->post('telp');
		$no_hp = $this->input->post('hp');
		$email = $this->input->post('email');
		$tgl_lahir = $this->input->post('lahir');
		$st = "0";
		$data = array('username' => $username,
						'password' => md5($password),
						'nama_member' => $nama,
						'no_identitas' => $no,
						'alamat' => $alamat,
						'no_telp' => $no_telp,
						'no_hp' => $no_hp,
						'email' => $email,
						'tgl_lahir' => $tgl_lahir,
						'status' => $st);
		$this->db->insert('member', $data);
		$this->db->insert_id();
	}
	public function request() {
		$this->db->where('status', "0");
		return $this->db->get('member')->result();
	}
	public function add1() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$nama = $this->input->post('nama');
		$no = $this->input->post('identitas');
		$alamat = $this->input->post('alamat');
		$no_telp = $this->input->post('telp');
		$no_hp = $this->input->post('hp');
		$email = $this->input->post('email');
		$tgl_lahir = $this->input->post('lahir');
		$st = "1";
		$data = array('username' => $username,
						'password' => md5($password),
						'nama_member' => $nama,
						'no_identitas' => $no,
						'alamat' => $alamat,
						'no_telp' => $no_telp,
						'no_hp' => $no_hp,
						'email' => $email,
						'tgl_lahir' => $tgl_lahir,
						'status' => $st);
		$this->db->insert('member', $data);
		return $this->db->insert_id();
	}
	public function checkm($id){
		$this->db->where('id_member', $id);
		$this->db->update('member', array('status' => "1"));
	}
	public function rejectm($id){
		$this->db->delete('member', array('id_member' => $id));
	}
	public function select($id){
		$this->db->where('id_member', $id);
		return $this->db->get('member')->row();
	}
}