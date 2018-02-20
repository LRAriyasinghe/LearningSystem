<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 31/01/2018
 * Time: 10:44 PM
 */




class Pages extends CI_Controller{
    public function view($page ='home'){
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
            //load error page

            show_404();
        }
        $data['title']=ucfirst($page);
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('pages/'.$page,$data);
        $this->load->view('template/footer');

    }
}
?>