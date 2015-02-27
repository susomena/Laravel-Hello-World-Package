# Laravel-Hello-World-Package
Simple "Hello, world!" Laravel package

If you want to use this package you have to import it with composer with the following command:

    composer require susomena/hello

And then, after updating composer, add the HelloServiceProvider to your config/app.php providers array:

    'Susomena\Hello\HelloServiceProvider',

