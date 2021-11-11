<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Team;

class HelperController extends Controller
{
    public const DEFAULT_USER_TYPE_ID_USER = 1;

    /**
     * 
     * Controller criado pra ser a base de todos os outros
     * Todo mundo deve extender esse pra chamar métodos que
     * possam ser usados pra todo mundo =)
     */

    public function getUserCount(array $params) {

        return User::where('user_type_id', isset($params['user_type_id'])  ? $params['user_type_id'] : self::DEFAULT_USER_TYPE_ID_USER)
            ->count('id');
    }

    public function getTeamsCount(array $params) {

        return Team::whereNull('deleted_at')
            ->count('id');
    }

    public function getMyTeamsCount(array $params) {

        return Team::whereNull('deleted_at')
            ->where('user_id',Auth::user()->id)
            ->count('id');
    }

}
