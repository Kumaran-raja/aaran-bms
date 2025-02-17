# Directory structure

---

- [Default Design](#section-1)
- [Module Design](#section-2)

<a name="section-1"></a>
## Default Design

```code
    ├── app
    ├── bootstrap
    ├── config
    ├── database
    ├── public
    ├── resources
    ├── routes
    ├── storage
    ├── tests
    └── vendor
```

The default Laravel directory structure is as follows:
   
   - `app`: Contains the core code of the application.
   - `bootstrap`: Contains the application bootstrapping scripts.
   - `config`: Contains configuration files.
   - `database`: Contains database-related files such as migrations and seeders.
   - `public`: Contains the front controller and assets.
   - `resources`: Contains views, assets, and language files.
   - `routes`: Contains route files.
   - `storage`: Contains logs, cache, and other storage files.
   - `tests`: Contains test files.
   - `vendor`: Contains Composer dependencies.

---


<a name="section-2"></a>
## Modular Design
        The modular design of Aaran BMS is based on the Laravel framework, 
        which is a popular PHP framework for building web applications.

        `aaran`: Contains the root directory of the BMS.

```code
    └── aaran
        └── Blog
            ├── Database
            ├── Livewire
            ├── Models
            ├── Providers
            └── Tests
```


The directory named `aaran` is the root of a nested directory structure. 
The structure under `aaran` includes various subdirectories and files.

- `aaran`: Root directory.
    - `Blog`: Subdirectory under `aaran`.
        - `Database`: Contains database-related files such as migrations and seeders.
        - `Livewire`: Contains classes and Blade views.
        - `Models`: Contains models.
        - `Providers`: Contains service providers.
        - `Tests`: Contains test files.
      
    - `Blog`: Files under `aaran`.
        - `api`: Contains API routes.
        - `Config`: Contains configuration files.
        - `routes`: Contains route files.
            
This structure is typically used in PHP projects to organize code and resources in a modular and maintainable way.


