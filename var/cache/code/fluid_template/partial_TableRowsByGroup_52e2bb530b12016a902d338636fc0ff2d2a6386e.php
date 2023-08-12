<?php
class partial_TableRowsByGroup_52e2bb530b12016a902d338636fc0ff2d2a6386e extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output0 = '';

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
$output5 = '';

$output5 .= '
        <tr>
            <td>
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure7 = function() use ($renderingContext) {
return NULL;
};
$output8 = '';

$output8 .= 'trackingobject.';

$output8 .= $renderingContext->getVariableProvider()->getByPath('trackingItemId');

$arguments6 = [
'key' => $output8,
'id' => NULL,
'default' => $renderingContext->getVariableProvider()->getByPath('trackingItemId'),
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext)]);

$output5 .= '
            </td>
            <td>
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure10 = function() use ($renderingContext) {
return NULL;
};
$output11 = '';

$output11 .= 'trackingobject.';

$output11 .= $renderingContext->getVariableProvider()->getByPath('trackingItemId');

$output11 .= '.desc';
$output12 = '';

$output12 .= 'missing translation:
                trackingobject.';

$output12 .= $renderingContext->getVariableProvider()->getByPath('trackingItemId');

$output12 .= '.desc';

$arguments9 = [
'key' => $output11,
'id' => NULL,
'default' => $output12,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext)]);

$output5 .= '
            </td>
            <td>
                ';

$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('trackingItem.duration')]);

$output5 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure14 = function() use ($renderingContext) {
return NULL;
};
$output15 = '';

$output15 .= 'duration.';

$output15 .= $renderingContext->getVariableProvider()->getByPath('trackingItem.durationUnit');
$output16 = '';

$output16 .= 'missing translation:
                duration.';

$output16 .= $renderingContext->getVariableProvider()->getByPath('trackingItem.durationUnit');

$arguments13 = [
'key' => $output15,
'id' => NULL,
'default' => $output16,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext)]);

$output5 .= '
            </td>
            <td>
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure18 = function() use ($renderingContext) {
return NULL;
};
$output19 = '';

$output19 .= 'type.';

$output19 .= $renderingContext->getVariableProvider()->getByPath('trackingItem.type');
$output20 = '';

$output20 .= 'missing translation:
                type.';

$output20 .= $renderingContext->getVariableProvider()->getByPath('trackingItem.type');

$arguments17 = [
'key' => $output19,
'id' => NULL,
'default' => $output20,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output5 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext)]);

$output5 .= '
            </td>
            <td>
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array22 = [
'0' => $renderingContext->getVariableProvider()->getByPath('trackingItem.provider'),
];

$expression23 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments21 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression23(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array22)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output24 = '';

$output24 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure26 = function() use ($renderingContext) {
return NULL;
};

$arguments25 = [
'key' => $renderingContext->getVariableProvider()->getByPath('trackingItem.provider'),
'id' => NULL,
'default' => $renderingContext->getVariableProvider()->getByPath('trackingItem.provider'),
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output24 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext)]);

$output24 .= '
                ';
return $output24;
},
];

$output5 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments21, static fn() => '', $renderingContext)
;

$output5 .= '
            </td>
        </tr>
    ';
return $output5;
};
// Rendering ViewHelper Dmind\Cookieman\ViewHelpers\ShownTrackingObjectsViewHelper
$renderChildrenClosure4 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('group');
};

$arguments3 = [
'group' => NULL,
];

$arguments1 = [
'each' => Dmind\Cookieman\ViewHelpers\ShownTrackingObjectsViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext),
'as' => 'trackingItem',
'key' => 'trackingItemId',
'reverse' => false,
'iteration' => NULL,
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';

    return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output27 = '';

$output27 .= '<html xmlns="http://www.w3.org/1999/xhtml"
    xmlns:c="http://typo3.org/ns/Dmind/Cookieman/ViewHelpers"
    xmlns:f="http://typo3.org/ns/TYPO3/Fluid/ViewHelpers">
';

$output27 .= '';

$output27 .= '
</html>
';

    return $output27;
}

}

#