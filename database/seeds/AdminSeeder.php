<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new \App\User;
        $admin->username = "admin";
        $admin->name = "Site Admin";
        $admin->email = "admin@gmail.com";
        $admin->roles = json_encode(["ADMIN"]);
        $admin->password = \Hash::make("rahasia");
        $admin->avatar = "saat-ini-tidak-ada-file.png";
        $admin->address = "Sarmili, Bintaro, Tangerang Selatan";
        $admin->phone = "08987965865";

        $admin->save();

        $this->command->info("User Admin berhasil diinsert");

        $staff = new \App\User;
        $staff->username = "staff";
        $staff->name = "staff";
        $staff->email = "staff@gmail.com";
        $staff->roles = json_encode(["STAFF"]);
        $staff->password = \Hash::make("rahasia");
        $staff->avatar = "saat-ini-tidak-ada-file.png";
        $staff->address = "Weleri, Kendal, Jawa Tengah";
        $staff->phone = "087789908789";

        $staff->save();

        $this->command->info("User Staff berhasil diinsert");

        $customer = new App\User;
        $customer->username = "customer";
        $customer->name = "customer";
        $customer->email = "customer@gmail.com";
        $customer->roles = json_encode(["CUSTOMER"]);
        $customer->password = \Hash::make("rahasia");
        $customer->avatar = "saat-ini-tidak-ada-file.png";
        $customer->address = "Kendal, Jawa Tengah, Indonesia";
        $customer->phone = "089879645657";
        $customer->save();

        $this->command->info("User customer berhasil diinsert");
    }
}
