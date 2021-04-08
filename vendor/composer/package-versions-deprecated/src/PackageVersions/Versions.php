<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'pimcore/skeleton';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'amnuts/opcache-gui' => '3.2.1@d660fbee43ad12a1a5114bdedad88625cf4db91c',
  'bacon/bacon-qr-code' => '2.0.3@3e9d791b67d0a2912922b7b7c7312f4b37af41e4',
  'cache/tag-interop' => '1.0.1@909a5df87e698f1665724a9e84851c11c45fbfb9',
  'cbschuld/browser.php' => 'v1.9.6@9d07d6410977d494d7b8ecc2f3c877645c5477d9',
  'colinmollenhour/credis' => 'v1.12.1@c27faa11724229986335c23f4b6d0f1d8d6547fb',
  'composer/ca-bundle' => '1.2.9@78a0e288fdcebf92aa2318a8d3656168da6ac1a5',
  'composer/package-versions-deprecated' => '1.11.99.1@7413f0b55a051e89485c5cb9f765fe24bb02a7b6',
  'container-interop/container-interop' => '1.2.0@79cbf1341c22ec75643d841642dd5d6acd83bdb8',
  'dasprid/enum' => '1.0.3@5abf82f213618696dda8e3bf6f64dd042d8542b2',
  'defuse/php-encryption' => 'v2.2.1@0f407c43b953d571421e0020ba92082ed5fb7620',
  'doctrine/annotations' => '1.12.1@b17c5014ef81d212ac539f07a1001832df1b6d3b',
  'doctrine/cache' => '1.10.2@13e3381b25847283a91948d04640543941309727',
  'doctrine/collections' => '1.6.7@55f8b799269a1a472457bd1a41b4f379d4cfba4a',
  'doctrine/common' => '2.13.3@f3812c026e557892c34ef37f6ab808a6b567da7f',
  'doctrine/dbal' => '2.10.4@47433196b6390d14409a33885ee42b6208160643',
  'doctrine/doctrine-bundle' => '1.12.13@85460b85edd8f61a16ad311e7ffc5d255d3c937c',
  'doctrine/doctrine-cache-bundle' => '1.4.0@6bee2f9b339847e8a984427353670bad4e7bdccb',
  'doctrine/doctrine-migrations-bundle' => 'v1.3.2@49fa399181db4bf4f9f725126bd1cb65c4398dce',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '1.4.3@4650c8b30c753a76bf44fb2ed00117d6f367490c',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'doctrine/migrations' => 'v1.8.1@215438c0eef3e5f9b7da7d09c6b90756071b43e6',
  'doctrine/persistence' => '1.3.8@7a6eac9fb6f61bba91328f15aa7547f4806ca288',
  'doctrine/reflection' => '1.2.2@fa587178be682efe90d005e3a322590d6ebb59a5',
  'egulias/email-validator' => '2.1.25@0dbf5d78455d4d6a41d186da50adc1122ec066f4',
  'endroid/qr-code' => '3.9.6@9cdd4f5d609bfc8811ca4a62b4d23eb16976242f',
  'ezyang/htmlpurifier' => 'v4.13.0@08e27c97e4c6ed02f37c5b2b20488046c8d90d75',
  'facebook/graph-sdk' => '5.7.0@2d8250638b33d73e7a87add65f47fabf91f8ad9b',
  'firebase/php-jwt' => 'v5.2.1@f42c9110abe98dd6cfe9053c49bc86acc70b2d23',
  'friendsofphp/proxy-manager-lts' => 'v1.0.3@121af47c9aee9c03031bdeca3fac0540f59aa5c3',
  'friendsofsymfony/jsrouting-bundle' => '2.7.0@d56600542504148bf2faa2b6bd7571a6adf6799e',
  'geoip2/geoip2' => 'v2.11.0@d01be5894a5c1a3381c58c9b1795cd07f96c30f7',
  'google/apiclient' => 'v2.9.1@2fb6e702aca5d68203fa737f89f6f774022494c6',
  'google/apiclient-services' => 'v0.166.0@46b71684a100f3d976e0321cf24f487b314add68',
  'google/auth' => 'v1.15.0@b346c07de6613e26443d7b4830e5e1933b830dc4',
  'guzzlehttp/guzzle' => '6.5.5@9d4290de1cfd701f38099ef7e183b64b4b7b0c5e',
  'guzzlehttp/promises' => '1.4.1@8e7d04f1f6450fef59366c399cfad4b9383aa30d',
  'guzzlehttp/psr7' => '1.8.1@35ea11d335fd638b5882ff1725228b3d35496ab1',
  'html2text/html2text' => '4.3.1@61ad68e934066a6f8df29a3d23a6460536d0855c',
  'http-interop/http-factory-guzzle' => '1.0.0@34861658efb9899a6618cef03de46e2a52c80fc0',
  'hybridauth/hybridauth' => 'v2.17.0@06909cd8cbc1201f01db8a8d36bc8c06dd27223d',
  'jdorn/sql-formatter' => 'v1.2.17@64990d96e0959dff8e059dfcdc1af130728d92bc',
  'khanamiryan/qrcode-detector-decoder' => '1.0.4@07fceefb79d895e858e52921afb9c1433d2f3d5e',
  'laminas/laminas-code' => '3.4.1@1cb8f203389ab1482bf89c0e70a04849bacd7766',
  'laminas/laminas-eventmanager' => '3.2.1@ce4dc0bdf3b14b7f9815775af9dfee80a63b4748',
  'laminas/laminas-zendframework-bridge' => '1.1.1@6ede70583e101030bcace4dcddd648f760ddf642',
  'lcobucci/jwt' => '3.4.5@511629a54465e89a31d3d7e4cf0935feab8b14c1',
  'league/csv' => '9.6.2@f28da6e483bf979bac10e2add384c90ae9983e4e',
  'linfo/linfo' => 'v4.0.6@aea87565d4fd1124e637581b66a41c8b86ee22bb',
  'maennchen/zipstream-php' => '2.1.0@c4c5803cc1f93df3d2448478ef79394a5981cc58',
  'markbaker/complex' => '2.0.0@9999f1432fae467bc93c53f357105b4c31bb994c',
  'markbaker/matrix' => '2.1.2@361c0f545c3172ee26c3d596a0aa03f0cef65e6a',
  'maxmind-db/reader' => 'v1.10.0@07f84d969cfc527ce49388558a366ad376f1f35c',
  'maxmind/web-service-common' => 'v0.8.1@32f274051c543fc865e5a84d3a2c703913641ea8',
  'mjaschen/phpgeo' => '2.6.1@4b1c167dece6b0733bb5663f2e079a744dc36244',
  'monolog/monolog' => '1.26.0@2209ddd84e7ef1256b7af205d0717fb62cfc9c33',
  'mpratt/embera' => '2.0.17@e5a1131773236d2f56a5416ef064328cc91a973e',
  'mustangostang/spyc' => '0.6.3@4627c838b16550b666d15aeae1e5289dd5b77da0',
  'myclabs/deep-copy' => '1.10.2@776f831124e9c62e1a2c601ecc52e776d8bb7220',
  'myclabs/php-enum' => '1.7.7@d178027d1e679832db9f38248fcc7200647dc2b7',
  'neitanod/forceutf8' => 'v2.0.4@c1fbe70bfb5ad41b8ec5785056b0e308b40d4831',
  'nesbot/carbon' => '2.46.0@2fd2c4a77d58a4e95234c8a61c5df1f157a91bf4',
  'paragonie/constant_time_encoding' => 'v2.4.0@f34c2b11eb9d2c9318e13540a1dbc2a3afbd939c',
  'paragonie/random_compat' => 'v9.99.99@84b4dfb120c6f9b4ff7b3685f9b8f1aa365a0c95',
  'paypal/rest-api-sdk-php' => '1.14.0@72e2f2466975bf128a31e02b15110180f059fc04',
  'pear/net_url2' => 'v2.2.2@07fd055820dbf466ee3990abe96d0e40a8791f9d',
  'phive/twig-extensions-deferred' => 'v2.0.3@2d8514ef779e1e33724befed86be62cc3c23c405',
  'phpoffice/phpspreadsheet' => '1.17.1@c55269cb06911575a126dc225a05c0e4626e5fb4',
  'phpseclib/phpseclib' => '3.0.6@906a5fafabe5e6ba51ef3dc65b2722a677908837',
  'pimcore/pimcore' => 'v6.8.12@01ae62571cb2d738cc9b166dad7b0622ab5cbc1d',
  'piwik/device-detector' => '3.13.1@e90533302c58acf41f0d8075a0151537d0ddf34d',
  'presta/sitemap-bundle' => 'v2.5.0@fb83304ce365699b879cf7e998f1d5bbec8ddb27',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.1.1@8622567409010282b7aeebe4bb841fe98b58dcaf',
  'psr/http-client' => '1.0.1@2dfb5f6c5eff0e91e20e913f8c5452ed95b86621',
  'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'ramsey/uuid' => '3.9.3@7e1633a6964b48589b142d60542f9ed31bd37a92',
  'sabre/dav' => '3.2.3@a9780ce4f35560ecbd0af524ad32d9d2c8954b80',
  'sabre/event' => '3.0.0@831d586f5a442dceacdcf5e9c4c36a4db99a3534',
  'sabre/http' => 'v4.2.4@acccec4ba863959b2d10c1fa0fb902736c5c8956',
  'sabre/uri' => '1.2.1@ada354d83579565949d80b2e15593c2371225e61',
  'sabre/vobject' => '4.2.2@449616b2d45b95c8973975de23f34a3d14f63b4b',
  'sabre/xml' => '1.5.1@a367665f1df614c3b8fefc30a54de7cd295e444e',
  'scheb/two-factor-bundle' => 'v3.29.0@c7a86475c2d2f77e84ac3375592cefb0c2ad924b',
  'sensio/framework-extra-bundle' => 'v5.6.1@430d14c01836b77c28092883d195a43ce413ee32',
  'sensiolabs/ansi-to-html' => 'v1.2.1@94a3145aae4733ff933c8910263ef56d1ae317a9',
  'sonata-project/google-authenticator' => '2.2.0@feda53899b26af24e3db2fe7a3e5f053ca483762',
  'swiftmailer/swiftmailer' => 'v6.2.7@15f7faf8508e04471f666633addacf54c0ab5933',
  'symfony-cmf/routing' => '2.3.3@3c97e7b7709b313cecfb76d691ad4cc22acbf3f5',
  'symfony-cmf/routing-bundle' => '2.5.0@fb2284caa0bab2ffebe673e68e9c995da6ee4bdf',
  'symfony/contracts' => 'v1.1.10@011c20407c4b99d454f44021d023fb39ce23b73d',
  'symfony/monolog-bundle' => 'v3.7.0@4054b2e940a25195ae15f0a49ab0c51718922eb4',
  'symfony/polyfill-ctype' => 'v1.22.1@c6c942b1ac76c82448322025e084cadc56048b4e',
  'symfony/polyfill-iconv' => 'v1.22.1@06fb361659649bcfd6a208a0f1fcaf4e827ad342',
  'symfony/polyfill-intl-icu' => 'v1.22.1@af1842919c7e7364aaaa2798b29839e3ba168588',
  'symfony/polyfill-intl-idn' => 'v1.22.1@2d63434d922daf7da8dd863e7907e67ee3031483',
  'symfony/polyfill-intl-normalizer' => 'v1.22.1@43a0283138253ed1d48d352ab6d0bdb3f809f248',
  'symfony/polyfill-mbstring' => 'v1.22.1@5232de97ee3b75b0360528dae24e73db49566ab1',
  'symfony/polyfill-php72' => 'v1.22.1@cc6e6f9b39fe8075b3dabfbaf5b5f645ae1340c9',
  'symfony/polyfill-php73' => 'v1.22.1@a678b42e92f86eca04b7fa4c0f6f19d097fb69e2',
  'symfony/polyfill-php80' => 'v1.22.1@dc3063ba22c2a1fd2f45ed856374d79114998f91',
  'symfony/swiftmailer-bundle' => 'v3.5.2@6b72355549f02823a2209180f9c035e46ca3f178',
  'symfony/symfony' => 'v4.4.21@0139b7a74507b39b1ace35fa5544be5aee1dca5f',
  'tijsverkoyen/css-to-inline-styles' => '2.2.3@b43b05cf43c1b6d849478965062b6ef73e223bb5',
  'twig/extensions' => 'v1.5.4@57873c8b0c1be51caa47df2cdb824490beb16202',
  'twig/twig' => 'v2.14.4@0b4ba691fb99ec7952d25deb36c0a83061b93bbf',
  'umpirsky/country-list' => '2.0.6@6dddae6983c1bc4d314b513c5decb7c8c6c879dc',
  'vrana/adminer' => 'v4.8.0@b83c61fca3f491073cd5f5888a2acbf6f044366b',
  'vrana/jush' => 'v2.0.2@6f4e94d7660f1d610347e3b7871b0617d1cf5557',
  'webmozart/assert' => '1.10.0@6964c76c7804814a842473e0c8fd15bab0f18e25',
  'webmozarts/console-parallelization' => '1.1.0@60f99ee8953caf88679709622fd4fac58f7f4bbe',
  'willdurand/jsonp-callback-validator' => 'v1.1.0@1a7d388bb521959e612ef50c5c7b1691b097e909',
  'zendframework/zend-paginator' => '2.8.2@2b4d07d9475ed581278a28d065b238a0941402e2',
  'zendframework/zend-servicemanager' => '3.4.0@a1ed6140d0d3ee803fec96582593ed024950067b',
  'zendframework/zend-stdlib' => '3.2.1@66536006722aff9e62d1b331025089b7ec71c065',
  'behat/gherkin' => 'v4.8.0@2391482cd003dfdc36b679b27e9f5326bd656acd',
  'cache/integration-tests' => '0.16.0@a8d9538a44ed5a70d551f9b87f534c98dfe6b0ee',
  'codeception/codeception' => '2.4.5@5fee32d5c82791548931cbc34806b4de6aa1abfc',
  'codeception/phpunit-wrapper' => '7.8.2@cafed18048826790c527843f9b85e8cc79b866f1',
  'codeception/stub' => '2.1.0@853657f988942f7afb69becf3fd0059f192c705a',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'facebook/webdriver' => '1.7.1@e43de70f3c7166169d0f14a374505392734160e5',
  'phar-io/manifest' => '1.0.3@7761fcacf03b4d4f16e7ccb606d4879ca431fcf4',
  'phar-io/version' => '2.0.1@45a2ec53a73c70ce41d55cedef9063630abaf1b6',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.2.2@069a785b2141f5bcf49f3e353548dc1cce6df556',
  'phpdocumentor/type-resolver' => '1.4.0@6a467b8989322d92aa1c8bf2bebcc6e5c2ba55c0',
  'phpspec/prophecy' => '1.13.0@be1996ed8adc35c3fd795488a653f4b518be70ea',
  'phpunit/php-code-coverage' => '6.1.4@807e6013b00af69b6c5d9ceb4282d0393dbb9d8d',
  'phpunit/php-file-iterator' => '2.0.3@4b49fb70f067272b659ef0174ff9ca40fdaa6357',
  'phpunit/php-text-template' => '1.2.1@31f8b717e51d9a2afca6c9f046f5d69fc27c8686',
  'phpunit/php-timer' => '2.1.3@2454ae1765516d20c4ffe103d85a58a9a3bd5662',
  'phpunit/php-token-stream' => '3.1.2@472b687829041c24b25f475e14c2f38a09edf1c2',
  'phpunit/phpunit' => '7.5.20@9467db479d1b0487c99733bb1e7944d32deded2c',
  'sebastian/code-unit-reverse-lookup' => '1.0.2@1de8cd5c010cb153fcd68b8d0f64606f523f7619',
  'sebastian/comparator' => '3.0.3@1071dfcef776a57013124ff35e1fc41ccd294758',
  'sebastian/diff' => '3.0.3@14f72dd46eaf2f2293cbe79c93cc0bc43161a211',
  'sebastian/environment' => '4.2.4@d47bbbad83711771f167c72d4e3f25f7fcc1f8b0',
  'sebastian/exporter' => '3.1.3@6b853149eab67d4da22291d36f5b0631c0fd856e',
  'sebastian/global-state' => '2.0.0@e8ba02eed7bbbb9e59e43dedd3dddeff4a56b0c4',
  'sebastian/object-enumerator' => '3.0.4@e67f6d32ebd0c749cf9d1dbd9f226c727043cdf2',
  'sebastian/object-reflector' => '1.1.2@9b8772b9cbd456ab45d4a598d2dd1a1bced6363d',
  'sebastian/recursion-context' => '3.0.1@367dcba38d6e1977be014dc4b22f47a484dac7fb',
  'sebastian/resource-operations' => '2.0.2@31d35ca87926450c44eae7e2611d45a7a65ea8b3',
  'sebastian/version' => '2.0.1@99732be0ddb3361e16ad77b68ba41efc8e979019',
  'theseer/tokenizer' => '1.2.0@75a63c33a8577608444246075ea0af0d052e452a',
  'pimcore/skeleton' => '1.0.0+no-version-set@',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!class_exists(InstalledVersions::class, false) || !InstalledVersions::getRawData()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false) && InstalledVersions::getRawData()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}