<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CustomerTTHDetail extends Model
{
    use HasFactory;

    // public function __construct(array $attributes = [])
    // {
    //     parent::__construct($attributes);

    //     $this->table = DB::raw('`dbo.customertthdetail`');
    // }

    protected $table = 'customertthdetail';
    public $timestamps = false;

    public function customerTTH()
    {
        return $this->belongsTo(CustomerTTH::class, 'TTOTTPNo', 'TTOTTPNo');
    }
}
