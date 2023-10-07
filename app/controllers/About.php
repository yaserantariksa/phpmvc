<?php

class About
{
    public function index($nama = "Yaser", $pekerjaan = "Freelance Web Developer")
    {
        echo "Haloo, nama saya $nama, saya adalah seorang $pekerjaan";
    }

    public function page()
    {
        echo 'about/page';
    }
}
