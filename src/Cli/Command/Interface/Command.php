<?php
/**
 * File Command.php
 *
 * @author Tuan Duong <duongthaso@gmail.com>
 * @package CipherPols Tools
 * @version 1.0
 */
namespace Cli\Command;

/**
 * Interface Command
 * @package Cli\Command\Interface
 */
interface Command
{
    /**
     * Execute an command
     *
     * @return void
     */
    public function execute();
}
