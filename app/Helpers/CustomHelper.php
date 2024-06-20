<?php

use App\Models\Setting;

if (! function_exists('label_case')) {
    /**
     * Prepare the Column Name for Lables.
     */
    function label_case($text)
    {
        $order = ['_', '-'];
        $replace = ' ';

        $new_text = trim(\Illuminate\Support\Str::title(str_replace('"', '', $text)));
        $new_text = trim(\Illuminate\Support\Str::title(str_replace($order, $replace, $text)));

        return preg_replace('!\s+!', ' ', $new_text);
    }
}


if (! function_exists('announcement')) {
    /**
     * Prepare the Column Name for Lables.
     */
    function announcement()
    {
        // $row = 'Sayangnya, atribut data-marquee HTML5 tidak menyukai tautan, malah menampilkan keseluruhan markUp... <div class="marquee marquee-speed-normal" data-marquee="Lorem ipsum <a href="#">dolor sit amet</a>, consectetur adipiscing elit."> </div> //Lihat bagian atas halaman di atas contoh navBar Live: https://jimmydance.com/PaymentsTest.html';
        $row = null;
        return $row;
    }
}


if (! function_exists('jcms')) {
    /**
     * Prepare the Column Name for Lables.
     */
    function jcms()
    {
        $row = Setting::latest()->first();
        return $row;
    }
}
