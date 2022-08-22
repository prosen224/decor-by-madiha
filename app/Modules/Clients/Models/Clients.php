<?php

namespace App\Modules\Clients\Models;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{

    protected $table = 'clients';

    public $s = [
        "1" => "Active",
        "0" => "InActive",
    ];
    public $sorder = [
        "1" => "Yes",
        "0" => "No",
    ];

    protected $fillable = [
        "name", "address", "logo", "url", "status", "sort_order",
    ];

}
