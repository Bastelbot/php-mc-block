<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class EnderChest extends Block
{
    protected $name = 'minecraft:ender_chest';
    protected $transparent = true;

    public function initTexture ()
    {
        $im = $this->loadTexture('../entity/chest/ender');
        $this->cropChest($im);
        return $im;
    }
}
