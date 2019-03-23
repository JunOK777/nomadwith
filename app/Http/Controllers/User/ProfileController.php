<?php
namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function index()
    {
        return view('pages.user.profile.index', [
        ]);
    }

    public function show(Profile $profile)
    {
        return view('pages.user.profile.show', [
            'profile' => $profile
        ]);
    }
}
