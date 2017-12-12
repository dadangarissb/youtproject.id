<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cart_model extends MY_Model
{

    protected $_table_name = 'cart';
    protected $_primary_key = 'id_cart';
    public $id    = 'id_cart';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    function get_my_cart($id_member)
    {
        $this->db->join('produk','cart.id_produk=produk.id_produk');
        $this->db->join('subkategori','produk.id_subkategori=subkategori.id_subkategori','left');
        $this->db->join('packaging','cart.id_packaging=packaging.id_packaging','left' );
        $this->db->where('cart.id_member', $id_member);
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->_table_name)->result();
    }

    function get_by_id($id_cart)
    {
        $this->db->join('produk','cart.id_produk=produk.id_produk');
        $this->db->join('subkategori','produk.id_subkategori=subkategori.id_subkategori','left');
        $this->db->join('packaging','cart.id_packaging=packaging.id_packaging','left' );
        $this->db->where('cart.id_cart', $id_cart);
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->_table_name)->row();
    }

    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->_table_name);
    }

    function count_my_cart($id_member)
    {
        $this->db->where('id_member', $id_member);
        return $this->db->get($this->_table_name)->num_rows();
    }
}

/* End of file Detail_order_model.php */
/* Location: ./application/models/Detail_order_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-03-18 12:43:15 */
/* http://harviacode.com */