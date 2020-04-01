<?php


function check_already_login()
{
  $ci =& get_instance();
  $user_session = $ci->session->userdata('id_user');
  if($user_session)
  {
		// redirect('dashboard');
    redirect('movie');
		
  }
}

function check_not_login()
{
  $ci =& get_instance();
  $user_session = $ci->session->userdata('id_user');
  if(!$user_session)
  {
    redirect('auth');
  }
}
