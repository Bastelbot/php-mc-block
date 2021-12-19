<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class CobbledDeepslate extends Block
{
    protected $name = 'minecraft:cobbled_deepslate';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('cobbled_deepslate');
    }
}
