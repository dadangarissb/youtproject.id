<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Alamat_pengiriman_model extends MY_Model
{

    protected $_table_name = 'alamat_pengiriman';
    protected $_primary_key = 'id_alamat_pengiriman';
    public $id    = 'id_alamat_pengiriman';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }
    // get data by id
    function get_by_id_data_order($id_data_order)
    {
        $this->db->where('id_data_order', $id_data_order);
        return $this->db->get($this->_table_name)->row();
    }  
}

/* End of file Detail_order_model.php */
/* Location: ./application/models/Detail_order_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-03-18 12:43:15 */
/* http://harviacode.com */