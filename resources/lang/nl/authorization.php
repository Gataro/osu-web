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
    'beatmap_discussion' => [
        'destroy' => [
            'is_hype' => 'Hyping kan niet ongedaan gemaakt worden.',
            'has_reply' => 'Je kan geen discussie met reacties verwijderen',
        ],
        'nominate' => [
            'exhausted' => 'Je hebt je dagelijkse nominatie-limiet bereikt, probeer morgen opnieuw.',
            'incorrect_state' => 'Fout tijdens het uitvoeren van deze bewerking, probeer de pagina te herladen.',
            'owner' => "Je kan je eigen beatmap niet nomineren.",
        ],
        'resolve' => [
            'not_owner' => 'Alleen de eigenaar van de thread of de eigenaar van de beatmap kan een discussie als opgelost markeren.',
        ],

        'vote' => [
            'limit_exceeded' => 'Wacht even voor meer stemmen in te dienen',
            'owner' => "Je kan niet stemmen op je eigen discussie.",
            'wrong_beatmapset_state' => 'Kan alleen stemmen op discussies van pending beatmaps.',
        ],
    ],

    'beatmap_discussion_post' => [
        'edit' => [
            'system_generated' => 'Automatisch gegenereerde posts kunnen niet worden bewerkt.',
            'not_owner' => 'Alleen de eigenaar kan deze post bewerken.',
        ],
    ],

    'chat' => [
        'channel' => [
            'read' => [
                'no_access' => 'Toegang tot dit kanaal is niet toegestaan.',
            ],
        ],
        'message' => [
            'send' => [
                'channel' => [
                    'no_access' => 'Toegang tot dit kanaal is vereist.',
                    'moderated' => 'Kanaal wordt op het moment gemodereerd.',
                    'not_lazer' => 'Je kan op dit moment enkel in #lazer praten.',
                ],

                'not_allowed' => 'Je kunt geen berichten sturen terwijl je bent verbannen/restricted/silenced.',
            ],
        ],
    ],

    'contest' => [
        'voting_over' => 'Je kan je stem niet meer veranderen nadat de stemperiode van deze wedstrijd is afgelopen.',
    ],

    'forum' => [
        'post' => [
            'delete' => [
                'only_last_post' => 'Alleen de laatste post kan worden verwijderd.',
                'locked' => 'Kan geen post in een gesloten onderwerp verwijderen.',
                'no_forum_access' => 'Toegang tot dit forum is nodig.',
                'not_owner' => 'Alleen de eigenaar kan deze post verwijderen.',
            ],

            'edit' => [
                'deleted' => 'Je kan een verwijderde post niet bewerken.',
                'locked' => 'De post is afgesloten voor bewerkingen.',
                'no_forum_access' => 'Toegang tot dit forum is nodig.',
                'not_owner' => 'Alleen de eigenaar kan de post bewerken.',
                'topic_locked' => 'Kan geen post in een gesloten onderwerp bewerken.',
            ],

            'store' => [
                'play_more' => 'Probeer eerste de game te spelen voor je op de forums post! Als je een probleem hebt met te spelen, post dan a. u. b. in de Help en Support forum.',
                'too_many_help_posts' => "Je moet eerst de game spelen voor je extra posts kan maken. Als je nog steeds problemen ondervindt, e-mail dan support@ppy.sh", // FIXME: unhardcode email address.
            ],
        ],

        'topic' => [
            'reply' => [
                'double_post' => 'Je hebt zojuist gepost. Wacht even voordat je een nieuwe maakt of bewerk je vorige post.',
                'locked' => 'Je kunt niet antwoorden op een gesloten onderwerp.',
                'no_forum_access' => 'Toegang tot dit forum is nodig.',
                'no_permission' => 'Geen toestemming om te antwoorden.',

                'user' => [
                    'require_login' => 'Log in om te antwoorden.',
                    'restricted' => "Je kan niet reageren terwijl je restricted bent.",
                    'silenced' => "Kan niet beantwoorden wanneer je silenced bent.",
                ],
            ],

            'store' => [
                'no_forum_access' => 'Toegang tot dit forum is nodig.',
                'no_permission' => 'Geen toestemming om een onderwerp te starten.',
                'forum_closed' => 'Forum is gesloten en kan niet in gepost worden.',
            ],

            'vote' => [
                'no_forum_access' => 'Je hebt toegang tot deze form nodig.',
                'over' => 'De stemperiode is voorbij en er kan niet meer gestemd worden.',
                'voted' => 'Je mag je stem niet meer veranderen.',

                'user' => [
                    'require_login' => 'Gelieve in te loggen om te stemmen.',
                    'restricted' => "Je kan niet stemmen als je gerestricteerd bent.",
                    'silenced' => "Kan niet stemmen wanneer gestilt.",
                ],
            ],

            'watch' => [
                'no_forum_access' => 'Je hebt toegang tot deze forum nodig.',
            ],
        ],

        'topic_cover' => [
            'edit' => [
                'uneditable' => 'Foutieve cover gespecificeerd.',
                'not_owner' => 'Alleen de eigenaar kan de cover bewerken.',
            ],
        ],

        'view' => [
            'admin_only' => 'Alleen admins kunnen dit forum zien.',
        ],
    ],

    'require_login' => 'Log in om verder te gaan.',

    'unauthorized' => 'Toegang geweigerd.',

    'silenced' => "Je kunt dit niet doen terwijl je silenced bent.",

    'restricted' => "Je kunt dit niet doen terwijl je restricted bent.",

    'user' => [
        'page' => [
            'edit' => [
                'locked' => 'Gebruikerspagina is gesloten.',
                'not_owner' => 'Je kunt alleen je eigen gebruikerspagina bewerken.',
                'require_supporter_tag' => 'Supporter tag is nodig.',
            ],
        ],
    ],
];
