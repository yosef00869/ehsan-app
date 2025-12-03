<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone_number', 20)->nullable()->after('email');
            $table->enum('role', ['admin', 'staff', 'volunteer', 'donor'])->default('donor')->after('password');
            $table->string('address')->nullable()->after('role');
            $table->string('city')->nullable()->after('address');
            $table->string('national_id', 14)->nullable()->unique()->after('city');
            $table->date('birth_date')->nullable()->after('national_id');
            $table->enum('gender', ['male', 'female'])->nullable()->after('birth_date');
            $table->boolean('is_active')->default(true)->after('gender');
            $table->text('profile_image')->nullable()->after('is_active');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'phone_number',
                'role',
                'address',
                'city',
                'national_id',
                'birth_date',
                'gender',
                'is_active',
                'profile_image'
            ]);
        });
    }
};