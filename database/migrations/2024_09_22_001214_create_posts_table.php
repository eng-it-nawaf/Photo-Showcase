<?php

use Illuminate\Database\Migrations\Migration; // استيراد الكلاس Migration لإنشاء الترحيلات
use Illuminate\Database\Schema\Blueprint; // استيراد الكلاس Blueprint لبناء جدول قاعدة البيانات
use Illuminate\Support\Facades\Schema; // استيراد واجهة Schema لإدارة قواعد البيانات

return new class extends Migration // تعريف فئة مجهولة ترث من Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void // دالة يتم استدعاؤها عند تنفيذ الترحيل
    {
        Schema::create('posts', function (Blueprint $table) { // إنشاء جدول "posts"
            $table->id(); 
            $table->string('title'); 
            $table->text('text'); 
            $table->foreignId('category_id')->constrained(); 
            $table->string('image')->nullable();
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void // دالة يتم استدعاؤها عند التراجع عن الترحيل
    {
        Schema::dropIfExists('posts'); // حذف جدول 'posts' إذا كان موجودًا
    }
};
