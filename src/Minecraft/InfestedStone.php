<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class InfestedStone extends Block
{
    protected $name = 'minecraft:infested_stone';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('stone');
    }
}
