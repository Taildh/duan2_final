<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();


        // 2019/11/5 Bạn tạ van nam tạo ra
        // @author Namtv
        $this->mapProductRoutes();
        $this->mapPostRoutes();
        $this->mapControllerRoutes();
        $this->mapSlideshowRoutes();
        $this->mapContactRoutes();
        $this->mapEventRoutes();
        $this->mapCategoryRoutes();
        $this->mapPostsRoutes();
        $this->mapWebsite();
        $this->mapUser();
        $this->mapComment();
        $this->mapSlideImageRoutes();
        $this->mapCartRoutes();


        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {

    Route::middleware('web','auth','moduser.check')
             ->prefix('/')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }

    protected function mapProductRoutes()
    {
    Route::middleware('web','auth','mod.check')
             ->prefix('admins/product')
             ->namespace($this->namespace)
             ->group(base_path('routes/product.php'));
    }

    protected function mapPostRoutes()
    {
        Route::middleware('web','auth','modedit.check')
             ->prefix('admins/post')
             ->namespace($this->namespace)
             ->group(base_path('routes/post.php'));
    }


    protected function mapControllerRoutes()
    {
        Route::middleware('web','auth','mod.check')
             ->prefix('admins/category')
             ->namespace($this->namespace)
             ->group(base_path('routes/category.php'));
    }

    protected function mapSlideshowRoutes()
    {
        Route::middleware('web','auth','mod.check')
             ->prefix('admins/slideshow')
             ->namespace($this->namespace)
             ->group(base_path('routes/slideshow.php'));
    }

    protected function mapSlideImageRoutes()
    {
        Route::middleware('web','auth','mod.check')
             ->prefix('admins/slideshow/image')
             ->namespace($this->namespace)
             ->group(base_path('routes/slideshow_children.php'));
    }

    protected function mapContactRoutes()
    {
        Route::middleware('web','auth','mod.check')
             ->prefix('admins/contact')
             ->namespace($this->namespace)
             ->group(base_path('routes/contact.php'));
    }

    protected function mapEventRoutes()
    {
        Route::middleware('web','auth','mod.check')
             ->prefix('admins/event')
             ->namespace($this->namespace)
             ->group(base_path('routes/event.php'));
    }

    protected function mapCategoryRoutes()
    {
        Route::middleware('web','auth','mod.check')
             ->prefix('admins/category')
             ->namespace($this->namespace)
             ->group(base_path('routes/category.php'));
    }

    protected function mapPostsRoutes()
    {
        Route::middleware('web','auth','mod.check')
             ->prefix('admins/tintuc')
             ->namespace($this->namespace)
             ->group(base_path('routes/tintuc.php'));
    }
    protected function mapWebsite()
    {
        Route::middleware('web')
             ->prefix('/')
             ->namespace($this->namespace)
             ->group(base_path('routes/website.php'));
    }

    protected function mapUser()
    {
        Route::middleware('web','auth','mod.check')
             ->prefix('admins/taikhoan')
             ->namespace($this->namespace)
             ->group(base_path('routes/user.php'));
    }

    protected function mapComment()
    {
        Route::middleware('web','auth','mod.check')
             ->prefix('admins/comment')
             ->namespace($this->namespace)
             ->group(base_path('routes/comment.php'));
    }

    protected function mapCartRoutes()
    {
        Route::middleware('web','auth','mod.check')
             ->prefix('admins/cart')
             ->namespace($this->namespace)
             ->group(base_path('routes/cart.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }
}
