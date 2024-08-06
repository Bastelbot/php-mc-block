<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class DarkOakTrapdoor extends Block
{
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('dark_oak_trapdoor');
    }
}
