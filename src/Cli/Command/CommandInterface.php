<?php
/**
 * File CommandInterface.php
 *
 * @author Tuan Duong <duongthaso@gmail.com>
 * @package CipherPols
 * @version 1.0
 */
namespace Cli\Command;

/**
 * Interface CommandInterface
 * @package Cli\Command
 */
interface CommandInterface
{
    /**
     * Execute an command
     *
     * @return void
     */
    public function execute();
}
