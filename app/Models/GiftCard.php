<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GiftCard extends Model
{
          /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'issuedgiftcard';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * @var array
     */

    protected $fillable = ['user_id', 'customer_id', 'email', 'name', 'design_id', 'amount', 'sender_name', 'beneficiary_name', 'beneficiary_email', 'little_word','status', 'voucher_no'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
