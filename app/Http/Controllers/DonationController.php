<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Donation;
use Illuminate\Support\Facades\Log;
use Midtrans\Config;
use Midtrans\Snap;

class DonationController extends Controller
{
    public function __construct()
    {
        Config::$serverKey    = config('services.midtrans.serverKey');
        Config::$isProduction = config('services.midtrans.isProduction');
        Config::$isSanitized  = config('services.midtrans.isSanitized');
        Config::$is3ds        = config('services.midtrans.is3ds');
    }

    public function pay(Request $request)
    {
        try {
            $snapToken = DB::transaction(function () use ($request) {
                $donation = Donation::create([
                    'code'      => 'DONATION-' . mt_rand(100000, 999999),
                    'name'      => $request->name,
                    // 'email'     => $request->email,
                    'email'     => 'jarwonozt@gmail.com',
                    'amount'    => $request->amount,
                    'objective' => $request->objective,
                    // 'note'      => $request->note,
                ]);

                $payload = [
                    'transaction_details' => [
                        'order_id'     => $donation->code,
                        'gross_amount' => $donation->amount,
                    ],
                    'customer_details' => [
                        'first_name' => $donation->name,
                        // 'email'      => $donation->email,
                        'email'      => 'jarwonozt@gmail.com',
                    ],
                    'item_details' => [
                        [
                            'id'            => $donation->code,
                            'price'         => $donation->amount,
                            'quantity'      => 1,
                            'name'          => 'Donation to ' . config('app.name'),
                            'brand'         => 'Donation',
                            'category'      => 'Donation',
                            'merchant_name' => config('app.name'),
                        ],
                    ],
                ];

                $snapToken = Snap::getSnapToken($payload);
                $donation->snap_token = $snapToken;
                $donation->save();

                return $snapToken;
            });

            return response()->json([
                'status'     => 'success',
                'snap_token' => $snapToken,
            ]);
        } catch (\Exception $e) {
            Log::error('Payment error: ' . $e->getMessage());

            return response()->json([
                'status'  => 'error',
                'message' => 'Payment processing failed.',
            ], 500);
        }

    }
}
