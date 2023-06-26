<?php
    class Home extends CI_Controller{
        function register(){
            $this->load->view("register");
        }
        function prosesDaftar()
        {
            $this->load->model("UserModel","",TRUE);
            $user = array(
            "username" => $this->input->post("username"),
            "password" => $this->input->post("password"),
            "Nama" => $this->input->post("nama")
            );
            $config['upload_path'] = './assets/image';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            // $config['max_size'] = 100;
            // $config['max_width'] = 1024;
            // $config['max_height'] = 768;
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo $this->upload->display_errors();
            } else {
                $upload_data = $this->upload->data();
                $user['url'] = base_url("assets/image/").$upload_data['file_name'];
            }
            if($this->UserModel->insertUser($user)){
                redirect(site_url("home"));
            }else{
                redirect(site_url("home/register"));
            }
            }
            function index(){
                if($this->session->userdata('login')){
                        $this->load->view("home");
                    }else{
                        $this->load->view("login");
                    }
            }
            function login(){
                $this->load->view("login");
            }
            function proseslogin(){
                $this->load->model("UserModel");
                if($this->UserModel->login()->num_rows()>0){
                    $session_data = array(
                    "login" => true,
                    "username" => $this->input->post("username")
                );
                $this->session->set_userdata($session_data);
                redirect(site_url("home"));
                }else{
                $this->session->set_flashdata("error","Username atau Password Salah");
                redirect(site_url("home"));
                }
            }
            function logout(){
                $this->session->sess_destroy();
                redirect(base_url());
            }


            //Pakaian
            public function Pakaian(){
                $this->load->view('navbar/header');
                $this->load->view('navbar/footer');
                $this->load->library('table');
                $this->load->model("PakaianModel", "", TRUE);
                $data['pakaian'] = $this->PakaianModel->getPakaian();
                $this->load->view("pakaian",$data);
            }

            public function tambahPakaian(){
                $this->load->model('PakaianModel');
                $data['pakaian'] = $this->PakaianModel->getPakaian();
                $this->load->view("pakaian_tambah",$data);
            }
            public function prosesTambahPakaian(){
                if($this->PakaianModel->insertPakaian()){
                    $this->load->view('navbar/header');
                    $this->load->view('navbar/footer');
                    $this->load->view('pakaian');
                }else{
                    redirect(site_url("pakaian/tambahpakaian"));
                }
            }
            public function updatePakaian($id){
                $this->load->model('PakaianModel');
                $data['pakaian'] = $this->PakaianModel->getPakaian();
                $data['pakaian'] = $this->PakaianModel->getPakaianById($id)->row();
                $this->load->view("pakaian_update",$data);
            }
            public function prosesUpdatePakaian($id){
                if($this->PakaianModel->updatePakaian($id)){
                    redirect(site_url("home/pakaian"));
                }else{
                    redirect(site_url("pakaian/update/$id"));
                }
            }
            public function hapusPakaian($id){
                $this->PakaianModel->deletePakaian($id);
                redirect(site_url("home/pakaian"));
            }

            //Tas
            public function Tas(){
                $this->load->view('navbar/header');
                $this->load->view('navbar/footer');
                $this->load->library('table');
                $this->load->model("TasModel", "", TRUE);
                $data['tas'] = $this->TasModel->getTas();
                $this->load->view("tas",$data);
            }

            public function tambahTas(){
                $this->load->model('TasModel');
                $data['tas'] = $this->TasModel->getTas();
                $this->load->view("tas_tambah",$data);
            }
            public function prosesTambahTas(){
                if($this->TasModel->insertTas()){
                    $this->load->view('navbar/header');
                    $this->load->view('navbar/footer');
                    $this->load->view('tas');
                }else{
                    redirect(site_url("tas/tambahtas"));
                }
            }
            public function updateTas($id){
                $this->load->model('TasModel');
                $data['tas'] = $this->TasModel->getTas();
                $data['tas'] = $this->TasModel->getTasById($id)->row();
                $this->load->view("tas_update",$data);
            }
            public function prosesUpdateTas($id){
                if($this->TasModel->updateTas($id)){
                    redirect(site_url("home/tas"));
                }else{
                    redirect(site_url("tas/update/$id"));
                }
            }
            public function hapusTas($id){
                $this->TasModel->deleteTas($id);
                redirect(site_url("home/tas"));
            }

            //Sepatu
            public function Sepatu(){
                $this->load->view('navbar/header');
                $this->load->view('navbar/footer');
                $this->load->library('table');
                $this->load->model("SepatuModel", "", TRUE);
                $data['sepatu'] = $this->SepatuModel->getSepatu();
                $this->load->view("sepatu",$data);
            }

            public function tambahSepatu(){
                $this->load->model('SepatuModel');
                $data['sepatu'] = $this->SepatuModel->getSepatu();
                $this->load->view("sepatu_tambah",$data);
            }
            public function prosesTambahSepatu(){
                if($this->SepatuModel->insertSepatu()){
                    $this->load->view('navbar/header');
                    $this->load->view('navbar/footer');
                    $this->load->view('sepatu');
                }else{
                    redirect(site_url("sepatu/tambahsepatu"));
                }
            }
            public function updateSepatu($id){
                $this->load->model('SepatuModel');
                $data['sepatu'] = $this->SepatuModel->getSepatu();
                $data['sepatu'] = $this->SepatuModel->getSepatuById($id)->row();
                $this->load->view("sepatu_update",$data);
            }
            public function prosesUpdateSepatu($id){
                if($this->SepatuModel->updateSepatu($id)){
                    redirect(site_url("home/sepatu"));
                }else{
                    redirect(site_url("sepatu/update/$id"));
                }
            }
            public function hapusSepatu($id){
                $this->SepatuModel->deleteSepatu($id);
                redirect(site_url("home/sepatu"));
            }
    }
?>