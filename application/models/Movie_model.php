<?php


class Movie_model extends CI_Model
{
  public function getMovie()
  {
    return $this->db->get('movie')->result();
  }
  public function getMovieById()
  {
    return $this->db->get('movie')->row();
  }
}
