<?php
defined('BASEPATH') or exit ('No direct script access allowed');

class ModelBuku extends CI_Model
{
    //manajemen buku
    public function getBuku()
    {
        return $this->db->get('buku');

    }
    public function bukuWhere($where)
    {
        return $this->db->get_where('buku', $where);

    }
    public function simpanBuku($data = null)
    {
        
    }
}