<?php

class Data_tenda extends CI_Controller{

  public function index(){
    $data['tenda'] = $this->rental_model->get_data('tenda')->result();
    $this->load->view('templates_customer/header');
    $this->load->view('customer/data_tenda', $data);
    $this->load->view('templates_customer/footer');
  }

  public function detail_tenda($id){
    $data['detail'] = $this->rental_model->ambil_id_tenda($id);
    $this->load->view('templates_customer/header');
    $this->load->view('customer/detail_tenda', $data);
    $this->load->view('templates_customer/footer');
  }


}