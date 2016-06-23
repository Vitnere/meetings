<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Gallery_model extends CI_Model {

    public function all()
    {
        $result = $this->db->get('images');
        return $result;
    }

    public function find($id)
    {
        $row = $this->db->where('id',$id)->limit(1)->get('images');
        return $row;
    }

    public function add_cat($data)//insert new category
    {
        try{
            $this->db->insert('categories', $data);
            return true;
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }


    public function find_cat()/*method for fetching data*/
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

    public function update_cat($id,$data)
    {
        try{
            $this->db->where('id',$id)->limit(1)->update('categories', $data);
            return true;
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }

    public function del_cat($id)
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


    public function create($data)
    {
        try{
            $this->db->insert('images', $data);
            return true;
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }

    public function update($id, $data)
    {
        try{
            $this->db->where('id',$id)->limit(1)->update('images', $data);
            return true;
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }

    public function delete($id)
    {
        try {
            $this->db->where('id',$id)->delete('images');
            return true;
        }

            //catch exception
        catch(Exception $e) {
            echo $e->getMessage();
        }
    }



}