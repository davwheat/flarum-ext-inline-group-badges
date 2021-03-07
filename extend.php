<?php

/*
 * This file is part of davwheat/inline-group-badges.
 *
 * Copyright (c) 2021 David Wheatley.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Davwheat\InlineGroupBadges;

use Flarum\Extend;

return [(new Extend\Frontend('forum'))->css(__DIR__ . '/less/forum.less')];
