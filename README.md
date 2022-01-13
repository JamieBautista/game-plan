<!-- <p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p> -->

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Cloning Repository

When cloning and forking to another project, do the steps below:

* Create a new/blank repository.
* Enter these commands in the terminal
  ```sh
  git clone https://github.com/JamieBautista/<forked-repo>.git
  cd <forked-repo>
  git remote add upstream https://github.com/JamieBautista/website-base.git
  git pull upstream main
  git push origin main
  ```

When setting up the project locally, do the steps below:

* Create develop branch. Enter these commands in the terminal:
  ```sh
  git pull
  git checkout -b develop
  git push origin develop
  ```
* Set up the project. Enter these commands in laragon terminal:
  ```sh
  composer update
  npm install --no-bin-links
  composer require laravel/ui
  php artisan ui bootstrap
  npm install
  npm run dev
  ```

### Useful Reference Links

- [Laravel App using Laragon](https://www.codingfix.com/how-to-develop-locally-a-laravel-app-using-laragon/)
- [Creating New Branch](https://github.com/Kunena/Kunena-Forum/wiki/Create-a-new-branch-with-git-and-manage-branches)
- [Generate New Token for Windows](https://stackoverflow.com/questions/68775869/support-for-password-authentication-was-removed-please-use-a-personal-access-to)
- [Add Project Locally](https://docs.github.com/en/github/importing-your-projects-to-github/importing-source-code-to-github/adding-an-existing-project-to-github-using-the-command-line)
- [Basic Commit](https://www.earthdatascience.org/workshops/intro-version-control-git/basic-git-commands/)

