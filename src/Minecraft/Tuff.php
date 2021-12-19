<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Tuff extends Block
{
    protected $name = 'minecraft:tuff';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('tuff');
    }
}
