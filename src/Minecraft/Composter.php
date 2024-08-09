<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\OpaqueBlock;

class Composter extends OpaqueBlock
{
    public function initTexture ()
    {
        return $this->loadTexture('composter_bottom');
    }
}
