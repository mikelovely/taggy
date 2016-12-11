<?php

namespace MikeLovely\Taggy\Models;

use Illuminate\Database\Eloquent\Model;
use MikeLovely\Taggy\Scopes\TagOrderableScopesTrait;

class Tag extends Model
{
    use TagOrderableScopesTrait;
}
