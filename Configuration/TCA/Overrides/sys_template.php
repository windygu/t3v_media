<?php
defined('TYPO3_MODE') or die();

// === Variables ===

$extensionKey   = 't3v_media';
$extensionTitle = 'T3v Media';

// === TypoScript ===

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extensionKey, 'Configuration/TypoScript', $extensionTitle);
