<?php

namespace Tests\Feature;

use Tests\TestCase;

class UsersTest extends TestCase
{
    public function userTestContact(): void
    {
        $response = $this->get('/contact');
        $response->assertStatus(200);
    }
    public function userTestNoContact(): void
    {
        $response = $this->get('/contact2/edit');
        $response->assertStatus(200);
    }
}
