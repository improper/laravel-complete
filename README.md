# Laravel Complete - A Bootstrapped Laravel 9

This project is based on a fresh install of Laravel 9. Each solution included below is preconfigured to work with Laravel!

**For a ready-to-go dev environment, includes:**
 * **Lando**: including Redis (for session & cache) and MariaDB
 * **Livewire**
 * **Laravel Dusk**:
   * Write your Dusk tests using Pest
   * Completely containerized within Lando
 * **Pest**
   * Ships with Dusk compatibility
   * Ships with Livewire example tests
 * **Jetstream**
 * **Mailhog**: Laravel-connected out-of-the-box
 * **Vite**: preconfigured to work with hot reloading on Lando!

> **What is Lando?**
>
> Lando is a local development environment tool that provides a simple, powerful, and flexible way to develop websites. It comes with a number of services, such as mariadb for your database needs, redis for cache and sessions, and mailhog for testing emails.

It's suggested that you read this entire document, but head to [Getting Started](#getting_started) if you're ready for that.

## Preconfigured Tools
This project comes with Livewire, Pest, Jetstream, Mailhog, Vite, Lando, and Laravel Dusk preconfigured and ready to use with Pest & Lando. 

> **Note:** Before using Dusk, make sure that your `APP_URL` in the `.env` file is set to your Lando app URL.

## Testing
An example Livewire test is provided. You can run it with `lando pest --filter` livewire.

## Development
You can launch Vite with hot reloading by using lando npm run dev or lando dev.

## Command Shortcuts
You can access the `composer`, `pest`, `artisan`, `php`, `npm` and `dusk` commands by running `lando {command}`. You can add more command shortcuts by adding a `tooling:` section to the `.lando.local.yml`. See `.lando.dist.yml` file for the defaults.

## Further Documentation
For more information on using Laravel, Livewire, Pest, Jetstream, Mailhog, Vite, Dusk, and Lando, please refer to their respective documentation:

* [Laravel Documentation](https://laravel.com/docs)
* [Livewire Documentation](https://laravel-livewire.com/docs)
* [Pest Documentation](https://pestphp.com/docs)
* [Jetstream Documentation](https://jetstream.laravel.com/2.x/concept-overview.html)
* [Mailhog Documentation](https://github.com/mailhog/MailHog)
* [Vite Documentation](https://vitejs.dev/config/)
* [Laravel Dusk](https://laravel.com/docs/9.x/dusk)
* [Lando Documentation](https://docs.lando.dev/) | [Landofile](https://docs.lando.dev/core/v3/#landofile) | [Lando Laravel Recipe](https://docs.lando.dev/laravel/getting-started.html)

# Getting Started
1. Copy the `.lando.local.yml.example` file to `.lando.local.yml`.
   * Set the `name` property to something unique
   * Update the `appserver_nginx` `proxy` to a URL that makes sense for your project.
2. Copy `.env.example` to `.env`
   * Ensure `APP_URL` is set to the URL you assigned in `.lando.local.yml` if you want to use Laravel Dusk
3. Run `lando start` to start your local development environment.

**Ready to run Vite with hot reloading?**

1. Make sure that Lando is running
2. Run `lando npm run dev` (shortcut `lando dev`)

