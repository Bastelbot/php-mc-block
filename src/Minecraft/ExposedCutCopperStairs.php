<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class ExposedCutCopperStairs extends Block
{
    protected $transparent = false;

    public function initTexture ()
    {
        return $this->loadTexture('exposed_cut_copper');
    }
}
