<?php

use Illuminate\Database\Seeder;

use App\Role;
use App\User;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $adminRole=new Role;
        $adminRole->name="admin";
        $adminRole->display_name="admin";
        $adminRole->save();

        //membuat role member
        $memberRole= new Role;
        $memberRole->name="member";
        $memberRole->display_name="member";
        $memberRole->save();

        //membuat sample user admin

        $admin=new User;
        $admin->name="admin";
        $admin->email="admin@gmail.com";
        $admin->password=bcrypt('rahasia');
        $admin->save();
        $admin->attachRole($adminRole);

        //membuat sample user member:) 	
        $member=new User;
        $member->name="member";
        $member->email="member@gmail.com";
        $member->password=bcrypt('rahasia');
        $member->save();
        $member->attachRole($memberRole);
    }
}
