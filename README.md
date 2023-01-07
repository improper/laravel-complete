This repo ships Laravel bootstrapped with Lando.

## Includes

* Lando to launch Laravel services
* Mariab DB
* Redis for cache & sessions
* Mailhog to catch all mailsends
* `.env.example` preset to use the Lando services

## How to Use

* Clone the repo
* Copy `.lando.local.yml.example` to set `.lando.local.yml` and update the values as needed
* Start your Laravel app: `lando start`
  * This will expose your app url
  * This will expose mailhog to https://mail.lndo.site. You can override this using `.lando.local.yml`  
* Optionally, run Vite when ready: `lando dev`
* Optionally, build vite when ready: `lando build`
