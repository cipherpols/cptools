<?php
/**
 * File Base.php
 * @package CipherPols Tools
 */
namespace Cli\Command\Redis;

use Cli\Command\CommandInterface;
use Cli\Command\Input;
use Cli\Command\Output;

/**
 * Class Base
 * @author Tuan Duong <duongthaso@gmail.com>
 * @package Cli\Command\Redis
 */
abstract class RedisCommand implements CommandInterface
{
    /**
     * @var Input
     */
    protected $input;

    /**
     * @var string
     */
    protected $outputFormat;

    /**
     * @var Output
     */
    protected $output;

    /**
     * @param Input $input
     * @param string $outputFormat
     */
    public function __construct(Input $input, $outputFormat)
    {
        $this->input = $input;
        $this->outputFormat = $outputFormat;
    }

    /**
     * @return Output
     */
    public function getOutput()
    {
        return $this->output;
    }
}
