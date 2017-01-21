<?php
/**
 * Created by PhpStorm.
 * User: johins
 * Date: 20/01/17
 * Time: 06:32 PM
 */

namespace App\Transformers;


use App\User;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract
{
    public function transform(User $user)
    {
        return [
          '_id' => $user->id,
        ];
    }
}