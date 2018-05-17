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
    'deleted' => '[deleted user]',

    'beatmapset_activities' => [
        'title' => "",

        'discussions' => [
            'title_recent' => '',
        ],

        'events' => [
            'title_recent' => 'เหตุการณ์ล่าสุด',
        ],

        'posts' => [
            'title_recent' => 'โพสต์ล่าสุด',
        ],

        'votes_received' => [
            'title_most' => '',
        ],

        'votes_made' => [
            'title_most' => '',
        ],
    ],

    'card' => [
        'loading' => 'กำลังโหลด....',
        'send_message' => 'ส่งข้อความ',
    ],

    'login' => [
        '_' => 'Sign in',
        'locked_ip' => 'ที่อยู่ IP ของคุณถูกล็อก โปรดรอสักครู่',
        'username' => 'ชื่อผู้ใช้',
        'password' => 'รหัสผ่าน',
        'button' => 'ลงชื่อเข้าใช้',
        'button_posting' => 'กำลังลงชื่อเข้าใช้…',
        'remember' => 'จำคอมพิวเตอร์นี้',
        'title' => 'กรุณาเข้าสู่ระบบเพื่อดำเนินการต่อไป',
        'failed' => 'Incorrect login',
        'register' => "คุณยังไม่มีบัญชี osu! ใช่หรือไม่? สร้างบัญชีใหม่ได้ที่นี่",
        'forgot' => 'ลืมรหัสผ่าน?',
        'beta' => [
            'main' => 'Beta access is currently restricted to privileged users.',
            'small' => '(supporters will get in soon)',
        ],

        'here' => 'here', // this is substituted in when generating a link above. change it to suit the language.
    ],

    'posts' => [
        'title' => 'โพสต์ทั้งหมดของ:username',
    ],

    'signup' => [
        '_' => 'สมัครสมาชิก',
    ],
    'anonymous' => [
        'login_link' => 'click to login',
        'login_text' => 'ลงชื่อเข้าใช้',
        'username' => 'Guest',
        'error' => 'You need to be logged in to do this.',
    ],
    'logout_confirm' => 'Are you sure you want to log out? :(',
    'restricted_banner' => [
        'title' => 'Your account has been restricted!',
        'message' => 'While restricted, you will be unable to interact with other players and your scores will only be visible to you. This is usually the result of an automated process and will usually be lifted within 24 hours. If you wish to appeal your restriction, please <a href="mailto:accounts@ppy.sh">contact support</a>.',
    ],
    'show' => [
        'age' => ':age years old',
        'change_avatar' => 'เปลี่ยนรูปของคุณ',
        'first_members' => 'Here since the beginning',
        'is_developer' => 'osu!developer',
        'is_supporter' => 'osu!supporter',
        'joined_at' => 'วันที่ลงทะเบียน :date',
        'lastvisit' => 'เยี่ยมชมล่าสุด :date',
        'missingtext' => 'You might have made a typo! (or the user may have been banned)',
        'origin_age' => ':age',
        'origin_country_age' => ':age from :country',
        'origin_country' => 'From :country',
        'page_description' => 'osu! - Everything you ever wanted to know about :username!',
        'previous_usernames' => 'เคยมีชื่อว่า',
        'plays_with' => 'Plays with :devices',
        'title' => ":username's profile",

        'edit' => [
            'cover' => [
                'button' => 'เปลี่ยนรูปหน้าปกโปรไฟล์',
                'defaults_info' => 'More cover options will be available in the future',
                'upload' => [
                    'broken_file' => 'Failed processing image. Verify uploaded image and try again.',
                    'button' => 'อัพโหลดรูปภาพ',
                    'dropzone' => 'Drop here to upload',
                    'dropzone_info' => 'You can also drop your image here to upload',
                    'restriction_info' => "Upload available for <a href='".route('store.products.show', 'supporter-tag')."' target='_blank'>osu!supporters</a> only",
                    'size_info' => 'ขนาดของหน้าปกที่แนะนำ 2000x700',
                    'too_large' => 'ไฟล์ที่อัพโหลดมีขนาดใหญ่เกินไป.',
                    'unsupported_format' => 'Unsupported format.',
                ],
            ],

            'default_playmode' => [
                'is_default_tooltip' => '',
                'set' => '',
            ],
        ],

        'extra' => [
            'followers' => ':count follower|:count followers',
            'unranked' => 'No recent plays',

            'achievements' => [
                'title' => 'Achievements',
                'achieved-on' => 'Achieved on :date',
            ],
            'beatmaps' => [
                'none' => 'ไม่มีเลย...',
                'title' => 'Beatmaps',

                'favourite' => [
                    'title' => 'Favourite Beatmaps (:count)',
                ],
                'graveyard' => [
                    'title' => '',
                ],
                'ranked_and_approved' => [
                    'title' => 'Ranked & Approved Beatmaps (:count)',
                ],
                'unranked' => [
                    'title' => '',
                ],
            ],
            'historical' => [
                'empty' => 'No performance records. :(',
                'title' => 'Historical',

                'monthly_playcounts' => [
                    'title' => 'ประวัติการเล่น',
                ],
                'most_played' => [
                    'count' => 'times played',
                    'title' => 'Most Played Beatmaps',
                ],
                'recent_plays' => [
                    'accuracy' => 'accuracy: :percentage',
                    'title' => 'Recent Plays (24h)',
                ],
                'replays_watched_counts' => [
                    'title' => '',
                ],
            ],
            'kudosu' => [
                'available' => 'Kudosu Available',
                'available_info' => "Kudosu can be traded for kudosu stars, which will help your beatmap get more attention. This is the number of kudosu you haven't traded in yet.",
                'recent_entries' => 'Recent Kudosu History',
                'title' => 'Kudosu!',
                'total' => 'Total Kudosu Earned',
                'total_info' => 'Based on how much of a contribution the user has made to beatmap moderation. See <a href="'.osu_url('user.kudosu').'">this page</a> for more information.',

                'entry' => [
                    'amount' => ':amount kudosu',
                    'empty' => "This user hasn't received any kudosu!",

                    'beatmap_discussion' => [
                        'allow_kudosu' => [
                            'give' => 'Received :amount from kudosu deny repeal of modding post :post',
                        ],

                        'deny_kudosu' => [
                            'reset' => 'Denied :amount from modding post :post',
                        ],

                        'delete' => [
                            'reset' => 'Lost :amount from modding post deletion of :post',
                        ],

                        'restore' => [
                            'give' => 'Received :amount from modding post restoration of :post',
                        ],

                        'vote' => [
                            'give' => 'Received :amount from obtaining votes in modding post of :post',
                            'reset' => 'Lost :amount from losing votes in modding post of :post',
                        ],

                        'recalculate' => [
                            'give' => '',
                            'reset' => '',
                        ],
                    ],

                    'forum_post' => [
                        'give' => 'Received :amount from :giver for a post at :post',
                        'reset' => 'Kudosu reset by :giver for the post :post',
                        'revoke' => 'Denied kudosu by :giver for the post :post',
                    ],
                ],
            ],
            'me' => [
                'title' => 'ฉัน!',
            ],
            'medals' => [
                'empty' => "This user hasn't gotten any yet. ;_;",
                'title' => 'Medals',
            ],
            'recent_activity' => [
                'title' => 'ล่า​สุด',
            ],
            'top_ranks' => [
                'empty' => 'No awesome performance records yet. :(',
                'not_ranked' => '',
                'pp' => ':amountpp',
                'title' => 'อันดับ',
                'weighted_pp' => 'weighted: :pp (:percentage)',

                'best' => [
                    'title' => 'Best Performance',
                ],
                'first' => [
                    'title' => 'First Place Ranks',
                ],
            ],
            'account_standing' => [
                'title' => 'ชื่อเสียงของบัญชี',
                'bad_standing' => "",
                'remaining_silence' => '',

                'recent_infringements' => [
                    'title' => '',
                    'date' => 'วันที่',
                    'action' => 'ดำเนินการ',
                    'length' => 'ความยาว',
                    'length_permanent' => 'ถาวร',
                    'description' => 'คำอธิบาย',
                    'actor' => '',

                    'actions' => [
                        'restriction' => 'แบน',
                        'silence' => 'ถูกเงียบ',
                        'note' => 'หมายเหตุ',
                    ],
                ],
            ],
        ],
        'info' => [
            'discord' => 'ดิสคอร์ด',
            'interests' => 'สิ่งที่สนใจ',
            'lastfm' => 'Last.fm',
            'location' => 'ตำแหน่งปัจจุบัน',
            'occupation' => 'อาชีพ',
            'skype' => 'Skype',
            'twitter' => 'ทวิตเตอร์',
            'website' => 'เว็บไซต์',
        ],
        'not_found' => [
            'reason_1' => 'ผู้ใช้นั้นอาจเปลี่ยนชื่อ',
            'reason_2' => 'ชื่อผู้ใช้อาจไม่สามารถเข้าถึงได้ชั่วคราวเนื่องจากปัญหาเกี่ยวกับความปลอดภัยหรือ abuse',
            'reason_3' => '',
            'reason_header' => '',
            'title' => 'ไม่พบผู้ใช้นี้',
        ],
        'page' => [
            'description' => '<strong>me!</strong> is a personal customisable area in your profile page.',
            'edit_big' => 'Edit me!',
            'placeholder' => 'Type page content here',
            'restriction_info' => "You need to be an <a href='".route('store.products.show', 'supporter-tag')."' target='_blank'>osu!supporter</a> to unlock this feature.",
        ],
        'post_count' => [
            '_' => '',
            'count' => '',
        ],
        'rank' => [
            'country' => 'Country rank for :mode',
            'global' => 'Global rank for :mode',
        ],
        'stats' => [
            'hit_accuracy' => 'ความแม่นยำ',
            'level' => 'เลเวล :level',
            'maximum_combo' => 'คอมโบสูงสุด',
            'play_count' => 'เล่นทั้งหมด',
            'play_time' => 'เวลาเล่นทั้งหมด',
            'ranked_score' => 'คะแนนจัดอันดับ',
            'replays_watched_by_others' => 'รีเพลย์ที่มีคนอื่นดู',
            'score_ranks' => 'อันดับคะแนน',
            'total_hits' => 'จำนวนการกดทั้งหมด',
            'total_score' => 'คะแนนรวม',
        ],
    ],
    'status' => [
        'online' => 'ออนไลน์',
        'offline' => 'ออฟไลน์',
    ],
    'store' => [
        'saved' => 'ผู้ใช้ถูกสร้างขึ้น',
    ],
    'verify' => [
        'title' => 'ยืนยันตัวตนบัญชี',
    ],
];
