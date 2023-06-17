<?php

namespace App\Actions\Fortify;


use App\Models\User;
use App\Models\Client;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input):User

    {

        Validator::make($input, [
            'pseudo' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

         $user  = User::firstOrCreate([
            'pseudo' => $input['pseudo'],
            'nom' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),

        ]);
            if($user){
                Client::firstOrCreate([
                    'nom_client' => $input['name'],
                    'prenom_client' => $input['lastname'],
                    'user_id'=> $user->id,

                ]);
                session::put('utilisateur', $user);


          return $user;
            }


    }
}
