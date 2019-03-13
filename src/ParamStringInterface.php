<?php
namespace AZBosakov\ParamString;

/**
 * Common interface for manipulating tha parameters in a template string.
 * 
 * @author Aleksandar Z. Bosakov <aleksandar.z.bosakov@gmail.com>
 * @license MIT
 */
interface ParamStringInterface
{
    /**
     * Get the template string passed to the constructor
     * 
     * @return string
     */
    public function getTemplate() : string;
    
    /**
     * Clone the object and set the named param value.
     * 
     * @param string $name The param name
     * @param string $value The param value
     */
    public function withParam(string $name, $value) : self;
    
    /**
     * Get a parameter by name
     * 
     * @param string $name The param name
     */
    public function getParam(string $name);
    
    /**
     * Clone the object and set multiple params at once.
     * 
     * @param array $params [name => value] Array of param_name=>param_value pairs
     */
    public function withParams(array $params) : self;
    
    /** 
     * Get a snapshot of the parameters
     *
     * @return array [name => value, ...]
     */
    public function getParams() : array;
    
    public function __toString() : string;
}
