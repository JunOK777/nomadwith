<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Socialite;

class SocialController extends Controller
{
        /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function viewLogin()
    {
        return view('auth.login');
    }

    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToFacebookProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleFacebookProviderCallback()
    {
        try{
            $user = Socialite::driver('facebook')->user();

            if($user){
                dd($user);
                // OAuth Two Providers
                $token = $user->token;
                $refreshToken = $user->refreshToken; // not always provided
                $expiresIn = $user->expiresIn;

                // All Providers
                $user->getId();
                $user->getNickname();
                $user->getName();
                $user->getEmail();
                $user->getAvatar();

            }
        }catch(Exception $e){
            return redirect("/");
        }

        // $user->token;
    }
}