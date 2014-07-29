<?php

class Tadooassign_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }


    public function save($data)
    {
        $this->db->set($data)->insert('tadoo');
        return $this->db->insert_id();
    }

    public function update($data,$id)
    {
        $this->db->set($data)->where(array('tadoo_id' => $id))->update('tadoo');
    }

    public function getListing($start)
    {
        $per_page = 10;
        $page     = intval($start);
        if ($page <= 0) $page = 1;

        $limit      = ($page - 1) * $per_page;
        $base_url   = site_url('admin/tadoo/listing');
        $total_rows = $this->db->count_all_results('tadoo');
        $paging     = paginate($base_url, $total_rows, $start, $per_page);

        $this->db->select('tadoo.*');
        $this->db->from('tadoo');
        $this->db->limit($per_page, $limit);
        $this->db->order_by("tadoo.tadoo_id", "desc");

        $query = $this->db->get();

        return array($query, $paging, $total_rows, $limit);
    }

    public function findById($id)
    {
         return $this->db->select('*')->where(array('tadoo_id'=>$id))->get('tadoo')->result();


    }

}