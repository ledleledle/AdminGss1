<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        
        $this->load->view("admin/index");
	}
	public function overview()
	{
        
        $this->load->view("admin/index");
	}
	public function absensi()
	{
        
        $this->load->view("admin/absensi");
	}
	public function admin()
	{
        
        $this->load->view("admin/admin");
	}
	public function belajar()
	{
        
        $this->load->view("admin/belajar");
	}
	public function berita()
	{
        
        $this->load->view("admin/berita");
	}
	public function guruabsen()
	{
        
        $this->load->view("admin/guruabsen");
	}
	public function imageslider()
	{
        
        $this->load->view("admin/imageslider");
	}
	public function informasi()
	{
        
        $this->load->view("admin/informasi");
	}
	public function jadwal()
	{
        
        $this->load->view("admin/jadwal");
	}
	public function kelas()
	{
        
        $this->load->view("admin/kelas");
	}
	public function nilai()
	{
        
        $this->load->view("admin/nilai");
	}
	public function pembayaran()
	{
        
        $this->load->view("admin/pembayaran");
	}
	public function users()
	{
        
        $this->load->view("admin/users");
	}
}
