<?php

namespace App\Http\Mobile\Services;

use App\Validators\Account as AccountValidator;

class Login extends Service
{

    public function loginByPassword($account, $password)
    {
        $validator = new AccountValidator();

        $user = $validator->checkUserLogin($account, $password);
    }

    public function loginByVerify($account, $code)
    {
        $validator = new AccountValidator();

        $user = $validator->checkVerifyLogin($account, $code);
    }

    protected function grantAuthToken()
    {

    }

}
