<br>
<p align="center">
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://lncodes.com">
    <img src="https://lncodes.com/wp-content/uploads/2020/09/lncodes-logo-animated.gif" height="175"></img>
  </a>
</p>

<h1 align="center">Authentication In Laravel</h1>
<p align="center">
  <a href="https://github.com/lncodes/laravel-authentication/actions/workflows/test.yml">
      <img src="https://github.com/lncodes/laravel-authentication/actions/workflows/test.yml/badge.svg">
  </a> 
  <a href="https://sonarcloud.io/dashboard?id=lncodes_laravel-authentication">
      <img src="https://sonarcloud.io/api/project_badges/measure?project=lncodes_laravel-authentication&metric=alert_status">
  </a>
</p>
 
<p align="center">
  <a href="#introduction">Introduction</a> •
  <a href="#setup">Setup</a> •
  <a href="#contribute">Contribute</a> •
  <a href="#discuss">Discuss</a> •
  <a href="#support">Support</a> •
  <a href="#license">License</a>
</p>

---

<h2 id="introduction">✨ Introduction</h2>

This project is used to show an example implementation of **Authentication In Laravel**. To see more information about the implementation steps, you can refer to [Documentation](https://lncodes.com/studio/laravel/authentication/).

<h3 id="objective">🎯 Objective</h3>

Here some objective we want to achieve from this project :
1. Create a simple implementation example of **Authentication In Laravel** that is easy to understand.
2. Create an example implementation of **Authentication In Laravel** that relevant over time.

<h2 id="setup">🧰 Setup </h2>

### ⚙️ Installation 
Follow these steps to install **Authentication In Laravel** project
1. Clone or download this project.
``` bash 
git clone https://github.com/lncodes/laravel-authentication.git
```
2. Open project through terminal.
``` bash
cd <your-project-directory>
```
3. Install composer dependency.
``` bash
composer install
```

### 💻 Usage
Follow these steps to use Authentication In Laravel
1. Generate ***.env*** file.
``` 
cp .env.example .env
```
2. Change database configuration ( ***.env*** )
```
DB_CONNECTION=your_db_connection
DB_HOST=your_db_host
DB_PORT=your_db_port
DB_DATABASE=your_db_name
DB_USERNAME=your_db_username
DB_PASSWORD=your_db_password
```
3. Generate app encryption key.
``` 
php artisan key:generate
```
4. Migrate and seeding database
``` 
php aritsan db:migration --seed
```
5. Run the project.
``` 
php artisan serve
```

<h2 id="contribute">💖 Contribute</h2>

Want to contribute to this project? Please read our project [Contribution Guidelines](CONTRIBUTING.md).

<h2 id="discuss">💬 Discuss</h2>

If you have any questions about this project, you can go to [Discussion Forum](https://github.com/lncodes/laravel-authentication/discussions) or directly comment on [Documentation](https://lncodes.com/studio/laravel/authentication/) page.

<h2 id="support">💌 Support</h2>

Please support us to make other helpful content.

<a href="https://www.buymeacoffee.com/lncodes" target="_blank"><img src="https://cdn.buymeacoffee.com/buttons/v2/default-yellow.png" alt="Buy Me A Coffee" height="64"></a>

<h2 id="license"> 📋 License</h2>

This project is open-sourced software licensed under [MIT](https://github.com/lncodes/laravel-authentication/blob/master/LICENSE) license.