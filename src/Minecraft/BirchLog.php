<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class BirchLog extends Block
{
    protected $name = 'minecraft:birch_log';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('birch_log_top');
    }
}
