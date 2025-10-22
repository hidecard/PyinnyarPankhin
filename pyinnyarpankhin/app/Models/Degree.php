<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Degree extends Model
{
    use HasFactory;

    protected $table = 'degree';

    protected $fillable = [
        'degree_name',
        'duration_id',
    ];

    public function duration()
    {
        return $this->belongsTo(Duration::class);
    }

    public function majors()
    {
        return $this->belongsToMany(Major::class, 'degree_major');
    }
}
