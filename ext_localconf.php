<?php
defined('TYPO3_MODE') or die();

// === Variables ===

$namespace    = 'T3v';
$extensionKey = $_EXTKEY;
$iconsFolder  = \T3v\T3vCore\Utility\ExtensionUtility::iconsFolder($extensionKey);

// === Youku Integration ===

// Add Youku as new mime type
$GLOBALS['TYPO3_CONF_VARS']['SYS']['FileInfo']['fileExtensionToMimeType']['youku'] = 'image/youku';

// Add Youku to allowed media file extensions
$GLOBALS['TYPO3_CONF_VARS']['SYS']['mediafile_ext'] .= ',youku';

// Register the Youku helper
$GLOBALS['TYPO3_CONF_VARS']['SYS']['fal']['onlineMediaHelpers']['youku'] = \T3v\T3vMedia\Resource\OnlineMedia\Helpers\YoukuHelper::class;

// Register the Youku renderer
$rendererRegistry = \TYPO3\CMS\Core\Resource\Rendering\RendererRegistry::getInstance();
$rendererRegistry->registerRendererClass(\T3v\T3vMedia\Resource\Rendering\YoukuRenderer::class);

// === Backend ===

// Avoid that this block is loaded in the Frontend
if (TYPO3_MODE === 'BE') {
  // Register the icon for the Youku mime type
  $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);

  $iconRegistry->registerIcon(
    'mimetypes-media-image-youku',
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    ['source' => "{$iconsFolder}/MimeTypes/Youku.svg"]
  );

  $iconRegistry->registerFileExtension('youku', 'mimetypes-media-image-youku');
}