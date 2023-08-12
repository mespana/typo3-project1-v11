<?php
class Standard_action_dropDown_d89aa89f8d8b2389d61921de9f9003f3b55dbc60 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
 * section helpMessage
 */
public function section_ecc36753971189a3845cb085554ed46ddbd08268(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output0 = '';

$output0 .= '
    ';

$output0 .= '';

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
$output8 = '';

$output8 .= '
        <p>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure10 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure12 = function() use ($renderingContext) {
return NULL;
};
$output14 = '';

$output14 .= '<span title="';

$output14 .= $renderingContext->getVariableProvider()->getByPath('inlineIconTitle');

$output14 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure16 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('inlineIcon');
};

$arguments15 = [
'value' => NULL,
];

$output14 .= isset($arguments15['value']) ? $arguments15['value'] : $renderChildrenClosure16();

$output14 .= '</span>';

$array13 = [
'0' => $output14,
];

$arguments11 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_misc.xlf:bookmark_description',
'id' => NULL,
'default' => NULL,
'arguments' => $array13,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];
return TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);
};

$arguments9 = [
'value' => NULL,
];

$output8 .= isset($arguments9['value']) ? $arguments9['value'] : $renderChildrenClosure10();

$output8 .= '</p>
    ';
return $output8;
};
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
return NULL;
};

$arguments4 = [
'identifier' => 'actions-system-shortcut-new',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => 'inline',
];
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure7 = function() use ($renderingContext) {
return NULL;
};

$arguments6 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:toolbarItems.bookmarks',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$array3 = [
'inlineIcon' => TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext),
'inlineIconTitle' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext),
];

$arguments1 = [
'map' => $array3,
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\AliasViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';

    return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output17 = '';

$output17 .= '<h3 class="dropdown-headline">
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure19 = function() use ($renderingContext) {
return NULL;
};

$arguments18 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:toolbarItems.bookmarks',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext)]);

$output17 .= '
</h3>
<hr>
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure23 = function() use ($renderingContext) {
return NULL;
};

$arguments22 = [
'subject' => $renderingContext->getVariableProvider()->getByPath('shortcutMenu'),
];
$renderChildrenClosure23 = ($arguments22['subject'] !== null) ? function() use ($arguments22) { return $arguments22['subject']; } : $renderChildrenClosure23;
$array21 = [
'0' => TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext),
'1' => ' == 0',
];

$expression24 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};

$arguments20 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression24(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array21)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output25 = '';

$output25 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure27 = function() use ($renderingContext) {
return NULL;
};

$arguments26 = [
'section' => 'helpMessage',
'partial' => NULL,
'delegate' => NULL,
'arguments' => [],
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output25 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output25 .= '
    ';
return $output25;
},
'__else' => function() use ($renderingContext) {
$output28 = '';

$output28 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure30 = function() use ($renderingContext) {
$output31 = '';

$output31 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array33 = [
'0' => '!',
'1' => $renderingContext->getVariableProvider()->getByPath('iterator.isFirst'),
];

$expression34 = function($context) {return !(TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node1"]));};

$arguments32 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression34(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array33)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
return '
                <hr>
            ';
},
];

$output31 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments32, static fn() => '', $renderingContext)
;

$output31 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array36 = [
'0' => $renderingContext->getVariableProvider()->getByPath('group.title'),
];

$expression37 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments35 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression37(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array36)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output38 = '';

$output38 .= '
                <h3 class="dropdown-headline" id="shortcut-group-';

$output38 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('group.id')]);

$output38 .= '">';

$output38 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('group.title')]);

$output38 .= '</h3>
            ';
return $output38;
},
];

$output31 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments35, static fn() => '', $renderingContext)
;

$output31 .= '
            <div class="dropdown-table" data-shortcutgroup="';

$output31 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('group.id')]);

$output31 .= '">
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure40 = function() use ($renderingContext) {
$output41 = '';

$output41 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure43 = function() use ($renderingContext) {
return NULL;
};

$array44 = [
'group' => $renderingContext->getVariableProvider()->getByPath('group'),
'shortcut' => $renderingContext->getVariableProvider()->getByPath('shortcut'),
];

$arguments42 = [
'section' => NULL,
'partial' => 'ShortcutToolbarItem/Shortcut',
'delegate' => NULL,
'arguments' => $array44,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output41 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output41 .= '
                ';
return $output41;
};

$arguments39 = [
'each' => $renderingContext->getVariableProvider()->getByPath('group.shortcuts'),
'as' => 'shortcut',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output31 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output31 .= '
            </div>
        ';
return $output31;
};

$arguments29 = [
'each' => $renderingContext->getVariableProvider()->getByPath('shortcutMenu'),
'as' => 'group',
'key' => NULL,
'reverse' => false,
'iteration' => 'iterator',
];

$output28 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output28 .= '
    ';
return $output28;
},
];

$output17 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments20, static fn() => '', $renderingContext)
;

$output17 .= '

';

$output17 .= '';

$output17 .= '
';

    return $output17;
}

}

#