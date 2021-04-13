<?php

namespace Blackfyre\MsGraphAsApp;

class MsGraphAsApp
{
    private function getAuthToken() {
        $guzzle = new \GuzzleHttp\Client();
        $url = 'https://login.microsoftonline.com/' . config('ms-graph-as-app.azure_tenant_id') . '/oauth2/v2.0/token';
        $payload = [
            'form_params' => [
                'client_id' => config('ms-graph-as-app.azure_client_id'),
                'client_secret' => config('ms-graph-as-app.azure_client_secret'),
                'scope' => config('ms-graph-as-app.azure_client_scope'),
                'grant_type' => 'client_credentials',
            ],
        ];
    }
}
