<?php

namespace App\ServicesCustom;

use GuzzleHttp\Client;

class PerfectPayService
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://app.perfectpay.com.br/api/v1/',
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
                'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIzIiwianRpIjoiMWI0OWU1Y2Y4YjBhMjEwNWU0YjRiMzhjN2U2MGViMzk4OGQwNDZmOGNlZTc1NzI0OGFjZDBmYzFlOWUyYTMxNTQxNGQyMzBjY2U4NTI5MGEiLCJpYXQiOjE2ODg2NzU5NDIuNDE1NiwibmJmIjoxNjg4Njc1OTQyLjQxNTYwNCwiZXhwIjoxODQ2NTI4NzQyLjQwNTEzMywic3ViIjoiNjYyMzg1Iiwic2NvcGVzIjpbImludGVncmF0aW9uIl19.IKgCymSFTk-PqYYq9h4IuVUC_3QpxP7gaLtAeM4laQkpWkqacINwOmdqVdgYxnU-suAYIy6ZtsVw_EPyHilIIAolj2lrfrbolAAO6oXpKOnzb9M4I8HgmruV72m_Zu3OV--gwRpNxxXVwE7C8YGRw21uTdCFqAPog64E5VVNKbCMap4NEPlNkB73qKMMMGFodrZH73t4Gp45p2S75_a_X7VuC5Pc14xTCB-olBVF6Ma-7u6S73tcgi8a6RGIhAzoJvQOAw0uNCmgjDZfpGt9-0y6fq2qqseZHMDeG14_9wEaDDo7lJKZKxY8nLGdKQFUnbO767-vFVZV3ez0WYnWlVK9L_A4Y5wD-z3_N9a3K3NLvSSw2YRza9e1-pg_VSjXv7VKRQ1xeVjjHEFxWmGJXw2k5rHuzrRiNYfCIP7N3uayav8FRY4voVbPV4KvL_kCrhTF_5SU2pPldNMDI5vOQeiwdV3Ld7NNL6yPdoXS5Gel3scnH5CVQRJr-dxbK7MsK4hojrxMM5kvM612S4nqaqtxatrBXOlUx3_J53_7vpJwcxo5zSHKuCf9GciWgO-7a9D4rUSYANSjqw2MzS0cuDpF7pJkTlFasxVLwAsHQNz-7X9DQBn_iTa22LyoVy3837EJQLC0VR2rOX1i5llTOIg23nq-7URZ6eMhKAceg20',
            ],
        ]);
    }

    public function getSubscriptions()
    {
        $response = $this->client->post('subscriptions/get');
        $data = json_decode($response->getBody(), true);

        return $data;
    }
}
