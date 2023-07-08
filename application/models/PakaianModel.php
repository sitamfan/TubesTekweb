<?php
    class PakaianModel extends CI_Model{
        function getPakaian(){
            return $this->db->get("pakaian");
        }

        function insertPakaian(){
            $pakaian = array(
            "id" => $this->input->post("id"), 
            "Toko" => $this->input->post("Toko"),
            "Nama" => $this->input->post("Nama"),
            "Warna" => $this->input->post("Warna"),
            "Jumlah" => $this->input->post("Jumlah")
            );
            return $this->db->insert('pakaian',$pakaian);
        }
        function getPakaianById($id){
            $this->db->where("ID",$id);
            return $this->db->get('Pakaian');
        }
        function updatePakaian($id){
            $pakaian = array(
                "Toko" => $this->input->post("Toko"),
                "Nama" => $this->input->post("Nama"),
                "Warna" => $this->input->post("Warna"),
                "Jumlah" => $this->input->post("Jumlah")
            );
            $this->db->where("ID",$id);
            return $this->db->update("Pakaian",$pakaian);
        }
        function deletePakaian($id){
            $this->db->where('id',$id);
            return $this->db->delete("pakaian");
        }
    }