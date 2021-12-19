<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Chest extends Block
{
    protected $name = 'minecraft:chest';
    protected $transparent = true;

    public function initTexture ()
    {
        $im = $this->loadTexture('../entity/chest/normal');
        $this->cropChest($im);
        return $im;
    }
}
