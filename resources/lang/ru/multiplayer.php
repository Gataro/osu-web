<?php

/**
 *    Copyright 2015-2018 ppy Pty. Ltd.
 *
 *    This file is part of osu!web. osu!web is distributed with the hope of
 *    attracting more community contributions to the core ecosystem of osu!.
 *
 *    osu!web is free software: you can redistribute it and/or modify
 *    it under the terms of the Affero GNU General Public License version 3
 *    as published by the Free Software Foundation.
 *
 *    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
 *    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *    See the GNU Affero General Public License for more details.
 *
 *    You should have received a copy of the GNU Affero General Public License
 *    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
 */

return [
    'match' => [
        'header' => 'Многопользовательские игры',
        'team-types' => [
            'head-to-head' => 'Head-to-head',
            'tag-coop' => 'Tag Co-op',
            'team-vs' => 'Team VS',
            'tag-team-vs' => 'Tag Team VS',
        ],
        'events' => [
            'player-left' => ':user покинул игру',
            'player-joined' => ':user присоединился к игре',
            'player-kicked' => ':user был кикнут из игры',
            'match-created' => ':user создал игру',
            'match-disbanded' => 'игра была распущена',
            'host-changed' => ':user стал хостом',

            'player-left-no-user' => 'игрок покинул игру',
            'player-joined-no-user' => 'игрок присоединился к игре',
            'player-kicked-no-user' => 'игрок был кикнут из игры',
            'match-created-no-user' => 'игра была создана',
            'match-disbanded-no-user' => 'игра была распущена',
            'host-changed-no-user' => 'хост игры поменялся',
        ],
        'in-progress' => '(игра в процессе)',
        'score' => [
            'stats' => [
                'accuracy' => 'Точность',
                'combo' => 'Комбо',
                'score' => 'Очки',
            ],
        ],
        'failed' => 'ПРОИГРЫШ',
        'teams' => [
            'blue' => 'Синяя команда',
            'red' => 'Красная команда',
        ],
        'winner' => ':team победила',
        'difference' => 'по :difference',
        'loading-events' => 'Загрузка событий...',
        'more-events' => 'посмотреть все...',
        'beatmap-deleted' => 'удалённая карта',
    ],
    'game' => [
        'scoring-type' => [
            'score' => 'Лучшие очки',
            'accuracy' => 'Лучшая точность',
            'combo' => 'Лучшее комбо',
            'scorev2' => 'Score V2',
        ],
    ],
];
