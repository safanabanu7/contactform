<?php
    namespace TEST\ContactForm;
    use Illuminate\Support\ServiceProvider;
    class ContactFormServiceProvider extends ServiceProvider {
        public function boot()
        {
            include __DIR__.'/routes.php';
            $this->loadViewsFrom(__DIR__.'/resources/views', 'contactform');
            $this->loadMigrationsFrom(__DIR__.'/Database/Migrations');
        }
        public function register()
        {
        }
    }
    ?>