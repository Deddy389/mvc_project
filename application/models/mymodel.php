<?php

class mymodel extends Model {
   
  
     function getdata($table){ 
       return $this->db->get($table)->result();
    }

      function getnum(){ 
       return $this->db->get('blogs')->num_rows();
    }
    function where($tab, $id){ 
       return $this->db->get_where($tab, ['id'=>$id])->row();
    }

    function insert($arr){
    	$sql = $this->db->insert("blogs", $arr);
    	return $sql;
    }

    function del($id){
      return $this->db->delete('blogs', ['id'=>$id]);
    }
   
    function update($data, $id){
    return $this->db->update("blogs", $data, $id);
    }
 
 
}
