<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralSettingController;

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

// Route::get('/', function () {
//     return view('front.index');
// });

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/abcroboticshop',[App\Http\Controllers\Front\IndexController::class,'message']);
Route::get('/P6bqXeUFcXHT2dFG',[App\Http\Controllers\Admin\AdminController::class,'login']);
Route::post('/admin/login',[App\Http\Controllers\Admin\AdminController::class,'admin_login'])->name('admin.login');
Route::match(['get','post'],'/admin/forgot-password',  [App\Http\Controllers\Admin\AdminController::class,'forgotPassword'])->name('admin.forgot-password');
Route::group(['middleware'=>['admin']],function(){
    Route::name('admin.')->prefix('admin')->group(function () {
        Route::get('/users', function () {
            // Route assigned name "admin.users"...
        })->name('users');

        Route::get('/cache/clear', function() {
            Artisan::call('cache:clear');
            Artisan::call('config:clear');
            Artisan::call('route:clear');
            Artisan::call('view:clear');
            return redirect()->route('admin.dashboard')->with('flash_message_success','System Cache Has Been Removed.');
          })->name('admin-cache-clear');
    Route::get('/dashboard',[App\Http\Controllers\Admin\AdminController::class,'index'])->name('dashboard');
    Route::get('/logout',[App\Http\Controllers\Admin\AdminController::class,'logout'])->name('logout');
    //AdminAccount start 
    Route::get('/account',[App\Http\Controllers\Admin\AdminController::class,'account_setting'])->name('account_setting');
    Route::get('/account/setting',[App\Http\Controllers\Admin\AdminController::class,'setting'])->name('setting');
    Route::post('/account/update',[App\Http\Controllers\Admin\AdminController::class,'account_update'])->name('account.update');
    Route::get('/password/setting',[App\Http\Controllers\Admin\AdminController::class,'password_setting'] )->name('password.setting');
    Route::get('/check-pwd', [App\Http\Controllers\Admin\AdminController::class,'checkPass'])->name('admin.checkPass');
    Route::post('/admin/update-pwd',[App\Http\Controllers\Admin\AdminController::class,'updatePassword'])->name('password.updatePassword');
    //AdminAccount End

    //general Setting Controller Start
    Route::match(['get','post'], '/general-setting',[GeneralSettingController::class,'general_setting'])->name('general.setting');
    Route::get('setting/mail_setting', [GeneralSettingController::class,'mailSetting'])->name('general.mail');
    Route::post('setting/mail_setting_store',[GeneralSettingController::class,'mailSettingStore'])->name('setting.mailStore');
    Route::get('setting/database', [GeneralSettingController::class,'database'])->name('setting.database');
    Route::get('setting/empty-database', [GeneralSettingController::class,'emptyDatabase'])->name('setting.emptyDatabase');
    //General Setting COntroller End

    
//categoryController Start

Route::get('/category',[App\Http\Controllers\Admin\CategoryController::class,'index'])->name('category.index');
Route::get('/category/add',[App\Http\Controllers\Admin\CategoryController::class,'add'])->name('category.add');
Route::get('/category/edit/{id}',[App\Http\Controllers\Admin\CategoryController::class,'edit'])->name('category.edit');
Route::post('/category/insert',[App\Http\Controllers\Admin\CategoryController::class,'insert'])->name('category.insert');
Route::post('/category/update/{id}',[App\Http\Controllers\Admin\CategoryController::class,'update'])->name('category.update');
Route::get('/delete-category/{id}',[App\Http\Controllers\Admin\CategoryController::class,'delete'])->name('category.delete');

Route::get('/category/update-status/{id}/{status}',[App\Http\Controllers\Admin\CategoryController::class,'status']);

//categoryController     End
//subCategory Start
Route::get('/subcategory',[App\Http\Controllers\Admin\SubCategoryController::class,'index'])->name('subcategory.index');
Route::get('/subcategory/add',[App\Http\Controllers\Admin\SubCategoryController::class,'add'])->name('subcategory.add');
Route::get('/subcategory/edit/{id}',[App\Http\Controllers\Admin\SubCategoryController::class,'edit'])->name('subcategory.edit');
Route::post('/subcategory/insert',[App\Http\Controllers\Admin\SubCategoryController::class,'insert'])->name('subcategory.insert');
Route::post('/subcategory/update/{id}',[App\Http\Controllers\Admin\SubCategoryController::class,'update'])->name('subcategory.update');
Route::get('/delete-subcategory/{id}',[App\Http\Controllers\Admin\SubCategoryController::class,'delete'])->name('subcategory.delete');

Route::get('/subcategory/update-status/{id}/{status}',[App\Http\Controllers\Admin\SubCategoryController::class,'status']);
//subcateroy end
//ProductController Start 
Route::get('/product',[App\Http\Controllers\Admin\ProductController::class,'index'])->name('product.index');
Route::get('/product/stok/out/updateQuantity/{id}/{p}',[App\Http\Controllers\Admin\ProductController::class,'updateQuantityout']);
Route::get('/product/stok/low/updateQuantity/{id}/{p}',[App\Http\Controllers\Admin\ProductController::class,'updateQuantitylow']);
Route::get('/product/stok/low',[App\Http\Controllers\Admin\ProductController::class,'stock_low'])->name('product.stock.low');
Route::get('/product/expired_date',[App\Http\Controllers\Admin\ProductController::class,'expired_date'])->name('product.expired_date');
Route::get('/product/stok/out',[App\Http\Controllers\Admin\ProductController::class,'stock_out'])->name('product.stock.out');
Route::get('/product/top/selling',[App\Http\Controllers\Admin\ProductController::class,'top_selling'])->name('product.top.selling.product');
Route::get('/product/less/selling',[App\Http\Controllers\Admin\ProductController::class,'less_selling'])->name('product.less.selling.product');
Route::get('/product/upcoming_expired',[App\Http\Controllers\Admin\ProductController::class,'upcoming_expired'])->name('product.upcoming_expired');
Route::get('/product/last-month/selling',[App\Http\Controllers\Admin\ProductController::class,'last_month_selling'])->name('product.last-month.selling.product');
Route::get('/product/last-month/not-selling',[App\Http\Controllers\Admin\ProductController::class,'last_month_not_selling'])->name('product.last-month.not-selling.product');
Route::get('/product/last-year/selling',[App\Http\Controllers\Admin\ProductController::class,'last_year_selling'])->name('product.last-year.selling.product');
Route::get('/product/last-year/not-selling',[App\Http\Controllers\Admin\ProductController::class,'last_year_not_selling'])->name('product.last-year.not-selling.product');
Route::get('/product/add',[App\Http\Controllers\Admin\ProductController::class,'add'])->name('product.add');
Route::get('/product/edit/{id}',[App\Http\Controllers\Admin\ProductController::class,'edit'])->name('product.edit');
Route::post('/product/insert',[App\Http\Controllers\Admin\ProductController::class,'insert'])->name('product.insert');
Route::post('/product/update/{id}',[App\Http\Controllers\Admin\ProductController::class,'update'])->name('product.update');
Route::get('/delete-product/{id}',[App\Http\Controllers\Admin\ProductController::class,'delete'])->name('product.delete');
Route::get('/get_subcategory',[App\Http\Controllers\Admin\ProductController::class,'get_subcat'])->name('get_subcategory');
Route::get('/product/view-details/{id}',[App\Http\Controllers\Admin\ProductController::class,'view_deatils'])->name('product.view_details');
Route::post('/product/update/qty/{id}',[App\Http\Controllers\Admin\ProductController::class,'update_qty'])->name('product.update.qty');


Route::get('/product/update-status/{id}/{status}',[App\Http\Controllers\Admin\ProductController::class,'status']);
Route::get('/product/updateBuyingPrice/{id}/{p}',[App\Http\Controllers\Admin\ProductController::class,'updateBuyingPrice']);
Route::get('/product/updateSellingPrice/{id}/{p}',[App\Http\Controllers\Admin\ProductController::class,'updateSellingPrice']);
Route::get('/product/updateSpecialPrice/{id}/{p}',[App\Http\Controllers\Admin\ProductController::class,'updateSpecialPrice']);
Route::get('/product/updateQuantity/{id}/{p}',[App\Http\Controllers\Admin\ProductController::class,'updateQuantity']);

Route::get('/flash_sale_product',[App\Http\Controllers\Admin\FlashSaleController::class,'index'])->name('flash_sale_product.index');
Route::get('/flash_sale_product/add',[App\Http\Controllers\Admin\FlashSaleController::class,'add'])->name('flash_sale_product.add');
Route::get('/flash_sale_product/edit/{id}',[App\Http\Controllers\Admin\FlashSaleController::class,'edit'])->name('flash_sale_product.edit');
Route::post('/flash_sale_product/insert',[App\Http\Controllers\Admin\FlashSaleController::class,'insert'])->name('flash_sale_product.insert');
Route::post('/flash_sale_product/update/{id}',[App\Http\Controllers\Admin\FlashSaleController::class,'update'])->name('flash_sale_product.update');
Route::get('/delete-flashsale/{id}',[App\Http\Controllers\Admin\FlashSaleController::class,'delete'])->name('flash_sale_product.delete');
Route::get('/get_subcategory',[App\Http\Controllers\Admin\FlashSaleController::class,'get_subcat'])->name('get_subcategory');
//productCOntroller End


//SliderController Start 
Route::get('/slider',[App\Http\Controllers\Admin\SliderController::class,'index'])->name('slider.index');
Route::get('/slider/add',[App\Http\Controllers\Admin\SliderController::class,'add'])->name('slider.add');
Route::get('/slider/edit/{id}',[App\Http\Controllers\Admin\SliderController::class,'edit'])->name('slider.edit');
Route::post('/slider/insert',[App\Http\Controllers\Admin\SliderController::class,'insert'])->name('slider.insert');
Route::post('/slider/update/{id}',[App\Http\Controllers\Admin\SliderController::class,'update'])->name('slider.update');
Route::get('/delete-slider/{id}',[App\Http\Controllers\Admin\SliderController::class,'delete'])->name('slider.delete');

Route::get('/slider/update-status/{id}/{status}',[App\Http\Controllers\Admin\SliderController::class,'status']);
//SliderCOntroller End


//SLiderController2 Start 
Route::get('/banner',[App\Http\Controllers\Admin\BannerController::class,'index'])->name('banner.index');
Route::get('/banner/add',[App\Http\Controllers\Admin\BannerController::class,'add'])->name('banner.add');
Route::get('/banner/edit/{id}',[App\Http\Controllers\Admin\BannerController::class,'edit'])->name('banner.edit');
Route::post('/banner/insert',[App\Http\Controllers\Admin\BannerController::class,'insert'])->name('banner.insert');
Route::post('/banner/update/{id}',[App\Http\Controllers\Admin\BannerController::class,'update'])->name('banner.update');
Route::get('/delete-banner/{id}',[App\Http\Controllers\Admin\BannerController::class,'delete'])->name('banner.delete');

Route::get('/banner/update-status/{id}/{status}',[App\Http\Controllers\Admin\BannerController::class,'status']);
//Slider2COntroller End
//COuponcodeController Start 
Route::get('/couponcode',[App\Http\Controllers\Admin\CouponCodeController::class,'index'])->name('couponcode.index');
Route::get('/couponcode/add',[App\Http\Controllers\Admin\CouponCodeController::class,'add'])->name('couponcode.add');
Route::get('/couponcode/edit/{id}',[App\Http\Controllers\Admin\CouponCodeController::class,'edit'])->name('couponcode.edit');
Route::post('/couponcode/insert',[App\Http\Controllers\Admin\CouponCodeController::class,'insert'])->name('couponcode.insert');
Route::post('/couponcode/update/{id}',[App\Http\Controllers\Admin\CouponCodeController::class,'update'])->name('couponcode.update');
Route::get('/delete-couponcode/{id}',[App\Http\Controllers\Admin\CouponCodeController::class,'delete'])->name('couponcode.delete');
Route::get('/couponcode/view-details/{id}',[App\Http\Controllers\Admin\CouponCodeController::class,'view_deatils'])->name('couponcode.view_details');

Route::get('/couponcode/update-status/{id}/{status}',[App\Http\Controllers\Admin\CouponCodeController::class,'status']);

//CouponCodeCOntroller End

//BlogCategoryCOntroller start 
Route::get('/blog/category',[App\Http\Controllers\Admin\BlogCategoryController::class,'index'])->name('blog.category');
Route::get('/blog/category/add',[App\Http\Controllers\Admin\BlogCategoryController::class,'add'])->name('blog.category.add');
Route::get('/blog/category/edit/{id}',[App\Http\Controllers\Admin\BlogCategoryController::class,'edit'])->name('blog.category.edit');
Route::post('/blog/category/insert',[App\Http\Controllers\Admin\BlogCategoryController::class,'insert'])->name('blog.category.insert');
Route::post('/blog/category/update/{id}',[App\Http\Controllers\Admin\BlogCategoryController::class,'update'])->name('blog.category.update');
Route::get('/delete-blogcategory/{id}',[App\Http\Controllers\Admin\BlogCategoryController::class,'delete'])->name('blog.category.delete');

Route::get('/blog/blogcategory/update-status/{id}/{status}',[App\Http\Controllers\Admin\BlogCategoryController::class,'status']);
//BlogCategoryController End
//blogSubcategoryController Strat
Route::get('/blog/subcategory',[App\Http\Controllers\Admin\BlogSubCategoryController::class,'index'])->name('blog.subcategory.index');
Route::get('/blog/subcategory/add',[App\Http\Controllers\Admin\BlogSubCategoryController::class,'add'])->name('blog.subcategory.add');
Route::get('/blog/subcategory/edit/{id}',[App\Http\Controllers\Admin\BlogSubCategoryController::class,'edit'])->name('blog.subcategory.edit');
Route::post('/blog/subcategory/insert',[App\Http\Controllers\Admin\BlogSubCategoryController::class,'insert'])->name('blog.subcategory.insert');
Route::post('/blog/subcategory/update/{id}',[App\Http\Controllers\Admin\BlogSubCategoryController::class,'update'])->name('blog.subcategory.update');
Route::get('/delete-blogsubcategory/{id}',[App\Http\Controllers\Admin\BlogSubCategoryController::class,'delete'])->name('blog.subcategory.delete');

Route::get('/blog/subcategory/update-status/{id}/{status}',[App\Http\Controllers\Admin\BlogSubCategoryController::class,'status']);
//BlogSubCategory end
//BolgPostController start 
Route::get('/blog/post',[App\Http\Controllers\Admin\BlogPostController::class,'index'])->name('blog.post.index');
Route::get('/blog/post/add',[App\Http\Controllers\Admin\BlogPostController::class,'add'])->name('blog.post.add');
Route::get('/blog/post/edit/{id}',[App\Http\Controllers\Admin\BlogPostController::class,'edit'])->name('blog.post.edit');
Route::post('/blog/post/insert',[App\Http\Controllers\Admin\BlogPostController::class,'insert'])->name('blog.post.insert');
Route::post('/blog/post/update/{id}',[App\Http\Controllers\Admin\BlogPostController::class,'update'])->name('blog.post.update');
Route::get('/delete-blogpost/{id}',[App\Http\Controllers\Admin\BlogPostController::class,'delete'])->name('blog.post.delete');
Route::get('/get_blogcategory',[App\Http\Controllers\Admin\BlogPostController::class,'get_subcat'])->name('get_blogcategory');
Route::get('/blog/post/update-status/{id}/{status}',[App\Http\Controllers\Admin\BlogPostController::class,'status']);
//BlogPostController End

//BlogPost Reply start 
Route::match(['get','post'],'/blog/post/comment',[App\Http\Controllers\Admin\BlogPostController::class,'comment'])->name('blog.post.comment');
Route::match(['get','post'],'/blog/post/comment/reply/{id}',[App\Http\Controllers\Admin\BlogPostController::class,'post_rply'])->name('blog.post.comment.reply');
Route::match(['get','post'],'/blog/post/comment/reply/admin/{id}',[App\Http\Controllers\Admin\BlogPostController::class,'post_rply_admin'])->name('blog.post.comment.reply.admin');
//Blogpost reply End

//Blog SliderController start 
Route::get('/blog/slider',[App\Http\Controllers\Admin\BlogSliderController::class,'index'])->name('blog.slider.index');
Route::get('/blog/slider/add',[App\Http\Controllers\Admin\BlogSliderController::class,'add'])->name('blog.slider.add');
Route::get('/blog/slider/edit/{id}',[App\Http\Controllers\Admin\BlogSliderController::class,'edit'])->name('blog.slider.edit');
Route::post('/blog/slider/insert',[App\Http\Controllers\Admin\BlogSliderController::class,'insert'])->name('blog.slider.insert');
Route::post('/blog/slider/update/{id}',[App\Http\Controllers\Admin\BlogSliderController::class,'update'])->name('blog.slider.update');
Route::get('/delete-blogslider/{id}',[App\Http\Controllers\Admin\BlogSliderController::class,'delete'])->name('blog.slider.delete');

Route::get('/blog/slider/update-status/{id}/{status}',[App\Http\Controllers\Admin\BlogSliderController::class,'status']);
//blog Slider Controller End


//OrderController Start 
Route::get('/order',[App\Http\Controllers\Admin\OrderController::class,'index'])->name('order.index');
Route::get('/order/new',[App\Http\Controllers\Admin\OrderController::class,'new_order'])->name('order.new');
Route::get('/order/processing',[App\Http\Controllers\Admin\OrderController::class,'processing_order'])->name('order.processing');
Route::get('/order/packaging',[App\Http\Controllers\Admin\OrderController::class,'packaging_order'])->name('order.packaging');
Route::get('/order/pending',[App\Http\Controllers\Admin\OrderController::class,'pending_order'])->name('order.pending');
Route::get('/order/shipping',[App\Http\Controllers\Admin\OrderController::class,'shipping_order'])->name('order.shipping');

Route::get('/order/delivered',[App\Http\Controllers\Admin\OrderController::class,'delivered_order'])->name('order.delivered');
Route::get('/order/complete',[App\Http\Controllers\Admin\OrderController::class,'complete_order'])->name('order.complete');
Route::get('/order/cancel',[App\Http\Controllers\Admin\OrderController::class,'cancel_order'])->name('order.cancel');




Route::get('/order/details/{order_id}',[App\Http\Controllers\Admin\OrderController::class,'order_details'])->name('order.details');

Route::post('/order/update-status/{id}',[App\Http\Controllers\Admin\OrderController::class,'order_status'])->name('order.update.status');
Route::get('/invoice/{id}',[App\Http\Controllers\Admin\OrderController::class,'invoice'])->name('order.invoice');
//OrderController End
//GiftcardOrderController start
Route::get('/giftcard/order',[App\Http\Controllers\Admin\GiftcardOrderController::class,'index'])->name('giftcard.order');
Route::post('/gift/order/update-status/{id}',[App\Http\Controllers\Admin\GiftcardOrderController::class,'giftorder_status'])->name('gift.order.update.status');
//GiftCardOrderController End

//MailControllerStart 
Route::post('/user/sendMail',[App\Http\Controllers\Admin\MailController::class,'userEmail'])->name('user.sendMail');
Route::post('/all_user/sendMail',[App\Http\Controllers\Admin\MailController::class,'all_user'])->name('all_user.sendMail');
//MailCOntroller End
//UserControll Start 
Route::get('/user',[App\Http\Controllers\Admin\UserController::class,'index'])->name('user.index');
Route::get('/user/today-birthday',[App\Http\Controllers\Admin\UserController::class,'today_birthday'])->name('user.today-birthday');
Route::get('/user/monthly-birthday',[App\Http\Controllers\Admin\UserController::class,'monthly_birthday'])->name('user.monthly-birthday');
Route::get('/user/product/Userquestion/update-status/{id}/{status}',[App\Http\Controllers\Admin\UserController::class,'ajax_question_status']);
Route::get('/user/message',[App\Http\Controllers\Admin\UserController::class,'message'])->name('user.message');
Route::get('/user/product/comment',[App\Http\Controllers\Admin\UserController::class,'product_comment'])->name('user.product.comment');
Route::get('/user/product/review_rating',[App\Http\Controllers\Admin\UserController::class,'review_rating'])->name('user.product.review_rating');

Route::get('/user/product/Userreview/update-status/{id}/{status}',[App\Http\Controllers\Admin\UserController::class,'ajax_review_status']);
Route::get('/user/product/question/answer',[App\Http\Controllers\Admin\UserController::class,'product_question_answer'])->name('user.product.question.answer');
Route::post('/user/comment/answer/{id}',[App\Http\Controllers\Admin\UserController::class,'message_answer'])->name('user.comment.answer');
Route::post('/user/product/question/status/{id}',[App\Http\Controllers\Admin\UserController::class,'question_status'])->name('user.question.status');
Route::post('/user/product/answer/status/{id}',[App\Http\Controllers\Admin\UserController::class,'answer_status'])->name('user.answer.status');
Route::match(['get','post'],'/user/answer', [App\Http\Controllers\Admin\UserController::class,'answer'])->name('user.answer');
Route::get('/user/blog/user_post',[App\Http\Controllers\Admin\UserController::class,'user_blog'])->name('user.blog.index');
Route::get('/user/details/{id}',[App\Http\Controllers\Admin\UserController::class,'user_details'])->name('user.details');
Route::post('/user/edit/{id}',[App\Http\Controllers\Admin\UserController::class,'edit'])->name('user.edit');
Route::get('/delete-user/{id}',[App\Http\Controllers\Admin\UserController::class,'delete'])->name('user.delete');
//UserController End

//EventController Start 

Route::get('/event',[App\Http\Controllers\Admin\EventController::class,'index'])->name('event.index');
Route::get('/event/test',[App\Http\Controllers\Admin\EventController::class,'test'])->name('event.test');
Route::get('/event/add',[App\Http\Controllers\Admin\EventController::class,'add'])->name('event.add');
Route::get('/event/edit/{id}',[App\Http\Controllers\Admin\EventController::class,'edit'])->name('event.edit');
Route::post('/event/insert',[App\Http\Controllers\Admin\EventController::class,'insert'])->name('event.insert');
Route::post('/event/update/{id}',[App\Http\Controllers\Admin\EventController::class,'update'])->name('event.update');
Route::get('/delete-event/{id}',[App\Http\Controllers\Admin\EventController::class,'delete'])->name('event.delete');

Route::get('/event/update-status/{id}/{status}',[App\Http\Controllers\Admin\EventController::class,'status']);
Route::post('/employee/pdf', [App\Http\Controllers\Admin\EventController::class, 'createPDF'])->name('employee.download');
Route::get('orders-export', [App\Http\Controllers\Admin\EventController::class, 'export'])->name('orders.export');
//EventController End
//Delivery rate start
//blogSubcategoryController Strat
Route::match(['get','post'],'/delivery/rate',[App\Http\Controllers\Admin\DeliveryRateController::class,'index'])->name('delivery.rate');


//GiftCardController Start 
Route::get('/giftcard',[App\Http\Controllers\Admin\GiftCardController::class,'index'])->name('giftcard.index');
Route::get('/giftcard/add',[App\Http\Controllers\Admin\GiftCardController::class,'add'])->name('giftcard.add');
Route::get('/giftcard/edit/{id}',[App\Http\Controllers\Admin\GiftCardController::class,'edit'])->name('giftcard.edit');
Route::post('/giftcard/insert',[App\Http\Controllers\Admin\GiftCardController::class,'insert'])->name('giftcard.insert');
Route::post('/giftcard/update/{id}',[App\Http\Controllers\Admin\GiftCardController::class,'update'])->name('giftcard.update');
Route::get('/delete-giftcard/{id}',[App\Http\Controllers\Admin\GiftCardController::class,'delete'])->name('giftcard.delete');

Route::get('/giftcard/update-status/{id}/{status}',[App\Http\Controllers\Admin\GiftCardController::class,'status']);

//GiftCard Controller End

//WithdrawController Start 
Route::get('/referral',[App\Http\Controllers\Admin\WithdrawController::class,'referral'])->name('referral.index');
Route::get('/withdraw',[App\Http\Controllers\Admin\WithdrawController::class,'index'])->name('withdraw.index');
Route::get('/withdraw/edit/{id}',[App\Http\Controllers\Admin\WithdrawController::class,'edit'])->name('withdraw.edit');
Route::get('/withdraw/details/{id}',[App\Http\Controllers\Admin\WithdrawController::class,'details'])->name('withdraw.details');
Route::post('/withdraw/insert',[App\Http\Controllers\Admin\WithdrawController::class,'insert'])->name('withdraw.insert');
Route::post('/withdraw/update/{id}',[App\Http\Controllers\Admin\WithdrawController::class,'update'])->name('withdraw.update');
Route::get('/delete-withdraw/{id}',[App\Http\Controllers\Admin\WithdrawController::class,'delete'])->name('withdraw.delete');

Route::get('/withdraw/update-status/{id}/{status}',[App\Http\Controllers\Admin\WithdrawController::class,'status']);
//WithdrawController End

//BlogSubCategory end
//delivery Rate end

//NotificationController Start 
//Withdraw Notification count start
Route::get('/withdraw/notification',[App\Http\Controllers\Admin\NotificationController::class,'withdraw_notf_count'])->name('withdraw.withdraw_notf_count');
Route::get('/withdraw/notf/show', [App\Http\Controllers\Admin\NotificationController::class,'withdraw_notf_show'])->name('withdraw-notf-show');
Route::get('/withdraw/notf/count',[App\Http\Controllers\Admin\NotificationController::class,'withdraw_notf_count'])->name('withdraw-notf-count');
Route::get('/withdraw/notf/clear',[App\Http\Controllers\Admin\NotificationController::class,'withdraw_notf_clear'])->name('withdraw-notf-clear');
//Withdraw Notification End
//OrderNotification start 
Route::get('/order/notf/show', [App\Http\Controllers\Admin\NotificationController::class,'order_notf_show'])->name('order-notf-show');
  Route::get('/order/notf/count',[App\Http\Controllers\Admin\NotificationController::class,'order_notf_count'])->name('order-notf-count');
  Route::get('/order/notf/clear',[App\Http\Controllers\Admin\NotificationController::class,'order_notf_clear'])->name('order-notf-clear');
  Route::get('/order/notf/status', [App\Http\Controllers\Admin\NotificationController::class,'order_notf_status'])->name('order-notf-status');
//orderNotification End
// User Notification
Route::get('/user/notf/show', [App\Http\Controllers\Admin\NotificationController::class,'user_notf_show'])->name('user-notf-show');
Route::get('/user/notf/count',[App\Http\Controllers\Admin\NotificationController::class,'user_notf_count'])->name('user-notf-count');
Route::get('/user/notf/clear',[App\Http\Controllers\Admin\NotificationController::class,'user_notf_clear'])->name('user-notf-clear');
// User Notification Ends
//  giftcardorder
Route::get('/giftcard/notf/show', [App\Http\Controllers\Admin\NotificationController::class,'giftcard_notf_show'])->name('giftcard-notf-show');
Route::get('/giftcard/notf/count',[App\Http\Controllers\Admin\NotificationController::class,'giftcard_notf_count'])->name('giftcard-notf-count');
Route::get('/giftcard/notf/clear',[App\Http\Controllers\Admin\NotificationController::class,'giftcard_notf_clear'])->name('giftcard-notf-clear');
// Giftcard Notification Ends
//NotificationController End

//OrderChartController start 

Route::get('/order/chart',[App\Http\Controllers\Admin\OrderChartController::class,'index'])->name('order.chart');
Route::get('/order/last12MonthOrderData',[App\Http\Controllers\Admin\OrderChartController::class,'last12MonthOrderData'])->name('last12MonthOrderData');
Route::get('/order/last12MonthSellData',[App\Http\Controllers\Admin\OrderChartController::class,'last12MonthSellData'])->name('last12MonthSellData');
Route::get('/order/last12MonthProfitData',[App\Http\Controllers\Admin\OrderChartController::class,'last12MonthProfitData'])->name('last12MonthProfitData');



Route::get('/event/last12MonthOrderData',[App\Http\Controllers\Admin\EventController::class,'last12MonthOrderData'])->name('event.last12MonthOrderData');
Route::get('/event/last12MonthEventOrderData',[App\Http\Controllers\Admin\EventController::class,'last12MonthEventOrderData'])->name('event.last12MonthEventOrderData');
Route::get('/event/last12MonthSellData',[App\Http\Controllers\Admin\EventController::class,'last12MonthSellData'])->name('event.last12MonthSellData');
Route::get('/event/last12MonthProfitData',[App\Http\Controllers\Admin\EventController::class,'last12MonthProfitData'])->name('event.last12MonthProfitData');
Route::get('/event/chart',[App\Http\Controllers\Admin\EventController::class,'event_chart'])->name('event.chart');
//OrderChartController End

//Report Controller Start 
Route::match(['get','post'],'/report',[App\Http\Controllers\Admin\ReportController::class,'index'])->name('report');
Route::match(['get','post'],'/report/search',[App\Http\Controllers\Admin\ReportController::class,'report'])->name('report.search');


//Report Controller End

//RoleController
Route::get('/role',[App\Http\Controllers\Admin\RoleController::class,'index'])->name('role.index');
Route::get('/role/add',[App\Http\Controllers\Admin\RoleController::class,'add'])->name('role.add');
Route::get('/role/edit/{id}',[App\Http\Controllers\Admin\RoleController::class,'edit'])->name('role.edit');
Route::post('/role/insert',[App\Http\Controllers\Admin\RoleController::class,'insert'])->name('role.insert');
Route::post('/role/update/{id}',[App\Http\Controllers\Admin\RoleController::class,'update'])->name('role.update');
Route::get('/delete-role/{id}',[App\Http\Controllers\Admin\RoleController::class,'delete'])->name('role.delete');

Route::get('/role/update-status/{id}/{status}',[App\Http\Controllers\Admin\RoleController::class,'status']);
//AccountController Start

Route::get('/accounting',[App\Http\Controllers\Admin\AccountController::class,'index'])->name('accounting');

Route::get('/account/debit',[App\Http\Controllers\Admin\AccountController::class,'debit'])->name('debit');
Route::post('/account_creadit/pdf', [App\Http\Controllers\Admin\AccountController::class, 'creadit_createPDF'])->name('account.download');
Route::post('/account_debit/pdf', [App\Http\Controllers\Admin\AccountController::class, 'debit_createPDF'])->name('debit.download');
//AccountController End

//ExtraCostControll Strat


Route::match(['get','post'],'/extraCost/{id?}',[App\Http\Controllers\Admin\ExtraCostController::class,'insert'])->name('extraCost');
Route::get('/delete-extraCost/{id}',[App\Http\Controllers\Admin\ExtraCostController::class,'delete'])->name('extraCost.delete');

//ExtraCostController End

//Permission
Route::get('role/permission/{id}', [App\Http\Controllers\Admin\RoleController::class,'permission'])->name('role.permission');
Route::post('role/set_permission', [App\Http\Controllers\Admin\RoleController::class,'setPermission'])->name('role.setPermission');

//EMployee COntroller Start 

Route::get('/employee',[App\Http\Controllers\Admin\EmployeeController::class,'index'])->name('employee.index');
Route::get('/employee/add',[App\Http\Controllers\Admin\EmployeeController::class,'add'])->name('employee.add');
Route::get('/employee/edit/{id}',[App\Http\Controllers\Admin\EmployeeController::class,'edit'])->name('employee.edit');
Route::post('/employee/insert',[App\Http\Controllers\Admin\EmployeeController::class,'insert'])->name('employee.insert');
Route::post('/employee/update/{id}',[App\Http\Controllers\Admin\EmployeeController::class,'update'])->name('employee.update');
Route::get('/delete-employee/{id}',[App\Http\Controllers\Admin\EmployeeController::class,'delete'])->name('employee.delete');

Route::get('/employee/update-status/{id}/{status}',[App\Http\Controllers\Admin\EmployeeController::class,'status']);

//Employee COntroller end


    });
});



//Front Start 
//Wishlist COntroller start 

Route::match(['get','post'],'/wishlist/insert', [App\Http\Controllers\User\WishlistController::class,'insert'])->name('wishlist.insert');

//Wishlist Controller End
Route::post('/search-products', [App\Http\Controllers\Front\IndexController::class,'SearchProducts'])->name('user.searchProducts');
Route::post('/autocomplete/fetch', [App\Http\Controllers\Front\IndexController::class,'fetch'])->name('autocomplete.fetch');
Route::get('/term_condition', [GeneralSettingController::class,'t_c'])->name('t_c');
Route::get('/about_us', [GeneralSettingController::class,'about_us'])->name('about_us');
Route::get('/shipping_policy', [GeneralSettingController::class,'shipping_policy'])->name('shipping_policy');
Route::get('/warranty-and-replacement', [GeneralSettingController::class,'warranty_and_replacement'])->name('warranty-and-replacement');
Route::get('/privacy-policy', [GeneralSettingController::class,'privacy_policy'])->name('privacy-policy');
Route::get('/contact_us', [GeneralSettingController::class,'contact_us'])->name('contact_us');
Route::post('/user/contact', [GeneralSettingController::class,'user_contact'])->name('user.contact.email');
Route::get('/',[App\Http\Controllers\Front\IndexController::class,'index']);
Route::get('/flash_sale/{slug?}',[App\Http\Controllers\Front\IndexController::class,'flash_sale']);
Route::get('/gift_card',[App\Http\Controllers\Front\IndexController::class,'gift_card']);
Route::get('{slug}',[App\Http\Controllers\Front\IndexController::class,'category'])->name('front.category');
Route::get('/product/home',[App\Http\Controllers\Front\HomePageController::class,'index'])->name('front.home');
Route::get('/product/details/{slug}',[App\Http\Controllers\Front\IndexController::class,'details'])->name('product.details');
//UserLoginCOntroller start
// Route::get('/user/login',[App\Http\Controllers\User\UserController::class,'index'])->name('user.login');
Route::match(['get','post'],'/user/login',[App\Http\Controllers\User\UserController::class,'index'])->name('user.login');
Route::match(['get','post'],'/user/registration',[App\Http\Controllers\User\UserController::class,'registration'])->name('user.registration');
Route::get('confirm/{code}' ,[App\Http\Controllers\User\UserController::class,'confirmAccount'])->name('user.confirm');
Route::match(['get','post'],'/user/forgot-password',  [App\Http\Controllers\User\UserController::class,'forgotPassword'])->name('user.forgot-password');
//cartController 
Route::match(['get','post'],'/add-cart', [App\Http\Controllers\User\CartController::class,'addtocart'])->name('add-cart');
Route::match(['get','post'],'/user/cart', [App\Http\Controllers\User\CartController::class,'cart'])->name('cart');
Route::get('/cart/update-quantity/{id}/{quantity}', [App\Http\Controllers\User\CartController::class,'updateCartQuantity'])->name('cart.update');
Route::match(['get','post'],'/cart/delete-product/{id}', [App\Http\Controllers\User\CartController::class,'deleteCartProduct'])->name('cart.delete');
//UserLoginControlel end

Route::match(['get','post'],'/user/answer', [App\Http\Controllers\User\ExtraController::class,'answer'])->name('user.answer');

Route::get('search', [App\Http\Controllers\User\ExtraController::class, 'index'])->name('search');
Route::get('autocomplete', [App\Http\Controllers\User\ExtraController::class, 'autocomplete'])->name('autocomplete');

Route::group(['middleware'=>['auth']],function(){

    Route::match(['get','post'],'/user/rating_review/{slug}', [App\Http\Controllers\User\ExtraController::class,'rating_review'])->name('user.rating_review');
        Route::match(['get','post'],'/user/question/{slug}', [App\Http\Controllers\User\ExtraController::class,'question'])->name('user.question');
    Route::name('user.')->prefix('user')->group(function () {

        Route::post('coupon/delete', [App\Http\Controllers\User\CartController::class,'coupon_delete'])->name('coupon.delete');
        Route::match(['get','post'],'/cart/apply-coupon', [App\Http\Controllers\User\CartController::class,'applyCoupon'])->name('cart.applyCoupon');
        Route::get('/logout', [App\Http\Controllers\User\UserController::class,'logout'])->name('logout');
        Route::match(['get','post'],'/order', [App\Http\Controllers\User\OrderController::class,'order'])->name('order');
        Route::match(['get','post'],'/checkout', [App\Http\Controllers\User\OrderController::class,'checkout'])->name('checkout');
        Route::get('/order/details', [App\Http\Controllers\User\OrderController::class,'order_details'])->name('order.details');
        Route::get('/account', [App\Http\Controllers\User\UserController::class,'account'])->name('account');
        Route::post('/user/account/update/{id}' ,[App\Http\Controllers\User\UserController::class,'account_update'])->name('account.update');
        Route::get('/order/list', [App\Http\Controllers\User\UserController::class,'order_list'])->name('order_list');
        Route::get('/referall', [App\Http\Controllers\User\UserController::class,'referall'])->name('referall');
        Route::get('/referall/earning', [App\Http\Controllers\User\ReferralController::class,'index'])->name('referall.earning');
        Route::match(['get','post'],'/order/status/{id}', [App\Http\Controllers\User\UserController::class,'order_status'])->name('order.status');
        Route::match(['get','post'],'/referall/withdraw/{id}', [App\Http\Controllers\User\ReferralController::class,'withdraw'])->name('referall.withdraw');
        Route::match(['get','post'],'/referall/withdraw/insert', [App\Http\Controllers\User\ReferralController::class,'withdraw_insert'])->name('referall.withdraw.insert');

        //User Update Password start 
        

        Route::get('/users/check-user-pwd_form', [App\Http\Controllers\User\UserController::class, 'chkUserPasswordForm'])->name('checkPassword.form');
        Route::get('/users/check-user-pwd', [App\Http\Controllers\User\UserController::class, 'chkUserPassword'])->name('checkPassword');
        Route::post('/users/update-user-pwd', [App\Http\Controllers\User\UserController::class, 'updateUserPassword'])->name('updatePassword');
        //User Update password end
        //GiftCardController Start 
Route::get('/giftcard/details/{slug}',[App\Http\Controllers\Front\GiftCardController::class,'index'])->name('giftcard.details');
Route::match(['get','post'],'/giftcard/purchase',[App\Http\Controllers\Front\GiftCardController::class,'giftcard_purchase'])->name('giftcard.purchase');
Route::match(['get','post'],'/giftcard/checkout', [App\Http\Controllers\Front\GiftCardController::class,'checkout'])->name('giftcard.checkout');
//GiftCardController End
        //GifCard start 
        Route::get('/giftcard', [App\Http\Controllers\User\UserController::class, 'giftcard'])->name('giftcard');
        //Giftcard End
        Route::get('/user/blog', [App\Http\Controllers\User\UserController::class, 'user_blog'])->name('blog.show');
        //Wishlist COntroller start 

Route::match(['get','post'],'/wishlist', [App\Http\Controllers\User\WishlistController::class,'index'])->name('wishlist');
Route::get('/delete-wishlist/{id}',[App\Http\Controllers\User\WishlistController::class,'delete'])->name('wish_list.delete');

//User Blog
//Wishlist Controller End
    });

});
//FrontEnd
//Blog Part start 
Route::get('/blog/user',[App\Http\Controllers\Blog\IndexController::class,'index']);
Route::get('/blog/confirm/{code}' ,[App\Http\Controllers\Blog\User\LoginController::class,'confirmAccount'])->name('blog.confirm');
Route::get('/autocomplete-search', [App\Http\Controllers\Blog\IndexController::class, 'autocompleteSearch']);
Route::get('/blog/category/{slug}',[App\Http\Controllers\Blog\IndexController::class,'category'])->name('blog.category');
Route::match(['get','post'],'/blog/login',[App\Http\Controllers\Blog\User\LoginController::class,'index'])->name('blog.user.login');
Route::match(['get','post'],'/blog/register',[App\Http\Controllers\Blog\User\LoginController::class,'register'])->name('blog.user.register');
Route::match(['get','post'],'/blog/forgot-password',  [App\Http\Controllers\Blog\User\LoginController::class,'forgotPassword'])->name('blog.forget_password');
Route::get('/blog/post',[App\Http\Controllers\Blog\PostController::class,'index'])->name('blog.post');
Route::get('/blog/post/details/{slug}',[App\Http\Controllers\Blog\PostController::class,'post_details'])->name('blog.post.details');

Route::group(['middleware'=>['blog']],function(){
    Route::match(['get','post'],'/blog/post/comment',[App\Http\Controllers\Blog\PostController::class,'comment'])->name('blog.user.comment');
    Route::name('blog.')->prefix('blog')->group(function () {
        Route::get('/logout', [App\Http\Controllers\Blog\User\LoginController::class,'bloglogout'])->name('logout');
        Route::get('/user/post',[App\Http\Controllers\Blog\PostController::class,'post'])->name('user.post');
        Route::post('/user/post/insert',[App\Http\Controllers\Blog\PostController::class,'insert'])->name('user.post.insert');
    });
});
//Blog Part End



