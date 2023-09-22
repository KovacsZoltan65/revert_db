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
        
        $this->call(BooksTableSeeder::class);
        $this->call(ComponentsTableSeeder::class);
        $this->call(FailedJobsTableSeeder::class);
        $this->call(HqSettingsTableSeeder::class);
        $this->call(LogsTableSeeder::class);
        $this->call(MirrorStatusesTableSeeder::class);
        $this->call(ModelHasPermissionsTableSeeder::class);
        $this->call(ModelHasRolesTableSeeder::class);
        $this->call(PasswordResetTokensTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(PersonalAccessTokensTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(RoleHasPermissionsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(ScheduledShutdownsTableSeeder::class);
        $this->call(SeedsTableSeeder::class);
        $this->call(SessionsTableSeeder::class);
        $this->call(SubdomainComponentsTableSeeder::class);
        $this->call(SubdomainStatesTableSeeder::class);
        $this->call(SubdomainsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(VersionInformationEmailAddressesTableSeeder::class);
    }
}
