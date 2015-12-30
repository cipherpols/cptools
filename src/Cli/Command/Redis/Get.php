<?php
/**
 * File Get.php
 * @package CipherPols Tools
 */
namespace Cli\Command\Redis;

use Cli\Command\Output;

/**
 * Class Get
 * @author Tuan Duong <duongthaso@gmail.com>
 * @package Cli\Command\Redis
 */
class Get extends Base
{
    /**
     * @inheritdoc
     */
    public function execute()
    {
        $this->output = new Output('Test', $this->outputFormat);
    }
}
