<?php

/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => "Toni Tri Supriadi - Web Developer", // set false to total remove
            'titleBefore'  => false, // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description'  => "Hi, I'm Toni Tri Supriadi. Peoples call me Toni. I am from Indonesia and I am programmer. My basic skills are PHP and expert on Laravel and Codeigniter. Others my skill : ReactJS, NextJS, Angular, Spring Framework.", // set false to total remove
            'separator'    => ' - ',
            'keywords'     => ["Toni, Toni Tri Supriadi, Programmer, Web Developer, Laravel, Codeigniter"],
            'canonical'    => false, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'robots'       => false, // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'Toni Tri Supriadi - Web Developer', // set false to total remove
            'description' => "Hi, I'm Toni Tri Supriadi. Peoples call me Toni. I am from Indonesia and I am programmer. My basic skills are PHP and expert on Laravel and Codeigniter. Others my skill : ReactJS, NextJS, Angular, Spring Framework.", // set false to total remove
            'url'         => false, // Set null for using Url::current(), set false to total remove
            'type'        => false,
            'site_name'   => false,
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            //'card'        => 'summary',
            //'site'        => '@LuizVinicius73',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => 'Toni Tri Supriadi - Web Developer', // set false to total remove
            'description' => "Hi, I'm Toni Tri Supriadi. Peoples call me Toni. I am from Indonesia and I am programmer. My basic skills are PHP and expert on Laravel and Codeigniter. Others my skill : ReactJS, NextJS, Angular, Spring Framework.", // set false to total remove
            'url'         => false, // Set null for using Url::current(), set false to total remove
            'type'        => 'WebPage',
            'images'      => [],
        ],
    ],
];
