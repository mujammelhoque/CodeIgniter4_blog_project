<?php
namespace App\Myvalidation;
use App\Models\UserModel;
class Myvalidation
{
    public function checkmail(string $str, string &$error = null): bool
    {
        $um = new UserModel();
        return !count($um->where('email',$str)->find());
    }
}