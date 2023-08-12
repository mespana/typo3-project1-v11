<?php
class partial_Frame_General_BackgroundImage_61700965972cb96fc331f2a5f3c155512da2e388 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output0 = '';

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array2 = [
'0' => $renderingContext->getVariableProvider()->getByPath('backgroundImage.0'),
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
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure6 = function() use ($renderingContext) {
return NULL;
};

$arguments5 = [
'value' => $renderingContext->getVariableProvider()->getByPath('backgroundImage.0'),
'name' => 'backgroundImageObject',
];
$renderChildrenClosure6 = ($arguments5['value'] !== null) ? function() use ($arguments5) { return $arguments5['value']; } : $renderChildrenClosure6;
$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext)]);

$output4 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure8 = function() use ($renderingContext) {
return NULL;
};
$output9 = '';

$output9 .= 'frame-backgroundimage-';

$output9 .= $renderingContext->getVariableProvider()->getByPath('data.uid');

$arguments7 = [
'value' => $output9,
'name' => 'backgroundImageIdentifier',
];
$renderChildrenClosure8 = ($arguments7['value'] !== null) ? function() use ($arguments7) { return $arguments7['value']; } : $renderChildrenClosure8;
$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext)]);

$output4 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure11 = function() use ($renderingContext) {
return 'frame-backgroundimage';
};

$arguments10 = [
'value' => NULL,
'name' => 'backgroundImageClasses',
];
$renderChildrenClosure11 = ($arguments10['value'] !== null) ? function() use ($arguments10) { return $arguments10['value']; } : $renderChildrenClosure11;
$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext)]);

$output4 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array13 = [
'0' => $renderingContext->getVariableProvider()->getByPath('data.background_image_options.parallax'),
];

$expression14 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments12 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression14(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array13)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure16 = function() use ($renderingContext) {
$output17 = '';

$output17 .= $renderingContext->getVariableProvider()->getByPath('backgroundImageClasses');

$output17 .= ' frame-backgroundimage-parallax';
return $output17;
};

$arguments15 = [
'value' => NULL,
'name' => 'backgroundImageClasses',
];
$renderChildrenClosure16 = ($arguments15['value'] !== null) ? function() use ($arguments15) { return $arguments15['value']; } : $renderChildrenClosure16;return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext)]);
},
];

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments12, static fn() => '', $renderingContext)
;

$output4 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array19 = [
'0' => $renderingContext->getVariableProvider()->getByPath('data.background_image_options.fade'),
];

$expression20 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments18 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression20(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array19)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure22 = function() use ($renderingContext) {
$output23 = '';

$output23 .= $renderingContext->getVariableProvider()->getByPath('backgroundImageClasses');

$output23 .= ' frame-backgroundimage-fade';
return $output23;
};

$arguments21 = [
'value' => NULL,
'name' => 'backgroundImageClasses',
];
$renderChildrenClosure22 = ($arguments21['value'] !== null) ? function() use ($arguments21) { return $arguments21['value']; } : $renderChildrenClosure22;return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext)]);
},
];

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments18, static fn() => '', $renderingContext)
;

$output4 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array25 = [
'0' => $renderingContext->getVariableProvider()->getByPath('data.background_image_options.filter'),
];

$expression26 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments24 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression26(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array25)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure28 = function() use ($renderingContext) {
$output29 = '';

$output29 .= $renderingContext->getVariableProvider()->getByPath('backgroundImageClasses');

$output29 .= ' frame-backgroundimage-';

$output29 .= $renderingContext->getVariableProvider()->getByPath('data.background_image_options.filter');
return $output29;
};

$arguments27 = [
'value' => NULL,
'name' => 'backgroundImageClasses',
];
$renderChildrenClosure28 = ($arguments27['value'] !== null) ? function() use ($arguments27) { return $arguments27['value']; } : $renderChildrenClosure28;return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext)]);
},
];

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments24, static fn() => '', $renderingContext)
;

$output4 .= '
    <div class="frame-backgroundimage-container">
        <div id="';

$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backgroundImageIdentifier')]);

$output4 .= '" class="';

$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backgroundImageClasses')]);

$output4 .= '">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure31 = function() use ($renderingContext) {
return NULL;
};

$arguments30 = [
'value' => '',
'name' => 'styles',
];
$renderChildrenClosure31 = ($arguments30['value'] !== null) ? function() use ($arguments30) { return $arguments30['value']; } : $renderChildrenClosure31;
$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext)]);

$output4 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure33 = function() use ($renderingContext) {
$output34 = '';

$output34 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure36 = function() use ($renderingContext) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string37 = '{variant.breakpoint as integer}';
$array38 = array (
  0 => '{variant.breakpoint as integer}',
  1 => '{variant.breakpoint as integer}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string37, $array38);
};

$arguments35 = [
'value' => NULL,
'name' => 'breakpoint',
];
$renderChildrenClosure36 = ($arguments35['value'] !== null) ? function() use ($arguments35) { return $arguments35['value']; } : $renderChildrenClosure36;
$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext)]);

$output34 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure40 = function() use ($renderingContext) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string41 = '{variant.width as integer}';
$array42 = array (
  0 => '{variant.width as integer}',
  1 => '{variant.width as integer}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string41, $array42);
};

$arguments39 = [
'value' => NULL,
'name' => 'width',
];
$renderChildrenClosure40 = ($arguments39['value'] !== null) ? function() use ($arguments39) { return $arguments39['value']; } : $renderChildrenClosure40;
$output34 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext)]);

$output34 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array44 = [
'0' => $renderingContext->getVariableProvider()->getByPath('width'),
'1' => ' && ',
'2' => $renderingContext->getVariableProvider()->getByPath('variant.sizes'),
];

$expression45 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

$arguments43 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression45(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array44)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output46 = '';

$output46 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure48 = function() use ($renderingContext) {
return NULL;
};

$arguments47 = [
'value' => '',
'name' => 'variantStyle',
];
$renderChildrenClosure48 = ($arguments47['value'] !== null) ? function() use ($arguments47) { return $arguments47['value']; } : $renderChildrenClosure48;
$output46 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext)]);

$output46 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure50 = function() use ($renderingContext) {
$output51 = '';

$output51 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure53 = function() use ($renderingContext) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string54 = '{sizeConfig.multiplier as float}';
$array55 = array (
  0 => '{sizeConfig.multiplier as float}',
  1 => '{sizeConfig.multiplier as float}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string54, $array55);
};

$arguments52 = [
'value' => NULL,
'name' => 'sizeWidth',
];
$renderChildrenClosure53 = ($arguments52['value'] !== null) ? function() use ($arguments52) { return $arguments52['value']; } : $renderChildrenClosure53;
$output51 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext)]);

$output51 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure57 = function() use ($renderingContext) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode node
$string58 = '{sizeWidth * width}';
$array59 = array (
  0 => '{sizeWidth * width}',
  1 => '{sizeWidth * width}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode::evaluateExpression($renderingContext, $string58, $array59);
};

$arguments56 = [
'value' => NULL,
'name' => 'sizeWidth',
];
$renderChildrenClosure57 = ($arguments56['value'] !== null) ? function() use ($arguments56) { return $arguments56['value']; } : $renderChildrenClosure57;
$output51 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext)]);

$output51 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure61 = function() use ($renderingContext) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string62 = '{sizeKey as float}';
$array63 = array (
  0 => '{sizeKey as float}',
  1 => '{sizeKey as float}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string62, $array63);
};

$arguments60 = [
'value' => NULL,
'name' => 'sizeDppx',
];
$renderChildrenClosure61 = ($arguments60['value'] !== null) ? function() use ($arguments60) { return $arguments60['value']; } : $renderChildrenClosure61;
$output51 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext)]);

$output51 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure65 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array67 = [
'0' => $renderingContext->getVariableProvider()->getByPath('breakpoint'),
];

$expression68 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments66 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression68(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array67)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output69 = '';

$output69 .= '(min-width: ';

$output69 .= $renderingContext->getVariableProvider()->getByPath('breakpoint');

$output69 .= 'px)';
return $output69;
},
];
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments66, static fn() => '', $renderingContext)
;
};

$arguments64 = [
'value' => NULL,
'name' => 'mediaBreakpoint',
];
$renderChildrenClosure65 = ($arguments64['value'] !== null) ? function() use ($arguments64) { return $arguments64['value']; } : $renderChildrenClosure65;
$output51 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext)]);

$output51 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure71 = function() use ($renderingContext) {
return NULL;
};

$arguments70 = [
'value' => '',
'name' => 'mediaQuery',
];
$renderChildrenClosure71 = ($arguments70['value'] !== null) ? function() use ($arguments70) { return $arguments70['value']; } : $renderChildrenClosure71;
$output51 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext)]);

$output51 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array73 = [
'0' => $renderingContext->getVariableProvider()->getByPath('mediaBreakpoint'),
];

$expression74 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments72 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression74(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array73)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output75 = '';

$output75 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure77 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('mediaBreakpoint');
};

$arguments76 = [
'value' => NULL,
'name' => 'mediaQuery',
];
$renderChildrenClosure77 = ($arguments76['value'] !== null) ? function() use ($arguments76) { return $arguments76['value']; } : $renderChildrenClosure77;
$output75 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext)]);

$output75 .= '
                        ';
return $output75;
},
];

$output51 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments72, static fn() => '', $renderingContext)
;

$output51 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array79 = [
'0' => $renderingContext->getVariableProvider()->getByPath('sizeDppx'),
'1' => ' > 1',
];

$expression80 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};

$arguments78 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression80(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array79)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output81 = '';

$output81 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure83 = function() use ($renderingContext) {
$output84 = '';

$output84 .= '(-webkit-min-device-pixel-ratio: ';

$output84 .= $renderingContext->getVariableProvider()->getByPath('sizeDppx');

$output84 .= ')';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array86 = [
'0' => $renderingContext->getVariableProvider()->getByPath('mediaBreakpoint'),
];

$expression87 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments85 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression87(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array86)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output88 = '';

$output88 .= ' and ';

$output88 .= $renderingContext->getVariableProvider()->getByPath('mediaBreakpoint');
return $output88;
},
];

$output84 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments85, static fn() => '', $renderingContext)
;
return $output84;
};

$arguments82 = [
'value' => NULL,
'name' => 'mediaQuery',
];
$renderChildrenClosure83 = ($arguments82['value'] !== null) ? function() use ($arguments82) { return $arguments82['value']; } : $renderChildrenClosure83;
$output81 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext)]);

$output81 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure90 = function() use ($renderingContext) {
$output91 = '';

$output91 .= $renderingContext->getVariableProvider()->getByPath('mediaQuery');

$output91 .= ', (min-resolution: ';

$output91 .= $renderingContext->getVariableProvider()->getByPath('sizeDppx');

$output91 .= 'dppx)';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array93 = [
'0' => $renderingContext->getVariableProvider()->getByPath('mediaBreakpoint'),
];

$expression94 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments92 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression94(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array93)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output95 = '';

$output95 .= ' and ';

$output95 .= $renderingContext->getVariableProvider()->getByPath('mediaBreakpoint');
return $output95;
},
];

$output91 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments92, static fn() => '', $renderingContext)
;
return $output91;
};

$arguments89 = [
'value' => NULL,
'name' => 'mediaQuery',
];
$renderChildrenClosure90 = ($arguments89['value'] !== null) ? function() use ($arguments89) { return $arguments89['value']; } : $renderChildrenClosure90;
$output81 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext)]);

$output81 .= '
                        ';
return $output81;
},
];

$output51 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments78, static fn() => '', $renderingContext)
;

$output51 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure97 = function() use ($renderingContext) {
$output98 = '';

$output98 .= $renderingContext->getVariableProvider()->getByPath('variantStyle');

$output98 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array100 = [
'0' => $renderingContext->getVariableProvider()->getByPath('mediaQuery'),
];

$expression101 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments99 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression101(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array100)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output102 = '';

$output102 .= '@media ';

$output102 .= $renderingContext->getVariableProvider()->getByPath('mediaQuery');

$output102 .= ' { ';
return $output102;
},
];

$output98 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments99, static fn() => '', $renderingContext)
;

$output98 .= '#';

$output98 .= $renderingContext->getVariableProvider()->getByPath('backgroundImageIdentifier');

$output98 .= ' { background-image: url(\'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure104 = function() use ($renderingContext) {
return NULL;
};

$arguments103 = [
'src' => '',
'treatIdAsReference' => false,
'image' => $renderingContext->getVariableProvider()->getByPath('backgroundImageObject'),
'crop' => NULL,
'cropVariant' => $renderingContext->getVariableProvider()->getByPath('name'),
'fileExtension' => NULL,
'width' => NULL,
'height' => NULL,
'minWidth' => NULL,
'minHeight' => NULL,
'maxWidth' => $renderingContext->getVariableProvider()->getByPath('sizeWidth'),
'maxHeight' => NULL,
'absolute' => false,
];

$output98 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext);

$output98 .= '\'); }';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array106 = [
'0' => $renderingContext->getVariableProvider()->getByPath('mediaQuery'),
];

$expression107 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments105 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression107(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array106)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
return ' }';
},
];

$output98 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments105, static fn() => '', $renderingContext)
;
return $output98;
};

$arguments96 = [
'value' => NULL,
'name' => 'variantStyle',
];
$renderChildrenClosure97 = ($arguments96['value'] !== null) ? function() use ($arguments96) { return $arguments96['value']; } : $renderChildrenClosure97;
$output51 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments96, $renderChildrenClosure97, $renderingContext)]);

$output51 .= '
                    ';
return $output51;
};

$arguments49 = [
'each' => $renderingContext->getVariableProvider()->getByPath('variant.sizes'),
'as' => 'sizeConfig',
'key' => 'sizeKey',
'reverse' => false,
'iteration' => 'iteration',
];

$output46 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output46 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure109 = function() use ($renderingContext) {
return NULL;
};
$output110 = '';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Format\TrimViewHelper
$renderChildrenClosure112 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('variantStyle');
};

$arguments111 = [
];

$output110 .= BK2K\BootstrapPackage\ViewHelpers\Format\TrimViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext);

$output110 .= ' ';

$output110 .= $renderingContext->getVariableProvider()->getByPath('styles');

$arguments108 = [
'value' => $output110,
'name' => 'styles',
];
$renderChildrenClosure109 = ($arguments108['value'] !== null) ? function() use ($arguments108) { return $arguments108['value']; } : $renderChildrenClosure109;
$output46 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments108, $renderChildrenClosure109, $renderingContext)]);

$output46 .= '
                ';
return $output46;
},
];

$output34 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments43, static fn() => '', $renderingContext)
;

$output34 .= '
            ';
return $output34;
};

$arguments32 = [
'each' => $renderingContext->getVariableProvider()->getByPath('variants'),
'as' => 'variant',
'key' => 'name',
'reverse' => false,
'iteration' => NULL,
];

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output4 .= '
            <style>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure114 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('styles');
};

$arguments113 = [
'value' => NULL,
];

$output4 .= isset($arguments113['value']) ? $arguments113['value'] : $renderChildrenClosure114();

$output4 .= '</style>
        </div>
    </div>
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

}

#