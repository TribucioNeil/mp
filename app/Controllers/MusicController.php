<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MusicModel;
class MusicController extends BaseController
{
    public function index()
    {
       $main = new MusicModel();
       $data['music']= $main->findAll();
       $data['mus'] =[];
       return view('music', $data);
    }
}
