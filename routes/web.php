<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todoController;
use App\Http\Controllers\loteryController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\marketplacecontroller;
use App\Http\Controllers\affiliatesController;
use App\Http\Controllers\ApiPerfectpayController;
use App\Http\Controllers\authController;
use App\Http\Controllers\BotBetfairController;
use App\Http\Controllers\courseController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\financeController;
use App\Http\Controllers\inviteController;
use App\Http\Controllers\productsController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\GerencianetController;
use App\Http\Controllers\turboController;
use Illuminate\Support\Facades\Artisan;



Route::get('/perfectpay',[ApiPerfectpayController::class, 'index'])->name('perfecpay');

#####Bloquear Rotas que so podem acessar via Authentication;
Route::middleware(['auth'])->group(function(){

    Route::get('/', [homeController::class, 'index'])->name('home');

    Route::get('/pagNova', [homeController::class, 'pagNova'])->name('pagNova');


    Route::get('/bot-betfait/account', [BotBetfairController::class, 'index'])->name('botBetfair');
    Route::post('/bot-betfait/add-acount', [BotBetfairController::class, 'add_account'])->name('addAcount');
    Route::post('/bot-betfait/add-config', [BotBetfairController::class, 'add_config'])->name('addConfig');

    /*
    | Rotas para a loja
    | Usuariois podem ver produtos,
    | Comprar produtos
    | Se Afiliar a produtos
    */
    Route::get('/marketplace', [marketplacecontroller::class, 'index'])->name('marketplace');
    Route::get('/marketplace/product/{id}', [marketplacecontroller::class, 'product'])->name('product');

    /*
    | Rotas de afiliados da plataforma,
    | Controla os usuarios que vendem produtos no sistema
    | Usuario pode controlar seus revendedores
    */
    Route::get('/affiliates/my-affiliates', [affiliatesController::class, 'myAffiliates'])->name('myAffiliates');
    Route::get('/affiliates/received', [affiliatesController::class, 'received'])->name('received');
    Route::get('/affiliates/sends', [affiliatesController::class, 'sends'])->name('sends');

    Route::get('/affiliates/send/{id}', [affiliatesController::class, 'send'])->name('send');

    Route::get('/affiliates/creat-affiliate/{id}', [affiliatesController::class, 'create'])->name('create');
    Route::get('/affiliates/update-affiliate/{id}/{type}', [affiliatesController::class, 'updateAffiliate'])->name('updateAffiliate');

    /*
    | Rotas para controlar os produros
    | Criar novos produtos,
    | Editar Produtos
    | Co-produções
    | Compras de produtos feitas pelo usuario
    */
    Route::get('/products/new-product', [productsController::class, 'newProduct'])->name('newProduct');
    Route::post('/products/add-product', [productsController::class, 'newProductSave'])->name('newProductSave');

    Route::get('/products/my-products', [productsController::class, 'myProducts'])->name('myProducts');
    Route::get('/products/my-co-production', [productsController::class, 'myCoproducoes'])->name('myCoproducoes');
    Route::get('/products/purchases', [productsController::class, 'myCompras'])->name('myCompras');

    Route::get('/products/edit/{id}', [productsController::class, 'edit'])->name('editProduct');
    Route::post('/products/edit/{id}', [productsController::class, 'editSave'])->name('editSave');
    Route::post('/products/add-checkout/{id}', [productsController::class, 'addCheckout'])->name('addCheckout');

    Route::post('/products/add-coproduction/{id}', [productsController::class, 'addCoproducao'])->name('addCoproducao');
    Route::get('/products/update-coproduction/{id}/{type}', [productsController::class, 'editCoprodutor'])->name('editCoprodutor');

    Route::post('/products/add-pixel', [productsController::class, 'addPixel'])->name('addPixel');

    /*
    | Rotas para controlar Extrato financeiro da plataforma
    */
    Route::get('/finance', [financeController::class, 'index'])->name('finance');

    /*
    | Rotas para controlar as indicações
    | Acompanhar rede de indicações
    | Ver plano de carreira na plataforma
    */
    Route::get('/invite', [inviteController::class, 'index'])->name('invite');
    Route::get('/invite/network', [inviteController::class, 'inviteNetwork'])->name('inviteNetwork');
    Route::get('/invite/evolution', [inviteController::class, 'inviteEvolution'])->name('inviteEvolution');

    Route::get('/invite/get-bonificacoes', [inviteController::class, 'bonificacoes'])->name('bonificacoes');

    /*
    | Rotas para controlar a área de cursos
    | Criar cursos,
    | Editar Cursos e adicionar modulos
    | Vincular cursos a um produto cadastrado
    */
    Route::get('course/new-course', [courseController::class, 'newCourse'])->name('newCourse');
    Route::get('course/my-course', [courseController::class, 'myCourse'])->name('myCourse');
    Route::get('course/edit/{id}', [courseController::class, 'editCourse'])->name('editCourse');
    Route::get('course/view/{id}/{modulo}', [courseController::class, 'viewCourse'])->name('viewCourse');
    Route::get('course/view-classes/{id}', [courseController::class, 'viewClasses'])->name('viewClasses');
    Route::get('course/save-classe/{id}', [courseController::class, 'videoSave'])->name('videoSave');
    Route::get('course/finish-classe/{id}', [courseController::class, 'videoFinish'])->name('videoFinish');

    Route::get('course/allcourses/{curso}/{modulo}', [courseController::class, 'allcourses'])->name('allcourses');

    Route::post('course/add', [courseController::class, 'addCourse'])->name('addCourse');
    Route::post('course/update/{id}', [courseController::class, 'updateCourse'])->name('updateCourse');
    Route::post('course/module/add/{id}', [courseController::class, 'addModule'])->name('addModule');
    Route::post('course/module/update/{id}', [courseController::class, 'updateModule'])->name('updateModule');
    Route::post('course/class/add/{id}', [courseController::class, 'addClass'])->name('addClass');
    Route::post('course/class/update/{id}', [courseController::class, 'updateClass'])->name('updateClass');

    /*
    | Rotas para controlar a área do usuário
    | Editar conta e perfil,
    | Extrato Financeiro
    | Dados fnanceiros
    | Qualidade da conta
    */
    Route::get('dashboard/profile', [dashboardController::class, 'profile'])->name('profile');

    Route::get('dashboard/profile/edit', [dashboardController::class, 'editProfile'])->name('editProfile');
    Route::post('dashboard/profile/edit', [dashboardController::class, 'editProfileSave'])->name('editProfileSave');

    Route::get('dashboard/finance-data', [dashboardController::class, 'financeData'])->name('financeData');
    Route::post('dashboard/finance-data', [dashboardController::class, 'financeDataSave'])->name('financeDataSave');
    Route::post('dashboard/finance-dell', [dashboardController::class, 'financeDataDel'])->name('financeDataDel');

    Route::get('dashboard/account-security', [dashboardController::class, 'accountSecurity'])->name('accountSecurity');
    Route::post('dashboard/account-security', [dashboardController::class, 'accountSecuritySave'])->name('accountSecuritySave');

    Route::get('dashboard/account-quality', [dashboardController::class, 'accountQuality'])->name('accountQuality');


    Route::get('dashboard/calc', [dashboardController::class, 'calc'])->name('calc');
    Route::get('dashboard/tips', [dashboardController::class, 'tips'])->name('tips');
    Route::get('dashboard/faq', [dashboardController::class, 'faq'])->name('faq');
    Route::get('dashboard/stats', [dashboardController::class, 'stats'])->name('stats');
    Route::get('dashboard/estrategias', [dashboardController::class, 'estrategias'])->name('estrategias');
    Route::get('dashboard/estrategia/{id}', [dashboardController::class, 'estrategia'])->name('estrategia');

    Route::get('dashboard/new-estrategia', [dashboardController::class, 'newStrategia'])->name('newStrategia');
    Route::post('dashboard/new-estrategia', [dashboardController::class, 'newStrategia_post'])->name('newStrategia_post');

    Route::get('dashboard/new-estrategia-edit/{id}', [dashboardController::class, 'newStrategiaEdit'])->name('newStrategiaEdit');

    Route::get('dashboard/new-sinal', [dashboardController::class, 'newSinal'])->name('newSinal');
    Route::post('dashboard/new-sinal', [dashboardController::class, 'newSinal_post'])->name('newSinal_post');


    Route::get('sinais-turbo/get-sinais', [turboController::class, 'getSinais'])->name('getSinais');


});


Route::get('sinais-turbo/set-sinais', [turboController::class, 'setSinais'])->name('setSinais');
#####---------------------------------------------------------------------------
/*
| Rotas para controlar o checkout.
*/
Route::get('checkout/{id}', [CheckoutController::class, 'checkout'])->name('checkout');


/*
| Rotas para controlar os auth do usuário
| Login
| Registro novo usuario
| Logout
*/
Route::get('auth/register', [authController::class, 'register'])->name('register');
Route::get('auth/register/{id}', [authController::class, 'registerAffiliate'])->name('registerAffiliate');
Route::post('auth/register', [authController::class, 'register_required'])->name('register_required');
Route::get('auth/login', [authController::class, 'login'])->name('login');
Route::post('auth/login', [authController::class, 'login_required'])->name('login_required');
Route::get('auth/logout', [authController::class, 'logout'])->name('logout');

Route::get('auth/veriff/{code}', [authController::class, 'veriffCode'])->name('veriffCode');
Route::post('auth/veriff', [authController::class, 'veriff'])->name('veriff');

Route::get('auth/recover', [authController::class, 'recover'])->name('recover');

Route::get('/teste', [Controller::class, 'teste'])->name('teste');


Route::get('/gerencianet/creat-pix', [GerencianetController::class, 'index'])->name('pix');
Route::get('/gerencianet/check-pix', [GerencianetController::class, 'check_pix'])->name('checkPix');
Route::get('/gerencianet/boleto', [GerencianetController::class, 'boleto'])->name('boleto');
Route::get('/gerencianet/credencial-card', [GerencianetController::class, 'CredentialCard'])->name('CredentialCard');
Route::post('/gerencianet/payment-card', [GerencianetController::class, 'payment_card'])->name('payment_card');
Route::get('/gerencianet/payment-cripto', [GerencianetController::class, 'cripto'])->name('cripto');




Route::get('/storage-link', function(){
    Artisan::call('storage:link');
});

Route::get('/migrate', function(){
    Artisan::call('migrate');
});



