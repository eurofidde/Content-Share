<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiKey extends Model
{
    use HasFactory;

    // Mass asignable feilds.
    protected $fillable = ['name', 'key', 'user_id'];

    // Disables timestamps which is enabled by illuminate by default.
    public $timestamps = false;

    // The table this model is for.
    protected $table = 'api_keys';

    // Gets the associated user
    public function user() {
        return $this->belongsTo('App\User');
    }
}
