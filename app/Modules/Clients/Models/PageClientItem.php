<?php

namespace App\Modules\Clients\Models;

use Illuminate\Database\Eloquent\Model;

class PageClientItem extends Model
{
    protected $table = "page_clients_items";
    protected $fillable = [
        'name',
        'detail',
        'status',
        'seo_title',
        'seo_meta_description',
    ];
}
