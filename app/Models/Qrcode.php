<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Qrcode
 * @package App\Models
 * @version September 8, 2019, 2:53 pm UTC
 *
 * @property integer user_id
 * @property string company_name
 * @property string website
 * @property string product_name
 * @property string product_url
 * @property string product_description
 * @property string callback_url
 * @property string qrcode_path
 * @property float amount
 * @property boolean status
 */
class Qrcode extends Model
{
    use SoftDeletes;

    public $table = 'qrcodes';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'user_id',
        'company_name',
        'website',
        'product_name',
        'product_url',
        'product_description',
        'callback_url',
        'qrcode_path',
        'amount',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'company_name' => 'string',
        'website' => 'string',
        'product_name' => 'string',
        'product_url' => 'string',
        'product_description' => 'string',
        'callback_url' => 'string',
        'qrcode_path' => 'string',
        'amount' => 'float',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required',
        'company_name' => 'required',
        'product_name' => 'required',
        'product_description' => 'required',
        'callback_url' => 'required',
        'amount' => 'required',
        'status' => 'required'
    ];

    
}
