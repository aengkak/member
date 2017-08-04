<?php
class Main extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('member');
		$this->load->model('sign');
		$this->load->model('partner');
		$this->load->model('user');
		$this->load->model('profile');
	}
	public function index() {
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('home');
		$this->load->view('template/footer');
	}
	public function login() {
		if($_POST==NULL) {
			$this->load->view('login');
		}else {
			$this->sign->login();
			$q = $this->session->userdata('status');
			if($q == 'login'){
				redirect('index');
			}else{
				echo "<script>alert('Username/Password salah')
				  location.replace('login')</script>";
			}
		}
	}
	public function logout() {
		$this->session->sess_destroy();
		redirect(base_url('index'));
	}
	public function register() {
		if($_POST==NULL) {
			$this->load->view('register');
		}else {
			$this->member->add();
			echo "<script>alert('Register Berhasil')
				  location.replace('login')</script>";
		}
	}
	public function partner() {
		$user_id = $this->session->userdata('level');
		if ($user_id == "member"){
			$data['partner'] = $this->partner->selectAll();
			$this->load->view('template/header');
			$this->load->view('template/menu');
			$this->load->view('partner', $data);
			$this->load->view('template/footer');
		}else{
			redirect(base_url('index'));
		}
	}
	public function partadd() {
		$this->partner->add();
		echo json_encode(array("status" => TRUE));
	}
	public function partedit($id) {
		$data = $this->partner->edit($id);
		echo json_encode($data);
	}
	public function partdelete($id) {
		$this->partner->delete($id);
		echo json_encode(array("status" => TRUE));
	}
	public function partupdate() {
		$this->partner->update();
		echo json_encode(array("status" => TRUE));
	}
	public function request() {
		$user_id = $this->session->userdata('level');
		if ($user_id == "member"){
			redirect(base_url('index'));
		}else {
			$data['req'] = $this->member->request();
			$this->load->view('template/header');
			$this->load->view('template/menu');
			$this->load->view('request', $data);
			$this->load->view('template/footer');
		}
	}
	public function memberadd() {
		$this->member->add1();
		echo json_encode(array("status" => TRUE));	
	}
	public function checkm($id) {
		$this->member->checkm($id);
		echo json_encode(array("status" => TRUE));
	}
	public function rejectm($id) {
		$this->member->rejectm($id);
		echo json_encode(array("status" => TRUE));
	}
	public function user() {
		$user_id = $this->session->userdata('level');
		if ($user_id == "member"){
			redirect(base_url('index'));
		}else {
			$data['user'] = $this->user->selectAll();
			$this->load->view('template/header');
			$this->load->view('template/menu');
			$this->load->view('user', $data);
			$this->load->view('template/footer');
		}
	}
	public function useradd() {
		$this->user->add();
		echo json_encode(array("status" => TRUE));
	}
	public function useredit($id) {
		$data = $this->user->edit($id);
		echo json_encode($data);
	}
	public function userdelete($id) {
		$this->user->delete($id);
		echo json_encode(array("status" => TRUE));
	}
	public function userupdate() {
		$this->user->update();
		echo json_encode(array("status" => TRUE));
	}
	public function member() {
		$user_id = $this->session->userdata('level');
		if ($user_id == "member"){
			redirect(base_url('index'));
		}else {
			$data['member'] = $this->member->selectAll();
			$this->load->view('template/header');
			$this->load->view('template/menu');
			$this->load->view('member', $data);
			$this->load->view('template/footer');
		}
	}
	public function memberview($id) {
		
		$data1 = $this->partner->select($id);
		$data = $this->member->select($id);
		$arr['member']=$data;
		$arr['partner']=$data1;
		$this->load->view('view',$arr);
	}
	public function profile() {
		if($_POST==NULL) {
			$data['pro'] = $this->profile->select();
			$this->load->view('template/header');
			$this->load->view('template/menu');
			$level = $this->session->userdata('level');
			if ($level == "member"){
				$this->load->view('profile1', $data);
			}else {
				$this->load->view('profile2', $data);
			}
			$this->load->view('template/footer');
		} else {
			$this->profile->update();
			echo "<script>alert('Update Success')
				  location.replace('profile')</script>";
		}
	}
}