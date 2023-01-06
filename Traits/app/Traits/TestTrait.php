<?php
namespace App\Traits;

use App\Models\User;
use App\Models\Post;

trait TestTrait
{
    public function getData($model){

        return $model::all();
    }
}
