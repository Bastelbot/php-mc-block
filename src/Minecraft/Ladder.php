<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Ladder extends Block
{
    protected $name = 'minecraft:ladder';
    protected $transparent = true;

    public function initTexture ()
    {
        return $this->loadTexture('ladder');
    }
}
