<?php

namespace App\Http\Controllers;

use App\UserProfile;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlayerController extends Controller
{
    public function profile(): View
    {
        $userId = Auth::user()->id;
        $userProfile = UserProfile::where('user_id', $userId)->first();

        return view('player.profile.view', compact('userProfile'));
    }

    public function profileForm()
    {
        $userId = Auth::user()->id;
        $userProfile = UserProfile::where('user_id', $userId)->first();

        return view('player.profile.form', compact('userProfile'));
    }

    public function profileSave(Request $request)
    {
        $this->validate($request, [
            'user_id',
            'city_id',
            'identification_number',
            'language',
            'social_name',
            'nickname',
            'description',
            'gender',
            'birthday',
            'photo',
            'banner',
            'facebook_profile',
            'instagram_profile',
            'linkedin_profile',
            'twitter_profile',
            'youtube_channel',
        ]);

        $userId = Auth::user()->id;
        $request = $request->only([
            'user_id',
            'city_id',
            'identification_number',
            'language',
            'social_name',
            'nickname',
            'description',
            'gender',
            'birthday',
            'photo',
            'banner',
            'facebook_profile',
            'instagram_profile',
            'linkedin_profile',
            'twitter_profile',
            'youtube_channel',
        ]);

        UserProfile::where('user_id', $userId)->update($request);

        return redirect('player/profile')->with(['message' => __('form.save.profile_updated')]);
    }
}
