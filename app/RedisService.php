<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Redis;

class RedisService extends Model
{   
    public static function redisGet($key){
        $redis = Redis::connection();
        return $redis->get($key);
    }

    public static function redisSet($key,$value){
        $redis = Redis::connection();
        $redis->set($key,$value);
    }

    public static function redisHSet($key,$field,$value){
        $redis = Redis::connection();
        $redis->executeRaw(['HSET', $key, $field, $value]);
    }

    public static function redisHGet($key,$field){
        $redis = Redis::connection();
        return $redis->executeRaw(['HGET', $key, $field]);
    }

    public static function redisHKeys($key){
        $redis = Redis::connection();
        return $redis->executeRaw(['HKEYS', $key]);
    }

    public static function redisExists($key){
        $redis = Redis::connection();
        return $redis->executeRaw(['EXISTS', $key]);
    }
}
