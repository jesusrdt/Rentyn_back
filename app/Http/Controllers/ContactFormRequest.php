<?php

public function authorize()
{
    return true;
}
public function rules()
{
    return [
        'firstName' => 'required',
        'lastName' => 'required',
        'email' => 'required|email',
        'message' => 'required|min:10'
    ];
}
}

 ?>