<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Cornflower extends Block
{
    protected $name = 'minecraft:cornflower';
    protected $transparent = true;

    public function initTexture ()
    {
        return $this->loadTexture('cornflower');
    }
}
