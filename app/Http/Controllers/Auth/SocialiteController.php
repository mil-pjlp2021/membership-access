<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProvideCallback($provider)
    {
        try {

            $user = Socialite::driver($provider)->stateless()->user();
        } catch (Exception $e) {
            return redirect()->back();
        }
        // dd($user);
        // find or create user and send params user get from socialite and provider
        $authUser = $this->findOrCreateUser($user, $provider);

        // login user
        Auth()->login($authUser, true);

        // setelah login redirect ke dashboard
        return redirect()->route('dashboard');
    }

    public function findOrCreateUser($suser,$provider)
    {

        // User berdasarkan email
        if ($provider == 'facebook') {
            $user = User::where('fb_id', $suser->getId())->first();
        }elseif ($provider == 'google') {
            $user = User::where('google_id', $suser->getId())->first();
        }else{
        }
        // Jika Tidak ada user
        if (!$user) {
            // Create user baru
            if ($provider == 'facebook') {
                $user = User::updateOrCreate(
                    ['email' => $suser->getEmail(),],
                    ['name'  => $suser->getName(), 'fb_id' => $suser->getId(),]
                );
            }elseif ($provider == 'google') {
                $user = User::updateOrCreate(
                    ['email' => $suser->getEmail(),],
                    ['name'  => $suser->getName(), 'google_id' => $suser->getId(),]
                );
            }
        }


        // return user
        return $user;

    }
}
