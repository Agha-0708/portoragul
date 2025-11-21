<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::table('users', function (Blueprint $table) {
        // Tambah kolom Foto dan Bio
        $table->string('avatar')->nullable()->after('email'); 
        $table->string('role')->default('Web Developer')->after('avatar'); // Jabatan
        $table->text('bio')->nullable()->after('role');
        $table->string('linkedin')->nullable()->after('bio'); // Sosmed (Opsional)
        $table->string('instagram')->nullable()->after('linkedin');
    });
}

public function down(): void
{
    Schema::table('users', function (Blueprint $table) {
        $table->dropColumn(['avatar', 'role', 'bio', 'linkedin', 'instagram']);
    });
}
};
