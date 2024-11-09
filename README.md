# Demonstração do Uso

<div align="center">
    
[![Watch the video](https://github.com/user-attachments/assets/ce856177-d705-4205-86d5-7c532f39ef9c)](https://youtu.be/XLg7ZcxgnEM)

</div>

<h1>Como Executar</h1>

<h2>Instale na sua maquina, caso não possua.</h2> 
<ul>
<li><a href="https://www.php.net/downloads.php">PHP</a></li>
<li><a href="https://www.apachefriends.org/pt_br/index.html">XAMPP</a></li>
<li><a href="https://getcomposer.org/download/">Composer</a></li>

<h2>Configurando o Banco de Dados do Projeto</h2>

<li>Ligue o <strong>Apache</strong> e o <strong>MySQL</strong> no <strong>XAMPP</strong></li>

<img src = "https://github.com/user-attachments/assets/90c3c84f-d48b-40dd-a5b8-a18680ef029c" width="600px">

<li>Pegue o arquivo ".env.example" crie uma copia e o renomeie para ".env"</li>

<img src = "https://github.com/user-attachments/assets/087d2c04-f2e7-4a59-84d8-d860293a16f9" width="300px">

<li>No arquivo .env, defina a variavel "DB_DATABASE" como "fichas_op"</li>

<img src = "https://github.com/user-attachments/assets/66dd51bc-4264-401e-946d-d105614e6521" width="300px">

<li>Agora abra o XAMPP, e clique na ação "Admin" do MySQL</li>

<img src = "https://github.com/user-attachments/assets/b0ac4565-7abe-4acc-8dad-b4ff5784335d" width="600px">

<li>No menu do phpMyAdmin, selecione "Novo" -> Nomeie o banco como "fichas_op" -> clique em "Criar"</li>

<img src = "https://github.com/user-attachments/assets/409c6c90-9128-4e2c-a54b-8679a1cc6cd9" width="600px">

<br>

<hr>

Executando as migrations (criação das tabelas do banco)


<li>Execute em um <strong>Prompt de Comando</strong> do VsCode:</li> </li>
    
    php artisan migrate

<li>Caso não possua o npm instalado:</li>

```
npm i
```    

> [!NOTE]
> As operações acima são necessárias somente na primeira execução, com exceção de ligar o Apache e o MySQL no XAMPP (essas ações precisam ser executadas para iniciar a aplicação)

<li>Em seguida:</li>

<br>

```
php artisan serve
```

Abra um novo <strong>Prompt de Comando</strong> do VsCode e execute:

```
npm run dev
```

<br>

> [!WARNING]
> Não execute esses comandos pelo PowerShell do vsCode, pois ele pode te impedir de utilizar estes comandos. Utilize o <strong>Prompt de Comando</strong>

<img src = "https://github.com/user-attachments/assets/02664c35-4751-4ff1-aa6f-38af11846fdf" width="300px">

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

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

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
