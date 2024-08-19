<?php

class Data_tenda extends CI_Controller{

  public function __construct(){
    parent::__construct();
    
    if(empty($this->session->userdata('username'))){
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Anda belum login!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
      redirect('auth/login');
    }
    elseif($this->session->userdata('role_id') != '1'){
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Anda tidak punya akses ke halaman ini!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
      redirect('customer/dashboard');
    }
  }

  public function index(){
    $data['tenda'] = $this->rental_model->get_data('tenda')->result();
    $data['tipe'] = $this->rental_model->get_data('tipe')->result();
    $this->load->view('templates_admin/header');
    $this->load->view('templates_admin/sidebar');
    $this->load->view('admin/data_tenda', $data);
    $this->load->view('templates_admin/footer');
  }

  public function tambah_tenda(){
    $data['tipe'] = $this->rental_model->get_data('tipe')->result();
    $this->load->view('templates_admin/header');
    $this->load->view('templates_admin/sidebar');
    $this->load->view('admin/form_tambah_tenda', $data);
    $this->load->view('templates_admin/footer');
  }

  public function tambah_tenda_aksi(){
    $this->_rules();

    if($this->form_validation->run() == FALSE){
      $this->tambah_tenda();
    }
    else{
      $kode_tipe    = $this->input->post('kode_tipe');
      $merek        = $this->input->post('merek');
      $kapasitas    = $this->input->post('kapasitas');
      $warna        = $this->input->post('warna');
      $status       = $this->input->post('status');
      $harga        = $this->input->post('harga');
      $denda        = $this->input->post('denda');
      $matras       = $this->input->post('matras');
      $selimut      = $this->input->post('selimut');
      $lampu        = $this->input->post('lampu');
      $hammock      = $this->input->post('hammock');
      $gambar       = $_FILES['gambar']['name'];

      if($gambar=''){}
      else{
        $config['upload_path'] = './assets/upload';
        $config['allowed_types'] = 'jpg|jpeg|png|tiff';

        $this->load->library('upload', $config);
        if(!$this->upload->do_upload('gambar')){
          echo "Gambar tenda gagal diupload";
        }
        else{
          $gambar = $this->upload->data('file_name');
        }
      }
      $data = array(
        'kode_tipe'    => $kode_tipe,
        'merek'        => $merek,
        'kapasitas'    => $kapasitas,
        'warna'        => $warna,
        'status'       => $status,
        'harga'        => $harga,
        'denda'        => $denda,
        'matras'       => $matras,
        'selimut'      => $selimut,
        'lampu'        => $lampu,
        'hammock'      => $hammock,
        'gambar'       => $gambar,
      );

      $this->rental_model->insert_data($data, 'tenda');
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
      Data berhasil ditambahkan
      <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times;</span>
      </button></div>');
      redirect('admin/data_tenda');
    }
  }

  public function update_tenda($id){
    $where = array('id_tenda' => $id);
    $data['tenda'] = $this->db->query("SELECT * FROM tenda mb, tipe tp WHERE mb.kode_tipe = tp.kode_tipe AND mb.id_tenda = '$id'")->result();
    $data['tipe'] = $this->rental_model->get_data('tipe')->result();
    $this->load->view('templates_admin/header');
    $this->load->view('templates_admin/sidebar');
    $this->load->view('admin/form_update_tenda', $data);
    $this->load->view('templates_admin/footer');
  }

  public function update_tenda_aksi(){
    $this->_rules();

    if($this->form_validation->run() == FALSE){
      $id = $this->input->post('id_tenda');
      $this->update_tenda($id);
    }
    else{
      $id           = $this->input->post('id_tenda');
      $kode_tipe    = $this->input->post('kode_tipe');
      $merek        = $this->input->post('merek');
      $kapasitas    = $this->input->post('kapasitas');
      $warna        = $this->input->post('warna');
      $status       = $this->input->post('status');
      $harga        = $this->input->post('harga');
      $denda        = $this->input->post('denda');
      $matras       = $this->input->post('matras');
      $selimut      = $this->input->post('selimut');
      $lampu        = $this->input->post('lampu');
      $hammock      = $this->input->post('hammock');
      $gambar       = $_FILES['gambar']['name'];

      if($gambar){
        $config['upload_path'] = './assets/upload';
        $config['allowed_types'] = 'jpg|jpeg|png|tiff';

        $this->load->library('upload', $config);
        
        if($this->upload->do_upload('gambar')){
          $gambar = $this->upload->data('file_name');
          $this->db->set('gambar', $gambar);
        }
        else{
          echo $this->upload->display_error();
        }
      }
      $data = array(
        'kode_tipe'    => $kode_tipe,
        'merek'        => $merek,
        'kapasitas'    => $kapasitas,
        'warna'        => $warna,
        'status'       => $status,
        'harga'        => $harga,
        'denda'        => $denda,
        'matras'       => $matras,
        'selimut'      => $selimut,
        'lampu'        => $lampu,
        'hammock'      => $hammock,
      );
      $where = array('id_tenda' => $id);

      $this->rental_model->update_data('tenda', $data, $where);
      $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
      Data berhasil diupdate
      <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times;</span>
      </button></div>');
      redirect('admin/data_tenda');
    }
  }

  public function detail_tenda($id){
    $data['detail'] = $this->rental_model->ambil_id_tenda($id);
    $this->load->view('templates_admin/header');
    $this->load->view('templates_admin/sidebar');
    $this->load->view('admin/detail_tenda', $data);
    $this->load->view('templates_admin/footer');
  }

  public function delete_tenda($id){
    $where = array('id_tenda' => $id);

    $this->rental_model->delete_data($where, 'tenda');
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Data berhasil dihapus
    <button type="button" class="close" data-dismiss="alert" aria-label="close">
      <span aria-hidden="true">&times;</span>
    </button></div>');
    redirect('admin/data_tenda');

  }

  public function _rules(){
    $this->form_validation->set_rules('kode_tipe', 'Kode Tipe', 'required');
    $this->form_validation->set_rules('merek', 'Merek', 'required');
    $this->form_validation->set_rules('kapasitas', 'Nomor Plat', 'required');
    $this->form_validation->set_rules('warna', 'Warna', 'required');
    $this->form_validation->set_rules('status', 'Status', 'required');
    $this->form_validation->set_rules('harga', 'Harga', 'required');
    $this->form_validation->set_rules('denda', 'Denda', 'required');
    $this->form_validation->set_rules('matras', 'matras', 'required');
    $this->form_validation->set_rules('selimut', 'selimut', 'required');
    $this->form_validation->set_rules('lampu', 'MP3 Player', 'required');
    $this->form_validation->set_rules('hammock', 'Central Lock', 'required');
  }


}