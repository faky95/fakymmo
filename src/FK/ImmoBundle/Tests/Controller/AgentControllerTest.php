<?php

namespace FK\ImmoBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AgentControllerTest extends WebTestCase
{
    public function testViewpropo()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/viewPropo');
    }

}
