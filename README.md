<div align="center">
    <img src="resources/assets/apdiamantes/media/logo_blanco_2.png" alt="Logo" style="height: 100px;">
    <div style="font-size: 36px; font-weight: bold; margin-top: 10px;">APDiamantes</div>
</div>

## Tecnologias

- NPM         => 9.2
- NODE        => 18.19
- COMPOSER    => 2.8.9
- PHP         => 8.2.28
- LARAVEL     => 12.12.0
- METRONIC    => 8.1.4 - demo3
- BOOTSTRAP   => 5.2.0
- DOCKER      => 28.2.2
   NGINX      => 1.27.5
   REDIS      => 8.0.2
   POSTGRESQL  => 15.13

## Desplegar

Descarga el proyecto.
```bash
git clone git@github.com:Tonho1994/apdiamantes.git
```

Construye los contenedores usando `Docker`.
```bash
docker compose build --no-cache
```

Levantamos los contenedores.
```bash
docker compose up -d
```

Corre las migraciones y los seeders dentro del contenedor `laravel-app` de ser necesario.
```bash
php artisan migrate:fresh --seed
```

La aplicacion estara corriendo en http://localhost:8000
