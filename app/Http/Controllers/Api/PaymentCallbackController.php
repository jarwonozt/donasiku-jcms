<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Donation;
use App\Models\User;
use App\Notifications\DonationPaid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Notification;

class PaymentCallbackController extends Controller
{
    public function midtransCallback(Request $request)
    {
        $json = json_decode($request->getContent());
        $transactionStatus = $json->transaction_status;
        $orderId = $json->order_id;

        if ($transactionStatus == 'settlement') {
            Donation::where('code', $orderId)->update(['status' => 'success']);

            $donation = Donation::where('code', $orderId)->first();

            // $email_data = array(
            //     'name'      => $donation->name,
            //     'email'     => $donation->email,
            //     'status'    => $transactionStatus,
            // );

            // if ($donation->email != 'jarwonozt@gmail.com') {
            //     Mail::send('frontend.donasi.email-message', $email_data, function ($message) use ($email_data) {
            //         $message->to($email_data['email'], $email_data['name'])
            //             ->subject('Konfirmasi Pembayaran Donasi')
            //             ->from('jarwonozt@gmail.com', config('app.name'));
            //     });
            // }
        } elseif ($transactionStatus == 'cancel' || $transactionStatus == 'deny' || $transactionStatus == 'expire') {
            Donation::where('code', $orderId)->update(['status' => $transactionStatus]);
        }

        // Always return a response to Midtrans
        return response()->json(['status' => 'success']);
    }

    // public function receive()
    // {
    //     $callback = new CallbackService;

    //     if ($callback->isSignatureKeyVerified()) {
    //         $notification = $callback->getNotification();
    //         $order = $callback->getOrder();

    //         if ($callback->isSuccess()) {
    //             Order::where('id', $order->id)->update([
    //                 'payment_status' => 2,
    //             ]);

    //             $orderCheckout = OrderCheckout::where('order_id', $order->id)->pluck('product_id');
    //             CompileDesign::whereIn('id', $orderCheckout)->increment('sold', 1);
    //         }

    //         if ($callback->isExpire()) {
    //             Order::where('id', $order->id)->update([
    //                 'payment_status' => 3,
    //             ]);
    //         }

    //         if ($callback->isCancelled()) {
    //             Order::where('id', $order->id)->update([
    //                 'payment_status' => 4,
    //             ]);
    //         }

    //         return response()
    //             ->json([
    //                 'success' => true,
    //                 'message' => 'Notifikasi berhasil diproses',
    //             ]);
    //     } else {
    //         return response()
    //             ->json([
    //                 'error' => true,
    //                 'message' => 'Signature key tidak terverifikasi',
    //             ], 403);
    //     }
    // }
}
