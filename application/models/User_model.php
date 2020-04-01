<?php

class User_model extends CI_Model
{
  public function login($post)
  {
    $this->db->where('username', $post['username']);
    $this->db->where('password', sha1($post['password']));
    return $this->db->get('login');

  }
}
