<?php
    class SepatuModel extends CI_Model{
        function getSepatu(){
            return $this->db->get("sepatu");
        }

        function insertSepatu(){
            $sepatu = array(
            "id" => $this->input->post("id"), 
            "Toko" => $this->input->post("Toko"),
            "Jenis" => $this->input->post("Jenis"),
            "Nama" => $this->input->post("Nama"),
            "Jumlah" => $this->input->post("Jumlah")
            );
            return $this->db->insert('sepatu',$sepatu);
        }
        function getSepatuById($id){
            $this->db->where("ID",$id);
            return $this->db->get('Sepatu');
        }
        function updateSepatu($id){
            $sepatu = array(
                "Toko" => $this->input->post("Toko"),
                "Jenis" => $this->input->post("Jenis"),
                "Nama" => $this->input->post("Nama"),
                "Jumlah" => $this->input->post("Jumlah")
            );
            $this->db->where("ID",$id);
            return $this->db->update("Sepatu",$sepatu);
        }
        function deleteSepatu($id){
            $this->db->where('id',$id);
            return $this->db->delete("sepatu");
        }
    }