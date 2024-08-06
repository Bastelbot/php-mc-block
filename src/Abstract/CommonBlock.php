<?php
namespace Bastelbot\McBlock\Abstract;

use Bastelbot\Common\CaseConverter;

class CommonBlock extends Block
{
//    protected $data = 0;
//    protected $name = '';
//    protected $transparent = true;
//    protected $texture = null;

    function __construct($name, $trans)
    {
        $this->name = $name;
        $this->transparent = $trans;
    }

    function initTexture ()
    {
        return $this->loadTexture();
    }
}
