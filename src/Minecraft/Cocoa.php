<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\Block;

class Cocoa extends Block
{
    protected $transparent = true;

    public function initTexture ()
    {
        return $this->loadTexture('cocoa_stage2');
    }
}
