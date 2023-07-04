<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $username
 * @property string $fullName
 * @property string $password
 * @property string $email
 * @property string $phone
 * @property string $address
 * @property string $city
 * @property string $CIN
 * @property string $gender
 * @property string $image
 * @property string $status
 * @property string $birthday
 * @property integer $rate
 * @property string $created_at
 * @property string $updated_at
 * @property HandymanSkill[] $handymanSkills
 * @property Offer[] $offers
 */
class Handyman extends Model
{
    use HasFactory;

    protected $table = 'handymen';
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function handymanSkills()
    {
        return $this->hasMany('App\Models\HandymanSkill', 'handymen_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function offers()
    {
        return $this->hasMany('App\Models\Offer', 'handymen_id');
    }
}
