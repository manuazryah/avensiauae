<?php

return [
    '' => 'site/index',
    'general-trading/<page:\w+(-\w+)*>' => 'site/general-trading',
    'it-service/<page:\w+(-\w+)*>' => 'site/it-service',
    'technical-service/<page:\w+(-\w+)*>' => 'site/technical-service',
    'facility-management/<page:\w+(-\w+)*>' => 'site/facility-management',
    'blog-details/<id:\d+>' => 'site/blog-details',
];
