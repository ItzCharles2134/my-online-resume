<?php

namespace App\Models;

use CodeIgniter\Model;

class EducationModel extends Model
{
    protected $table = 'education'; // Your database table
    protected $primaryKey = 'id';
    protected $allowedFields = ['degree', 'school', 'year_start', 'year_end'];
}
