<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Potatoes extends Block
{
    protected $name = 'minecraft:potatoes';
    protected $transparent = true;

    public function initTexture ()
    {
        return $this->loadTexture('potatoes_stage3');
    }
}
