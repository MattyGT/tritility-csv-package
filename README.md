# Tritility CSV Test

# Dependencies: PHP 7.2.5+, Lumen 7.0+, PHPSpreadsheet 1.14+

Run 'composer require tritilitytest/matthewcsvtest'
Run 'composer require phpoffice/phpspreadsheet'

Add '"tritilitytest\\\matthewcsvtest\\\\": "vendor/tritilitytest/matthewcsvtest"' to 'psr-4' attribute in root composer.json.

Register Service Provider: Add '$app->register(tritilitytest\matthewcsvtest\MatthewCSVTestServiceProvider::class);' to 'bootstrap\app.php'.

After the above, run 'composer dumpautoload'.

Place xls files in the 'public/spreadsheets' folder to be converted.

Once the above steps have been completed, please run the command 'php artisan GenerateCSV' in your console.

# Vendor 'Tritility' was taken in Packagist to settled with 'TritilityTest'.
