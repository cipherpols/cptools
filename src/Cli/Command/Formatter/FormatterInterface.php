<?php
/**
 * File FormatterInterface.php
 * @package CipherPols Tools
 */
namespace Cli\Command\Formatter;

/**
 * Interface FormatterInterface
 * @author Tuan Duong <duongthaso@gmail.com>
 * @package Cli\Command\Formatter
 */
interface FormatterInterface
{
    /**
     * @param string $content
     * @return string
     */
    public function format($content);
}
