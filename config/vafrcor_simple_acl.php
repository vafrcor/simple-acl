<?php

return [
    /*
    |--------------------------------------------------------------------------
    | ACL Modules
    |--------------------------------------------------------------------------
    |
    | Register available site modules
    | Format: 
    |  "{module_code}" => [
    |    "label" => "{label_value}",
    |    "description" => "{description_value}",
    |    "actions": [
    |      [ 
    |        "label": "{label_value}",
    |        "code": "{code_value}",
    |        "description": "{description_value}"
    |      ]
    |    ]
    |  ]
    |
    */

    'modules' => [
        "user" => [
            "label": "User",
            "description": "Module that user data",
            "status" => true,
            "actions": [
                ["label" => "Create","code" => "cr","description" => "create an user record"],
                ["label" => "Read","code" => "rd","description" => "read an user record"],
                ["label" => "Update","code" => "ud","description" => "update an user record"],
                ["label" => "Delete","code" => "de","description" => "delete an user record"],
                ["label" => "Export","code" => "ex","description" => "Export users record"],
                ["label" => "Import","code" => "im","description" => "Import users record"],
                ["label" => "Download","code" => "dl","description" => "Download users record"],
                ["label" => "Report","code" => "rp","description" => "Build user report"],
                ["label" => "Approve","code" => "ap","description" => "Approve an user"],
                ["label" => "Reset Password","code" => "rs","description" => "Reset an user password"]
            ]
        ] 
    ],

    /*
    |--------------------------------------------------------------------------
    | ACL Groups
    |--------------------------------------------------------------------------
    |
    | Register available ACL Groups
    | Format: 
    |  "{group_code}" => [
    |    "label" => "{label_value}",
    |    "description" => "{description_value}"
    |  ]
    |
    */

    'groups' => [
        "owner" => [
            "label" => "Owner",
            "description" => "Site owner",
            "active" => true
        ],
        "administration" => [
            "label" => "Administration",
            "description" => "Site owner",
            "active" => true
        ],
        "customer" => [
            "label" => "Customer",
            "description" => "Site customer",
            "active" => true
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | ACL Roles
    |--------------------------------------------------------------------------
    |
    | Register available ACL Roles
    | Format: 
    |  "{role_code}" => [
    |    "label" => "{label_value}",
    |    "description" => "{description_value}"
    |  ]
    |
    */

    "roles" => [
        "owner" => [
            "group" => "owner",
            "label" => "Owner",
            "active" => true
        ],
        "administrator" => [
            "group" => "administration",
            "label" => "Administrator",
            "active" => true
        ],
        "editor" => [
            "group" => "administration",
            "label" => "Editor",
            "active" => true
        ],
        "customer" => [
            "group" => "customer",
            "label" => "Customer",
            "active" => true
        ],
        "guest" => [
            "group" => "customer",
            "label" => "Guest",
            "active" => true
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | ACL Permissions
    |--------------------------------------------------------------------------
    |
    | Register available ACL Permissions
    | Format: 
    |  "{role_code}" => [
    |    "{module_name}" => [
    |      "{action_code}",
    |      "{another_action_code}"
    |    ]
    |  ]
    |
    */

    "permissions" => [
        "owner" => [
            "user" => ["cr","rd","ud","de","ex","im","dl","rp","ap","rs"]
        ],
        "administrator" => [
            "user" => ["cr","rd","ud","de","ex","im","dl","rp","ap","rs"]
        ],
        "editor" => [
            "user" => ["rd","ud","de","ex","im","dl","rp","ap","rs"]
        ],
        "customer" => [
            "user" => ["rd","ud","rs"]
        ],
        "guest" => [
            "user" => ["rd"]
        ]
    ]
];
