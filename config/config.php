<?php

return [
    'azure_client_id' => env('AZURE_TENANT', ''),
    'azure_client_secret' => env('AZURE_APP_SECRET', ''),
    'azure_tenant_id' => env('AZURE_TENANT', 'common'),
    'azure_client_scope' => env('AZURE_CLIENT_SCOPE', 'https://graph.microsoft.com/.default')
];
