<?php

return [
    'title'       => null,
    'description' => '',

    'routes' => [
        [
            'match' => [
                'domains'  => ['*'],
                'prefixes' => ['api/*'],
                'versions' => ['v1'],
            ],

            'include' => [
                // 'users.index', 'healthcheck*'
            ],

            'exclude' => [
                // '/health', 'admin.*'
            ],

            'apply' => [
                'headers' => ['Accept' => 'application/json'],

                'response_calls' => [
                    'methods' => ['GET', 'POST', 'PUT', 'DELETE'],

                    'config' => [
                        'app.env' => 'documentation',
                        // 'app.debug' => false,
                    ],

                    'queryParams' => [
                        // 'key' => 'value',
                    ],

                    'bodyParams' => [
                        // 'key' => 'value',
                    ],

                    'fileParams' => [
                        // 'key' => 'storage/app/image.png',
                    ],

                    'cookies' => [
                        // 'name' => 'value'
                    ],
                ],
            ],
        ],
    ],

    'type' => 'laravel',

    'static' => [
        'output_path' => 'public/docs',
    ],

    'laravel' => [
        'add_routes' => true,
        'docs_url'   => '/docs',
        'middleware' => [],
    ],

    'interactive' => false,

    'auth' => [
        'enabled'     => true,
        'default'     => false,
        'in'          => 'bearer',
        'name'        => 'token',
        'use_value'   => env('SCRIBE_AUTH_TOKEN'),
        'placeholder' => '{YOUR_AUTH_TOKEN}',
        'extra_info'  => '',
    ],

    'intro_text' => 'Esta documentação visa fornecer todas as informações de que você precisa para trabalhar com nossa API.',

    'example_languages' => [
        'javascript',
    ],

    'base_url' => null,

    'postman' => [
        'enabled'   => false,
        'overrides' => [
            // 'info.version' => '2.0.0',
        ],
    ],

    'openapi' => [
        'enabled'   => false,
        'overrides' => [
            // 'info.version' => '2.0.0',
        ],
    ],

    'default_group' => 'Endpoints',
    'logo'          => false,
    'router'        => 'laravel',
    'faker_seed'    => null,

    'strategies' => [
        'metadata' => [
            \Knuckles\Scribe\Extracting\Strategies\Metadata\GetFromDocBlocks::class,
        ],
        'urlParameters' => [
            \Knuckles\Scribe\Extracting\Strategies\UrlParameters\GetFromLaravelAPI::class,
            \Knuckles\Scribe\Extracting\Strategies\UrlParameters\GetFromLumenAPI::class,
            \Knuckles\Scribe\Extracting\Strategies\UrlParameters\GetFromUrlParamTag::class,
        ],
        'queryParameters' => [
            \Knuckles\Scribe\Extracting\Strategies\QueryParameters\GetFromQueryParamTag::class,
        ],
        'headers' => [
            \Knuckles\Scribe\Extracting\Strategies\Headers\GetFromRouteRules::class,
            \Knuckles\Scribe\Extracting\Strategies\Headers\GetFromHeaderTag::class,
        ],
        'bodyParameters' => [
            \Knuckles\Scribe\Extracting\Strategies\BodyParameters\GetFromFormRequest::class,
            \Knuckles\Scribe\Extracting\Strategies\BodyParameters\GetFromBodyParamTag::class,
        ],
        'responses' => [
            \Knuckles\Scribe\Extracting\Strategies\Responses\UseTransformerTags::class,
            \Knuckles\Scribe\Extracting\Strategies\Responses\UseResponseTag::class,
            \Knuckles\Scribe\Extracting\Strategies\Responses\UseResponseFileTag::class,
            \Knuckles\Scribe\Extracting\Strategies\Responses\UseApiResourceTags::class,
            \Knuckles\Scribe\Extracting\Strategies\Responses\ResponseCalls::class,
        ],
        'responseFields' => [
            \Knuckles\Scribe\Extracting\Strategies\ResponseFields\GetFromResponseFieldTag::class,
        ],
    ],

    'fractal' => [
        'serializer' => null,
    ],

    'routeMatcher'                           => \Knuckles\Scribe\Matching\RouteMatcher::class,
    'continue_without_database_transactions' => [],
    'database_connections_to_transact'       => [config('database.default')]
];
