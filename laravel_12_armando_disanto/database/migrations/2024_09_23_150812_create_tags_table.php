<?php

use App\Models\Tag;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Corretto: usa string() per creare una colonna di testo
            $table->timestamps();
        });

        // Creazione dei tag predefiniti
        $tags = ['Attualità', 'Musica', 'E-sports', 'Cronaca', 'Satira', 'Scientifico', 'Trend', 'Formazione', 'Motori'];

        foreach ($tags as $tag) {
            Tag::create([
                'name' => $tag
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tags');
    }
};
