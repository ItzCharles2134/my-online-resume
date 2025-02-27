<?php

namespace App\Controllers;

use App\Models\EducationModel;
use App\Controllers\BaseController;

class Education extends BaseController
{
    public function index()
    {
        $model = new EducationModel();
        $data['education'] = $model->findAll();

        return view('education', $data);
    }
}

