#Simple blog build with Symfony 5

# Start:
Run ````symfony server:start```` 

# Tools:
Checkers 

You can run ```composer test``` to run all tests:

Code checkers (can be run with ```composer test-code```):
- composer ```composer validate --strict```
- phpcs ```vendor/bin/phpcs```
- phpstan ```vendor/bin/phpstan analyse```
- psalm ```vendor/bin/psalm  --show-info=true```
- phpcbf ```vendor/bin/phpcpd.bat --fuzzy --min-lines=5 --min-tokens=70 src/```
- twig lint ```php bin/console lint:twig templates/```


Asset checkers (can be run with ```composer test-asset```):
- eslint ```./node_modules/.bin/eslint assets```
- styleling ```npx stylelint "assets/**/*.scss"```

Fixer:
- phpcbf ```vendor/bin/phpcbf```
- php-cs-fixer ```vendor/bin/php-cs-fixer fix --allow-risky=yes```
