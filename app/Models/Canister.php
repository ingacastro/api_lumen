<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Canister extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    
    protected $table = 'cat_canisters';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'pharmacy_id', 'location_id', 'machine_id', 'module_id', 'cat_customer_id', 'cat_plan_id', 'last_refill_user_id', 'last_refill_user_name', 'last_refill_authorizer_id',
        'last_refill_authorizer_name', 'canister_model_id', 'canister_code', 'canister_barcode', 'canister_rfid', 'canister_number', 'canister_name', 'canister_description',
        'ndc_9_digits', 'ndc_10_digits', 'ndc_11_digits', 'ndc_12_digits', 'ndc_9_digits_dashes', 'ndc_10_digits_dashes', 'ndc_11_digits_dashes', 'ndc_12_digits_dashes',
        'refill_qty', 'remaining_qty', 'status', 'created_at', 'updated_at'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}