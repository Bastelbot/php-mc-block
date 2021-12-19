<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Deepslate extends Block
{
    protected $name = 'minecraft:deepslate';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('deepslate');
    }
}
