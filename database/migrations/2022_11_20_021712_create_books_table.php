<?php

use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();

            $table->foreignIdFor(User::class)->nullable()->constrained()->nullOnDelete();
            $table->foreignIdFor(Category::class)->nullable()->constrained()->nullOnDelete();
            $table->foreignIdFor(Book::class)->nullable()->constrained()->nullOnDelete();

            $table->string('type')->nullable(false);

            $table->string('name')->nullable(false);

            $table->string('slug')->nullable(false);

            $table->string('vendor_code')->nullable(false);

            $table->text('description')->nullable();

            $table->boolean('active')->default(true);
            $table->integer('sort')->default(0);

            $table->softDeletes();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
};
