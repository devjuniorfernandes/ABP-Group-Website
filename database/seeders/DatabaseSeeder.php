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
        User::create([
            'name' => 'Administrador',
            'email' => 'admin@abpgroup.co.ao',
            'password' => bcrypt('admin'),
            'is_admin' => true,
        ]);

        \App\Models\Setting::create(['key' => 'contact_email', 'value' => 'geral@abp.co.ao']);
        \App\Models\Setting::create(['key' => 'contact_phone', 'value' => '+244 929 414 778']);
        \App\Models\Setting::create(['key' => 'office_address', 'value' => 'Centro Logístico de Talatona Armazém D07, Belas – Talatona, Luanda, Angola']);
        \App\Models\Setting::create(['key' => 'working_hours', 'value' => 'Segunda a Sexta: 08h00 - 17h00']);
        \App\Models\Setting::create(['key' => 'social_linkedin', 'value' => 'https://linkedin.com/company/abp-group']);

        $this->call(PageContentSeeder::class);
    }
}
