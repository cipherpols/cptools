<?php
/**
 * File CommandFactory.php
 * @package CipherPols Tools
 */
namespace Cli\Command\Redis;

use Cli\Command\Input;
use Cli\Command\Redis;
use Symfony\Component\Console\Input\InputInterface;

/**
 * Class CommandFactory
 * @author Tuan Duong <duongthaso@gmail.com>
 * @package Cli\Command\Redis
 */
class CommandFactory
{
    /**
     * @param InputInterface $input
     * @return Base
     * @throws \Exception
     */
    public static function create(InputInterface $input)
    {
        $commandName = ucfirst(strtolower($input->getArgument(Redis::ARG_COMMAND)));
        $format = $input->getOption(Redis::OPT_FORMAT);
        $commandInput = new Input($input->getArgument(Redis::ARG_KEY), $input->getArgument(Redis::ARG_VALUE));
        $commandClass = '\\Cli\\Command\\Redis\\' . $commandName;
        if (class_exists($commandClass)) {
            $command = new $commandClass($commandInput, $format);
        } else {
            throw new \Exception(sprintf('Command %s does not exist.', $commandName));
        }

        return $command;
    }
}
