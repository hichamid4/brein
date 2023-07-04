<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $handymen_id
 * @property integer $demandes_id
 * @property string $price
 * @property string $startDate
 * @property string $endtDate
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 * @property Message[] $messages
 * @property Demande $demande
 * @property Handyman $handyman
 * @property Review[] $reviews
 */
class Offer extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['handymen_id', 'demandes_id', 'price', 'startDate', 'endtDate', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function messages()
    {
        return $this->hasMany('App\Models\Message', 'offers_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function demande()
    {
        return $this->belongsTo('App\Models\Demande', 'demandes_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function handyman()
    {
        return $this->belongsTo('App\Models\Handyman', 'handymen_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reviews()
    {
        return $this->hasMany('App\Models\Review', 'offers_id');
    }
}
