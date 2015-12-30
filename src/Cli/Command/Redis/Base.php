<?php
/**
 * File Base.php
 * @package CipherPols Tools
 */
namespace Cli\Command\Redis;

use Cli\Command\Input;
use Cli\Command\Output;

/**
 * Class Base
 * @author Tuan Duong <duongthaso@gmail.com>
 * @package Cli\Command\Redis
 */
abstract class Base
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
     * @var
     */
    private $redis;

    /**
     * @return void
     */
    abstract public function execute();

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

    protected function doCommand()
    {

    }
}
