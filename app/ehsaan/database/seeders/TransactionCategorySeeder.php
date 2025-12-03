<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TransactionCategory;

class TransactionCategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['category_name' => 'Donations', 'category_type' => 'income'],
            ['category_name' => 'Zakat', 'category_type' => 'income'],
            ['category_name' => 'Sadaqah', 'category_type' => 'income'],
            ['category_name' => 'Medical Aid', 'category_type' => 'expense'],
            ['category_name' => 'Food Distribution', 'category_type' => 'expense'],
            ['category_name' => 'Education Support', 'category_type' => 'expense'],
            ['category_name' => 'Administrative', 'category_type' => 'expense'],
            ['category_name' => 'Other', 'category_type' => 'both'],
        ];

        foreach ($categories as $category) {
            TransactionCategory::create($category);
        }
    }
}