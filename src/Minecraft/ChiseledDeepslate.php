<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class ChiseledDeepslate extends Block
{
    protected $name = 'minecraft:chiseled_deepslate';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('chiseled_deepslate');
    }
}
