#Simple blog build with Symfony 5

# Start:
Run ````symfony server:start```` 

# Tools:
Checkers:
- phpcs ```vendor/bin/phpcs```
- phpstan ```vendor/bin/phpstan analyse```
- twig lint ```php bin/console lint:twig templates/```


- eslint ```./node_modules/.bin/eslint assets```

TODO:
Implement https://github.com/sebastianbergmann/phpcpd

Fixer:
- phpcbf ```vendor/bin/phpcbf```

- php-cs-fixer ```vendor/bin/php-cs-fixer fix --allow-risky=yes```
