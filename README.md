# Tritility CSV Test

# Dependencies: PHP 7.2.5+, Lumen 7.0+, PHPSpreadsheet 1.14+

Install the package into Lumen.

Add '"tritilitytest\\matthewcsvtest\\": "vendor/tritilitytest/matthewcsvtest"' to 'psr-4' attribute in root composer.json.

Register Service Provider: Add '$app->register(tritilitytest\matthewcsvtest\MatthewCSVTestServiceProvider::class);' to 'bootstrap\app.php'.

Once the package has been installed, please run the command 'php artisan GenerateCSV' in your console.

# Vendor 'Tritility' was taken in Packagist to settled with 'TritilityTest'.