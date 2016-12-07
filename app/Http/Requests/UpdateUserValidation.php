<?php namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserValidation extends FormRequest
{
    public function rules()
    {
        $userid = $this->route()->getParameter('id');
        $rules = [];
        
        // this is rule for update
        if(!empty($userid)){
            $rules['email'] = "required|email|unique:users,email,{$userid}";
            $rules['username'] = "unique:users,username,{$userid}";
            $rules['password'] = "confirmed";
        }
        // this is rule for insert
        else{
            $rules = [
                'email' => "required|email|unique:users,email",
                'username' => "unique:users,username",
                // 'first_name' => 'required',
                // 'last_name' => 'required',
                'password' => 'required|min:3|confirmed'
            ];
        }

        return $rules;
    }

    public function authorize()
    {
        return true;
    }

    public function messages()
    {
        return [];
    }
}
