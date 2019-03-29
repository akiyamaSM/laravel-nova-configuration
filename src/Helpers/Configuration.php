<?php
namespace Inani\LaravelNovaConfiguration\Helpers;

use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    public $timestamps = false;

    protected $table = 'laravel_nova_configurations';

    /**
     * Get the value of the corresponding key
     *
     * @param $key
     * @return mixed
     */
    public static function get($key, $default = null)
    {
        $line =  self::getElementByKey($key);

        if(is_null($line)){
            return $default;
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
        $line->save();

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

    /**
     * Update By ID
     *
     * @param $id
     * @param $key
     * @param $value
     * @return bool
     */
    public static function setById($id, $key, $value)
    {
        $configuration = self::find($id);

        if(is_null($configuration)){
            return false;
        }
        $configuration->key = $key;
        $configuration->value = $value;

        $configuration->save();

        return true;
    }
}
