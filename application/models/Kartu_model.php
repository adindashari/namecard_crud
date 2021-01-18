
<?php

class Kartu_model extends CI_Model
{
    private $_table = "kartu";

    public function viewKartu()
    {
        return $this->db->get($this->_table)->result_array();
    }

    public function tambahKartu()
    {
        $data = array(
            'nama' => $this->input->post('nama', true),
            'telp' => $this->input->post('telp', true),
            'email' => $this->input->post('email', true),
            'alamat' => $this->input->post('alamat', true)
        );

        $this->db->insert($this->_table, $data);
    }
    
    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->_table);
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ['id' => $id])->row_array();
    }

    public function ubahKartu()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'telp' => $this->input->post('telp'),
            'email' => $this->input->post('email'),
            'alamat' => $this->input->post('alamat')
        );

        $this->db->where('id', $this->input->post('id'));
        $this->db->update($this->_table, $data);

    } 


}