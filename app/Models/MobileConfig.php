<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MobileConfig extends Model
{
    use HasFactory;

    // public function __construct(array $attributes = [])
    // {
    //     parent::__construct($attributes);

    //     $this->table = DB::raw('`dbo.mobileconfig`');
    // }

    protected $table = 'mobileconfig';
    public $timestamps = false;
}
