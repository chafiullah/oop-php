# Installation
You need composer to install the package. To install the package run the following command:
        composer require --dev phpunit/phpunit
# Create the XML file with the following configuration
        <?xml version="1.0" encoding="UTF-8"?>
        <phpunit bootstrap="vendor/autoload.php" colors="true" verbose="true">
            <testsuites>
                <testsuite name="OOP Test">
                    <directory>./tests</directory>
                </testsuite>
            </testsuites>
        </phpunit>
# For better demonstration check out the whole [project](/test_project)