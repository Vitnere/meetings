<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Event_model extends CI_Model
{
    public function insert_event($data)
    {
        try{
            $this->db->insert('events', $data);
            return true;
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }




}