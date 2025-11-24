<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'welcome'])->name('welcome');
Route::get('kids', [App\Http\Controllers\HomeController::class, 'kids'])->name('kids');
Route::get('contacts', [App\Http\Controllers\HomeController::class, 'contacts'])->name('contacts');
Route::get('about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('accommodation', [App\Http\Controllers\AccommodationController::class, 'index'])->name('accommodation');
Route::get('single/{category_id}', [App\Http\Controllers\AccommodationController::class, 'single'])->name('single');
Route::post('checkNow/{category_id}', [App\Http\Controllers\OrderController::class, 'checkNow'])->name('checkNow');
Route::post('show', [App\Http\Controllers\OrderController::class, 'show'])->name('show');
Route::get('blog', [App\Http\Controllers\PostController::class, 'index'])->name('blog');
Route::get('post/{id}', [App\Http\Controllers\PostController::class, 'post'])->name('post');

Route::get('/dashboard', function () {
    $accountLink = 'account';
    return view('dashboard', compact('accountLink'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [App\Http\Controllers\ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::group(['middleware' => ['auth']], function(){
    Route::get('account', ['App\Http\Controllers\AuthorDashboardController', 'index'])->name('account');
    Route::get('account/change', ['App\Http\Controllers\AuthorDashboardController', 'change'])->name('account.change');
    Route::post('account/save', ['App\Http\Controllers\AuthorDashboardController', 'save'])->name('account.save');
    Route::get('account/orders', ['App\Http\Controllers\AuthorDashboardController', 'orders'])->name('account.orders');
    Route::get('account/canceled/{order_id}', ['App\Http\Controllers\AuthorDashboardController', 'canceled'])->name('account.canceled');
});

// Admin Users
Route::group(['middleware' => ['auth', 'admin']], function(){
    Route::get('admin/dashboard', ['App\Http\Controllers\Admin\AdminController', 'index'])->name('admin.dashboard');
    Route::get('user/delete/{id}', ['App\Http\Controllers\Admin\AdminController', 'deleteUser'])->name('delete.user');
    Route::get('user/restore/{id}', ['App\Http\Controllers\Admin\AdminController', 'restoreUser'])->name('restore.user');
    Route::get('user/destroy/{id}', ['App\Http\Controllers\Admin\AdminController', 'destroyUser'])->name('destroy.user');
    // Admin Categories
    Route::get('admin/categories', ['App\Http\Controllers\Admin\CategoryController', 'index'])->name('admin.categories');
    Route::post('admin/category/store', ['App\Http\Controllers\Admin\CategoryController', 'store'])->name('admin.category.store');
    Route::get('admin/category/delete/{id}', ['App\Http\Controllers\Admin\CategoryController', 'delete'])->name('admin.category.delete');
    Route::get('admin/category/edit/{id}', ['App\Http\Controllers\Admin\CategoryController', 'edit'])->name('admin.category.edit');
    Route::post('admin/category/update/{id}', ['App\Http\Controllers\Admin\CategoryController', 'update'])->name('admin.category.update');
    Route::get('admin/category/status0/{id}', ['App\Http\Controllers\Admin\CategoryController', 'status0'])->name('category.status0');
    Route::get('admin/category/status1/{id}', ['App\Http\Controllers\Admin\CategoryController', 'status1'])->name('category.status1');
    // Admin Orders
    Route::get('admin/orders', ['App\Http\Controllers\Admin\OrderController', 'index'])->name('admin.orders');
    Route::post('admin/order/checked/{id}', ['App\Http\Controllers\Admin\OrderController', 'checked'])->name('admin.order.checked');
    Route::get('admin/order/delete/{id}', ['App\Http\Controllers\Admin\OrderController', 'delete'])->name('admin.order.delete');
    Route::get('admin/order/status0/{id}', ['App\Http\Controllers\Admin\OrderController', 'status0'])->name('order.status0');
    Route::get('admin/order/status1/{id}', ['App\Http\Controllers\Admin\OrderController', 'status1'])->name('order.status1');

});

Route::post('subscribe', ['App\Http\Controllers\Admin\SubscriberController', 'subscribe'])->name('subscribe');

//Admin Subscribers
Route::get('admin/subscribers', ['App\Http\Controllers\Admin\SubscriberController', 'index'])->name('admin.subscribers');
Route::get('admin/subscriber/delete/{id}', ['App\Http\Controllers\Admin\SubscriberController', 'delete'])->name('delete.subscriber');
Route::get('admin/subscriber/destroy/{id}', ['App\Http\Controllers\Admin\SubscriberController', 'destroy'])->name('destroy.subscriber');
Route::get('admin/subscriber/restore/{id}', ['App\Http\Controllers\Admin\SubscriberController', 'restore'])->name('restore.subscriber');
Route::get('admin/subscriber/formMail/{userEmail}/{userName}', ['App\Http\Controllers\Admin\SubscriberController', 'formMail'])->name('formMail.subscriber');
Route::post('admin/subscriber/sendMail', ['App\Http\Controllers\Admin\SubscriberController', 'sendMail'])->name('sendMail.subscriber');
Route::post('admin/alerts/sendMail', ['App\Http\Controllers\Admin\AlertsController', 'sendMail'])->name('sendMail.alerts');
