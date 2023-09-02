<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PermissionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'description' => 'Super Admin',
            'status' => 1,
            'view_all_tickets' => 1,
            'view_my_tickets' => 1,
            'view_new_tickets' => 1,
            'view_open_tickets' => 1,
            'view_resolved_tickets' => 1,
            'view_closed_tickets' => 1,
            'view_cancelled_tickets' => 1,
            'add_tickets' => 1,
            'close_tickets' => 1,
            'cancel_tickets' => 1,
            'view_users' => 1,
            'create_users' => 1,
            'update_users' => 1,
            'disable_users' => 1,
            'view_departments' => 1,
            'create_departments' => 1,
            'update_departments' => 1,
            'disable_departments' => 1,
            'view_job_titles' => 1,
            'create_job_titles' => 1,
            'update_job_titles' => 1,
            'disable_job_titles' => 1,
            'view_permissions' => 1,
            'create_permissions' => 1,
            'update_permissions' => 1,
            'disable_permissions' => 1,
            'created_by' => 1
        ];
    }
}
