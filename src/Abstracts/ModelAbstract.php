<?php
/**
 * Scalapay_PHP_SDK
 */
namespace Scalapay\Sdk\Abstracts;

use Scalapay\Sdk\Interfaces\Abstracts\ModelAbstractInterface;

/**
 * Abstract Class ModelAbstract
 *
 * @package Scalapay\Sdk\Abstracts
 */
abstract class ModelAbstract implements ModelAbstractInterface
{
    /**
     * Converts class object to array recursively.
     *
     * @param $data
     * @return array
     */
    public function toArray($data = null)
    {
        // init vars
        $array = [];
        $values = null;

        // determinate the data source to be parsed
        $target = $data ?: $this;

        // parse array data
        if (is_array($target)) {
            $values = array_filter($target, function($v) {
                return (!is_null($v) && $v !== '');
            });
        }

        // parse object data
        if (is_object($target)) {
            $values = array_filter(get_object_vars($target), function($v) {
                return (!is_null($v) && $v !== '');
            });
        }

        // return empty array if there are no values
        if (!$values) {
            return $array;
        }

        // parse and return
        foreach ($values as $key => $value) {
            // avoid to push empty arrays
            if (is_array($value) && !count($value)) {
                continue;
            }

            // parse the value
            $value = (is_object($value) || is_array($value)) ? $this->toArray($value) : $value;

            // push the value
            $array[$key] = $value;
        }

        return $array;
    }
}
