<?php
class Partner extends CI_Model {
	public function selectAll() {
		$id = $this->session->userdata('member_id');
		$this->db->where('member_id', $id);
		return $this->db->get('partner')->result();
	}
	public function add() {
		$no_identitas = $this->input->post('no_identitas');
		$nama_partner = $this->input->post('nama_partner');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$no_telp = $this->input->post('no_telp');
		$member_id = $this->session->userdata('member_id');
		$data = array('no_identitas' => $no_identitas,'nama_partner' => $nama_partner,'tgl_lahir' => $tgl_lahir, 'no_telp' => $no_telp, 
			'member_id' => $member_id);
		$this->db->insert('partner', $data);
		$this->db->insert_id();
	}
	public function delete($id){
		$this->db->delete('partner', array('id_partner' => $id));
	}
	public function edit($id){
		$this->db->where('id_partner', $id);
		return $this->db->get('partner')->row();
	}
	public function update(){
		$id = $this->input->post('id_partner');
		$no_identitas = $this->input->post('no_identitas');
		$nama_partner = $this->input->post('nama_partner');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$no_telp = $this->input->post('no_telp');
		$this->db->where('id_partner', $id);
		$data = array('nama_partner' => $nama_partner,'tgl_lahir' => $tgl_lahir, 'no_telp' => $no_telp
						);
		$this->db->update('partner', $data);
	}
	public function select($id){
		$this->db->where('member_id', $id);
		return $this->db->get('partner')->result();
	}
}