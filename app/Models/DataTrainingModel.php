<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataTrainingModel extends Model
{
    protected $table = 'data_training';
    protected $fillable = [
        'age',
        'year',
        'axillary',
        'survival_status'
    ];
    protected $primaryKey = 'id_datatraining';
}
