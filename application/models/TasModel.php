<?php
    class TasModel extends CI_Model{
        function getTas(){
            return $this->db->get("tas");
        }

        function insertTas(){
            $tas = array(
            "id" => $this->input->post("id"), 
            "Toko" => $this->input->post("Toko"),
            "Jenis" => $this->input->post("Jenis"),
            "Nama" => $this->input->post("Nama"),
            "Jumlah" => $this->input->post("Jumlah")
            );
            return $this->db->insert('tas',$tas);
        }
        function getTasById($id){
            $this->db->where("ID",$id);
            return $this->db->get('Tas');
        }
        function updateTas($id){
            $tas = array(
                "Toko" => $this->input->post("Toko"),
                "Jenis" => $this->input->post("Jenis"),
                "Nama" => $this->input->post("Nama"),
                "Jumlah" => $this->input->post("Jumlah")
            );
            $this->db->where("ID",$id);
            return $this->db->update("tas",$tas);
        }
        function deleteTas($id){
            $this->db->where('id',$id);
            return $this->db->delete("tas");
        }
    }