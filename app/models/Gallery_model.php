<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Gallery_model extends CI_Model {

    public function all($user_id)/*get user images*/
    {
         $row= $this->db->where('user_id',$user_id)->limit(25)->get('images');
        return $row;
    }

    public function admin_all()/*get all images*/
    {
        $result = $this->db->get('images');
        return $result;
    }

    public function org_filter()//filter categories
    {
        $this->db->select('i.file,i.categories_id,c.id,c.title',false);
        $this->db->from('images as i');
        $this->db->join('categories as c','i.categories_id = c.id','inner');//join tables based on the foreign key
        $this->db->where('c.title','organizers');//set filter
        $query = $this->db->get();//get data*/
        return $query;
    }


    public function find($id)
    {
        $row = $this->db->where('id',$id)->limit(1)->get('images');
        return $row;
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