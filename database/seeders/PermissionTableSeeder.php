<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{

    /**

     * Run the database seeds.

     *

     * @return void

     */

    public function run()
    {

        $permissions = [

            'role-list',

            'role-create',

            'role-edit',

            'role-delete',            

            'client-list',

            'client-create',

            'client-edit',

            'client-delete',

            'project-list',

            'project-create',

            'project-edit',

            'project-delete',

            'platform-list',

            'platform-create',

            'platform-edit',

            'platform-delete',

            'form-list',

            'form-create',

            'form-edit',

            'form-delete',

            'detail-list',

            'detail-create',

            'detail-edit',

            'detail-delete',

        ];

        foreach ($permissions as $permission) {

            Permission::create(['name' => $permission]);

        }

    }

}
