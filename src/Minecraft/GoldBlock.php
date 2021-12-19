<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class GoldBlock extends Block
{
    protected $name = 'minecraft:gold_block';
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('gold_block');
    }
}
