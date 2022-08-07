<?php

namespace App\Helpers;

use Illuminate\Support\Str;

class CustomHelper
{
    public static function is_active($maintitle, $page)
    {
        return ($maintitle == $page) ? 'active' : '';

    }

    public static function is_status($key, $value)
    {
        if ($key == 'access') :
            if ($value == 0) :
                $arry = [
                    'status' => 'akses nonaktif',
                    'color'  => 'danger',
                    'icon'   => 'dash'
                ];

            else :
                $arry = [
                    'status' => 'akses aktif',
                    'color'  => 'success',
                    'icon'   => 'check2'
                ];

            endif;

        endif;

        return $arry;
    }

    public static function is_gender($key)
    {
        ($key == 'l') ? $gender = 'Bp. ' : $gender = 'Ib. ';
        return $gender;
    }

    public static function is_hash($key = null)
    {
        ($key) ? $random = $key . Str::random(5) : Str::random(5);
        return Str::of($random)->pipe('md5');
    }

    public static function is_array($key)
    {
        if ($key == 'level') :
            $array = [
                1 => 'Administrator',
                2 => 'Leader'
            ];

        elseif ($key == 'company') :
            $array = [
                1 => 'BUMN',
                2 => 'PT',
                3 => 'Koperasi',
                4 => 'UMKM'
            ];

        endif;

        return $array;
    }

    public static function is_rupiah($key)
    {
        return number_format($key, 0, ',', '.');
    }
}
