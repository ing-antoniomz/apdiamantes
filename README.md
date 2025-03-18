<p align="left" style="display: flex; align-items: center;">
    <img src="resources/assets/apdiamantes/media/logo_negro.svg" alt="Logo" style="height: 100px; margin-right: 10px;">
    <span style="font-size: 32px; font-weight: bold; display: inline-block;">APDiamantes</span>
</p>

## Tecnologias

- NPM  => 9.0
- NODE  => 18.20.4
- COMPOSER  => 2.4.0
- PHP  => 8.1.30
- APACHE  => 2.4.62
- LARAVEL  => 10.48.23
- POSTGRESQL  => 13.14
- METRONIC  => 8.1.4 - demo3
- BOOTSTRAP  => 5.2.0
- PHP MODULES  =>
    Core
    date
    libxml
    openssl
    pcre
    zlib
    filter
    hash
    json
    pcntl
    random
    Reflection
    SPL
    session
    standard
    sodium
    mysqlnd
    PDO
    xml
    calendar
    ctype
    curl
    dom
    mbstring
    FFI
    fileinfo
    ftp
    gd
    gettext
    iconv
    exif
    mysqli
    pdo_mysql
    pdo_pgsql
    pgsql
    Phar
    posix
    readline
    shmop
    SimpleXML
    sockets
    sysvmsg
    sysvsem
    sysvshm
    tokenizer
    xmlreader
    xmlwriter
    xsl
    zip
    Zend OPcache

- APACHE MODULES  =>
    core_module (static)
    so_module (static)
    watchdog_module (static)
    http_module (static)
    log_config_module (static)
    logio_module (static)
    version_module (static)
    unixd_module (static)
    access_compat_module (shared)
    actions_module (shared)
    alias_module (shared)
    auth_basic_module (shared)
    authn_core_module (shared)
    authn_file_module (shared)
    authz_core_module (shared)
    authz_host_module (shared)
    authz_user_module (shared)
    autoindex_module (shared)
    deflate_module (shared)
    dir_module (shared)
    dnssd_module (shared)
    env_module (shared)
    filter_module (shared)
    mime_module (shared)
    mpm_prefork_module (shared)
    negotiation_module (shared)
    php_module (shared)
    proxy_module (shared)
    proxy_fcgi_module (shared)
    reqtimeout_module (shared)
    rewrite_module (shared)
    setenvif_module (shared)
    socache_shmcb_module (shared)
    ssl_module (shared)
    status_module (shared)

## Desplegar

Validar primero que clase de extensiones requiere Laravel en php, asi como los modulos de apache necesarios. Esto en la documentación oficial de [Laravel](https://laravel.com/docs/10.x/installation).
También instalar las versiones especificas de NPM, NODEJS y POSTGRESQL.

Descarga el proyecto.
```bash
git clone git@github.com:Tonho1994/apdiamantes.git
```

Instala las dependencias de `Composer`.
```bash
composer install
```

Instala las dependencias de  `NPM`.
```bash
npm install
```

Compila los assets (sass, js, media) al folder public.
```bash
npm run dev --demo3
```

Crea la base de datos y pon los datos en el archivo .env

`DB_HOST`
`DB_PORT`
`DB_DATABASE`
`DB_USERNAME`
`DB_PASSWORD`

Corre las migraciones y los seeders.
```bash
php artisan migrate:fresh --seed
```

Para servidor local correr el siguiente comando, o en su defecto, configurar apache para que cargue el proyecto
```bash
php artisan serve
```

### Colores

| Color             | Hex                                                                |
| ----------------- | ------------------------------------------------------------------ |
| Amarillo | ![#DAE609](https://via.placeholder.com/10/DAE609?text=+) #DAE609 |
| Rosa | ![#F716BB](https://via.placeholder.com/10/F716BB?text=+) #F716BB |
| Gris | ![#AFACAC](https://via.placeholder.com/10/AFACAC?text=+) #AFACAC |
| Azul | ![#0A1AF7](https://via.placeholder.com/10/0A1AF7?text=+) #0A1AF7 |


### Metronic - Bootstrap 5 HTML, React, Angular, VueJS & Laravel Admin Dashboard Theme

- [Documentacion Metronic-Laravel](https://preview.keenthemes.com/laravel/metronic/docs/index)

- [Documentacion Metronic-Html](https://preview.keenthemes.com/html/metronic/docs/index)

### Laravel - The PHP Framework for Web Artisans

- [Documentacion Laravel](https://laravel.com/docs/10.x)

### Bootstrap - Build fast, responsive sites with Bootstrap

- [Documentacion Bootstrap](https://getbootstrap.com/docs/5.2/getting-started/introduction/)
