<?php
namespace Bastelbot\McBlock\Minecraft;

use Bastelbot\McBlock\Abstract\OpaqueBlock;

class Comparator extends OpaqueBlock
{
    public function initTexture ()
    {
        return $this->loadTexture('comparator_on');
    }
}
