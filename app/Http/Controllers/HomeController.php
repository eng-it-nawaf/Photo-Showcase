<?php

namespace App\Http\Controllers; // تعريف مساحة الاسم الخاصة بالتحكم في التطبيق

use Illuminate\Http\Request; // استيراد الكلاس Request من إطار العمل Laravel
use Illuminate\Support\Facades\DB; // استيراد واجهة DB لاستخدام قاعدة البيانات
use App\Models\Category; // استيراد نموذج الفئة (Category)
use App\Models\Post; // استيراد نموذج المشاركة (Post)

class HomeController extends Controller // تعريف فئة HomeController التي ترث من فئة Controller
{
    public function index() // دالة تعرض الصفحة الرئيسية
    {
        $categories = Category::all(); // جلب جميع الفئات من قاعدة البيانات وتخزينها في متغير $categories

        // جلب المشاركات حسب الفئة المحددة، إذا كانت موجودة، مرتبة من الأحدث إلى الأقدم
        $posts = Post::where('category_id', request('category_id'))->latest()->get(); 

        // أو استخدام طريقة when لجلب المشاركات بناءً على وجود category_id في الطلب
        $posts = Post::when(request('category_id'), function ($query) { 
            $query->where('category_id', request('category_id')); // إضافة شرط للفئة إذا كانت موجودة
        })->latest()->get(); // جلب المشاركات الأحدث

        // إرجاع العرض الخاص بالصفحة الرئيسية مع تمرير الفئات والمشاركات
        return view('home', compact('categories', 'posts'));
    }
}
