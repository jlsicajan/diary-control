<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $table = 'work';

    protected $fillable = ['title', 'description', 'work_date', 'bussiness'];

    protected $guarded = ['id'];
}
