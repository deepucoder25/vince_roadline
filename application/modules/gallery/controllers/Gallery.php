<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Gallery extends MX_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function photo_gallery()
    {
        $data['title'] = "Photo Gallery | Household & Car Relocation Photos | " . $this->comp['company3'];
        $data['description'] = "Explore real photos of our packing material, container transport trucks, household goods loading, and warehouse storage operations at " . $this->comp['company3'] . ".";
        $data['keywords'] = "packers movers gallery, home shifting images, vehicle packing photos, " . $this->comp['company3'];
        
        $this->db->where('status', 1);
        $this->db->order_by('auto_id', 'DESC');
        $data['photos'] = $this->db->get('gallery')->result();
        
        $data['module'] = "gallery";
        $data['view_file'] = "photo-gallery";
        echo Modules::run('template/layout2', $data);
    }

    function video_gallery()
    {
        $data['title'] = "Video Gallery | Moving & Packing Live Work | " . $this->comp['company3'];
        $data['description'] = "Watch live videos of our multi-layer bubble packing, car carrier loading, and safe household relocation procedures at " . $this->comp['company3'] . ".";
        $data['keywords'] = "packers movers videos, shifting work video, car transport video, " . $this->comp['company3'];
        
        $this->db->where('status', 1);
        $this->db->order_by('auto_id', 'DESC');
        $data['videos'] = $this->db->get('video_gallery')->result();
        
        $data['module'] = "gallery";
        $data['view_file'] = "video-gallery";
        echo Modules::run('template/layout2', $data);
    }
}