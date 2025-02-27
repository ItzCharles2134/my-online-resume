<?php

namespace App\Controllers;

use App\Models\SkillsModel;
use App\Controllers\BaseController;

class Skills extends BaseController
{
    public function index()
    {
        $model = new SkillsModel();
        $data['skills'] = $model->findAll();

        return view('skills', $data);
    }
}
