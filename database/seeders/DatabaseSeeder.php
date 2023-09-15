<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        $this->call(ComponentsTableSeeder::class);
        $this->call(HqSettingsTableSeeder::class);
        $this->call(LogsTableSeeder::class);
        $this->call(MirrorStatusesTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(RoleUserTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(ScheduledShutdownsTableSeeder::class);
        $this->call(SeedsTableSeeder::class);
        $this->call(SubdomainComponentsTableSeeder::class);
        $this->call(SubdomainStatesTableSeeder::class);
        $this->call(SubdomainsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(VersionInformationEmailAddressesTableSeeder::class);
    }
}
