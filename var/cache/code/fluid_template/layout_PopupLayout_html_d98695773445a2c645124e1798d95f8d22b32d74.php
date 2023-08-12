<?php
class layout_PopupLayout_html_d98695773445a2c645124e1798d95f8d22b32d74 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
        return (string)'';
    }
    public function hasLayout() {
        return false;
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
    2 => 'TYPO3\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'bk2k' => 
  array (
    0 => 'BK2K\\BootstrapPackage\\ViewHelpers',
  ),
  'c' => 
  array (
    0 => 'Dmind\\Cookieman\\ViewHelpers',
  ),
));
    }
    /**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output0 = '';

$output0 .= '';

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array4 = [
'0' => $renderingContext->getVariableProvider()->getByPath('data.uid'),
'1' => ' != ',
'2' => $renderingContext->getVariableProvider()->getByPath('settings.links.dataProtectionDeclarationPid'),
'3' => '
            && ',
'4' => $renderingContext->getVariableProvider()->getByPath('data.uid'),
'5' => ' != ',
'6' => $renderingContext->getVariableProvider()->getByPath('settings.links.imprintPid'),
];

$expression5 = function($context) {return ((TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"])) && (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node4"]) != TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node6"])));};

$arguments3 = [
'then' => 1,
'else' => 0,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression5(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array4)),
    $renderingContext
),
];

$arguments1 = [
'value' => TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments3, static fn() => '', $renderingContext)
,
'name' => 'isShowOnce',
];
$renderChildrenClosure2 = ($arguments1['value'] !== null) ? function() use ($arguments1) { return $arguments1['value']; } : $renderChildrenClosure2;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure7 = function() use ($renderingContext) {
$output8 = '';

$output8 .= '
    <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\PageViewHelper
$renderChildrenClosure10 = function() use ($renderingContext) {
return NULL;
};

$arguments9 = [
'pageUid' => $renderingContext->getVariableProvider()->getByPath('settings.links.dataProtectionDeclarationPid'),
'additionalParams' => [],
'pageType' => 0,
'noCache' => false,
'language' => NULL,
'section' => $renderingContext->getVariableProvider()->getByPath('settings.links.dataProtectionDeclarationAnchor'),
'linkAccessRestrictedPages' => false,
'absolute' => false,
'addQueryString' => false,
'argumentsToBeExcludedFromQueryString' => [],
'addQueryStringMethod' => NULL,
];

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\PageViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output8 .= '"
    >';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure12 = function() use ($renderingContext) {
return NULL;
};

$arguments11 = [
'key' => 'dataProtectionDeclaration',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output8 .= '</a>
';
return $output8;
};

$arguments6 = [
'value' => NULL,
'name' => 'dataProtectionDeclarationLink',
];
$renderChildrenClosure7 = ($arguments6['value'] !== null) ? function() use ($arguments6) { return $arguments6['value']; } : $renderChildrenClosure7;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext)]);

$output0 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure14 = function() use ($renderingContext) {
$output15 = '';

$output15 .= '
    <a href="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\PageViewHelper
$renderChildrenClosure17 = function() use ($renderingContext) {
return NULL;
};

$arguments16 = [
'pageUid' => $renderingContext->getVariableProvider()->getByPath('settings.links.imprintPid'),
'additionalParams' => [],
'pageType' => 0,
'noCache' => false,
'language' => NULL,
'section' => $renderingContext->getVariableProvider()->getByPath('settings.links.imprintAnchor'),
'linkAccessRestrictedPages' => false,
'absolute' => false,
'addQueryString' => false,
'argumentsToBeExcludedFromQueryString' => [],
'addQueryStringMethod' => NULL,
];

$output15 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\PageViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output15 .= '"
    >';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure19 = function() use ($renderingContext) {
return NULL;
};

$arguments18 = [
'key' => 'imprint',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output15 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output15 .= '</a>
';
return $output15;
};

$arguments13 = [
'value' => NULL,
'name' => 'imprintLink',
];
$renderChildrenClosure14 = ($arguments13['value'] !== null) ? function() use ($arguments13) { return $arguments13['value']; } : $renderChildrenClosure14;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext)]);

$output0 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SpacelessViewHelper
$renderChildrenClosure21 = function() use ($renderingContext) {
$output22 = '';

$output22 .= '
<div id="cookieman-modal"
     data-cookieman-showonce="';

$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('isShowOnce')]);

$output22 .= '"
     data-cookieman-settings="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure24 = function() use ($renderingContext) {
return NULL;
};

$array25 = [
'groups' => $renderingContext->getVariableProvider()->getByPath('settings.groups'),
'trackingObjects' => $renderingContext->getVariableProvider()->getByPath('settings.trackingObjects'),
];

$arguments23 = [
'value' => $array25,
'forceObject' => false,
];
$renderChildrenClosure24 = ($arguments23['value'] !== null) ? function() use ($arguments23) { return $arguments23['value']; } : $renderChildrenClosure24;
$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext)]);

$output22 .= '"
     class="modal fade" tabindex="-1" role="dialog"
>
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure27 = function() use ($renderingContext) {
return NULL;
};

$arguments26 = [
'section' => 'Content',
'partial' => NULL,
'delegate' => NULL,
'arguments' => [],
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output22 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output22 .= '
</div>
';
return $output22;
};

$arguments20 = [
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\SpacelessViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output0 .= '
';

    return $output0;
}

}

#