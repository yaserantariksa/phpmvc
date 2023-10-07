<?php

class About extends Controller
{
    public function index($nama = "Yaser", $pekerjaan = "Freelance Web Developer")
    {
        $data['title'] = "About";

        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;

        $this->view('templates/head', $data);
        $this->view('about/index', $data);
        $this->view('templates/foot');
    }

    public function page()
    {
        $data['title'] = "Page";

        $this->view('templates/head', $data);
        $this->view('about/page');
        $this->view('templates/foot');
    }
}
