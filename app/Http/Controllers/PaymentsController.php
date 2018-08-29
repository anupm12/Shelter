<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;
use App\Charge2;
use Auth;
use App\User;
 
class PaymentsController extends Controller
{
    public function pay(Request $request)
    {
        Stripe::setApiKey(config('services.stripe.secret'));
        $user = Auth::user();
        $token = request('stripeToken');
        // $amount=request('amount');
        $id=request('id');
        // $amount=floatval($amount);
 dd($user->id,$id);

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
            'source' => $token,
        ]);
        return 'Payment Success!';
    }
}