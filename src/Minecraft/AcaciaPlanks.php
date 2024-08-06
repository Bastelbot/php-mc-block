<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class AcaciaPlanks extends Block
{
    protected $name = 'minecraft:acacia_planks';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('acacia_planks');
    }
}
