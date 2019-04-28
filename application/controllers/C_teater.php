<?php
class C_teater extends CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model('M_teater');
        $this->load->library('form_validation');
        $this->load->helper(array('form','url'));
    }
    function indexTeater(){
        $data['judul'] = 'Daftar Teater';
        $data['teater']=$this->M_teater->getAllTeater();
        if($this->input->post('keyword')){
            $data['teater'] = $this->M_teater->cariDataTeater();
        }
        $this->load->view('admin/header_admin',$data);
        $this->load->view('admin/footer_admin');
        $this->load->view('admin/crud_teater',$data);
    }
    public function tambahTeater(){
        $data['judul'] = 'Form Tambah Teater';
        $this->load->view('admin/header_admin');
        $this->load->view('admin/footer_admin');
        
        $this->form_validation->set_rules('nama_teater', 'nama_teater', 'required');
        $this->form_validation->set_rules('kota', 'kota', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('no_telpon', 'no_telpon', 'required');
        if ($this->form_validation->run()==FALSE){
            $this->load->view('admin/tambah_teater');
        }else{
            $this->M_teater->tambahDataTeater();
            $this->session->set_flashdata('success','ditambahkan');
            redirect('C_teater/indexTeater');
        }
    }
    public function hapusTeater($id){
        $this->M_teater->hapusDataTeater($id);
        $this->session->set_flashdata('hapus','dihapus');
        redirect('C_teater/indexTeater');
    }
    public function ubahTeater($id){
        $data['judul'] = 'Form Ubah Data Teater';
        $this->load->view('admin/header_admin');
        $this->load->view('admin/footer_admin');
        $data['teater']=$this->M_teater->getTeaterById($id);
        $this->form_validation->set_rules('nama_teater', 'nama_teater', 'required');
        $this->form_validation->set_rules('kota', 'kota', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('no_telpon', 'no_telpon', 'required');
        if ($this->form_validation->run()==FALSE){
            $this->load->view('admin/ubah_teater',$data);
        }else{
            $this->M_teater->ubahDataTeater($id);
            $this->session->set_flashdata('update','diubah');
            redirect('C_teater/indexTeater');
        }
    }
    public function indexFilm(){
        $data['judul'] = 'Daftar Film';
        $data['film']=$this->M_teater->getAllFilm();
        $this->load->view('admin/header_admin',$data);
        $this->load->view('admin/footer_admin');
        if($this->input->post('keyword')){
            $data['film'] = $this->M_teater->cariDataFilm();
        }
        $this->load->view('admin/crud_film',$data);
    }
    public function tambahFilm(){
        $this->load->view('admin/header_admin');
        // $this->load->view('admin/footer_admin');
        $this->load->view('admin/tambah_film');
    }
    public function proses_tambah(){
        $this->load->view('admin/header_admin');
        $config = [
            'upload_path' => './images/',
            'allowed_types' => 'gif|jpg|png',
            'max_size' => 3000, 'max_width' => 1920,
            'max_height' => 1080
        ];
        $this->load->library('upload', $config);
        if(!$this->upload->do_upload()){
            $error = array('error' => $this->upload->display_error());
            $this->load->view('C_teater/tambahFilm',$error);
        }else{
            $file = $this->upload->data();
            $data = [
            'nama_film' => set_value('nama_film'),
            'durasi' => set_value('durasi'),
            'rating' => set_value('rating'),
            'sinopsis' => set_value('sinopsis'),
            'status' => set_value('status'),
            'gambar' => $file['file_name'],
        ];
        $this->M_teater->tambahDataFilm($data);
        redirect('C_teater/data');
        }
            
    }
    public function ubahFilm($id){
        $this->load->view('admin/header_admin');
        $this->load->view('admin/footer_admin');
        $data['film'] = $this->M_teater->getFilmById($id);
        $this->load->view('admin/ubah_film',$data);
    }
    public function proses_ubah($id){
        $gambar = $this->M_teater->gambar($id);
        if(isset($_FILES["userfile"]["name"])){
            $config = [
                'upload_path' => './images/',
                'allowed_types' => 'gif|jpg|png',
                'max_size' => 3000, 'max_width' => 1920,
                'max_height' => 1080
            ];
            $this->load->library('upload', $config);
            if(!$this->upload->do_upload()){
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('admin/ubah_film',$error);
            }else{
                $file = $this->upload->data();
                $data = ['gambar' =>$file['file_name']];
                unlink('images/'.$gambar->gambar);
            }
        }
        $data['nama_film'] = set_value('nama_film');
        $data['durasi'] = set_value('durasi');
        $data['rating'] = set_value('rating');
        $data['sinopsis'] = set_value('sinopsis');
        $data['status']=set_value('status');
        $this->M_teater->ubahDataFilm($id,$data);
        redirect('C_teater/data');
    }
    public function hapusFilm($id){
        $this->M_teater->hapusDataFilm($id);
        $this->session->set_flashdata('hapus','dihapus');
        redirect('C_teater/data');
    }
    public function data(){
        $data['film'] = $this->M_teater->data();
        $this->load->view('admin/header_admin');
        $this->load->view('admin/footer_admin');
        $this->load->view('admin/crud_film', $data);
    }

    function indexHome(){
        $data['judul'] = 'Home';
        $data['film']=$this->M_teater->getAllFilm();
        if($this->input->post('keyword')){
            $data['film'] = $this->M_teater->cariDataTeater();
        }
        $this->load->view('User/header_user',$data);
        $this->load->view('User/home',$data);
        $this->load->view('User/footer_user');
    } 
    public function index(){
		$data['judul'] = 'Home';
		$data['film']=$this->M_teater->getAllFilmHome();
		$this->load->view('User/header_user', $data);
		$this->load->view('User/home');
		$this->load->view('User/footer_user');
    }
    public function indexFilmUpcoming(){
		$data['judul'] = 'Home';
		$data['film']=$this->M_teater->getAllFilmUpcoming();
		$this->load->view('User/header_user', $data);
		$this->load->view('User/upcoming');
		$this->load->view('User/footer_user');
    }
    public function login(){
		$data['judul'] = 'Login';
		$this->load->view('User/header_user', $data);
		$this->load->view('User/V_login',$data);
		$this->load->view('User/footer_user');
	}
	public function Signin() {
		$this->load->model('M_teater');
        $handphone= $this->input->post('handphone',TRUE);
        $password = $this->input->post('password',TRUE);
        $validate = $this->M_teater->validate($handphone,$password);
        if($validate->num_rows() == 1){
            $data  = $validate->row_array();
            $name  = $data['username'];
            $handphone = $data['handphone'];
            $newdata = array( 
                'username'  => $name, 
                'handphone' => $handphone,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($newdata);
            redirect('C_teater/indexHome');
        }
        else{
            $this->session->set_flashdata('alert','Fail Login');
            redirect('C_teater/loginAdmin');
        }
    }
    public function Logout() {
        $this->session->sess_destroy();
        redirect('C_teater/indexHome');
    }

    function aboutus(){
        $data['judul']='About Us';
        $this->load->view('User/header_user',$data);
        $this->load->view('User/about_us',$data);
        $this->load->view('User/footer_user');
    }

    function registrasi(){
        $data['judul'] = 'Registrasi';
        $this->load->view('User/header_user',$data);
        $this->load->view('User/registrasi',$data);
        $this->load->view('User/footer_user');
    }

    public function tambahUser(){
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('handphone', 'handphone', 'required');
        // $this->form_validation->set_rules('tanggal_lahir', 'tanggal_lahir', 'required');
        $this->form_validation->set_rules('jk', 'jk', 'required');
        $this->form_validation->set_rules('address', 'address', 'required');
        if ($this->form_validation->run()==FALSE){
            $this->load->view('User/registrasi');
        }else{
            $this->M_teater->tambahDataUser();
            redirect('C_teater/registrasi');
            $this->session->set_flashdata('success','ditambahkan');
        }
    }
    public function loginAdmin(){
		$data['judul'] = 'Login Admin';
		$this->load->view('User/header_user', $data);
		$this->load->view('User/V_loginAdmin',$data);
		$this->load->view('User/footer_user');
	}
	public function SigninAdmin() {
		$this->load->model('M_teater');
        $username= $this->input->post('username',TRUE);
        $password = $this->input->post('password',TRUE);
        $validate = $this->M_teater->validateAdmin($username,$password);
        if($validate->num_rows() == 1){
            $data  = $validate->row_array();
            $name  = $data['username'];
            $email = $data['email'];
            $newdata = array( 
                'username'  => $name, 
                'email' => $email,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($newdata);
            redirect('C_teater/indexFilm');
        }
        else{
            $this->session->set_flashdata('alert','Fail Login');
            redirect('C_teater/loginAdmin');
        }
    }
    function menuTeater(){
        $data['judul'] = 'Theater';
        $data['teater']=$this->M_teater->getAllTeater();
        if($this->input->post('keyword')){
            $data['teater'] = $this->M_teater->cariDataTeater();
        }
        $this->load->view('User/header_user',$data);
        $this->load->view('User/theater',$data);
        $this->load->view('User/footer_user');
    }

    public function indexDeskripsiFilm($id){
		$data['judul'] = 'Deskripsi Film';
		$data['film'] = $this->M_teater->getFilmById($id);
		$this->load->view('User/header_user', $data);
		$this->load->view('User/DesFilm',$data);
		$this->load->view('User/footer_user');
    }
    
}
?>