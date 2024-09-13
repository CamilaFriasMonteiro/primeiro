# primeiro
Primeiro repo da Camila :)

## Multiple SSH Keys
https://gist.github.com/jexchan/2351996

https://medium.com/@alemartinezz/how-to-manage-multiple-ssh-keys-in-your-dev-workflow-52ec1a9ec157

## Convert to PHP 8
    ### Reptor
    https://www.youtube.com/watch?v=Kej0IY_JLF0 

## PHPUnit
    ### Docker
        RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

    ### Config File
        Create configuration File
        <?xml version="1.0" encoding="UTF-8"?>
            <phpunit xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
                    xsi:noNamespaceSchemaLocation="https://schema.phpunit.de/11.3/phpunit.xsd"
                    bootstrap="vendor/autoload.php"
                    cacheDirectory=".phpunit.cache"
                    executionOrder="depends,defects"
                    shortenArraysForExportThreshold="10"
                    beStrictAboutOutputDuringTests="true"
                    displayDetailsOnPhpunitDeprecations="true"
                    failOnPhpunitDeprecation="true"
                    failOnRisky="true"
                    failOnWarning="true">
                <testsuites>
                    <testsuite name="default">
                        <directory>src/tests</directory>
                    </testsuite>
                </testsuites>

                <source ignoreIndirectDeprecations="true" restrictNotices="true" restrictWarnings="true">
                    <include>
                        <directory>src</directory>
                    </include>
                </source>

                <coverage includeUncoveredFiles="true"
                    pathCoverage="false"
                    ignoreDeprecatedCodeUnits="true"
                    disableCodeCoverageIgnore="true">
                    <report>
                        <clover outputFile="clover.xml"/>
                        <cobertura outputFile="cobertura.xml"/>
                        <crap4j outputFile="crap4j.xml" threshold="50"/>
                        <html outputDirectory="html-coverage" lowUpperBound="50" highLowerBound="90"/>
                        <php outputFile="coverage.php"/>
                        <text outputFile="coverage.txt" showUncoveredFiles="false" showOnlySummary="true"/>
                        <xml outputDirectory="xml-coverage"/>
                    </report>
                </coverage>
            </phpunit>


    ### Shell
        php -d xdebug.mode=coverage ./vendor/bin/phpunit --colors=always