<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AuthenticationProvider extends BaseModel
{
    protected $fillable = ['user_id', 'pic', 'email', 'social_id', 'provider_type'];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }


    public function creating_event()
    {
        if (parent::creating_event()) {
            $user = User::whereNotNull('email')->where(['email' => $this->email])->first();
            dd($user);
            if (empty($user)) {
                $user = new User(['email' => $this->email,
                    'name' => $this->name,
                    'pic' => $this->pic,
                    'password' => $this->social_id
                 ]);
                $user->verified = true;
                $user->set_skip_validation(true);
                $user->save();
            }
            $this->user_id = $user->id;
            unset($this->attributes['first_name']);
            unset($this->attributes['pic']);
            return true;
        }
        return false;
    }

}
