<?php

namespace Tests\Feature\Backend\Role;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ReadRolesTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function an_admin_can_access_the_role_index_page()
    {
        $this->loginAsAdmin();

        $this->get('/admin/auth/role')->assertStatus(200);
    }
}
