<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Ip2Region' => $vendorDir . '/zoujingli/ip2region/Ip2Region.php',
    'League\\Flysystem\\AdapterInterface' => $vendorDir . '/league/flysystem/src/AdapterInterface.php',
    'League\\Flysystem\\Adapter\\AbstractAdapter' => $vendorDir . '/league/flysystem/src/Adapter/AbstractAdapter.php',
    'League\\Flysystem\\Adapter\\AbstractFtpAdapter' => $vendorDir . '/league/flysystem/src/Adapter/AbstractFtpAdapter.php',
    'League\\Flysystem\\Adapter\\CanOverwriteFiles' => $vendorDir . '/league/flysystem/src/Adapter/CanOverwriteFiles.php',
    'League\\Flysystem\\Adapter\\Ftp' => $vendorDir . '/league/flysystem/src/Adapter/Ftp.php',
    'League\\Flysystem\\Adapter\\Ftpd' => $vendorDir . '/league/flysystem/src/Adapter/Ftpd.php',
    'League\\Flysystem\\Adapter\\Local' => $vendorDir . '/league/flysystem/src/Adapter/Local.php',
    'League\\Flysystem\\Adapter\\NullAdapter' => $vendorDir . '/league/flysystem/src/Adapter/NullAdapter.php',
    'League\\Flysystem\\Adapter\\Polyfill\\NotSupportingVisibilityTrait' => $vendorDir . '/league/flysystem/src/Adapter/Polyfill/NotSupportingVisibilityTrait.php',
    'League\\Flysystem\\Adapter\\Polyfill\\StreamedCopyTrait' => $vendorDir . '/league/flysystem/src/Adapter/Polyfill/StreamedCopyTrait.php',
    'League\\Flysystem\\Adapter\\Polyfill\\StreamedReadingTrait' => $vendorDir . '/league/flysystem/src/Adapter/Polyfill/StreamedReadingTrait.php',
    'League\\Flysystem\\Adapter\\Polyfill\\StreamedTrait' => $vendorDir . '/league/flysystem/src/Adapter/Polyfill/StreamedTrait.php',
    'League\\Flysystem\\Adapter\\Polyfill\\StreamedWritingTrait' => $vendorDir . '/league/flysystem/src/Adapter/Polyfill/StreamedWritingTrait.php',
    'League\\Flysystem\\Adapter\\SynologyFtp' => $vendorDir . '/league/flysystem/src/Adapter/SynologyFtp.php',
    'League\\Flysystem\\Cached\\CacheInterface' => $vendorDir . '/league/flysystem-cached-adapter/src/CacheInterface.php',
    'League\\Flysystem\\Cached\\CachedAdapter' => $vendorDir . '/league/flysystem-cached-adapter/src/CachedAdapter.php',
    'League\\Flysystem\\Cached\\Storage\\AbstractCache' => $vendorDir . '/league/flysystem-cached-adapter/src/Storage/AbstractCache.php',
    'League\\Flysystem\\Cached\\Storage\\Adapter' => $vendorDir . '/league/flysystem-cached-adapter/src/Storage/Adapter.php',
    'League\\Flysystem\\Cached\\Storage\\Memcached' => $vendorDir . '/league/flysystem-cached-adapter/src/Storage/Memcached.php',
    'League\\Flysystem\\Cached\\Storage\\Memory' => $vendorDir . '/league/flysystem-cached-adapter/src/Storage/Memory.php',
    'League\\Flysystem\\Cached\\Storage\\Noop' => $vendorDir . '/league/flysystem-cached-adapter/src/Storage/Noop.php',
    'League\\Flysystem\\Cached\\Storage\\PhpRedis' => $vendorDir . '/league/flysystem-cached-adapter/src/Storage/PhpRedis.php',
    'League\\Flysystem\\Cached\\Storage\\Predis' => $vendorDir . '/league/flysystem-cached-adapter/src/Storage/Predis.php',
    'League\\Flysystem\\Cached\\Storage\\Psr6Cache' => $vendorDir . '/league/flysystem-cached-adapter/src/Storage/Psr6Cache.php',
    'League\\Flysystem\\Cached\\Storage\\Stash' => $vendorDir . '/league/flysystem-cached-adapter/src/Storage/Stash.php',
    'League\\Flysystem\\Config' => $vendorDir . '/league/flysystem/src/Config.php',
    'League\\Flysystem\\ConfigAwareTrait' => $vendorDir . '/league/flysystem/src/ConfigAwareTrait.php',
    'League\\Flysystem\\Directory' => $vendorDir . '/league/flysystem/src/Directory.php',
    'League\\Flysystem\\Exception' => $vendorDir . '/league/flysystem/src/Exception.php',
    'League\\Flysystem\\File' => $vendorDir . '/league/flysystem/src/File.php',
    'League\\Flysystem\\FileExistsException' => $vendorDir . '/league/flysystem/src/FileExistsException.php',
    'League\\Flysystem\\FileNotFoundException' => $vendorDir . '/league/flysystem/src/FileNotFoundException.php',
    'League\\Flysystem\\Filesystem' => $vendorDir . '/league/flysystem/src/Filesystem.php',
    'League\\Flysystem\\FilesystemInterface' => $vendorDir . '/league/flysystem/src/FilesystemInterface.php',
    'League\\Flysystem\\FilesystemNotFoundException' => $vendorDir . '/league/flysystem/src/FilesystemNotFoundException.php',
    'League\\Flysystem\\Handler' => $vendorDir . '/league/flysystem/src/Handler.php',
    'League\\Flysystem\\MountManager' => $vendorDir . '/league/flysystem/src/MountManager.php',
    'League\\Flysystem\\NotSupportedException' => $vendorDir . '/league/flysystem/src/NotSupportedException.php',
    'League\\Flysystem\\PluginInterface' => $vendorDir . '/league/flysystem/src/PluginInterface.php',
    'League\\Flysystem\\Plugin\\AbstractPlugin' => $vendorDir . '/league/flysystem/src/Plugin/AbstractPlugin.php',
    'League\\Flysystem\\Plugin\\EmptyDir' => $vendorDir . '/league/flysystem/src/Plugin/EmptyDir.php',
    'League\\Flysystem\\Plugin\\ForcedCopy' => $vendorDir . '/league/flysystem/src/Plugin/ForcedCopy.php',
    'League\\Flysystem\\Plugin\\ForcedRename' => $vendorDir . '/league/flysystem/src/Plugin/ForcedRename.php',
    'League\\Flysystem\\Plugin\\GetWithMetadata' => $vendorDir . '/league/flysystem/src/Plugin/GetWithMetadata.php',
    'League\\Flysystem\\Plugin\\ListFiles' => $vendorDir . '/league/flysystem/src/Plugin/ListFiles.php',
    'League\\Flysystem\\Plugin\\ListPaths' => $vendorDir . '/league/flysystem/src/Plugin/ListPaths.php',
    'League\\Flysystem\\Plugin\\ListWith' => $vendorDir . '/league/flysystem/src/Plugin/ListWith.php',
    'League\\Flysystem\\Plugin\\PluggableTrait' => $vendorDir . '/league/flysystem/src/Plugin/PluggableTrait.php',
    'League\\Flysystem\\Plugin\\PluginNotFoundException' => $vendorDir . '/league/flysystem/src/Plugin/PluginNotFoundException.php',
    'League\\Flysystem\\ReadInterface' => $vendorDir . '/league/flysystem/src/ReadInterface.php',
    'League\\Flysystem\\RootViolationException' => $vendorDir . '/league/flysystem/src/RootViolationException.php',
    'League\\Flysystem\\SafeStorage' => $vendorDir . '/league/flysystem/src/SafeStorage.php',
    'League\\Flysystem\\UnreadableFileException' => $vendorDir . '/league/flysystem/src/UnreadableFileException.php',
    'League\\Flysystem\\Util' => $vendorDir . '/league/flysystem/src/Util.php',
    'League\\Flysystem\\Util\\ContentListingFormatter' => $vendorDir . '/league/flysystem/src/Util/ContentListingFormatter.php',
    'League\\Flysystem\\Util\\MimeType' => $vendorDir . '/league/flysystem/src/Util/MimeType.php',
    'League\\Flysystem\\Util\\StreamHasher' => $vendorDir . '/league/flysystem/src/Util/StreamHasher.php',
    'Opis\\Closure\\Analyzer' => $vendorDir . '/opis/closure/src/Analyzer.php',
    'Opis\\Closure\\ClosureContext' => $vendorDir . '/opis/closure/src/ClosureContext.php',
    'Opis\\Closure\\ClosureScope' => $vendorDir . '/opis/closure/src/ClosureScope.php',
    'Opis\\Closure\\ClosureStream' => $vendorDir . '/opis/closure/src/ClosureStream.php',
    'Opis\\Closure\\ISecurityProvider' => $vendorDir . '/opis/closure/src/ISecurityProvider.php',
    'Opis\\Closure\\ReflectionClosure' => $vendorDir . '/opis/closure/src/ReflectionClosure.php',
    'Opis\\Closure\\SecurityException' => $vendorDir . '/opis/closure/src/SecurityException.php',
    'Opis\\Closure\\SecurityProvider' => $vendorDir . '/opis/closure/src/SecurityProvider.php',
    'Opis\\Closure\\SelfReference' => $vendorDir . '/opis/closure/src/SelfReference.php',
    'Opis\\Closure\\SerializableClosure' => $vendorDir . '/opis/closure/src/SerializableClosure.php',
    'Psr\\Cache\\CacheException' => $vendorDir . '/psr/cache/src/CacheException.php',
    'Psr\\Cache\\CacheItemInterface' => $vendorDir . '/psr/cache/src/CacheItemInterface.php',
    'Psr\\Cache\\CacheItemPoolInterface' => $vendorDir . '/psr/cache/src/CacheItemPoolInterface.php',
    'Psr\\Cache\\InvalidArgumentException' => $vendorDir . '/psr/cache/src/InvalidArgumentException.php',
    'Psr\\Container\\ContainerExceptionInterface' => $vendorDir . '/psr/container/src/ContainerExceptionInterface.php',
    'Psr\\Container\\ContainerInterface' => $vendorDir . '/psr/container/src/ContainerInterface.php',
    'Psr\\Container\\NotFoundExceptionInterface' => $vendorDir . '/psr/container/src/NotFoundExceptionInterface.php',
    'Psr\\Log\\AbstractLogger' => $vendorDir . '/psr/log/Psr/Log/AbstractLogger.php',
    'Psr\\Log\\InvalidArgumentException' => $vendorDir . '/psr/log/Psr/Log/InvalidArgumentException.php',
    'Psr\\Log\\LogLevel' => $vendorDir . '/psr/log/Psr/Log/LogLevel.php',
    'Psr\\Log\\LoggerAwareInterface' => $vendorDir . '/psr/log/Psr/Log/LoggerAwareInterface.php',
    'Psr\\Log\\LoggerAwareTrait' => $vendorDir . '/psr/log/Psr/Log/LoggerAwareTrait.php',
    'Psr\\Log\\LoggerInterface' => $vendorDir . '/psr/log/Psr/Log/LoggerInterface.php',
    'Psr\\Log\\LoggerTrait' => $vendorDir . '/psr/log/Psr/Log/LoggerTrait.php',
    'Psr\\Log\\NullLogger' => $vendorDir . '/psr/log/Psr/Log/NullLogger.php',
    'Psr\\Log\\Test\\DummyTest' => $vendorDir . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
    'Psr\\Log\\Test\\LoggerInterfaceTest' => $vendorDir . '/psr/log/Psr/Log/Test/LoggerInterfaceTest.php',
    'Psr\\Log\\Test\\TestLogger' => $vendorDir . '/psr/log/Psr/Log/Test/TestLogger.php',
    'Psr\\SimpleCache\\CacheException' => $vendorDir . '/psr/simple-cache/src/CacheException.php',
    'Psr\\SimpleCache\\CacheInterface' => $vendorDir . '/psr/simple-cache/src/CacheInterface.php',
    'Psr\\SimpleCache\\InvalidArgumentException' => $vendorDir . '/psr/simple-cache/src/InvalidArgumentException.php',
    'app\\admin\\controller\\Auth' => $baseDir . '/app/admin/controller/Auth.php',
    'app\\admin\\controller\\Config' => $baseDir . '/app/admin/controller/Config.php',
    'app\\admin\\controller\\Index' => $baseDir . '/app/admin/controller/Index.php',
    'app\\admin\\controller\\Login' => $baseDir . '/app/admin/controller/Login.php',
    'app\\admin\\controller\\Menu' => $baseDir . '/app/admin/controller/Menu.php',
    'app\\admin\\controller\\Oplog' => $baseDir . '/app/admin/controller/Oplog.php',
    'app\\admin\\controller\\Queue' => $baseDir . '/app/admin/controller/Queue.php',
    'app\\admin\\controller\\User' => $baseDir . '/app/admin/controller/User.php',
    'app\\admin\\controller\\api\\Plugs' => $baseDir . '/app/admin/controller/api/Plugs.php',
    'app\\admin\\controller\\api\\Update' => $baseDir . '/app/admin/controller/api/Update.php',
    'app\\admin\\service\\AuthService' => $baseDir . '/app/admin/service/AuthService.php',
    'app\\admin\\service\\MenuService' => $baseDir . '/app/admin/service/MenuService.php',
    'app\\index\\controller\\Index' => $baseDir . '/app/index/controller/Index.php',
    'think\\App' => $vendorDir . '/topthink/framework/src/think/App.php',
    'think\\Cache' => $vendorDir . '/topthink/framework/src/think/Cache.php',
    'think\\Collection' => $vendorDir . '/topthink/think-helper/src/Collection.php',
    'think\\Config' => $vendorDir . '/topthink/framework/src/think/Config.php',
    'think\\Console' => $vendorDir . '/topthink/framework/src/think/Console.php',
    'think\\Container' => $vendorDir . '/topthink/framework/src/think/Container.php',
    'think\\Cookie' => $vendorDir . '/topthink/framework/src/think/Cookie.php',
    'think\\Db' => $vendorDir . '/topthink/framework/src/think/Db.php',
    'think\\DbManager' => $vendorDir . '/topthink/think-orm/src/DbManager.php',
    'think\\Env' => $vendorDir . '/topthink/framework/src/think/Env.php',
    'think\\Event' => $vendorDir . '/topthink/framework/src/think/Event.php',
    'think\\Exception' => $vendorDir . '/topthink/framework/src/think/Exception.php',
    'think\\Facade' => $vendorDir . '/topthink/framework/src/think/Facade.php',
    'think\\File' => $vendorDir . '/topthink/framework/src/think/File.php',
    'think\\Filesystem' => $vendorDir . '/topthink/framework/src/think/Filesystem.php',
    'think\\Http' => $vendorDir . '/topthink/framework/src/think/Http.php',
    'think\\Lang' => $vendorDir . '/topthink/framework/src/think/Lang.php',
    'think\\Log' => $vendorDir . '/topthink/framework/src/think/Log.php',
    'think\\Manager' => $vendorDir . '/topthink/framework/src/think/Manager.php',
    'think\\Middleware' => $vendorDir . '/topthink/framework/src/think/Middleware.php',
    'think\\Model' => $vendorDir . '/topthink/think-orm/src/Model.php',
    'think\\Paginator' => $vendorDir . '/topthink/think-orm/src/Paginator.php',
    'think\\Pipeline' => $vendorDir . '/topthink/framework/src/think/Pipeline.php',
    'think\\Request' => $vendorDir . '/topthink/framework/src/think/Request.php',
    'think\\Response' => $vendorDir . '/topthink/framework/src/think/Response.php',
    'think\\Route' => $vendorDir . '/topthink/framework/src/think/Route.php',
    'think\\Service' => $vendorDir . '/topthink/framework/src/think/Service.php',
    'think\\Session' => $vendorDir . '/topthink/framework/src/think/Session.php',
    'think\\Template' => $vendorDir . '/topthink/think-template/src/Template.php',
    'think\\Validate' => $vendorDir . '/topthink/framework/src/think/Validate.php',
    'think\\View' => $vendorDir . '/topthink/framework/src/think/View.php',
    'think\\admin\\Controller' => $vendorDir . '/zoujingli/think-library/src/Controller.php',
    'think\\admin\\Queue' => $vendorDir . '/zoujingli/think-library/src/Queue.php',
    'think\\admin\\Storage' => $vendorDir . '/zoujingli/think-library/src/Storage.php',
    'think\\admin\\ThinkLibrary' => $vendorDir . '/zoujingli/think-library/src/ThinkLibrary.php',
    'think\\admin\\extend\\CaptchaExtend' => $vendorDir . '/zoujingli/think-library/src/extend/CaptchaExtend.php',
    'think\\admin\\extend\\CodeExtend' => $vendorDir . '/zoujingli/think-library/src/extend/CodeExtend.php',
    'think\\admin\\extend\\CsvExtend' => $vendorDir . '/zoujingli/think-library/src/extend/CsvExtend.php',
    'think\\admin\\extend\\DataExtend' => $vendorDir . '/zoujingli/think-library/src/extend/DataExtend.php',
    'think\\admin\\extend\\ExpressExtend' => $vendorDir . '/zoujingli/think-library/src/extend/ExpressExtend.php',
    'think\\admin\\extend\\HttpExtend' => $vendorDir . '/zoujingli/think-library/src/extend/HttpExtend.php',
    'think\\admin\\extend\\NodeExtend' => $vendorDir . '/zoujingli/think-library/src/extend/NodeExtend.php',
    'think\\admin\\extend\\ProcessExtend' => $vendorDir . '/zoujingli/think-library/src/extend/ProcessExtend.php',
    'think\\admin\\extend\\TokenExtend' => $vendorDir . '/zoujingli/think-library/src/extend/TokenExtend.php',
    'think\\admin\\helper\\DeleteHelper' => $vendorDir . '/zoujingli/think-library/src/helper/DeleteHelper.php',
    'think\\admin\\helper\\FormHelper' => $vendorDir . '/zoujingli/think-library/src/helper/FormHelper.php',
    'think\\admin\\helper\\Helper' => $vendorDir . '/zoujingli/think-library/src/helper/Helper.php',
    'think\\admin\\helper\\PageHelper' => $vendorDir . '/zoujingli/think-library/src/helper/PageHelper.php',
    'think\\admin\\helper\\QueryHelper' => $vendorDir . '/zoujingli/think-library/src/helper/QueryHelper.php',
    'think\\admin\\helper\\SaveHelper' => $vendorDir . '/zoujingli/think-library/src/helper/SaveHelper.php',
    'think\\admin\\helper\\TokenHelper' => $vendorDir . '/zoujingli/think-library/src/helper/TokenHelper.php',
    'think\\admin\\install\\CommandInstall' => $vendorDir . '/zoujingli/think-library/src/install/CommandInstall.php',
    'think\\admin\\install\\ExtendInstall' => $vendorDir . '/zoujingli/think-library/src/install/ExtendInstall.php',
    'think\\admin\\queue\\ListenQueue' => $vendorDir . '/zoujingli/think-library/src/queue/ListenQueue.php',
    'think\\admin\\queue\\QueryQueue' => $vendorDir . '/zoujingli/think-library/src/queue/QueryQueue.php',
    'think\\admin\\queue\\StartQueue' => $vendorDir . '/zoujingli/think-library/src/queue/StartQueue.php',
    'think\\admin\\queue\\StateQueue' => $vendorDir . '/zoujingli/think-library/src/queue/StateQueue.php',
    'think\\admin\\queue\\StopQueue' => $vendorDir . '/zoujingli/think-library/src/queue/StopQueue.php',
    'think\\admin\\queue\\WorkQueue' => $vendorDir . '/zoujingli/think-library/src/queue/WorkQueue.php',
    'think\\admin\\storage\\LocalStorage' => $vendorDir . '/zoujingli/think-library/src/storage/LocalStorage.php',
    'think\\admin\\storage\\QiniuStorage' => $vendorDir . '/zoujingli/think-library/src/storage/QiniuStorage.php',
    'think\\app\\MultiApp' => $vendorDir . '/topthink/think-multi-app/src/MultiApp.php',
    'think\\app\\Service' => $vendorDir . '/topthink/think-multi-app/src/Service.php',
    'think\\app\\Url' => $vendorDir . '/topthink/think-multi-app/src/Url.php',
    'think\\app\\command\\Build' => $vendorDir . '/topthink/think-multi-app/src/command/Build.php',
    'think\\cache\\Driver' => $vendorDir . '/topthink/framework/src/think/cache/Driver.php',
    'think\\cache\\TagSet' => $vendorDir . '/topthink/framework/src/think/cache/TagSet.php',
    'think\\cache\\driver\\File' => $vendorDir . '/topthink/framework/src/think/cache/driver/File.php',
    'think\\cache\\driver\\Memcache' => $vendorDir . '/topthink/framework/src/think/cache/driver/Memcache.php',
    'think\\cache\\driver\\Memcached' => $vendorDir . '/topthink/framework/src/think/cache/driver/Memcached.php',
    'think\\cache\\driver\\Redis' => $vendorDir . '/topthink/framework/src/think/cache/driver/Redis.php',
    'think\\cache\\driver\\Wincache' => $vendorDir . '/topthink/framework/src/think/cache/driver/Wincache.php',
    'think\\console\\Command' => $vendorDir . '/topthink/framework/src/think/console/Command.php',
    'think\\console\\Input' => $vendorDir . '/topthink/framework/src/think/console/Input.php',
    'think\\console\\Output' => $vendorDir . '/topthink/framework/src/think/console/Output.php',
    'think\\console\\Table' => $vendorDir . '/topthink/framework/src/think/console/Table.php',
    'think\\console\\command\\Clear' => $vendorDir . '/topthink/framework/src/think/console/command/Clear.php',
    'think\\console\\command\\Help' => $vendorDir . '/topthink/framework/src/think/console/command/Help.php',
    'think\\console\\command\\Lists' => $vendorDir . '/topthink/framework/src/think/console/command/Lists.php',
    'think\\console\\command\\Make' => $vendorDir . '/topthink/framework/src/think/console/command/Make.php',
    'think\\console\\command\\RouteList' => $vendorDir . '/topthink/framework/src/think/console/command/RouteList.php',
    'think\\console\\command\\RunServer' => $vendorDir . '/topthink/framework/src/think/console/command/RunServer.php',
    'think\\console\\command\\ServiceDiscover' => $vendorDir . '/topthink/framework/src/think/console/command/ServiceDiscover.php',
    'think\\console\\command\\VendorPublish' => $vendorDir . '/topthink/framework/src/think/console/command/VendorPublish.php',
    'think\\console\\command\\Version' => $vendorDir . '/topthink/framework/src/think/console/command/Version.php',
    'think\\console\\command\\make\\Command' => $vendorDir . '/topthink/framework/src/think/console/command/make/Command.php',
    'think\\console\\command\\make\\Controller' => $vendorDir . '/topthink/framework/src/think/console/command/make/Controller.php',
    'think\\console\\command\\make\\Event' => $vendorDir . '/topthink/framework/src/think/console/command/make/Event.php',
    'think\\console\\command\\make\\Listener' => $vendorDir . '/topthink/framework/src/think/console/command/make/Listener.php',
    'think\\console\\command\\make\\Middleware' => $vendorDir . '/topthink/framework/src/think/console/command/make/Middleware.php',
    'think\\console\\command\\make\\Model' => $vendorDir . '/topthink/framework/src/think/console/command/make/Model.php',
    'think\\console\\command\\make\\Service' => $vendorDir . '/topthink/framework/src/think/console/command/make/Service.php',
    'think\\console\\command\\make\\Subscribe' => $vendorDir . '/topthink/framework/src/think/console/command/make/Subscribe.php',
    'think\\console\\command\\make\\Validate' => $vendorDir . '/topthink/framework/src/think/console/command/make/Validate.php',
    'think\\console\\command\\optimize\\Route' => $vendorDir . '/topthink/framework/src/think/console/command/optimize/Route.php',
    'think\\console\\command\\optimize\\Schema' => $vendorDir . '/topthink/framework/src/think/console/command/optimize/Schema.php',
    'think\\console\\input\\Argument' => $vendorDir . '/topthink/framework/src/think/console/input/Argument.php',
    'think\\console\\input\\Definition' => $vendorDir . '/topthink/framework/src/think/console/input/Definition.php',
    'think\\console\\input\\Option' => $vendorDir . '/topthink/framework/src/think/console/input/Option.php',
    'think\\console\\output\\Ask' => $vendorDir . '/topthink/framework/src/think/console/output/Ask.php',
    'think\\console\\output\\Descriptor' => $vendorDir . '/topthink/framework/src/think/console/output/Descriptor.php',
    'think\\console\\output\\Formatter' => $vendorDir . '/topthink/framework/src/think/console/output/Formatter.php',
    'think\\console\\output\\Question' => $vendorDir . '/topthink/framework/src/think/console/output/Question.php',
    'think\\console\\output\\descriptor\\Console' => $vendorDir . '/topthink/framework/src/think/console/output/descriptor/Console.php',
    'think\\console\\output\\driver\\Buffer' => $vendorDir . '/topthink/framework/src/think/console/output/driver/Buffer.php',
    'think\\console\\output\\driver\\Console' => $vendorDir . '/topthink/framework/src/think/console/output/driver/Console.php',
    'think\\console\\output\\driver\\Nothing' => $vendorDir . '/topthink/framework/src/think/console/output/driver/Nothing.php',
    'think\\console\\output\\formatter\\Stack' => $vendorDir . '/topthink/framework/src/think/console/output/formatter/Stack.php',
    'think\\console\\output\\formatter\\Style' => $vendorDir . '/topthink/framework/src/think/console/output/formatter/Style.php',
    'think\\console\\output\\question\\Choice' => $vendorDir . '/topthink/framework/src/think/console/output/question/Choice.php',
    'think\\console\\output\\question\\Confirmation' => $vendorDir . '/topthink/framework/src/think/console/output/question/Confirmation.php',
    'think\\contract\\Arrayable' => $vendorDir . '/topthink/think-helper/src/contract/Arrayable.php',
    'think\\contract\\CacheHandlerInterface' => $vendorDir . '/topthink/framework/src/think/contract/CacheHandlerInterface.php',
    'think\\contract\\Jsonable' => $vendorDir . '/topthink/think-helper/src/contract/Jsonable.php',
    'think\\contract\\LogHandlerInterface' => $vendorDir . '/topthink/framework/src/think/contract/LogHandlerInterface.php',
    'think\\contract\\ModelRelationInterface' => $vendorDir . '/topthink/framework/src/think/contract/ModelRelationInterface.php',
    'think\\contract\\SessionHandlerInterface' => $vendorDir . '/topthink/framework/src/think/contract/SessionHandlerInterface.php',
    'think\\contract\\TemplateHandlerInterface' => $vendorDir . '/topthink/framework/src/think/contract/TemplateHandlerInterface.php',
    'think\\db\\BaseQuery' => $vendorDir . '/topthink/think-orm/src/db/BaseQuery.php',
    'think\\db\\Builder' => $vendorDir . '/topthink/think-orm/src/db/Builder.php',
    'think\\db\\CacheItem' => $vendorDir . '/topthink/think-orm/src/db/CacheItem.php',
    'think\\db\\Connection' => $vendorDir . '/topthink/think-orm/src/db/Connection.php',
    'think\\db\\ConnectionInterface' => $vendorDir . '/topthink/think-orm/src/db/ConnectionInterface.php',
    'think\\db\\Fetch' => $vendorDir . '/topthink/think-orm/src/db/Fetch.php',
    'think\\db\\Mongo' => $vendorDir . '/topthink/think-orm/src/db/Mongo.php',
    'think\\db\\PDOConnection' => $vendorDir . '/topthink/think-orm/src/db/PDOConnection.php',
    'think\\db\\Query' => $vendorDir . '/topthink/think-orm/src/db/Query.php',
    'think\\db\\Raw' => $vendorDir . '/topthink/think-orm/src/db/Raw.php',
    'think\\db\\Where' => $vendorDir . '/topthink/think-orm/src/db/Where.php',
    'think\\db\\builder\\Mongo' => $vendorDir . '/topthink/think-orm/src/db/builder/Mongo.php',
    'think\\db\\builder\\Mysql' => $vendorDir . '/topthink/think-orm/src/db/builder/Mysql.php',
    'think\\db\\builder\\Oracle' => $vendorDir . '/topthink/think-orm/src/db/builder/Oracle.php',
    'think\\db\\builder\\Pgsql' => $vendorDir . '/topthink/think-orm/src/db/builder/Pgsql.php',
    'think\\db\\builder\\Sqlite' => $vendorDir . '/topthink/think-orm/src/db/builder/Sqlite.php',
    'think\\db\\builder\\Sqlsrv' => $vendorDir . '/topthink/think-orm/src/db/builder/Sqlsrv.php',
    'think\\db\\concern\\AggregateQuery' => $vendorDir . '/topthink/think-orm/src/db/concern/AggregateQuery.php',
    'think\\db\\concern\\JoinAndViewQuery' => $vendorDir . '/topthink/think-orm/src/db/concern/JoinAndViewQuery.php',
    'think\\db\\concern\\ModelRelationQuery' => $vendorDir . '/topthink/think-orm/src/db/concern/ModelRelationQuery.php',
    'think\\db\\concern\\ParamsBind' => $vendorDir . '/topthink/think-orm/src/db/concern/ParamsBind.php',
    'think\\db\\concern\\ResultOperation' => $vendorDir . '/topthink/think-orm/src/db/concern/ResultOperation.php',
    'think\\db\\concern\\TableFieldInfo' => $vendorDir . '/topthink/think-orm/src/db/concern/TableFieldInfo.php',
    'think\\db\\concern\\TimeFieldQuery' => $vendorDir . '/topthink/think-orm/src/db/concern/TimeFieldQuery.php',
    'think\\db\\concern\\Transaction' => $vendorDir . '/topthink/think-orm/src/db/concern/Transaction.php',
    'think\\db\\concern\\WhereQuery' => $vendorDir . '/topthink/think-orm/src/db/concern/WhereQuery.php',
    'think\\db\\connector\\Mongo' => $vendorDir . '/topthink/think-orm/src/db/connector/Mongo.php',
    'think\\db\\connector\\Mysql' => $vendorDir . '/topthink/think-orm/src/db/connector/Mysql.php',
    'think\\db\\connector\\Oracle' => $vendorDir . '/topthink/think-orm/src/db/connector/Oracle.php',
    'think\\db\\connector\\Pgsql' => $vendorDir . '/topthink/think-orm/src/db/connector/Pgsql.php',
    'think\\db\\connector\\Sqlite' => $vendorDir . '/topthink/think-orm/src/db/connector/Sqlite.php',
    'think\\db\\connector\\Sqlsrv' => $vendorDir . '/topthink/think-orm/src/db/connector/Sqlsrv.php',
    'think\\db\\exception\\BindParamException' => $vendorDir . '/topthink/think-orm/src/db/exception/BindParamException.php',
    'think\\db\\exception\\DataNotFoundException' => $vendorDir . '/topthink/think-orm/src/db/exception/DataNotFoundException.php',
    'think\\db\\exception\\DbException' => $vendorDir . '/topthink/think-orm/src/db/exception/DbException.php',
    'think\\db\\exception\\InvalidArgumentException' => $vendorDir . '/topthink/think-orm/src/db/exception/InvalidArgumentException.php',
    'think\\db\\exception\\ModelEventException' => $vendorDir . '/topthink/think-orm/src/db/exception/ModelEventException.php',
    'think\\db\\exception\\ModelNotFoundException' => $vendorDir . '/topthink/think-orm/src/db/exception/ModelNotFoundException.php',
    'think\\db\\exception\\PDOException' => $vendorDir . '/topthink/think-orm/src/db/exception/PDOException.php',
    'think\\event\\AppInit' => $vendorDir . '/topthink/framework/src/think/event/AppInit.php',
    'think\\event\\HttpEnd' => $vendorDir . '/topthink/framework/src/think/event/HttpEnd.php',
    'think\\event\\HttpRun' => $vendorDir . '/topthink/framework/src/think/event/HttpRun.php',
    'think\\event\\LogWrite' => $vendorDir . '/topthink/framework/src/think/event/LogWrite.php',
    'think\\event\\RouteLoaded' => $vendorDir . '/topthink/framework/src/think/event/RouteLoaded.php',
    'think\\exception\\ClassNotFoundException' => $vendorDir . '/topthink/framework/src/think/exception/ClassNotFoundException.php',
    'think\\exception\\ErrorException' => $vendorDir . '/topthink/framework/src/think/exception/ErrorException.php',
    'think\\exception\\FileException' => $vendorDir . '/topthink/framework/src/think/exception/FileException.php',
    'think\\exception\\FuncNotFoundException' => $vendorDir . '/topthink/framework/src/think/exception/FuncNotFoundException.php',
    'think\\exception\\Handle' => $vendorDir . '/topthink/framework/src/think/exception/Handle.php',
    'think\\exception\\HttpException' => $vendorDir . '/topthink/framework/src/think/exception/HttpException.php',
    'think\\exception\\HttpResponseException' => $vendorDir . '/topthink/framework/src/think/exception/HttpResponseException.php',
    'think\\exception\\InvalidArgumentException' => $vendorDir . '/topthink/framework/src/think/exception/InvalidArgumentException.php',
    'think\\exception\\RouteNotFoundException' => $vendorDir . '/topthink/framework/src/think/exception/RouteNotFoundException.php',
    'think\\exception\\ValidateException' => $vendorDir . '/topthink/framework/src/think/exception/ValidateException.php',
    'think\\facade\\App' => $vendorDir . '/topthink/framework/src/think/facade/App.php',
    'think\\facade\\Cache' => $vendorDir . '/topthink/framework/src/think/facade/Cache.php',
    'think\\facade\\Config' => $vendorDir . '/topthink/framework/src/think/facade/Config.php',
    'think\\facade\\Console' => $vendorDir . '/topthink/framework/src/think/facade/Console.php',
    'think\\facade\\Cookie' => $vendorDir . '/topthink/framework/src/think/facade/Cookie.php',
    'think\\facade\\Db' => $vendorDir . '/topthink/think-orm/src/facade/Db.php',
    'think\\facade\\Env' => $vendorDir . '/topthink/framework/src/think/facade/Env.php',
    'think\\facade\\Event' => $vendorDir . '/topthink/framework/src/think/facade/Event.php',
    'think\\facade\\Facade' => $vendorDir . '/topthink/think-orm/src/facade/Db.php',
    'think\\facade\\Filesystem' => $vendorDir . '/topthink/framework/src/think/facade/Filesystem.php',
    'think\\facade\\Lang' => $vendorDir . '/topthink/framework/src/think/facade/Lang.php',
    'think\\facade\\Log' => $vendorDir . '/topthink/framework/src/think/facade/Log.php',
    'think\\facade\\Middleware' => $vendorDir . '/topthink/framework/src/think/facade/Middleware.php',
    'think\\facade\\Request' => $vendorDir . '/topthink/framework/src/think/facade/Request.php',
    'think\\facade\\Route' => $vendorDir . '/topthink/framework/src/think/facade/Route.php',
    'think\\facade\\Session' => $vendorDir . '/topthink/framework/src/think/facade/Session.php',
    'think\\facade\\Template' => $vendorDir . '/topthink/think-template/src/facade/Template.php',
    'think\\facade\\Validate' => $vendorDir . '/topthink/framework/src/think/facade/Validate.php',
    'think\\facade\\View' => $vendorDir . '/topthink/framework/src/think/facade/View.php',
    'think\\file\\UploadedFile' => $vendorDir . '/topthink/framework/src/think/file/UploadedFile.php',
    'think\\filesystem\\CacheStore' => $vendorDir . '/topthink/framework/src/think/filesystem/CacheStore.php',
    'think\\filesystem\\Driver' => $vendorDir . '/topthink/framework/src/think/filesystem/Driver.php',
    'think\\filesystem\\driver\\Local' => $vendorDir . '/topthink/framework/src/think/filesystem/driver/Local.php',
    'think\\helper\\Arr' => $vendorDir . '/topthink/think-helper/src/helper/Arr.php',
    'think\\helper\\Str' => $vendorDir . '/topthink/think-helper/src/helper/Str.php',
    'think\\initializer\\BootService' => $vendorDir . '/topthink/framework/src/think/initializer/BootService.php',
    'think\\initializer\\Error' => $vendorDir . '/topthink/framework/src/think/initializer/Error.php',
    'think\\initializer\\RegisterService' => $vendorDir . '/topthink/framework/src/think/initializer/RegisterService.php',
    'think\\log\\Channel' => $vendorDir . '/topthink/framework/src/think/log/Channel.php',
    'think\\log\\ChannelSet' => $vendorDir . '/topthink/framework/src/think/log/ChannelSet.php',
    'think\\log\\driver\\File' => $vendorDir . '/topthink/framework/src/think/log/driver/File.php',
    'think\\log\\driver\\Socket' => $vendorDir . '/topthink/framework/src/think/log/driver/Socket.php',
    'think\\middleware\\AllowCrossDomain' => $vendorDir . '/topthink/framework/src/think/middleware/AllowCrossDomain.php',
    'think\\middleware\\CheckRequestCache' => $vendorDir . '/topthink/framework/src/think/middleware/CheckRequestCache.php',
    'think\\middleware\\FormTokenCheck' => $vendorDir . '/topthink/framework/src/think/middleware/FormTokenCheck.php',
    'think\\middleware\\LoadLangPack' => $vendorDir . '/topthink/framework/src/think/middleware/LoadLangPack.php',
    'think\\middleware\\SessionInit' => $vendorDir . '/topthink/framework/src/think/middleware/SessionInit.php',
    'think\\model\\Collection' => $vendorDir . '/topthink/think-orm/src/model/Collection.php',
    'think\\model\\Pivot' => $vendorDir . '/topthink/think-orm/src/model/Pivot.php',
    'think\\model\\Relation' => $vendorDir . '/topthink/think-orm/src/model/Relation.php',
    'think\\model\\concern\\Attribute' => $vendorDir . '/topthink/think-orm/src/model/concern/Attribute.php',
    'think\\model\\concern\\Conversion' => $vendorDir . '/topthink/think-orm/src/model/concern/Conversion.php',
    'think\\model\\concern\\ModelEvent' => $vendorDir . '/topthink/think-orm/src/model/concern/ModelEvent.php',
    'think\\model\\concern\\OptimLock' => $vendorDir . '/topthink/think-orm/src/model/concern/OptimLock.php',
    'think\\model\\concern\\RelationShip' => $vendorDir . '/topthink/think-orm/src/model/concern/RelationShip.php',
    'think\\model\\concern\\SoftDelete' => $vendorDir . '/topthink/think-orm/src/model/concern/SoftDelete.php',
    'think\\model\\concern\\TimeStamp' => $vendorDir . '/topthink/think-orm/src/model/concern/TimeStamp.php',
    'think\\model\\relation\\BelongsTo' => $vendorDir . '/topthink/think-orm/src/model/relation/BelongsTo.php',
    'think\\model\\relation\\BelongsToMany' => $vendorDir . '/topthink/think-orm/src/model/relation/BelongsToMany.php',
    'think\\model\\relation\\HasMany' => $vendorDir . '/topthink/think-orm/src/model/relation/HasMany.php',
    'think\\model\\relation\\HasManyThrough' => $vendorDir . '/topthink/think-orm/src/model/relation/HasManyThrough.php',
    'think\\model\\relation\\HasOne' => $vendorDir . '/topthink/think-orm/src/model/relation/HasOne.php',
    'think\\model\\relation\\HasOneThrough' => $vendorDir . '/topthink/think-orm/src/model/relation/HasOneThrough.php',
    'think\\model\\relation\\MorphMany' => $vendorDir . '/topthink/think-orm/src/model/relation/MorphMany.php',
    'think\\model\\relation\\MorphOne' => $vendorDir . '/topthink/think-orm/src/model/relation/MorphOne.php',
    'think\\model\\relation\\MorphTo' => $vendorDir . '/topthink/think-orm/src/model/relation/MorphTo.php',
    'think\\model\\relation\\OneToOne' => $vendorDir . '/topthink/think-orm/src/model/relation/OneToOne.php',
    'think\\paginator\\driver\\Bootstrap' => $vendorDir . '/topthink/think-orm/src/paginator/driver/Bootstrap.php',
    'think\\response\\File' => $vendorDir . '/topthink/framework/src/think/response/File.php',
    'think\\response\\Html' => $vendorDir . '/topthink/framework/src/think/response/Html.php',
    'think\\response\\Json' => $vendorDir . '/topthink/framework/src/think/response/Json.php',
    'think\\response\\Jsonp' => $vendorDir . '/topthink/framework/src/think/response/Jsonp.php',
    'think\\response\\Redirect' => $vendorDir . '/topthink/framework/src/think/response/Redirect.php',
    'think\\response\\View' => $vendorDir . '/topthink/framework/src/think/response/View.php',
    'think\\response\\Xml' => $vendorDir . '/topthink/framework/src/think/response/Xml.php',
    'think\\route\\Dispatch' => $vendorDir . '/topthink/framework/src/think/route/Dispatch.php',
    'think\\route\\Domain' => $vendorDir . '/topthink/framework/src/think/route/Domain.php',
    'think\\route\\Resource' => $vendorDir . '/topthink/framework/src/think/route/Resource.php',
    'think\\route\\Rule' => $vendorDir . '/topthink/framework/src/think/route/Rule.php',
    'think\\route\\RuleGroup' => $vendorDir . '/topthink/framework/src/think/route/RuleGroup.php',
    'think\\route\\RuleItem' => $vendorDir . '/topthink/framework/src/think/route/RuleItem.php',
    'think\\route\\RuleName' => $vendorDir . '/topthink/framework/src/think/route/RuleName.php',
    'think\\route\\Url' => $vendorDir . '/topthink/framework/src/think/route/Url.php',
    'think\\route\\dispatch\\Callback' => $vendorDir . '/topthink/framework/src/think/route/dispatch/Callback.php',
    'think\\route\\dispatch\\Controller' => $vendorDir . '/topthink/framework/src/think/route/dispatch/Controller.php',
    'think\\route\\dispatch\\Redirect' => $vendorDir . '/topthink/framework/src/think/route/dispatch/Redirect.php',
    'think\\route\\dispatch\\Response' => $vendorDir . '/topthink/framework/src/think/route/dispatch/Response.php',
    'think\\route\\dispatch\\Url' => $vendorDir . '/topthink/framework/src/think/route/dispatch/Url.php',
    'think\\route\\dispatch\\View' => $vendorDir . '/topthink/framework/src/think/route/dispatch/View.php',
    'think\\service\\ModelService' => $vendorDir . '/topthink/framework/src/think/service/ModelService.php',
    'think\\service\\PaginatorService' => $vendorDir . '/topthink/framework/src/think/service/PaginatorService.php',
    'think\\service\\ValidateService' => $vendorDir . '/topthink/framework/src/think/service/ValidateService.php',
    'think\\session\\Store' => $vendorDir . '/topthink/framework/src/think/session/Store.php',
    'think\\session\\driver\\Cache' => $vendorDir . '/topthink/framework/src/think/session/driver/Cache.php',
    'think\\session\\driver\\File' => $vendorDir . '/topthink/framework/src/think/session/driver/File.php',
    'think\\template\\TagLib' => $vendorDir . '/topthink/think-template/src/template/TagLib.php',
    'think\\template\\driver\\File' => $vendorDir . '/topthink/think-template/src/template/driver/File.php',
    'think\\template\\exception\\TemplateNotFoundException' => $vendorDir . '/topthink/think-template/src/template/exception/TemplateNotFoundException.php',
    'think\\template\\taglib\\Cx' => $vendorDir . '/topthink/think-template/src/template/taglib/Cx.php',
    'think\\validate\\ValidateRule' => $vendorDir . '/topthink/framework/src/think/validate/ValidateRule.php',
    'think\\view\\driver\\Php' => $vendorDir . '/topthink/framework/src/think/view/driver/Php.php',
    'think\\view\\driver\\Think' => $vendorDir . '/topthink/think-view/src/Think.php',
);
