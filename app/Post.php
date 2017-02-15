<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;


    protected $fillable = ['title', 'body', 'path'];

    protected $dates = ['deleted_at'];


	public function tags()
	{
		return $this->morphToMany('App\Tag', 'taggable');
	}

	public  static function scopeGetAll($query)
    {
        return $query->latest()->withTrashed()->get();
    }

    public function getPathAttribute($value)
    {
        return '/images/'.$value;
    }
}
