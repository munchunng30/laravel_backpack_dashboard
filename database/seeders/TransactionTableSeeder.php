<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Customer;
use App\Models\Transaction;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TransactionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        $customers = Customer::all();

        foreach($users as $user) {
            $custToAdd = $customers->random(rand(1,100));

            foreach($custToAdd as $customer) {
                Transaction::create([
                    'user_id'=>$user->id,
                    'customer_id'=> $customer->id,
                    'trx_type'=>fake()-> randomElement(['Subscription','Redemption']),
                    'fund_id'=>fake()->randomElement(['OSK-Growth','OSK-Conversative','OSK-Balance','OSK-Retirement']),
                    'account_id'=>'10001',
                    'order_date'=>fake()->dateTimeBetween('-1 years'),
                    'trx_amount'=>fake()->randomFloat(2,100,100000),
                    'trx_unit'=>fake()->randomFloat(2,100,100000),
                    'trx_date'=>fake()->dateTimeBetween('-1 years'),
                    'trx_status'=>fake()->randomElement(['Confirmed','Booked']),
                ]);
            }
        }
    }
}
