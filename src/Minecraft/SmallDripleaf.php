<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class SmallDripleaf extends Block
{
    protected $name = 'minecraft:small_dripleaf';
    protected $transparent = true;

    public function initTexture ()
    {
        return $this->loadTexture('big_dripleaf_top');
    }
}
