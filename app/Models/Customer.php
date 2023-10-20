<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Customer extends Model
{
    use HasFactory;

    // public function __construct(array $attributes = [])
    // {
    //     parent::__construct($attributes);

    //     $this->table = DB::raw('`dbo.customer`');
    // }

    protected $table = 'customer';
    protected $appends = ['CustomerTTHs'];
    public $timestamps = false;

    public function customerTTH()
    {
        return $this->hasMany(CustomerTTH::class, 'CustID', 'CustID');
    }

    public function getCustomerTTHsAttribute()
    {
        return $this->customerTTH()->get();
    }
}
