<?php
namespace MH\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class MHUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
