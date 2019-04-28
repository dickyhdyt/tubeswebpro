<?php
class M_teater extends CI_model{
    public function getAllTeater(){
        $data = $this->db->get('teater');
        return $data->result_array();
    }
    public function getAllFilm(){
        $this->db->select('*');
        $this->db->from('film');
        $data = $this->db->get();
        return $data->result();
    }

    public function getAllFilmHome(){
        $this->db->select('*');
        $this->db->from('film');
        $this->db->where('status','Playing');
        $data = $this->db->get();
        return $data->result();
    }
    public function getAllFilmUpcoming(){
        $this->db->select('*');
        $this->db->from('film');
        $this->db->where('status','Up Coming');
        $data = $this->db->get();
        return $data->result();
    }

    public function tambahDataTeater(){
        $data = [
            "nama_teater" => $this->input->post('nama_teater', true), 
            "kota" => $this->input->post('kota', true),
            "alamat" => $this->input->post('alamat',true),
            "no_telpon" => $this->input->post('no_telpon',true),
        ];
        return $this->db->insert('teater',$data);
    }
    public function tambahDataFilm($data){
        try{
            $this->db->insert('film', $data);
            return true;
          }catch(Exception $e){}
    }
    public function hapusDataTeater($id)
	{
		$this->db->where('id_teater',$id);
		return $this->db->delete('teater');
    }
    public function hapusDataFilm($id)
	{
		$this->db->where('id_film',$id);
		return $this->db->delete('film');
	}
	public function getTeaterById($id)
	{
		$this->db->where('id_teater',$id);
		return $this->db->get('teater')->row_array();

    }
    public function getFilmById($id)
	{
		$this->db->where('id_film',$id);
		return $this->db->get('film')->result();
    }
    public function gambar($id){
        $this->db->where('id_film',$id);
        return $this->db->get('film')->row();
    }

	public function ubahDataTeater($id)
	{
		$data = [
            "nama_teater" => $this->input->post('nama_teater', true), 
            "kota" => $this->input->post('kota', true),
            "alamat" => $this->input->post('alamat',true),
            "no_telpon" => $this->input->post('no_telpon',true),
        ];
		$this->db->where('id_teater',$id);
		return $this->db->update('teater',$data);
    }
    public function ubahDataFilm($id,$data){
        try{
            $this->db->where('id_film',$id)->limit(1)->update('film', $data);
            return true;
           }catch(Exception $e){}
    }
    public function cariDataTeater()
	{
		$keyword = $this->input->post('keyword', true);
        $data  =   $this->db->query("SELECT * FROM teater where nama_teater like '%$keyword%' or kota like '%$keyword%' ");
        return $data->result_array();
    }
    public function cariDataFilm()
	{
		$keyword = $this->input->post('keyword', true);
        $data  =   $this->db->query("SELECT * FROM film where nama_film like '%$keyword%'");
        return $data->result();
    }
    public function data(){
        $this->db->select('*');
        $this->db->from('film');
        $data = $this->db->get();
        return $data->result();
      }

      public function tambahDataUser(){
        $data = [
            "username" => $this->input->post('username', true), 
            "password" => $this->input->post('password', true),
            "email" => $this->input->post('email',true),
            "handphone" => $this->input->post('handphone',true),
            // "tanggal_lahir" => $this->input->post('tanggal_lahir', true),
            "jk" => $this->input->post('jk',true),
            "address" => $this->input->post('address',true),
        ];
        return $this->db->insert('akun_user',$data);
    }
    public function validateAdmin($username,$password)
    {
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $result = $this->db->get('akun',1);
        return $result;
    }
    public function validate($handphone,$password)
    {
        $this->db->where('handphone',$handphone);
        $this->db->where('password',$password);
        $result = $this->db->get('akun_user',1);
        return $result;
    }
}
?>