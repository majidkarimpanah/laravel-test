<?php

namespace App\Rules;

use App\Post;
use Illuminate\Contracts\Validation\Rule;

class Uppercase implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $postexist=Post::where('title',$value);
        if (!$postexist){
            return true;
        }
       // return strtoupper($value)==$value;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'مقدار مورد نظر باید با حروف بزگ نوشته شود';
    }
}
