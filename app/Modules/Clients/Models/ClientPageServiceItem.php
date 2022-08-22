<?php

namespace App\Modules\Clients\Models;

use Illuminate\Database\Eloquent\Model;

class ClientPageServiceItem extends Model
{
    protected $fillable = [
        'name',
        'detail',
        'status',
        'seo_title',
        'seo_meta_description',
    ];

}
