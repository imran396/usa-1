<?php

class Tadootag_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }


    public function save($data)
    {
        $this->db->set($data)->insert('tadoo_tag');
        return $this->db->insert_id();
    }

    public function update($data,$id)
    {
        $this->db->set($data)->where(array('tadoo_tags_id' => $id))->update('tadoo_tags');
    }

    public function getListing($start)
    {
        $per_page = 10;
        $page     = intval($start);
        if ($page <= 0) $page = 1;

        $limit      = ($page - 1) * $per_page;
        $base_url   = site_url('admin/tadootag/listing');
        $total_rows = $this->db->count_all_results('tadoo_tags');
        $paging     = paginate($base_url, $total_rows, $start, $per_page);

        $this->db->select('tadoo_tags.*');
        $this->db->from('tadoo_tags');
        $this->db->limit($per_page, $limit);
        $this->db->order_by("tadoo_tags.tadoo_id", "desc");

        $query = $this->db->get();

        return array($query, $paging, $total_rows, $limit);
    }

    public function findById($id)
    {
         return $this->db->select('*')->where(array('tadoo_tags_id'=>$id))->get('tadoo_tags')->result();


    }

}