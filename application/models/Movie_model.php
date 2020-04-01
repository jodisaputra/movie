<?php


class Movie_model extends CI_Model
{
  public function getMovie()
  {
    return $this->db->get('movie')->result();
  }

  public function getMovieById($id)
  {
    $this->db->where('id_movie', $id);
    return $this->db->get('movie', $id)->row();
  }

  public function insert($data)
  {
    return $this->db->insert('movie', $data);
  }

}
