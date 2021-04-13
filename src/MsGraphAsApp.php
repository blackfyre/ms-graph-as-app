<?php

namespace Blackfyre\MsGraphAsApp;

use Microsoft\Graph\Graph;

class MsGraphAsApp
{
    /**
     * @var string
     */
    private $authToken;

    /**
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getAuthToken()
    {
        if (!$this->authToken) {
            $this->fetchAuthToken();
        }
        return $this->authToken;
    }

    /**
     * Query M$ for an auth token
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    private function fetchAuthToken() {
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

        $token = json_decode($guzzle->post($url, $payload)->getBody()->getContents());
        $this->authToken = $token->access_token;

    }

    /**
     * Get a configured GRAPH SDK instance, ready for any query
     * @return Graph
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getGraph(): Graph
    {
        $graph = new Graph();
        $graph->setAccessToken($this->getAuthToken());

        return $graph;
    }
}
