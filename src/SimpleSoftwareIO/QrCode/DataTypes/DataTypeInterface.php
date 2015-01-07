<?php namespace SimpleSoftwareIO\QrCode\DataTypes;
/**
 * Simple Laravel QrCode Generator
 * A simple wrapper for the popular BaconQrCode made for Laravel.
 *
 * @link http://www.simplesoftware.io
 * @author SimpleSoftware support@simplesoftware.io
 *
 */

interface DataTypeInterface {


    /**
     * Generates the DataType Object and sets all of its properties.
     *
     * @return mixed
     */
    public function create($args);

    /**
     * Converts the datatype to a string.
     *
     * @return string
     */
    public function __toString();

}