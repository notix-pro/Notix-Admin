<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'roles';

    protected $dates = ['created_at','updated_at','deleted_at'];

    protected $fillable = [
        'name',
        'display_name',
        'slug',
        'description',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function permissions()
    {
        return $this->belongsToMany(Permissions::class);
    }
}
