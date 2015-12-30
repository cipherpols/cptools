<?php
/**
 * File FactoryInterface.php
 *
 * @author Tuan Duong <duongthaso@gmail.com>
 * @package CipherPols
 * @version 1.0
 */
namespace Cli\Command;

use Symfony\Component\Console\Input\InputInterface;

/**
 * Interface FactoryInterface
 * @package Cli\Command
 */
interface FactoryInterface
{
    /**
     * @param InputInterface $input
     * @return CommandInterface
     * @throws \Exception
     */
    public static function create(InputInterface $input);
}
