<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;
use App\Charge2;
use Auth;
use App\User;
use App\owner;

class PaymentsController extends Controller
{
    public function pay(Request $request,$id,$o_id)
    {
        Stripe::setApiKey(config('services.stripe.secret'));
        $user = Auth::user();
        $token = request('stripeToken');
        $amount=request('amount');
        $id=(int)$id;
        $o_id=(int)$o_id;
        $owner = Owner::find($id);
        $propertyname = $owner->propertyname;
        $amount=floatval($amount);


        $charge = Charge::create([
            'amount' => $amount*100,
            'currency' => 'inr',
            'description' => 'Book now',
            'source' => $token,
        ]);

        $charge = Charge2::create([
            'amount' => $amount,
            'currency' => 'inr',
            'description' => 'Book now',
            'o_id'=>$o_id,
            'propertyname'=>$propertyname,
            'user_id'=>$user->id,
            'username'=>$user->name,
            'source' => $token,
        ]);
        return 'Payment Success!';
    }
}
