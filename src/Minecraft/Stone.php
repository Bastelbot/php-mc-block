<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Stone extends Block
{
    protected $name = 'minecraft:stone';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('stone');
    }
}
