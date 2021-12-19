<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Beacon extends Block
{
    protected $name = 'minecraft:beacon';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('beacon');
    }
}
