<?php

/*
 * This file is part of davwheat/inline-group-badges.
 *
 * Copyright (c) 2021 Flarumite.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Flarumite\InlineGroupBadges;

use Flarum\Extend;

return [(new Extend\Frontend('forum'))->css(__DIR__ . '/less/forum.less')];
