<?php

namespace App\Models;

use CodeIgniter\Model;

class SkillsModel extends Model
{
    protected $table = 'skills'; // Database table
    protected $primaryKey = 'id';
    protected $allowedFields = ['skill_name', 'proficiency'];
}
