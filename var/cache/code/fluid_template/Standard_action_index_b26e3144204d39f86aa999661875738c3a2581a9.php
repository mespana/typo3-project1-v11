<?php
class Standard_action_index_b26e3144204d39f86aa999661875738c3a2581a9 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
 * section Menubar
 */
public function section_40764254960f3233f080892cb7bdfc08cda173a9(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output0 = '';

$output0 .= '
    <ul
        role="menubar"
        aria-orientation="vertical"
        aria-label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$arguments1 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang.xlf:modulemenu.label',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '"
        class="modulemenu-group-container"
    >
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure4 = function() use ($renderingContext) {
$output5 = '';

$output5 .= '
            <li
                role="presentation"
                data-level="1"
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$output7 = '';

$output7 .= 'class="modulemenu-group modulemenu-group-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array9 = [
'0' => $renderingContext->getVariableProvider()->getByPath('module.collapsed'),
];

$expression10 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments8 = [
'then' => 'collapsed',
'else' => 'expanded',
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression10(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array9)),
    $renderingContext
),
];

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments8, static fn() => '', $renderingContext)
;

$output7 .= '"';

$array11 = [
'0' => $renderingContext->getVariableProvider()->getByPath('module.children'),
];

$expression12 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments6 = [
'then' => $output7,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression12(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array11)),
    $renderingContext
),
];

$output5 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments6, static fn() => '', $renderingContext)
;

$output5 .= '
            >
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure14 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array17 = [
'0' => $renderingContext->getVariableProvider()->getByPath('iterator.isFirst'),
];

$expression18 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments16 = [
'then' => 0,
'else' => -1,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression18(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array17)),
    $renderingContext
),
];

$array15 = [
'module' => $renderingContext->getVariableProvider()->getByPath('module'),
'showChildren' => $renderingContext->getVariableProvider()->getByPath('module.children'),
'tabIndex' => TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments16, static fn() => '', $renderingContext)
,
];

$arguments13 = [
'section' => 'Button',
'partial' => NULL,
'delegate' => NULL,
'arguments' => $array15,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output5 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output5 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure20 = function() use ($renderingContext) {
return NULL;
};

$array21 = [
'modules' => $renderingContext->getVariableProvider()->getByPath('module.children'),
'parent' => $renderingContext->getVariableProvider()->getByPath('module'),
];

$arguments19 = [
'section' => 'Menu',
'partial' => NULL,
'delegate' => NULL,
'arguments' => $array21,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output5 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output5 .= '
            </li>
        ';
return $output5;
};

$arguments3 = [
'each' => $renderingContext->getVariableProvider()->getByPath('modules'),
'as' => 'module',
'key' => NULL,
'reverse' => false,
'iteration' => 'iterator',
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '
    </ul>
';

    return $output0;
}
/**
 * section Menu
 */
public function section_57f5f5efbc5990f5230aa95359042338b856707b(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output22 = '';

$output22 .= '
    <ul
        role="menu"
        aria-orientation="vertical"
        class="modulemenu-group-container"
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array25 = [
'0' => $renderingContext->getVariableProvider()->getByPath('parent.collapsed'),
];

$expression26 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments24 = [
'then' => 'style="display: none"',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression26(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array25)),
    $renderingContext
),
];

$array27 = [
'0' => $renderingContext->getVariableProvider()->getByPath('parent'),
];

$expression28 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments23 = [
'then' => TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments24, static fn() => '', $renderingContext)
,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression28(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array27)),
    $renderingContext
),
];

$output22 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments23, static fn() => '', $renderingContext)
;

$output22 .= '
    >
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure30 = function() use ($renderingContext) {
$output31 = '';

$output31 .= '
            <li role="presentation" data-level="2">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure33 = function() use ($renderingContext) {
return NULL;
};

$array34 = [
'module' => $renderingContext->getVariableProvider()->getByPath('module'),
'tabIndex' => -1,
];

$arguments32 = [
'section' => 'Button',
'partial' => NULL,
'delegate' => NULL,
'arguments' => $array34,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output31 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output31 .= '
            </li>
        ';
return $output31;
};

$arguments29 = [
'each' => $renderingContext->getVariableProvider()->getByPath('modules'),
'as' => 'module',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output22 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output22 .= '
    </ul>
';

    return $output22;
}
/**
 * section Button
 */
public function section_794145f030ff721599a0353a9b2e59e9a92b9bf1(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output35 = '';

$output35 .= '
    <';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array37 = [
'0' => $renderingContext->getVariableProvider()->getByPath('module.link'),
];

$expression38 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments36 = [
'then' => 'a',
'else' => 'button',
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression38(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array37)),
    $renderingContext
),
];

$output35 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments36, static fn() => '', $renderingContext)
;

$output35 .= '
        role="menuitem"
        title="';

$output35 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('module.description')]);

$output35 .= '"
        class="modulemenu-action t3js-modulemenu-action ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array40 = [
'0' => $renderingContext->getVariableProvider()->getByPath('showChildren'),
];

$expression41 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments39 = [
'then' => 't3js-modulemenu-collapsible',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression41(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array40)),
    $renderingContext
),
];

$output35 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments39, static fn() => '', $renderingContext)
;

$output35 .= '"
        tabindex="';

$output35 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('tabIndex')]);

$output35 .= '"
        id="';

$output35 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('module.name')]);

$output35 .= '"
        data-modulename="';

$output35 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('module.name')]);

$output35 .= '"
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$output43 = '';

$output43 .= 'href="';

$output43 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('module.link')]);

$output43 .= '"';

$array44 = [
'0' => $renderingContext->getVariableProvider()->getByPath('module.link'),
];

$expression45 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments42 = [
'then' => $output43,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression45(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array44)),
    $renderingContext
),
];

$output35 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments42, static fn() => '', $renderingContext)
;

$output35 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$output47 = '';

$output47 .= 'data-component="';

$output47 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('module.component')]);

$output47 .= '"';

$array48 = [
'0' => $renderingContext->getVariableProvider()->getByPath('module.component'),
];

$expression49 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments46 = [
'then' => $output47,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression49(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array48)),
    $renderingContext
),
];

$output35 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments46, static fn() => '', $renderingContext)
;

$output35 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$output51 = '';

$output51 .= 'data-navigationcomponentid="';

$output51 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('module.navigationComponentId')]);

$output51 .= '"';

$array52 = [
'0' => $renderingContext->getVariableProvider()->getByPath('module.navigationComponentId'),
];

$expression53 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments50 = [
'then' => $output51,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression53(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array52)),
    $renderingContext
),
];

$output35 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments50, static fn() => '', $renderingContext)
;

$output35 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$output55 = '';

$output55 .= 'data-navigationframescript="';

$output55 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('module.navigationFrameScript')]);

$output55 .= '"';

$array56 = [
'0' => $renderingContext->getVariableProvider()->getByPath('module.navigationFrameScript'),
];

$expression57 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments54 = [
'then' => $output55,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression57(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array56)),
    $renderingContext
),
];

$output35 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments54, static fn() => '', $renderingContext)
;

$output35 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$output59 = '';

$output59 .= 'data-navigationframescriptparameters="';

$output59 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('module.navigationFrameScriptParameters')]);

$output59 .= '"';

$array60 = [
'0' => $renderingContext->getVariableProvider()->getByPath('module.navigationFrameScriptParameters'),
];

$expression61 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments58 = [
'then' => $output59,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression61(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array60)),
    $renderingContext
),
];

$output35 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments58, static fn() => '', $renderingContext)
;

$output35 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$output63 = '';

$output63 .= 'aria-haspopup="true" aria-expanded="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array65 = [
'0' => $renderingContext->getVariableProvider()->getByPath('module.collapsed'),
];

$expression66 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments64 = [
'then' => 'false',
'else' => 'true',
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression66(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array65)),
    $renderingContext
),
];

$output63 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments64, static fn() => '', $renderingContext)
;

$output63 .= '"';

$array67 = [
'0' => $renderingContext->getVariableProvider()->getByPath('showChildren'),
];

$expression68 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments62 = [
'then' => $output63,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression68(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array67)),
    $renderingContext
),
];

$output35 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments62, static fn() => '', $renderingContext)
;

$output35 .= '
    >
        <span class="modulemenu-icon" aria-hidden="true">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure70 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('module.icon');
};

$arguments69 = [
'value' => NULL,
];

$output35 .= isset($arguments69['value']) ? $arguments69['value'] : $renderChildrenClosure70();

$output35 .= '</span>
        <span class="modulemenu-name">';

$output35 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('module.title')]);

$output35 .= '</span>
        <span class="modulemenu-indicator" aria-hidden="true"></span>
    </';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array72 = [
'0' => $renderingContext->getVariableProvider()->getByPath('module.link'),
];

$expression73 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments71 = [
'then' => 'a',
'else' => 'button',
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression73(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array72)),
    $renderingContext
),
];

$output35 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments71, static fn() => '', $renderingContext)
;

$output35 .= '>
';

    return $output35;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output74 = '';

$output74 .= '

<nav
    class="modulemenu t3js-modulemenu"
    data-role="modulemenu"
    id="modulemenu"
    aria-label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure76 = function() use ($renderingContext) {
return NULL;
};

$arguments75 = [
'key' => 'LLL:EXT:backend/Resources/Private/Language/locallang.xlf:modulemenu.label',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output74 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext)]);

$output74 .= '"
>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array78 = [
'0' => $renderingContext->getVariableProvider()->getByPath('modules'),
];

$expression79 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments77 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression79(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array78)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output80 = '';

$output80 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure82 = function() use ($renderingContext) {
return NULL;
};

$array83 = [
'modules' => $renderingContext->getVariableProvider()->getByPath('modules'),
];

$arguments81 = [
'section' => 'Menubar',
'partial' => NULL,
'delegate' => NULL,
'arguments' => $array83,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output80 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);

$output80 .= '
    ';
return $output80;
},
];

$output74 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments77, static fn() => '', $renderingContext)
;

$output74 .= '
</nav>

';

$output74 .= '';

$output74 .= '

';

$output74 .= '';

$output74 .= '

';

$output74 .= '';

$output74 .= '


';

    return $output74;
}

}

#