<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function languages()
    {
        return $this->belongsToMany(Language::class);
    }

    protected $fillable = [
        "name",
        "status",
        "database",
        "path",
        "url_localhost",
        "repository",
        "start_date",
        "end_date",
    ];

    protected $casts = [
        "start_date" => "date",
        "end_date" => "date",
    ];
}
