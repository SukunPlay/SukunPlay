<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        $configs = new \App\Facebook\Config();
        $configs->app_id = 2568340536820063;
        $configs->secret = "e5876414afc79bdc4a832efc7c09a3e1";
        $configs->version = "2.1";
        $configs->access_token ="EAAkf5GFcAV8BAMv6YA552tvlCMRVbxwPlAZAKdX6zJIWgldJWhEPpm5ccs5Va8UJ9wuWbMIcr5hOh7a064n3iwfDo1mQiLFY8QuzeGhKuK8338ET20nmalUDP3CSBtb1yEWmme6byp79ClA9cgwdKC6saZCCKp9IOh7v2I5slj9ZBaih1UtKdITLr6SWZCEZD";
        $configs->save();
        // $this->call(UsersTableSeeder::class);
    }
}
