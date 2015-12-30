<?php
/**
 * File Output.php
 * @package CipherPols Tools
 */
namespace Cli\Command;

use Cli\Command\Formatter\FormatterInterface;
use Cli\Command\Formatter\Text;

/**
 * Class Output
 * @author Tuan Duong <duongthaso@gmail.com>
 * @package Cli\Command
 */
class Output
{
    const FORMAT_XML = 'XML';
    const FORMAT_JSON = 'JSON';
    const FORMAT_TEXT = 'TEXT';

    /**
     * @var FormatterInterface
     */
    private $formatter;

    /**
     * @var string
     */
    private $content;

    /**
     * @var array
     */
    private $formatterMapping = array(
        self::FORMAT_TEXT => Text::class
    );

    /**
     * @var array
     */
    private $allowedFormats = array(self::FORMAT_XML, self::FORMAT_JSON, self::FORMAT_TEXT);

    /**
     * @param string $content
     * @param string $format
     */
    public function __construct($content, $format)
    {
        if (!in_array($format, $this->allowedFormats)) {
            $format = static::FORMAT_TEXT;
        }

        $formatterClass = $this->formatterMapping[$format];
        $this->formatter = new $formatterClass();
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->formatter->format($this->content);
    }
}
