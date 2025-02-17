# Directory structure

---

- [First Section](#section-1)

<a name="section-1"></a>
## Default Structure

```code
    ├── aaran
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

```code
    └── aaran
        └── Blog
            └── src
                ├── Config
                ├── Console
                ├── Contracts
                ├── Database
                ├── Events
                ├── Http
                ├── Listeners
                ├── Mail
                ├── Models
                ├── Providers
                ├── Routes
                ├── Repositories
                └── Resources
```


Directory named `aaran` which is the root of a nested directory structure. 
The structure under `aaran` includes various subdirectories and files.

- `aaran`: Root directory.
    - `Blog`: Subdirectory under `aaran`.
            - `Config`: Contains configuration in file.
            - `routes`: Contains routes in file.
            - `api`: Contains api routes in file.
            -
            - `Database`: Contains database-related files such as migrations and seeders.
            - `Http`: Contains HTTP-related files such as controllers, middleware, and requests.
            - `Listeners`: Contains event listener files.
            - `Mail`: Contains mail-related files.
            - `Models`: Contains model files.
            - `Providers`: Contains service provider files.
            - `Routes`: Contains route files.
            - `Repositories`: Contains repository files.
            - `Resources`: Contains resource files such as assets, language files, and views.

This structure is typically used in PHP projects to organize code and resources in a modular and maintainable way.



```code
    └── aaran
        └── Blog
            └── src
                ├── Config
                │   ├── acl.php
                │   ├── admin-menu.php
                │   ├── shop-menu.php
                │   └── system.php
                ├── Console
                │   └── Commands
                ├── Contracts
                │   └── Post.php
                ├── Database
                │   ├── Migrations
                │   │   └── 2024_10_10_122434_create_posts_table.php
                │   └── Seeders
                ├── Events
                ├── Http
                │   ├── Controllers
                │   │   ├── Admin
                │   │   │   └── PostController.php
                │   │   └── Shop
                │   │       └── PostController.php
                │   ├── Middleware
                │   └── Requests
                ├── Listeners
                ├── Mail
                ├── Models
                │   ├── Post.php
                │   └── PostProxy.php
                ├── Providers
                │   ├── BlogServiceProvider.php
                │   └── ModuleServiceProvider.php
                ├── Routes
                │   ├── admin-routes.php
                │   └── shop-routes.php
                ├── Repositories
                │   └── PostRepository.php
                └── Resources
                    ├── assets
                    │   ├── images
                    │   │   └── blog-icon.png
                    │   ├── js
                    │   │   └── app.js
                    │   └── css
                    │       └── app.css
                    ├── lang
                    │   └── app.php
                    └── views
                        ├── admin
                        │   └── blog
                        │      ├── create.blade.php
                        │      ├── edit.blade.php
                        │      └── index.blade.php
                        └── shop
                            └── default
                                ├── index.blade.php
                                └── blog-details.blade.php


```
