<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item_model extends Model
{
    use HasFactory;
    protected $table='destinations';
    protected $primarykey='id';
    protected $fillable=['regions'];
}
