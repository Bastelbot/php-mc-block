<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class CherrySlab extends Block
{
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('cherry_planks');
    }
}
