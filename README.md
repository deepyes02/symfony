** Scaffolding Symfony Project **

0. See Recipes installed on the project
```php
composer recipes
```

1. Describe a Controller with Response
src\Controller\LuckyController.php

2. Describe a route
config\routes.yaml

3. Alternatively, describe route by requiring annotations
```php
composer require annotations
```
4. Install templating library - twig
```php
composer require twig
```

5. Install expression lanugage that appears above route in annotation
```php
composer require symfony/expression-language;
```

6. THe Doctrine ORM
```php
composer require symfony/orm-pack
composer require --dev symfony/maker-bundle
``` 