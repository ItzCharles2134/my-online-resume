<?php

namespace App\Models;

use CodeIgniter\Model;

class ExperienceModel extends Model
{
    protected $table = 'experience'; // Database table
    protected $primaryKey = 'id';
    protected $allowedFields = ['job_title', 'company', 'start_date', 'end_date', 'description'];
}
