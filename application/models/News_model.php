<?php
//News_model.php

class News_model extends CI_Model {

<<<<<<< HEAD
    public function __construct()
    {
            $this->load->database();
    }//end constructor
    
    
    public function get_news($slug = FALSE)
    {
            if ($slug === FALSE)
            {
                    $query = $this->db->get('news');
                    return $query->result_array();
            }

            $query = $this->db->get_where('news', array('slug' => $slug));
            return $query->row_array();
    }//end get_news()
}//end News_model

=======
        public function __construct()
        {
                $this->load->database();
        }//end constructor
		
		
		
		public function get_news($slug = FALSE)
{
        if ($slug === FALSE)
        {
                $query = $this->db->get('news');
                return $query->result_array();
        }

        $query = $this->db->get_where('news', array('slug' => $slug));
        return $query->row_array();
}//end get_news()
		
		
		
		
		
		
		
		
		
}//end news_model
>>>>>>> work in class on Thursday 7/9/15
