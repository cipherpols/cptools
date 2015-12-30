<?php
/**
 * File CommandFactory.php
 * @author Tuan Duong <duongthaso@gmail.com>
 * @package CipherPols
 */
namespace Cli\Command\Xahive;

use Cli\Command\Xahive;
use Symfony\Component\Console\Input\InputInterface;

/**
 * Class CommandFactory
 * @package Cli\Command\Redis
 */
class CommandFactory
{
    /**
     * @param InputInterface $input
     * @return XahiveCommand
     * @throws \Exception
     */
    public static function create(InputInterface $input)
    {
        $commandName = ucfirst(strtolower($input->getArgument(Xahive::ARG_COMMAND)));
        $commandClass = '\\Cli\\Command\\Xahive\\' . $commandName;
        if (class_exists($commandClass)) {
            $command = new $commandClass();
        } else {
            throw new \Exception(sprintf('Xahive command %s is not defined', $commandName));
        }

        return $command;
    }
}
