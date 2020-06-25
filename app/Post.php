<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Table name
    protected $title = 'posts';
    // Primary key
    public $primarykey = 'id';
    // Timestamps
    public $timestamps = true;
}
