<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table = 'cars';
    protected $primaryKey = 'id';
    public $timestamps = true; // TODO: Had to change this to public to get to work. 
    protected $fillable = ['name', 'founded', 'description'];
    // protected $hidden = ['updated_at']; // Can hide properties from serialization
    // protected $visible = ['id', 'name', 'founded', 'description', 'created_at'] // white list to response.
    public function carModels() {
        return $this->hasMany(CarModel::class);
    }
}
