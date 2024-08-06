<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class AcaciaLog extends Block
{
    protected $name = 'minecraft:acacia_log';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('acacia_log_top');
    }
}
