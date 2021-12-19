<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class BigDripleaf extends Block
{
    protected $name = 'minecraft:big_dripleaf';
    protected $transparent = true;

    public function initTexture ()
    {
        return $this->loadTexture('big_dripleaf_top');
    }
}
