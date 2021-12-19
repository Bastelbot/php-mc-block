<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class SpruceLog extends Block
{
    protected $name = 'minecraft:spruce_log';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('spruce_log_top');
    }
}
