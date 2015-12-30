<?php
/**
 * File Redis.php
 * @package CipherPols Tools
 */
namespace Cli\Application;

/**
 * Class Redis
 * @author Tuan Duong <duongthaso@gmail.com>
 * @package Cli\Application
 */
class Redis extends Base
{
    const COMMAND_NAME = 'Redis';

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->commandName = static::COMMAND_NAME;
        $this->command = new \Cli\Command\Redis();
        parent::__construct();
    }
}
