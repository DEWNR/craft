<?php
/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here. You can see a
 * list of the available settings in vendor/craftcms/cms/src/config/GeneralConfig.php.
 *
 * @see \craft\config\GeneralConfig
 */

return [
  // Craft config settings from .env variables
  'aliases' => [
    '@assetsUrl' => getenv('ASSETS_URL'),
    '@web' => getenv('SITE_URL'),
    '@webroot' => getenv('WEB_ROOT_PATH'),
  ],
  'allowUpdates' => (bool)getenv('ALLOW_UPDATES'),
  'allowAdminChanges' => (bool)getenv('ALLOW_ADMIN_CHANGES'),
  'backupOnUpdate' => (bool)getenv('BACKUP_ON_UPDATE'),
  'cpTrigger' => getenv('CP_TRIGGER') ?: 'admin',
  'devMode' => (bool)getenv('DEV_MODE'),
  'enableTemplateCaching' => (bool)getenv('ENABLE_TEMPLATE_CACHING'),
  'isSystemLive' => (bool)getenv('IS_SYSTEM_LIVE'),
  'resourceBasePath' => dirname(__DIR__) . '/web/cpresources',
  'securityKey' => getenv('SECURITY_KEY'),
  // Craft config settings from constants
  'cacheDuration' => false,
  'defaultSearchTermOptions' => [
    'subLeft' => true,
    'subRight' => true,
  ],
  'enableCsrfProtection' => true,
  'errorTemplatePrefix' => 'errors/',
  'generateTransformsBeforePageLoad' => true,
  'loginPath' => 'login',
  'maxCachedCloudImageSize' => 3000,
  'maxRevisions' => 0,
  'maxUploadFileSize' => '100M',
  'omitScriptNameInUrls' => true,
  'useProjectConfigFile' => true,
  'useEmailAsUsername' => true,
];
