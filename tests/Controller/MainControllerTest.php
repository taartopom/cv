<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MainControllerTest extends WebTestCase
{
    public function testShowMainPage()
    {
        $client = static::createClient();

        $client->request('GET', '/');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('Accueil', $client->getResponse()->getContent());
    }

    public function testShowCurriculumVitae()
    {
        $client = static::createClient();

        $client->request('GET', '/curriculum-vitae');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testContact()
    {
        $client = static::createClient();

        $client->request('POST', '/contact');

        $this->assertEquals(404, $client->getResponse()->getStatusCode());
    }

    public function testContactWithData()
    {
        $client = static::createClient();

        $client->request('POST', '/contact', [
        	'contact' => [
        		'name' => 'John',
        		'email' => 'john.doe@gmail.com',
        		'subject' => 'Testing app',
        		'message' => 'Testing contact form',
        	]
        ]);

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
		$this->assertNotNull(json_decode($client->getResponse()->getContent()), 'Contact form submit response must be valid JSON');
    }
}
