<?php

namespace App;

use Laravel\Socialite\Contracts\User as ProviderUser;

class SocialAccountService
{
    public function createOrGetUser(ProviderUser $providerUser)
    {
//        dd($providerUser->avatar_original);
        $account = SocialAccount::whereProvider('facebook')
            ->whereProviderUserId($providerUser->getId())
            ->first();

        if ($account != null) {
            return $account->user;
        } else {
            if ($providerUser->getEmail() == null) {
                $randomemail = str_random(6);
                $user = User::whereEmail($randomemail)->first();

                if ($user == null) {

                    Player::create([
                        'nama' => $providerUser->getName(),
                        'email' => $randomemail,
                        'avatar' => $providerUser->avatar_original
                    ]);

                    $user = User::create([
                        'name' => $providerUser->getName(),
                        'email' => $randomemail,
                        'password' => bcrypt($randomemail),
                        'role_id' => '2',
                        'avatar' => $providerUser->avatar_original
                    ]);


                }
            } else{
                $user = User::whereEmail($providerUser->getEmail())->first();

                if ($user == null) {

                    Player::create([
                        'nama' => $providerUser->getName(),
                        'email' => $providerUser->getEmail(),
                        'avatar' => $providerUser->avatar_original
                    ]);
//                    dd($providerUser);
                    $user = User::create([
                        'name' => $providerUser->getName(),
                        'email' => $providerUser->getEmail(),
                        'password' => bcrypt($providerUser->getEmail()),
                        'role_id' => '2',
                        'avatar' => $providerUser->avatar_original
                    ]);
                }
            }


            $account = new SocialAccount([
                'user_id' => $user->id,
                'provider_user_id' => $providerUser->getId(),
                'provider' => 'facebook'
            ]);

            $account->user()->associate($user);
            $account->save();

            return $user;

        }

    }
}

