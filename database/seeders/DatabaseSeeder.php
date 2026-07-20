<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'admin@abpgroup.co.ao'],
            [
                'name' => 'Administrador',
                'password' => bcrypt('admin'),
                'is_admin' => true,
            ]
        );

        \App\Models\Setting::updateOrCreate(['key' => 'contact_email'], ['value' => 'geral@abp.co.ao']);
        \App\Models\Setting::updateOrCreate(['key' => 'contact_phone'], ['value' => '+244 929 414 778']);
        \App\Models\Setting::updateOrCreate(['key' => 'office_address'], ['value' => 'Centro Logístico de Talatona Armazém D07, Belas – Talatona, Luanda, Angola']);
        \App\Models\Setting::updateOrCreate(['key' => 'working_hours'], ['value' => 'Segunda a Sexta: 08h00 - 17h00']);
        \App\Models\Setting::updateOrCreate(['key' => 'social_linkedin'], ['value' => 'https://linkedin.com/company/abp-group']);

        $this->call(PageContentSeeder::class);
        $this->call(ProjectSeeder::class);
        $this->call(PostSeeder::class);
    }
}
