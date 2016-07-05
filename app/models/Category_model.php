<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Category_model extends CI_Model {



    public function add_cat($data)//insert new category
    {
        try{
            $this->db->insert('categories', $data);
            return true;
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }


    public function find_cat()/*method for fetching categories*/
    {
        $this->db->select('id,title');
        $result = $this->db->get('categories');
        return $result->result();
    }


    public function rename_cat($id)/*rename category*/
    {
        $row = $this->db->where('id',$id)->limit(1)->get('categories');
        return $row;
    }

    public function update_cat($id,$data)/*update category*/
    {
        try{
            $this->db->where('id',$id)->limit(1)->update('categories', $data);
            return true;
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }

    public function del_cat($id)/*delete category*/
    {
        try {
            $this->db->where('id',$id)->delete('categories');
            return true;
        }

            //catch exception
        catch(Exception $e) {
            echo $e->getMessage();
        }
    }


}