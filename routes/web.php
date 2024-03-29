<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['namespace' => 'Main'], function () {
    Route::get('/', 'IndexController')->name('blog.main');
    Route::get('/about','AboutController')->name('blog.about');
    Route::get('/show/{post}', 'ShowPostController')->name('blog.show');
    Route::post('/show/comments/{post}', 'StoreController')->name('blog.comment.store');
    Route::post('/show/like/{post}', 'LikeController')->name('blog.like.store');
    Route::get('/contact', 'ContactController')->name('blog.contact');
    Route::post('/contact', 'ContactStoreController')->name('blog.contact.store');

});

Route::group(['namespace' => 'Personal', 'prefix' => 'personal', 'middleware' => ['auth']], function () {

    Route::get('/', 'IndexController')->name('personal.index');

    Route::group(['namespace' => 'Comment','prefix' => 'comment'], function () {
        Route::get('/', 'IndexController')->name('personal.comment.index');
        Route::get('/{comment}/edit', 'EditController')->name('personal.comment.edit');
        Route::post('/{comment}/edit', 'UpdateController')->name('personal.comment.update');
        Route::delete('/{comment}/delete', 'DeleteController')->name('personal.comment.delete');
    });
    Route::group(['namespace' => 'Liked','prefix' => 'liked'], function () {
        Route::get('/', 'IndexController')->name('personal.liked.index');
        Route::delete('/{post}/delete', 'DeleteController')->name('personal.liked.delete');
    });

});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {

    Route::get('/', 'IndexController')->name('admin.index');
    Route::get('/reset/{password}', 'ResetController')->name('admin.reset');

    Route::group(['namespace'=>'Contact', 'prefix' => 'contact'], function(){
        Route::get('/','IndexController')->name('admin.contact.index');
        Route::get('/{contact}/answer','AnswerController')->name('admin.contact.answer');
        Route::post('/{contact}/send','SendController')->name('admin.contact.send');
        Route::delete('/{contact}/delete', 'DeleteController')->name('admin.contact.delete');

    });
    Route::group(['namespace'=>'Comment', 'prefix' => 'comment'], function(){
        Route::get('/','IndexController')->name('admin.comment.index');
        Route::post('/{comment}/approve','ApproveController')->name('admin.comment.approve');
        Route::delete('/{comment}/delete', 'DeleteController')->name('admin.comment.delete');
    });

    Route::group(['namespace' => 'Category', 'prefix' => 'categories'], function () {
        Route::get('/', 'IndexController')->name('admin.category.index');
        Route::get('/create', 'CreateController')->name('admin.category.create');
        Route::post('/create', 'StoreController')->name('admin.category.store');
        Route::get('/{category}', 'ShowController')->name('admin.category.show');
        Route::get('/{category}/edit', 'EditController')->name('admin.category.edit');
        Route::post('/{category}/edit', 'UpdateController')->name('admin.category.update');
        Route::delete('/{category}/delete', 'DeleteController')->name('admin.category.delete');
    });
    Route::group(['namespace' => 'Tag', 'prefix' => 'tags'], function () {
        Route::get('/', 'IndexController')->name('admin.tag.index');
        Route::get('/create', 'CreateController')->name('admin.tag.create');
        Route::post('/create', 'StoreController')->name('admin.tag.store');
        Route::get('/{tag}', 'ShowController')->name('admin.tag.show');
        Route::get('/{tag}/edit', 'EditController')->name('admin.tag.edit');
        Route::post('/{tag}/edit', 'UpdateController')->name('admin.tag.update');
        Route::delete('/{tag}/delete', 'DeleteController')->name('admin.tag.delete');
    });
    Route::group(['namespace' => 'Post', 'prefix' => 'posts'], function () {
        Route::get('/', 'IndexController')->name('admin.post.index');
        Route::get('/create', 'CreateController')->name('admin.post.create');
        Route::post('/create', 'StoreController')->name('admin.post.store');
        Route::get('/{post}', 'ShowController')->name('admin.post.show');
        Route::get('/{post}/edit', 'EditController')->name('admin.post.edit');
        Route::post('/{post}/edit', 'UpdateController')->name('admin.post.update');
        Route::post('/{post}/archive', 'ArchiveController')->name('admin.post.archive');
        Route::post('/{post}/publish', 'PublishController')->name('admin.post.publish');
        Route::post('/{post}/unpublish', 'UnpublishController')->name('admin.post.unpublish');
        Route::delete('/{post}/delete', 'DeleteController')->name('admin.post.delete');
    });
    Route::group(['namespace' => 'Archive', 'prefix' => 'archive'], function () {
       Route::get('/', 'IndexController')->name('admin.archive.index');
    });
    Route::group(['namespace' => 'User', 'prefix' => 'users'], function () {
        Route::get('/', 'IndexController')->name('admin.user.index');
        Route::get('/create', 'CreateController')->name('admin.user.create');
        Route::post('/create', 'StoreController')->name('admin.user.store');
        Route::get('/{user}', 'ShowController')->name('admin.user.show');
        Route::get('/{user}/edit', 'EditController')->name('admin.user.edit');
        Route::post('/{user}/edit', 'UpdateController')->name('admin.user.update');
        Route::delete('/{user}/delete', 'DeleteController')->name('admin.user.delete');
    });
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
