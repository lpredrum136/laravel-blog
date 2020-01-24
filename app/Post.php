<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Table name
    protected $table = 'posts'; // This is actually already by default so this line is not necessary. But if you want a different name then that's how

    // Primary Key
    public $primaryKey = 'id'; // Again, id is default the primary key

    // Timestamps
    public $timestamps = true; // Again, by default. But if you don't want created_at or updated_at fields, set this to false

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
