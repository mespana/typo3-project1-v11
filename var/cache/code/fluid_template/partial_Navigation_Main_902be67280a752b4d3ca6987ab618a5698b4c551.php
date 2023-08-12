<?php
class partial_Navigation_Main_902be67280a752b4d3ca6987ab618a5698b4c551 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
 * section MainNavigation
 */
public function section_199fd3cbc502fb014cf96b9d63b613e89d1ba161(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output0 = '';

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array2 = [
'0' => $renderingContext->getVariableProvider()->getByPath('menu'),
];

$expression3 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments1 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression3(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output4 = '';

$output4 .= '
        <ul class="navbar-nav">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure6 = function() use ($renderingContext) {
$output7 = '';

$output7 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array9 = [
'0' => $renderingContext->getVariableProvider()->getByPath('item.spacer'),
];

$expression10 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments8 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression10(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array9)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
return '
                        </ul>
                        <ul class="navbar-nav">
                    ';
},
'__else' => function() use ($renderingContext) {
$output11 = '';

$output11 .= '
                        <li class="nav-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array13 = [
'0' => $renderingContext->getVariableProvider()->getByPath('item.active'),
];

$expression14 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments12 = [
'then' => ' active',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression14(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array13)),
    $renderingContext
),
];

$output11 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments12, static fn() => '', $renderingContext)
;
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array16 = [
'0' => $renderingContext->getVariableProvider()->getByPath('item.children'),
];

$expression17 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments15 = [
'then' => ' dropdown dropdown-hover',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression17(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array16)),
    $renderingContext
),
];

$output11 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments15, static fn() => '', $renderingContext)
;

$output11 .= '">
                            <a href="';

$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.link')]);

$output11 .= '" id="nav-item-';

$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid')]);

$output11 .= '" class="nav-link';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array19 = [
'0' => $renderingContext->getVariableProvider()->getByPath('item.children'),
];

$expression20 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments18 = [
'then' => ' dropdown-toggle',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression20(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array19)),
    $renderingContext
),
];

$output11 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments18, static fn() => '', $renderingContext)
;

$output11 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$output22 = '';

$output22 .= ' target="';

$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.target')]);

$output22 .= '"';

$array23 = [
'0' => $renderingContext->getVariableProvider()->getByPath('item.target'),
];

$expression24 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments21 = [
'then' => $output22,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression24(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array23)),
    $renderingContext
),
];

$output11 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments21, static fn() => '', $renderingContext)
;
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array26 = [
'0' => $renderingContext->getVariableProvider()->getByPath('item.target'),
'1' => ' == "_blank"',
];

$expression27 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "_blank");};

$arguments25 = [
'then' => ' rel="noopener noreferrer"',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression27(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array26)),
    $renderingContext
),
];

$output11 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments25, static fn() => '', $renderingContext)
;

$output11 .= ' title="';

$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title')]);

$output11 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array29 = [
'0' => $renderingContext->getVariableProvider()->getByPath('item.children'),
];

$expression30 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments28 = [
'then' => ' aria-haspopup="true" aria-expanded="false"',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression30(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array29)),
    $renderingContext
),
];

$output11 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments28, static fn() => '', $renderingContext)
;

$output11 .= '>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array32 = [
'0' => $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.enable'),
'1' => ' && ',
'2' => $renderingContext->getVariableProvider()->getByPath('item.icon'),
];

$expression33 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

$arguments31 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression33(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array32)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output34 = '';

$output34 .= '
                                    <span class="nav-link-icon">
                                        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure36 = function() use ($renderingContext) {
return NULL;
};

$arguments35 = [
'icon' => $renderingContext->getVariableProvider()->getByPath('item.icon'),
'height' => $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.height'),
'width' => $renderingContext->getVariableProvider()->getByPath('theme.navigation.icon.width'),
];

$output34 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output34 .= '
                                    </span>
                                ';
return $output34;
},
];

$output11 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments31, static fn() => '', $renderingContext)
;

$output11 .= '
                                <span class="nav-link-text">';

$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.title')]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array38 = [
'0' => $renderingContext->getVariableProvider()->getByPath('item.current'),
];

$expression39 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments37 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression39(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array38)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
return ' <span class="visually-hidden">(current)</span>';
},
];

$output11 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments37, static fn() => '', $renderingContext)
;

$output11 .= '</span>
                            </a>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array41 = [
'0' => $renderingContext->getVariableProvider()->getByPath('item.children'),
];

$expression42 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments40 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression42(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array41)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output43 = '';

$output43 .= '
                                <ul class="dropdown-menu" aria-labelledby="nav-item-';

$output43 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.data.uid')]);

$output43 .= '">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure45 = function() use ($renderingContext) {
$output46 = '';

$output46 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array48 = [
'0' => $renderingContext->getVariableProvider()->getByPath('child.spacer'),
];

$expression49 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments47 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression49(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array48)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
return '
                                                <li class="dropdown-divider"></li>
                                            ';
},
'__else' => function() use ($renderingContext) {
$output50 = '';

$output50 .= '
                                                <li>
                                                    <a href="';

$output50 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.link')]);

$output50 .= '" class="dropdown-item';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array52 = [
'0' => $renderingContext->getVariableProvider()->getByPath('child.active'),
];

$expression53 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments51 = [
'then' => ' active',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression53(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array52)),
    $renderingContext
),
];

$output50 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments51, static fn() => '', $renderingContext)
;

$output50 .= '"';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$output55 = '';

$output55 .= ' target="';

$output55 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.target')]);

$output55 .= '"';

$array56 = [
'0' => $renderingContext->getVariableProvider()->getByPath('child.target'),
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

$output50 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments54, static fn() => '', $renderingContext)
;
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array59 = [
'0' => $renderingContext->getVariableProvider()->getByPath('child.target'),
'1' => ' == "_blank"',
];

$expression60 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == "_blank");};

$arguments58 = [
'then' => ' rel="noopener noreferrer"',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression60(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array59)),
    $renderingContext
),
];

$output50 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments58, static fn() => '', $renderingContext)
;

$output50 .= ' title="';

$output50 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title')]);

$output50 .= '">
                                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array62 = [
'0' => $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.enable'),
'1' => ' && ',
'2' => $renderingContext->getVariableProvider()->getByPath('child.icon'),
];

$expression63 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

$arguments61 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression63(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array62)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output64 = '';

$output64 .= '
                                                            <span class="dropdown-icon">
                                                                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\IconViewHelper
$renderChildrenClosure66 = function() use ($renderingContext) {
return NULL;
};

$arguments65 = [
'icon' => $renderingContext->getVariableProvider()->getByPath('child.icon'),
'height' => $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.height'),
'width' => $renderingContext->getVariableProvider()->getByPath('theme.navigation.dropdown.icon.width'),
];

$output64 .= BK2K\BootstrapPackage\ViewHelpers\IconViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);

$output64 .= '
                                                            </span>
                                                        ';
return $output64;
},
];

$output50 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments61, static fn() => '', $renderingContext)
;

$output50 .= '
                                                        <span class="dropdown-text">';

$output50 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('child.title')]);
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array68 = [
'0' => $renderingContext->getVariableProvider()->getByPath('child.current'),
];

$expression69 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments67 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression69(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array68)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
return ' <span class="visually-hidden">(current)</span>';
},
];

$output50 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments67, static fn() => '', $renderingContext)
;

$output50 .= '</span>
                                                    </a>
                                                </li>
                                            ';
return $output50;
},
];

$output46 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments47, static fn() => '', $renderingContext)
;

$output46 .= '
                                    ';
return $output46;
};

$arguments44 = [
'each' => $renderingContext->getVariableProvider()->getByPath('item.children'),
'as' => 'child',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output43 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext);

$output43 .= '
                                </ul>
                            ';
return $output43;
},
];

$output11 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments40, static fn() => '', $renderingContext)
;

$output11 .= '
                        </li>
                    ';
return $output11;
},
];

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments8, static fn() => '', $renderingContext)
;

$output7 .= '
            ';
return $output7;
};

$arguments5 = [
'each' => $renderingContext->getVariableProvider()->getByPath('menu'),
'as' => 'item',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output4 .= '
        </ul>
    ';
return $output4;
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, static fn() => '', $renderingContext)
;

$output0 .= '
';

    return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output70 = '';

$output70 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure72 = function() use ($renderingContext) {
$output73 = '';

$output73 .= 'bp-page-header navbar navbar-mainnavigation navbar-';

$output73 .= $renderingContext->getVariableProvider()->getByPath('theme.navigation.style');
return $output73;
};

$arguments71 = [
'value' => NULL,
'name' => 'headerClass',
];
$renderChildrenClosure72 = ($arguments71['value'] !== null) ? function() use ($arguments71) { return $arguments71['value']; } : $renderChildrenClosure72;
$output70 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext)]);

$output70 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure75 = function() use ($renderingContext) {
$output76 = '';

$output76 .= $renderingContext->getVariableProvider()->getByPath('headerClass');
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array78 = [
'0' => $renderingContext->getVariableProvider()->getByPath('logo.normal'),
];

$expression79 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments77 = [
'then' => ' navbar-has-image',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression79(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array78)),
    $renderingContext
),
];

$output76 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments77, static fn() => '', $renderingContext)
;
return $output76;
};

$arguments74 = [
'value' => NULL,
'name' => 'headerClass',
];
$renderChildrenClosure75 = ($arguments74['value'] !== null) ? function() use ($arguments74) { return $arguments74['value']; } : $renderChildrenClosure75;
$output70 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext)]);

$output70 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure81 = function() use ($renderingContext) {
$output82 = '';

$output82 .= $renderingContext->getVariableProvider()->getByPath('headerClass');
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$output84 = '';

$output84 .= ' navbar-';

$output84 .= $renderingContext->getVariableProvider()->getByPath('theme.navigation.type');

$output84 .= ' navbar-fixed-';

$output84 .= $renderingContext->getVariableProvider()->getByPath('theme.navigation.type');

$array85 = [
'0' => $renderingContext->getVariableProvider()->getByPath('theme.navigation.type'),
];

$expression86 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments83 = [
'then' => $output84,
'else' => ' navbar-top',
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression86(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array85)),
    $renderingContext
),
];

$output82 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments83, static fn() => '', $renderingContext)
;
return $output82;
};

$arguments80 = [
'value' => NULL,
'name' => 'headerClass',
];
$renderChildrenClosure81 = ($arguments80['value'] !== null) ? function() use ($arguments80) { return $arguments80['value']; } : $renderChildrenClosure81;
$output70 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext)]);

$output70 .= '
<header id="page-header" class="';

$output70 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('headerClass')]);

$output70 .= '">
    <div class="container">
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper
$renderChildrenClosure88 = function() use ($renderingContext) {
$output93 = '';

$output93 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array95 = [
'0' => $renderingContext->getVariableProvider()->getByPath('logo.normal'),
];

$expression96 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments94 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression96(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array95)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output97 = '';

$output97 .= '
                    <img class="navbar-brand-logo-normal" src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure99 = function() use ($renderingContext) {
return NULL;
};

$arguments98 = [
'src' => '',
'treatIdAsReference' => false,
'image' => $renderingContext->getVariableProvider()->getByPath('logo.normal'),
'crop' => NULL,
'cropVariant' => 'default',
'fileExtension' => NULL,
'width' => NULL,
'height' => NULL,
'minWidth' => NULL,
'minHeight' => NULL,
'maxWidth' => NULL,
'maxHeight' => NULL,
'absolute' => false,
];

$output97 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments98, $renderChildrenClosure99, $renderingContext)]);

$output97 .= '" alt="';

$output97 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logoAlt')]);

$output97 .= '" height="';

$output97 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.height')]);

$output97 .= '" width="';

$output97 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.width')]);

$output97 .= '">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array101 = [
'0' => $renderingContext->getVariableProvider()->getByPath('logo.inverted'),
];

$expression102 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments100 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression102(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array101)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output103 = '';

$output103 .= '
                        <img class="navbar-brand-logo-inverted" src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure105 = function() use ($renderingContext) {
return NULL;
};

$arguments104 = [
'src' => '',
'treatIdAsReference' => false,
'image' => $renderingContext->getVariableProvider()->getByPath('logo.inverted'),
'crop' => NULL,
'cropVariant' => 'default',
'fileExtension' => NULL,
'width' => NULL,
'height' => NULL,
'minWidth' => NULL,
'minHeight' => NULL,
'maxWidth' => NULL,
'maxHeight' => NULL,
'absolute' => false,
];

$output103 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext)]);

$output103 .= '" alt="';

$output103 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logoAlt')]);

$output103 .= '" height="';

$output103 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.height')]);

$output103 .= '" width="';

$output103 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('settings.logo.width')]);

$output103 .= '">
                    ';
return $output103;
},
];

$output97 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments100, static fn() => '', $renderingContext)
;

$output97 .= '
                ';
return $output97;
},
'__else' => function() use ($renderingContext) {
$output106 = '';

$output106 .= '
                    <span>';

$output106 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('siteTitle')]);

$output106 .= '</span>
                ';
return $output106;
},
];

$output93 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments94, static fn() => '', $renderingContext)
;

$output93 .= '
        ';
return $output93;
};
$output89 = '';

$output89 .= 'navbar-brand navbar-brand-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array91 = [
'0' => $renderingContext->getVariableProvider()->getByPath('logo.normal'),
];

$expression92 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments90 = [
'then' => 'image',
'else' => 'text',
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression92(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array91)),
    $renderingContext
),
];

$output89 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments90, static fn() => '', $renderingContext)
;

$arguments87 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'class' => $output89,
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => $renderingContext->getVariableProvider()->getByPath('settings.logo.linktitle'),
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'target' => NULL,
'rel' => NULL,
'pageUid' => $renderingContext->getVariableProvider()->getByPath('rootPage'),
'pageType' => NULL,
'noCache' => NULL,
'language' => NULL,
'section' => NULL,
'linkAccessRestrictedPages' => NULL,
'additionalParams' => NULL,
'absolute' => NULL,
'addQueryString' => NULL,
'argumentsToBeExcludedFromQueryString' => NULL,
'addQueryStringMethod' => NULL,
];

$output70 .= TYPO3\CMS\Fluid\ViewHelpers\Link\PageViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext);

$output70 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array108 = [
'0' => $renderingContext->getVariableProvider()->getByPath('mainnavigation'),
];

$expression109 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments107 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression109(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array108)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output110 = '';

$output110 .= '
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-bs-toggle="collapse" data-target="#mainnavigation" data-bs-target="#mainnavigation" aria-controls="mainnavigation" aria-expanded="false" aria-label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure112 = function() use ($renderingContext) {
return NULL;
};

$arguments111 = [
'key' => 'togglenavigation',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => 'bootstrap_package',
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output110 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext)]);

$output110 .= '">
                <span class="navbar-toggler-icon"></span>
            </button>
            <nav id="mainnavigation" class="collapse navbar-collapse">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure114 = function() use ($renderingContext) {
return NULL;
};

$arguments113 = [
'section' => NULL,
'partial' => 'DropIn/Navigation/MainBefore',
'delegate' => NULL,
'arguments' => $renderingContext->getVariableProvider()->getAll(),
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output110 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext);

$output110 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure116 = function() use ($renderingContext) {
return NULL;
};

$array117 = [
'menu' => $renderingContext->getVariableProvider()->getByPath('mainnavigation'),
'theme' => $renderingContext->getVariableProvider()->getByPath('theme'),
];

$arguments115 = [
'section' => 'MainNavigation',
'partial' => NULL,
'delegate' => NULL,
'arguments' => $array117,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output110 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext);

$output110 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure119 = function() use ($renderingContext) {
return NULL;
};

$arguments118 = [
'section' => NULL,
'partial' => 'DropIn/Navigation/MainAfter',
'delegate' => NULL,
'arguments' => $renderingContext->getVariableProvider()->getAll(),
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output110 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext);

$output110 .= '
            </nav>
        ';
return $output110;
},
];

$output70 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments107, static fn() => '', $renderingContext)
;

$output70 .= '
    </div>
</header>

';

$output70 .= '';

$output70 .= '

';

    return $output70;
}

}

#