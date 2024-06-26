<?php
    namespace App\Providers;
    use Luchavez\StarterKit\Abstracts\BaseStarterKitServiceProvider as ServiceProvider;
    /**
     * Class StarterBoilerplateServiceProvider
     * @author James Carlo Luchavez <jamescarloluchavez@gmail.com>
     */
    class StarterBoilerplateServiceProvider extends ServiceProvider {
        /**
         * @var array
         */
        protected array $commands = [];
        /**
         * @var string|null
         */
        protected string | null $route_prefix = null;
        /**
         * @var bool
         */
        protected bool $prefix_route_with_file_name = false;
        /**
         * @var bool
         */
        protected bool $prefix_route_with_directory = false;
        /**
         * Polymorphism Morph Map
         * @link    https://laravel.com/docs/8.x/eloquent-relationships#custom-polymorphic-types
         * @example [ 'user' => User::class ]
         * @var array
         */
        protected array $morph_map = [];
        /**
         * Laravel Observer Map
         * @link    https://laravel.com/docs/8.x/eloquent#observers
         * @example [ UserObserver::class => User::class ]
         * @var array
         */
        protected array $observer_map = [];
        /**
         * Laravel Policy Map
         * @link    https://laravel.com/docs/8.x/authorization#registering-policies
         * @example [ UserPolicy::class => User::class ]
         * @var array
         */
        protected array $policy_map = [];
        /**
         * Laravel Repository Map
         * @var array
         * @example [ UserRepository::class => User::class ]
         */
        protected array $repository_map = [];
        /**
         * Publishable Environment Variables
         * @var array
         * @example [ 'HELLO_WORLD' => true ]
         */
        protected array $env_vars = [];
        /**
         * Perform post-registration booting of services.
         * @return void
         */
        public function boot() : void {
            parent::boot();
        }
        /**
         * Register any package services.
         * @return void
         */
        public function register() : void {
            parent::register();
        }
        /**
         * Get the services provided by the provider.
         * @return array
         */
        public function provides() : array {
            return [];
        }
        /**
         * Console-specific booting.
         * @return void
         */
        protected function bootForConsole() : void {
            // Registering package commands.
            $this->commands($this->commands);
        }
    }
