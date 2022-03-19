<?php

namespace Database\Seeders;

use App\Models\M_User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;


// use App\Models\M_U;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this -> createUser("admin", "ADMIN", "admin");
    }

    function createUser($username, $role, $password)
    {
        $user = new M_User();
        $user -> username = $username;
        $user -> role = $role;
        $user -> password = password_hash($password, PASSWORD_DEFAULT);
        $user -> active = "1";
        $user -> save();
    }

}
