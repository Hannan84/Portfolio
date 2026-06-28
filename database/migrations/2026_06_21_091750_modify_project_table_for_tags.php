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
        Schema::table('Project', function (Blueprint $table) {
            $table->dropForeign(['skill_id']);
            $table->dropColumn('skill_id');
            
            $table->text('description')->nullable()->after('name');
            $table->json('tags')->nullable()->after('image');
            $table->string('github_url')->nullable()->after('project_url');
            $table->string('play_store_url')->nullable()->after('github_url');
            $table->string('app_store_url')->nullable()->after('play_store_url');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Project', function (Blueprint $table) {
            $table->dropColumn(['description', 'tags', 'github_url', 'play_store_url', 'app_store_url']);
            $table->foreignId('skill_id')->nullable()->constrained('skills');
        });
    }
};
