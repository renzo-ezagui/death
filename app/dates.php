<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\dates
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\dates newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\dates newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\dates query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $date
 * @property int $user
 * @property string $message
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\dates whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\dates whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\dates whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\dates whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\dates whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\dates whereUser($value)
 */
class dates extends Model
{
    //
    protected $fillable = ['date','user','message'];
}
