<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class DeepslateGoldOre extends Block
{
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('deepslate_gold_ore');
    }
}
