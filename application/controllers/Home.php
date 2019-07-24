<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct() {
	    parent::__construct();
	    $this->load->helper('form');
	    $this->load->helper('url');
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->database();
		$sql = $this->db->query('SELECT * FROM feeds ORDER BY id DESC');
		$data["feeds"] = $sql->result_array();
		$this->load->view('home',$data);
	}
	public function addfeed()
	{
		$this->load->view('addfeed');
	}
	public function insertfeed()
	{
		$this->load->database();
		$data = array(
						'title' => $this->input->post('title'),
						'feed' => $this->input->post('feed')
            );
    $this->db->insert('feeds',$data);
		redirect('/');
	}
	public function editfeed($id)
	{
		$this->load->database();
		$sql = $this->db->query('SELECT * FROM feeds WHERE id=?',[$id]);
		$data["feeds"] = $sql->result_array();
		$this->load->view('editfeed',$data);
	}
	public function updatefeed($id)
	{
		$this->load->database();
		$data = array(
						'title' => $this->input->post('title'),
						'feed' => $this->input->post('feed')
            );
		$this->db->where("id",$id);
		$this->db->update("feeds",$data);
		redirect('/');
	}
	public function deletefeed($id)
	{
		$this->load->database();
		$this->db->where("id",$id);
		$this->db->delete("feeds");
		redirect('/');
	}
}
