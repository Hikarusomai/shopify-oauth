<?php

namespace CodeInternetApplications\ShopifyOauth\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class ShopAccessToken extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'con_shop_access_tokens';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        // Token details
        'id',
        'access_token',

        // Associated user details
        'associated_user_scope',
        'associated_user_id',
        'associated_user_account_owner',
        'token_expire_date',

        // Shop Id
        'shop_id',
    ];

    /**
     * Get the Shop that this Token entry belongs to.
     */
    public function shop()
    {
        return $this->belongsTo('CodeInternetApplications\ShopifyOauth\Models\Shop');
    }
}
