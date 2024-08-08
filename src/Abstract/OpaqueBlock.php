<?php
namespace Bastelbot\McBlock\Abstract;

class OpaqueBlock extends Block
{
    // ASSETS_PATH muss mit define angegeben werden!
    //const ASSETS_PATH = __DIR__ . '/../../../../assets';
    protected $transparent = false;

    function __construct($name = '')
    {
        return parent::__construct($name);
    }
}
