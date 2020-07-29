<?php 

class Crud extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    /*     * **********       INSERT DATA FUNCTION START HERE        *********      */ 

    public function insert_data($table_name, $field_value, $flag) {
        $this->db->insert($table_name, $field_value);
        if ($flag == 1) {
            $data['insert_id'] = $this->db->insert_id();
        }else{
            $data ='';
        }
       
        return $data;
    }
      public function only_insert_data($table_name, $field_value) {
        $this->db->insert($table_name, $field_value);
        
    }

    /*     * **********       SELECT DATA FUNCTION START HERE          *********        */

    public function get_allrecord($table,$id ='id', $orderby = 'DESC',$dis = 0) {
        $this->db->select('*');
        $this->db->order_by($id, $orderby);
        if($dis==0){
            return $this->db->get($table)->result();
        }
        else{
            return $this->db->get($table)->row_array();
        }
    }

    public function get_num_of_rows($table) {
        return $this->db->get($table)->num_rows();
    }

    public function get_join_allrecord($table1, $table2, $joinid, $field) {
        $this->db->select($field);
        $this->db->from($table1);
        $this->db->join($table2, $joinid);
        $query = $this->db->get();
        return $query;
    }

    public function get_where($table_name, $where) {
        $this->db->where($where);
        return $this->db->get($table_name);
    }
    public function get_where_orderby_desc($table_name, $where,$field="id",$dir="DESC") {
        $this->db->where($where);
        $this->db->order_by($field,$dir);
        return $this->db->get($table_name);
    }
    public function get_or_where($table_name,$where, $or_where) {
        $this->db->where($where);
        $this->db->or_where($or_where);
        return $this->db->get($table_name);
    }

    public function get_selected_where($table_name, $where,$data) {
        $this->db->select($data);
        $this->db->where($where);
        return $this->db->get($table_name);
    }

    public function get_selected_where_orderby_desc($table_name, $where,$data) {
        $this->db->select($data);
        $this->db->where($where);
        $this->db->order_by('id','DESC');
        return $this->db->get($table_name);
    }

    public function get_update($table_name, $where, $data) {
        $this->db->where($where);
        $this->db->update($table_name, $data);
        return true;
    }

    function row_delete($table_name, $where) {
        $this->db->where($where);
        $this->db->delete($table_name);
    }

    public function fetch_records($table_name, $where, $limit, $start) {
        $this->db->where($where);
        $this->db->limit($limit, $start);
        $query = $this->db->get($table_name);
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }


}

?>