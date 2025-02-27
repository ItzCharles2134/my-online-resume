<?php

namespace App\Controllers;

use App\Models\SoftwareSkillsModel;
use CodeIgniter\Controller;

class SoftwareSkills extends Controller
{
    public function index()
    {
        $model = new SoftwareSkillsModel();
        $data['software_skills'] = $model->findAll();

        return view('softwareskills', $data);
    }
}

