<?php

namespace App\Util;

use Symfony\Component\HttpFoundation\Response;

class EndpointUtil
{
    public function randomString(): string
    {
        $keys = array_merge(range(0, 9), range('a', 'z'), range('A', 'Z'));
        $key = "";
        for ($i = 0; $i < 128; $i++) {
            $key .= $keys[random_int(0, count($keys) - 1)];
        }
        return $key;
    }

    /**
     * @param string $id
     */
    public function checkIfIdIsUnique($id){
//        $ids = $this
    }

    public function getUnauthorizedResponse(): Response
    {
        $response = new Response();
        $response->setStatusCode(403);
        return $response;
    }
}