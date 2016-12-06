# JMI Inventaris Modul Peminjaman

Testing module peminjaman


## Installation Step
1. Composer  
    * require and repositories
    
    ```
    "require": {
        ...

        "jalinmodule/peminjaman": "dev-master"
    },
    ```
    ```
    "repositories":[
        ...

        {
            "type":"git",
            "url":"git@git.ip:jalinmodule/peminjaman.git"
        }
    ],
    ```
    * Update composer
    
    ```
    composer update
    ```

2. config/app.php 
    * Moduls
    
    ```
    'moduls' => [
        ...
        'barang' => '/barang',
        'karyawan' => '/karyawan',
        'peminjaman' => '/peminjaman',
        ],
    ```
    * providers
   
    ```
    Jalinmodule\Barang\BarangServiceProvider::class,
    Jalinmodule\Karyawan\KaryawanServiceProvider::class,
    Jalinmodule\Peminjaman\PeminjamanServiceProvider::class,
    ```
    
3. artisan
   
    ```
    php artisan vendor:publish
    ```

    ```
    php artisan migrate
    ```

    
## Usage example
```
http://localhost:8000/peminjaman
```