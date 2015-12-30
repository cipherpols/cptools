<?php
/**
 * File Redis.php
 * @package CipherPols Tools
 */
namespace Cli\Command;

use Cli\Command\Redis\CommandFactory;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class BaseCommand
 *
 * @author Tuan Duong <duongthaso@gmail.com>
 * @package Cli\Command
 */
class Redis extends Command
{
    const ARG_COMMAND = 'command';
    const ARG_KEY = 'key';
    const ARG_VALUE = 'value';
    const OPT_FORMAT = 'format';

    /**
     * @var Command[]
     */
    protected $commands = array();

    /**
     * @inheritdoc
     */
    protected function configure()
    {
        $this->setName(\Cli\Application\Redis::COMMAND_NAME)
            ->addArgument(
                static::ARG_COMMAND,
                InputArgument::REQUIRED,
                'Command to Redis'
            )
            ->addArgument(
                'key',
                InputArgument::OPTIONAL,
                'Item\'s key'
            )
            ->addArgument(
                'value',
                InputArgument::OPTIONAL,
                'Item\'s value'
            )
            ->addUsage('PHP-CLI tool to work with Redis')
            ->addOption(
                static::OPT_FORMAT,
                null,
                InputOption::VALUE_OPTIONAL,
                'Format of data will be parsed - JSON, XML, TEXT.',
                'TEXT'
            );
    }

    /**
     * @inheritdoc
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $command = CommandFactory::create($input);
        $command->execute();
        $output->writeln($command->getOutput()->getContent());
    }
}