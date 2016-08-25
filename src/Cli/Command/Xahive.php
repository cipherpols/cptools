<?php
/**
 * File Redis.php
 * @author Tuan Duong <duongthaso@gmail.com>
 * @package CipherPols
 * @version 1.0
 */
namespace Cli\Command;

use Cli\Command\Xahive\CommandFactory;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class Xahive
 *
 * @package Cli\Command
 */
class Xahive extends Command
{
    const ARG_COMMAND = 'command';

    /**
     * @var Command[]
     */
    protected $commands = array();

    /**
     * @inheritdoc
     */
    protected function configure()
    {
        $this->setName(\Cli\Application\Xahive::COMMAND_NAME)
            ->addArgument(
                static::ARG_COMMAND,
                InputArgument::REQUIRED,
                'Command to Redis'
            )
            ->addUsage('PHP-CLI tools for Xahive');
    }

    /**
     * @inheritdoc
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $command = CommandFactory::create($input);
        $command->execute();
    }
}
