<?php

use Illuminate\Database\Seeder;

class TablaRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'Administrador',
            'Editor'.
            'Supervisor'            
        ];
        foreach($roles as $key => $value) {
            DB::table('rol')->insert([
                'nombre' => $value
            ]);
        }
    }
}
