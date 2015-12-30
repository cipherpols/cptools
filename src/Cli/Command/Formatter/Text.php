<?php
/**
 * File Text.php
 * @package CipherPols Tools
 */
namespace Cli\Command\Formatter;

/**
 * Class Text
 * @author Tuan Duong <duongthaso@gmail.com>
 * @package Cli\Command\Formatter
 */
class Text implements FormatterInterface
{
    /**
     * @inheritdoc
     */
    public function format($content)
    {
        return $content;
    }
}
