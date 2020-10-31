<?php

namespace Edalzell\Variable;

use Edalzell\Variable\Tags\Variable;
use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $tags = [Variable::class];
}
