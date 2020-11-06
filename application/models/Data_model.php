<?php
class Data_model extends CI_Model
{
    public function post($data1, $data2)
    {
        $this->db->trans_start();
        $this->db->trans_strict(TRUE); 
        $query  = $this->db->insert('Penjualan', $data1);
        $query2 =  $this->db->insert_batch('mytable', $data2);
        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE) {
            # Something went wrong.
            $this->db->trans_rollback();
            return FALSE;
        } 
        else {
            # Everything is Perfect. 
            # Committing data to the database.
            $this->db->trans_commit();
            return TRUE;
        }
    }

    public function get()
    {
        // $this->db->select('*');
		// $this->db->from('masteritem');
		// $this->db->join('saleitemdetail', 'saleitemdetail.PerusahaanNo = masteritem.PerusahaanNo');
        // $this->db->where('masteritem.PerusahaanNo', 639)->where('masteritem.DeviceID',1356)->where('masteritem.SaleDate', '2017-05-11');
        // $query = $this->db->get();
		// return $query->result_array();
    }
}