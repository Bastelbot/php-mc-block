<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class AcaciaSlab extends Block
{
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('acacia_planks');
    }
}
