<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Website extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Website SMAN 4 Padang";
        $this->load->model('Berita', 'ber');
        $data['berita'] = $this->ber->getBeritaFront();

        $this->load->view('front-page/header.php', $data);
        $this->load->view('front-page/about.php', $data);
        $this->load->view('front-page/berita.php', $data);
        $this->load->view('front-page/prestasi.php', $data);
        $this->load->view('front-page/events.php', $data);
        $this->load->view('front-page/footer.php', $data);
    }
}
