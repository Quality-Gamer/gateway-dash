<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class Stats extends Model
{
    public static function getTotalTraffic($id){
        $key = "gt:ms:ky:qg"; //. $id;
        $keyMS = "gt:ms:rt:";
        $keyMS .= RedisService::redisGet($key);
        $keyMS .= ":ur";
        $ms = RedisService::redisHKeys($keyMS);
        $sum = 0;

        foreach ($ms as $name) {
            $keyCount = "gt:ms:" . $name . ":ct";
            $count = RedisService::redisGet($keyCount);
            $sum += $count;
        }

        return $sum;
    }

    public static function getTotalCacheHit($id){
        $key = "gt:ms:ky:qg"; //. $id;
        $keyMS = "gt:ms:rt:";
        $keyMS .= RedisService::redisGet($key);
        $keyMS .= ":ur";
        $ms = RedisService::redisHKeys($keyMS);
        $sum = 0;

        foreach ($ms as $name) {
            $keyCount = "gt:ms:cc:" . $name . ":ct";
            $count = RedisService::redisGet($keyCount);
            $sum += $count;
        }

        return $sum;
    }

    public static function getTotalStopped($id){
        $key = "gt:ms:ky:qg"; //. $id;
        $keyMS = "gt:ms:rt:";
        $keyMS .= RedisService::redisGet($key);
        $keyMS .= ":ur";
        $ms = RedisService::redisHKeys($keyMS);
        $keyStopped = "gt:ms:st";
        $arrayMS = RedisService::redisHKeys($keyStopped);
        $sum = 0;
        
        foreach ($ms as $name) {
            if(in_array($name,$arrayMS)){
                $sum += 1;
            }
        }

        return $sum;
    }

}
