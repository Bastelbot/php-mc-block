<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class BigDripleafStem extends Block
{
    protected $name = 'minecraft:big_dripleaf_stem';
    protected $transparent = true;

    public function initTexture ()
    {
        return $this->loadTexture('big_dripleaf_stem');
    }
}
