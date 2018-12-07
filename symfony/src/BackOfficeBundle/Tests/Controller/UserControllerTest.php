<?php

namespace BackOfficeBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserControllerTest extends WebTestCase
{
    public function testAdd()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Add');
    }

    public function testList()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/List');
    }

    public function testEdit()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Edit');
    }

    public function testDelete()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Delete');
    }

}
