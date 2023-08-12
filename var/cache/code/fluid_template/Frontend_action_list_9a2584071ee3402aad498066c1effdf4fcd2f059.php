<?php
class Frontend_action_list_9a2584071ee3402aad498066c1effdf4fcd2f059 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
        return (string)'Default';
    }
    public function hasLayout() {
        return true;
    }
    public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
        $renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'bk2k' => 
  array (
    0 => 'BK2K\\BootstrapPackage\\ViewHelpers',
  ),
));
    }
    /**
 * section Content
 */
public function section_4f9be057f0ea5d2ba72fd2c810e8d7b9aa98b469(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output0 = '';

$output0 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
$output3 = '';

$output3 .= '{
        "nothingPosted": "';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
return NULL;
};

$arguments4 = [
'key' => 'nothing_posted',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '",
        "nothingFound": "';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure7 = function() use ($renderingContext) {
return NULL;
};

$arguments6 = [
'key' => 'nothing_found',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output3 .= '"
    }';
return $output3;
};

$arguments1 = [
'value' => NULL,
'name' => 'translations',
];
$renderChildrenClosure2 = ($arguments1['value'] !== null) ? function() use ($arguments1) { return $arguments1['value']; } : $renderChildrenClosure2;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '

    <section class="bw-jobs-section">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure9 = function() use ($renderingContext) {
return NULL;
};

$array10 = [
'categories' => $renderingContext->getVariableProvider()->getByPath('categories'),
'locations' => $renderingContext->getVariableProvider()->getByPath('locations'),
];

$arguments8 = [
'section' => NULL,
'partial' => 'Frontend/Filter',
'delegate' => NULL,
'arguments' => $array10,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output0 .= '

        <div
            id="bw-jobs-list"
            data-endpoint="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure12 = function() use ($renderingContext) {
return NULL;
};

$arguments11 = [
'action' => 'listJobPositions',
'arguments' => [],
'controller' => 'Api',
'extensionName' => NULL,
'pluginName' => 'Api',
'pageUid' => NULL,
'pageType' => 1655192624,
'noCache' => NULL,
'section' => '',
'format' => '',
'linkAccessRestrictedPages' => false,
'additionalParams' => [],
'absolute' => false,
'addQueryString' => false,
'argumentsToBeExcludedFromQueryString' => [],
'addQueryStringMethod' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext)]);

$output0 .= '"
            data-detail-page-path="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\PageViewHelper
$renderChildrenClosure14 = function() use ($renderingContext) {
return NULL;
};

$arguments13 = [
'pageUid' => $renderingContext->getVariableProvider()->getByPath('settings.detailPid'),
'additionalParams' => [],
'pageType' => 0,
'noCache' => false,
'language' => NULL,
'section' => '',
'linkAccessRestrictedPages' => false,
'absolute' => false,
'addQueryString' => false,
'argumentsToBeExcludedFromQueryString' => [],
'addQueryStringMethod' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\PageViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext)]);

$output0 .= '"
            data-translations="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('translations')]);

$output0 .= '"
        ></div>
    </section>

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper
$renderChildrenClosure16 = function() use ($renderingContext) {
return NULL;
};

$arguments15 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'class' => NULL,
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'async' => NULL,
'crossorigin' => NULL,
'defer' => NULL,
'integrity' => NULL,
'nomodule' => NULL,
'nonce' => NULL,
'referrerpolicy' => NULL,
'src' => 'EXT:bw_jobs/Resources/Public/JavaScript/jobs-list.js',
'type' => 'module',
'identifier' => 'bw-jobs-list',
'priority' => false,
];

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\Asset\ScriptViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output0 .= '

';

    return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output17 = '';

$output17 .= '

';

$output17 .= '';

$output17 .= '

';

$output17 .= '';

$output17 .= '


';

    return $output17;
}

}

#