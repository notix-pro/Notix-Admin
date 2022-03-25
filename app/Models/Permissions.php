<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permissions extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'permissions';

    protected $dates = ['created_at','updated_at','deleted_at'];

    protected $fillable = [
        'name',
        'slug',
        'description',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function toggle($column)
    {
        $this->$column = !$this->$column;
        $this->save();
    }
}
