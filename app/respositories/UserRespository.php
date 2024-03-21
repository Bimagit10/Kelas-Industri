<?php
namespace App\Respositories;

use App\Models\User;

class UserRespository
{
    public function getAlluser()
{
 return User::orderBy('id','DESC')->get();
}


















































































}