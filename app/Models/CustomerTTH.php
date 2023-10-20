<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CustomerTTH extends Model
{
    use HasFactory;

    // public function __construct(array $attributes = [])
    // {
    //     parent::__construct($attributes);

    //     $this->table = DB::raw('`dbo.customertth`');
    // }

    protected $table = 'customertth';
    protected $appends = ['CustomerTTHDetail'];
    public $timestamps = false;

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'CustID', 'CustID');
    }

    public function customerTTHDetail()
    {
        return $this->hasOne(CustomerTTHDetail::class, 'TTOTTPNo', 'TTOTTPNo');
    }

    public function getCustomerTTHDetailAttribute()
    {
        return $this->customerTTHDetail()->first();
    }
}
