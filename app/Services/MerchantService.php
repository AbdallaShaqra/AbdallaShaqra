<?php


namespace App\Services;


use App\Models\Merchant;

class MerchantService
{
    public function getAll(){
        Merchant::all();
    }

}
