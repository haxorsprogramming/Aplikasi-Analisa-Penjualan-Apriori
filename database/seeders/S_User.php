<?php

namespace Database\Seeders;
use App\Models\M_User;
use Illuminate\Database\Seeder;

class S_User extends Seeder
{
    /**
     * Run the database seeds.
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
