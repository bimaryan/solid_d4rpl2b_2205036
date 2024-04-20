<?php

require_once 'mahasiswa.php';
require_once 'mahasiswaview.php';

$mahasiswa = new Mahasiswa("2205036", "Bima Ryan Alfarizi");

$view = new MahasiswaView();

$view->showMahasiswa($mahasiswa);
