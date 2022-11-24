<?php
defined('TYPO3_MODE') || die();

/***************
 * Add default RTE configuration
 */
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['typo3_project1'] = 'EXT:gowords_typo3project1/Configuration/RTE/Default.yaml';

/***************
 * PageTS
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:gowords_typo3project1/Configuration/TsConfig/Page/All.tsconfig">');


/***************
 * Register Icons
 */

 /***************
  * Register Hooks
  */
