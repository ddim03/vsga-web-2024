<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevelModel extends Model
{
    use HasFactory;

    protected $table = 'm_level';
    protected $key = 'id_level';

    public function user()
    {
        return $this->hasMany(UserModel::class, 'id_level', 'id_level');
    }
}
