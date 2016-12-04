<?php

namespace LGM\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class LGMUserBundle extends Bundle
{
    public function getParent() {
        return 'FOSUserBundle';
    }
}
