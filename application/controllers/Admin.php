<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    
	function __construct()
	{
		parent::__construct();
		$this->load->model('AdminModel');
        $this->load->model('Auth_model');
		$this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->library("pagination");
        $rules = $this->Auth_model->rules();
		$this->form_validation->set_rules($rules);
	}

    public function index()
	{
		if($this->Auth_model->current_user()==1){
            $config = array();
            $config["base_url"] = base_url() . "/admin";
            $config["total_rows"] = $this->AdminModel->get_count();
            $config["per_page"] = 4;
            $config["uri_segment"] = 0;
    
            $this->pagination->initialize($config);

            $page = (count($this->uri->segments) > 1) ? $this->uri->segments[2] : 0;
            $data["links"] = $this->pagination->create_links();
            $data['products'] = $this->AdminModel->get_authors($config["per_page"], $page);
            $this->load->view('Admin/product', $data);

            // $data['products'] = $this->AdminModel->listProduk();
            // $this->load->view('Admin/product', $data);
		} else {
            // echo "<script>alert('Silahkan login dahulu!');</script>";
            redirect(base_url('admin/login'),'refresh'); 
		}
	}

    public function login()
	{
        if($this->Auth_model->current_user()==1){
            redirect(base_url('admin'),'refresh'); 
		} else {
            // echo "<script>alert('Silahkan login dahulu!');</script>";
            $this->load->view('Admin/login');
		}
	}

    public function doLogin()
	{
        $username = $_POST['username'];
		$password = $_POST['password'];

		if($this->Auth_model->login($username, $password)){
            $data['products'] = $this->AdminModel->listProduk();
            redirect(base_url('admin'),$data); 
		} else {
            echo "<script>alert('Silahkan cek kembali username dan password anda!');</script>";
            $this->load->view('Admin/login');
		}
	}

    public function doLogout()
	{
        $this->Auth_model->logout();
        redirect(base_url('admin/login'), 'refresh'); 
	}

    public function tambahProduk()
	{
		if($this->Auth_model->current_user()==1){
            $this->load->view('Admin/tambahProduk');
		} else {
            echo "<script>alert('Silahkan login dahulu!');</script>";
            redirect(base_url('admin/login'),'refresh'); 
		}
	}

    public function insertProduk()
	{
        $namaProduk = $_POST['namaProduk'];
        $hargaProduk = $_POST['hargaProduk'];
        $deskripsiProduk = $_POST['deskripsiProduk'];
        $target_dir = "../assets/img/produk/";
        $file_type =$_FILES['fotoProduk']['type'];
        $filePath = $target_dir . basename($_FILES["fotoProduk"]["name"]);
        
        $cekDuplikatProduk = $this->AdminModel->cekDuplikatProduk($namaProduk);

        $destination_path = getcwd().$target_dir;
        $target_path = $destination_path . basename( $_FILES["fotoProduk"]["name"]);

        if($cekDuplikatProduk == 0){
            $setData = array(
                'NAMA_PRODUK' => $namaProduk,
                'HARGA_PRODUK' => $hargaProduk,
                'DESKRIPSI_PRODUK' => $deskripsiProduk,
                'FOTO_PRODUK' => $_FILES["fotoProduk"]["name"]
            );

            if ($file_type=="image/jpeg" || $file_type=="image/jpg" || $file_type=="image/png") {
                move_uploaded_file($_FILES['fotoProduk']['tmp_name'], $target_path);
                $data['products'] = $this->AdminModel->insertProduk($setData);
                echo "<script>alert('Produk berhasil disimpan!');</script>";
                redirect(base_url('admin/tambah-produk'),'refresh'); 
            }else{
                echo "<script>alert('Produk gagal disimpan!');</script>";
                redirect(base_url('admin/tambah-produk'),'refresh'); 
            }
        }else{
            echo "<script>alert('Nama produk sudah pernah didaftarkan!');</script>";
            redirect(base_url('admin/tambah-produk'),'refresh'); 
        }
	}

    public function editProduk($idProduk)
	{
		if($this->Auth_model->current_user()==1){
            $data['products'] = $this->AdminModel->editProduk($idProduk);
            $this->load->view('Admin/editProduk', $data);
		} else {
            echo "<script>alert('Silahkan login dahulu!');</script>";
            redirect(base_url('admin/login'),'refresh'); 
		}
	}

    public function updateProduk()
	{
        $idProduk = $_POST['idProduk'];
        $namaProduk = $_POST['namaProduk'];
        $hargaProduk = $_POST['hargaProduk'];
        $deskripsiProduk = $_POST['deskripsiProduk'];
        $selKategori = $_POST['selKategori'];
        $target_dir = "../assets/img/produk/";
        $file_type =$_FILES['fotoProduk']['type'];
        $filePath = $target_dir . basename($_FILES["fotoProduk"]["name"]);

        $fotoProduk;
        if(""==$_FILES["fotoProduk"]["name"]){
            $fotoProduk = $_POST['fotoProduk'];
        }else{
            $fotoProduk = $_FILES["fotoProduk"]["name"];
        }

        $destination_path = getcwd().$target_dir;
        $target_path = $destination_path . basename( $_FILES["fotoProduk"]["name"]);

            $setData = array(
                'NAMA_PRODUK' => $namaProduk,
                'HARGA_PRODUK' => $hargaProduk,
                'DESKRIPSI_PRODUK' => $deskripsiProduk,
                'FOTO_PRODUK' => $fotoProduk,
                'KATEGORI_PRODUK' => $selKategori
            );

            if ($file_type=="image/jpeg" || $file_type=="image/jpg" || $file_type=="image/png") {
                move_uploaded_file($_FILES['fotoProduk']['tmp_name'], $target_path);
                $data['products'] = $this->AdminModel->updateProduk($setData, $idProduk);
                echo "<script>alert('Produk berhasil disimpan!');</script>";
                redirect(base_url('admin/edit-produk/'.$idProduk),'refresh'); 
            }else{
                $data['products'] = $this->AdminModel->updateProduk($setData, $idProduk);
                echo "<script>alert('Produk berhasil disimpan!');</script>";
                redirect(base_url('admin/edit-produk/'.$idProduk),'refresh'); 
            }
	}

    public function hapusProduk($idProduk)
	{
        if($this->Auth_model->current_user()==1){
            $this->AdminModel->hapusProduk($idProduk);
            $data['products'] = $this->AdminModel->listProduk();
            redirect(base_url('admin'),'refresh'); 
		} else {
            echo "<script>alert('Silahkan login dahulu!');</script>";
            redirect(base_url('admin/login'),'refresh'); 
		}
	}

    public function pesanan()
	{
        if($this->Auth_model->current_user()==1){
            $data['products'] = $this->AdminModel->listPesanan();
            $this->load->view('Admin/pesanan', $data);
		} else {
            echo "<script>alert('Silahkan login dahulu!');</script>";
            redirect(base_url('admin/login'),'refresh'); 
		}
	}

    public function lihatPesanan($idPembeli)
	{
        if($this->Auth_model->current_user()==1){
            $data['products'] = $this->AdminModel->lihatPesanan($idPembeli);
            $this->load->view('Admin/detailPesanan', $data);
		} else {
            echo "<script>alert('Silahkan login dahulu!');</script>";
            redirect(base_url('admin/login'),'refresh'); 
		}
	}

    public function prosesPesanan()
	{
        if($this->Auth_model->current_user()==1){
            $idPembeli = $_POST['idPembeli'];
            $this->AdminModel->prosesPesanan($idPembeli);
            $data['products'] = $this->AdminModel->listPesanan();
            redirect(base_url('admin/pesanan'),$data); 
		} else {
            echo "<script>alert('Silahkan login dahulu!');</script>";
            redirect(base_url('admin/login'),'refresh'); 
		}
	}
    
   function getKategori()
   {
       // Search term
        $searchTerm = $this->input->post('searchTerm');

        // Get users
        $response = $this->AdminModel->getKategori($searchTerm);
        echo json_encode($response);
    }
}
