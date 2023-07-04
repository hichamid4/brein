<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $services_id
 * @property integer $skills_id
 * @property string $created_at
 * @property string $updated_at
 * @property Service $service
 * @property Skill $skill
 */
class ServiceSkill extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['services_id', 'skills_id', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function service()
    {
        return $this->belongsTo('App\Models\Service', 'services_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function skill()
    {
        return $this->belongsTo('App\Models\Skill', 'skills_id');
    }
}
