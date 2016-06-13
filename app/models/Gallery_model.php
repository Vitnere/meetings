<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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

    public function get_cat()
    {
        $this->db->select('title');
        $result = $this->db->get('categories');

        if ($result->num_rows() > 0) {
            $data=$result->first_row();
            return $data;
        }

    }

    public function find_cat()
    {
        //query
       /* $this->db->select('id');
        $result = $this->db->get('categories');


        if ($result->num_rows() > 0) {
                $cat_id=$result->first_row();
                return $cat_id;
        }*/
        $this->db->select('categories_id');
        $result = $this->db->get('images');

        if ($result->num_rows() > 0) {
            $id=$result->first_row();
            return $id;
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