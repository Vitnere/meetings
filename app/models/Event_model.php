<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Event_model extends CI_Model
{
    public function insert_event($data)/*add new event*/
    {
        try {
            $this->db->insert('events', $data);
            return true;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function get_events()/*method for fetching all events -  admin*/
    {
        $this->db->select('*');
        $result=$this->db->get('events');
        return $result->result();
    }

    public function user_get_events($user_id)/*get only events of some user*/
    {
        $row=$this->db->where('user_id', $user_id)->limit(25)->get('events');
        return $row->result();
    }

    public function rename_event($id)/*rename event*/
    {
        $row=$this->db->where('id', $id)->limit(1)->get('events');
        return $row;
    }

    public function update_event($id, $data) /*update event*/
    {
        try {
            $this->db->where('id', $id)->limit(1)->update('events', $data);
            return true;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function delete_event($id) /*delete event*/
    {
        {
            try {
                $this->db->where('id', $id)->delete('events');
                return true;
            } //catch exception
            catch (Exception $e) {
                echo $e->getMessage();
            }
        }
    }

    public function count_events()
    {
        $table_row_count=$this->db->count_all('events');
        return $table_row_count;
    }


}