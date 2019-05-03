<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftar_model extends CI_Model
{
    private $_table = "pendaftar";

    public $nip;
    public $nama;
    public $jk;
    public $asal;
    public $univ;
    public $image = "default.jpg";
    public $ket;
    public $status;

    public function rules()
    {
        return [
            ['field' => 'nip',
            'label' => 'Nip',
            'rules' => 'numeric'],

            ['field' => 'nama',
            'label' => 'Nama',
            'rules' => 'required'],

            ['field' => 'jk',
            'label' => 'JK',
            'rules' => 'required'],

            ['field' => 'asal',
            'label' => 'Asal',
            'rules' => 'required'],

            ['field' => 'univ',
            'label' => 'Univ',
            'rules' => 'required'],
            
            ['field' => 'ket',
            'label' => 'Ket',
            'rules' => 'required'],

            ['field' => 'status',
            'label' => 'Status',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["nip" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nip = $post["nip"];
        $this->nama = $post["nama"];
        $this->jk = $post["jk"];
        $this->asal = $post["asal"];
        $this->univ = $post["univ"];
        $this->image = $this->_uploadImage();
        $this->ket = $post["ket"];
        $this->status = $post["status"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->nip = $post["id"];
        $this->nama = $post["nama"];
        $this->jk = $post["jk"];
        $this->asal = $post["asal"];
        $this->univ = $post["univ"];

        if (!empty($_FILES["image"]["name"])){
            $this->image = $this->_uploadImage();
        }else{
            $this->image = $post["old_image"];
        }

        $this->ket = $post["ket"];
        $this->status = $post["status"];
        $this->db->update($this->_table, $this, array('nip' => $post['id']));
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("nip" => $id));
    }


    private function _uploadImage()
    {
    $config['upload_path']          = './upload/pendaftar/';
    $config['allowed_types']        = 'gif|jpeg|png|jpg';
    $config['file_name']            = $this->nip;
    $config['overwrite']            = true;
    $config['max_size']             = 1024; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('image')) {
        return $this->upload->data("file_name");
    }
    print_r($this->upload->display_errors());
    // return "default.jpg";
    }

    private function _deleteImage($id)
    {
        $pendaftar = $this->getById($id);
        if ($pendaftar->image != "default.jpg") {
            $filename = explode(".", $pendaftar->image)[0];
            return array_map('unlink', glob(FCPATH."upload/pendaftar/$filename.*"));
        }
    }
}