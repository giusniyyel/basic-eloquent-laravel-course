<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DateTimeInterface;

class Project extends Model
{
    use HasFactory;

    //table projects
    protected $table = 'projects';
    protected $primaryKey = 'project_id';

    protected $fillable = [
        'city_id',
        'company_id',
        'user_id',
        'name',
        'execution_date',
        'is_active'
    ];

    /**
     * Prepare a date for array / JSON serialization.
     *
     * @param  \DateTimeInterface  $date
     * @return string
     */
    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
