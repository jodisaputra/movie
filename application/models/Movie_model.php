<?php


class Movie_model extends CI_Model
{
  public function getMovie()
  {
    return $this->db->get('movie')->result();
  }

  public function listmovie()
  {
    $this->db->order_by('id_movie', 'DESC');
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

  public function update($id, $data)
  {
    $this->db->where('id_movie', $id);
    return $this->db->update('movie', $data);
	}
	
	public function getKeyword($keyword)
	{
		$this->db->select('*');
		$this->db->from('movie');
		$this->db->like('genre', $keyword);
		return $this->db->get()->result();
	}

}
