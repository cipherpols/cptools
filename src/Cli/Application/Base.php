<?php
/**
 * File Base.php
 * @author Tuan Duong <duongthaso@gmail.com>
 * @package CipherPols Tools
 */
namespace Cli\Application;

use Cli\Command\Redis;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;

/**
 * Class Base
 * @package Cli\Application
 */
class Base extends Application
{
    /**
     * @var string
     */
    protected $commandName;

    /**
     * @var Command
     */
    protected $command;

    /**
     * @inheritdoc
     */
    protected function getCommandName(InputInterface $input)
    {
        return $this->commandName;
    }

    /**
     * Gets the default commands that should always be available.
     *
     * @return array An array of default Command instances
     */
    protected function getDefaultCommands()
    {
        $defaultCommands = parent::getDefaultCommands();
        $defaultCommands[] = $this->command;

        return $defaultCommands;
    }

    /**
     * Overridden so that the application doesn't expect the command
     * name to be the first argument.
     */
    public function getDefinition()
    {
        $inputDefinition = parent::getDefinition();
        $inputDefinition->setArguments();

        return $inputDefinition;
    }
}
