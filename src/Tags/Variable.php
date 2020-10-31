<?php

namespace Edalzell\Variable\Tags;

use Statamic\Facades\Blink;
use Statamic\Tags\Tags;

class Variable extends Tags
{
    public function wildcard($key)
    {
        if ($value = $this->params->get('value')) {
            Blink::put($key, $value);

            return;
        }

        return Blink::get($key, $this->params->get('default'));
    }
}
