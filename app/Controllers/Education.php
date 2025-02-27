<?php

namespace App\Controllers;

use App\Models\EducationModel;
use App\Controllers\BaseController;

class Education extends BaseController
{
    public function index()
    {
        $model = new EducationModel();
        $data['education'] = $model->findAll(); // Fetch all education records

        return view('education', $data); // Pass data to the view
    }
}

