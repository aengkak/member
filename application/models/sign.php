<?php
class Sign extends CI_model {
	function login() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$data = array('username'=>$username, 'password'=>md5($password));
		$cek1 = $this->db->get_where('member', $data)->num_rows();
		if($cek1 == 0) {
			$cek2 = $this->db->get_where('user', $data)->num_rows();
			$cek3 = $this->db->get_where('user', $data)->row();
			if($cek2 > 0) {
				$data_session = array('username' => $cek3->username,
										'member_id' => $cek3->id,
										'level' => "staff",
										'status' => "login" );
				$this->session->set_userdata($data_session);
			}
		}else {
			$cek4 = $this->db->get_where('member', $data)->row();
			$cek5 = $cek4->status;
			if($cek5 > 0) {
				$data_session = array('username' => $cek4->username,
										'member_id' => $cek4->id_member,
										'level' => "member",
										'status' => "login" );
				$this->session->set_userdata($data_session);
			}
		}
	}
}