<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class rolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create role
        $adminRole = Role::create(['name' => 'admin']);
        $moderatorRole = Role::create(['name' => 'moderator']);
        $sellerRole = Role::create(['name' => 'seller']);

        //create permission
        $createPostPermission = Permission::create(['name' => 'create post']);
        $editPostPermission = Permission::create(['name' => 'edit post']);
        $deletePostPermission = Permission::create(['name' => 'delete post']);
        $publishPostPermission = Permission::create(['name' => 'publish post']);
        $makeAdminPermission = Permission::create(['name' => 'make admin']);
        $makeModeratorPermission = Permission::create(['name' => 'make moderator']);
        $makeSellerPermission = Permission::create(['name' => 'make seller']);


        $adminRole->givePermissionTo($createPostPermission);
        $adminRole->givePermissionTo($makeAdminPermission);
        $adminRole->givePermissionTo($makeModeratorPermission);
        $adminRole->givePermissionTo($makeSellerPermission);
        $adminRole->givePermissionTo($editPostPermission);
        $adminRole->givePermissionTo($deletePostPermission);
        $adminRole->givePermissionTo($publishPostPermission);

        $moderatorRole->givePermissionTo($publishPostPermission);
        $moderatorRole->givePermissionTo($editPostPermission);
        $moderatorRole->givePermissionTo($makeSellerPermission);


        $sellerRole->givePermissionTo($createPostPermission);
        $sellerRole->givePermissionTo($editPostPermission);

        $user = User::where('id', '1')->first();
        $user->assignRole('admin');
    }
}
