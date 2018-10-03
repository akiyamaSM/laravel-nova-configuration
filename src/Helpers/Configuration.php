<?php
namespace Inani\LaravelNovaConfiguration\Helpers;

use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{

    protected $table = 'laravel_nova_configurations';

    /**
     * Get the value of the corresponding key
     *
     * @param $key
     * @return mixed
     */
    public static function get($key)
    {
        $line =  self::getElementByKey($key);

        if(is_null($line)){
            return null;
        }

        return $line->value;
    }

    /**
     * Set the new value of the key
     *
     * @param $key
     * @param $value
     * @return bool
     */
    public static function set($key, $value)
    {
        $line = self::getElementByKey($key);

        if(is_null($line)){
            $line = new self();
            $line->key = $key;
        }

        $line->value = $value;

        return true;
    }

    /**
     * Get the record by key
     *
     * @param $key
     * @return mixed
     */
    public static function getElementByKey($key)
    {
        return self::where('key', $key)->first();
    }
}