<?php

namespace App\Models;

use CodeIgniter\Model;

class SoftwareSkillsModel extends Model
{
    protected $table = 'software_skills';
    protected $primaryKey = 'id';
    protected $allowedFields = ['skill_name', 'proficiency'];
}

