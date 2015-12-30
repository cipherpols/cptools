<?php
/**
 * File Xahive.php
 *
 * @author Tuan Duong <duongthaso@gmail.com>
 * @package CipherPols
 * @version 1.0
 */
namespace Cli\Application;

/**
 * Class Xahive
 * @package Cli\Application
 */
class Xahive extends Base
{
    const COMMAND_NAME = 'Xahive';
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->commandName = static::COMMAND_NAME;
        $this->command = new \Cli\Command\Xahive();
        parent::__construct();
    }
}
