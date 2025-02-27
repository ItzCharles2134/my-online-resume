<?php


namespace App\Controllers;

use App\Models\ExperienceModel;
use App\Controllers\BaseController;

class Experience extends BaseController
{
    public function index()
    {
        $model = new ExperienceModel();
        $data['experience'] = $model->findAll();

        return view('experience', $data);
    }
}
