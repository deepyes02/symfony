__Scaffolding Symfony Project__

0. See Recipes installed on the project
```php
composer recipes
```

1. Describe a Controller with Response src\Controller\LuckyController.php

2. Describe a route config\routes.yaml

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

7. List doctrine list
```php
php bin/console list doctrine
```

8. Create a Schema / Entity
```php
php bin/console make:entity
```

9. Run Migration

```php
php bin/console make:migration
```

10.  Next: Review the new migration "migrations/Version20220612103243.php" Then: Run the migration with php bin/ doctrine:migrations:migrate  
```php
php bin/console doctrine:migrations:migrate
```

11. Validator before using it
```php
composer require symfony/validator doctrine/annotations
```
