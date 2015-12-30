<?php
/**
 * File Input.php
 * @package CipherPols Tools
 */
namespace Cli\Command;

/**
 * Class Input
 * @author Tuan Duong <duongthaso@gmail.com>
 * @package Cli\Command
 */
class Input
{
    /**
     * @var string
     */
    private $key;

    /**
     * @var string|int|float
     */
    private $value;

    /**
     * @param string $key
     * @param string|int|float $value
     */
    public function __construct($key, $value)
    {
        $this->key = $key;
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @return float|int|string
     */
    public function getValue()
    {
        return $this->value;
    }
}
