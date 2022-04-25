<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $fillable = [
        'id',
        'user_id',
        'city_id',
        'identification_number',
        'language',
        'social_name',
        'nickname',
        'description',
        'birthday',
        'photo',
        'banner',
        'facebook_profile',
        'instagram_profile',
        'linkedin_profile',
        'twitter_profile',
        'youtube_channel',
    ];
}
