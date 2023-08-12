<?php
class partial_Carousel_General_BackgroundImage_629f8b4436bbb0fe41358f5d5a5941f6be5fd8dd extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
'0' => $renderingContext->getVariableProvider()->getByPath('item.backgroundImage.0'),
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
'value' => $renderingContext->getVariableProvider()->getByPath('item.backgroundImage.0'),
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

$output9 .= 'carousel-backgroundimage-';

$output9 .= $renderingContext->getVariableProvider()->getByPath('data.uid');

$output9 .= '-';

$output9 .= $renderingContext->getVariableProvider()->getByPath('item.data.uid');

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
return 'carousel-backgroundimage';
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
'0' => $renderingContext->getVariableProvider()->getByPath('item.data.background_image_options.parallax'),
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

$output17 .= ' carousel-backgroundimage-parallax';
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
'0' => $renderingContext->getVariableProvider()->getByPath('item.data.background_image_options.fade'),
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

$output23 .= ' carousel-backgroundimage-fade';
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
'0' => $renderingContext->getVariableProvider()->getByPath('item.data.background_image_options.filter'),
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

$output29 .= ' carousel-backgroundimage-';

$output29 .= $renderingContext->getVariableProvider()->getByPath('item.data.background_image_options.filter');
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
    <div class="carousel-backgroundimage-container">
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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure33 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('settings.responsiveimages.contentelements.carousel.background_image');
};

$arguments32 = [
'value' => NULL,
'name' => 'imageConfig',
];
$renderChildrenClosure33 = ($arguments32['value'] !== null) ? function() use ($arguments32) { return $arguments32['value']; } : $renderChildrenClosure33;
$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext)]);

$output4 .= '
            ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Data\ImageVariantsViewHelper
$renderChildrenClosure35 = function() use ($renderingContext) {
return NULL;
};

$arguments34 = [
'as' => 'variants',
'variants' => $renderingContext->getVariableProvider()->getByPath('variants'),
'multiplier' => $renderingContext->getVariableProvider()->getByPath('imageConfig.multiplier'),
'gutters' => $renderingContext->getVariableProvider()->getByPath('imageConfig.gutters'),
'corrections' => $renderingContext->getVariableProvider()->getByPath('imageConfig.corrections'),
'aspectRatio' => NULL,
];

$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [BK2K\BootstrapPackage\ViewHelpers\Data\ImageVariantsViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext)]);

$output4 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure37 = function() use ($renderingContext) {
$output38 = '';

$output38 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure40 = function() use ($renderingContext) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string41 = '{variant.breakpoint as integer}';
$array42 = array (
  0 => '{variant.breakpoint as integer}',
  1 => '{variant.breakpoint as integer}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string41, $array42);
};

$arguments39 = [
'value' => NULL,
'name' => 'breakpoint',
];
$renderChildrenClosure40 = ($arguments39['value'] !== null) ? function() use ($arguments39) { return $arguments39['value']; } : $renderChildrenClosure40;
$output38 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext)]);

$output38 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure44 = function() use ($renderingContext) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string45 = '{variant.width as integer}';
$array46 = array (
  0 => '{variant.width as integer}',
  1 => '{variant.width as integer}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string45, $array46);
};

$arguments43 = [
'value' => NULL,
'name' => 'width',
];
$renderChildrenClosure44 = ($arguments43['value'] !== null) ? function() use ($arguments43) { return $arguments43['value']; } : $renderChildrenClosure44;
$output38 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext)]);

$output38 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array48 = [
'0' => $renderingContext->getVariableProvider()->getByPath('width'),
'1' => ' && ',
'2' => $renderingContext->getVariableProvider()->getByPath('variant.sizes'),
];

$expression49 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

$arguments47 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression49(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array48)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output50 = '';

$output50 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure52 = function() use ($renderingContext) {
return NULL;
};

$arguments51 = [
'value' => '',
'name' => 'variantStyle',
];
$renderChildrenClosure52 = ($arguments51['value'] !== null) ? function() use ($arguments51) { return $arguments51['value']; } : $renderChildrenClosure52;
$output50 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext)]);

$output50 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure54 = function() use ($renderingContext) {
$output55 = '';

$output55 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure57 = function() use ($renderingContext) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string58 = '{sizeConfig.multiplier as float}';
$array59 = array (
  0 => '{sizeConfig.multiplier as float}',
  1 => '{sizeConfig.multiplier as float}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string58, $array59);
};

$arguments56 = [
'value' => NULL,
'name' => 'sizeWidth',
];
$renderChildrenClosure57 = ($arguments56['value'] !== null) ? function() use ($arguments56) { return $arguments56['value']; } : $renderChildrenClosure57;
$output55 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext)]);

$output55 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure61 = function() use ($renderingContext) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode node
$string62 = '{sizeWidth * width}';
$array63 = array (
  0 => '{sizeWidth * width}',
  1 => '{sizeWidth * width}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode::evaluateExpression($renderingContext, $string62, $array63);
};

$arguments60 = [
'value' => NULL,
'name' => 'sizeWidth',
];
$renderChildrenClosure61 = ($arguments60['value'] !== null) ? function() use ($arguments60) { return $arguments60['value']; } : $renderChildrenClosure61;
$output55 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext)]);

$output55 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure65 = function() use ($renderingContext) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string66 = '{sizeKey as float}';
$array67 = array (
  0 => '{sizeKey as float}',
  1 => '{sizeKey as float}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string66, $array67);
};

$arguments64 = [
'value' => NULL,
'name' => 'sizeDppx',
];
$renderChildrenClosure65 = ($arguments64['value'] !== null) ? function() use ($arguments64) { return $arguments64['value']; } : $renderChildrenClosure65;
$output55 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext)]);

$output55 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure69 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array71 = [
'0' => $renderingContext->getVariableProvider()->getByPath('breakpoint'),
];

$expression72 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments70 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression72(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array71)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output73 = '';

$output73 .= '(min-width: ';

$output73 .= $renderingContext->getVariableProvider()->getByPath('breakpoint');

$output73 .= 'px)';
return $output73;
},
];
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments70, static fn() => '', $renderingContext)
;
};

$arguments68 = [
'value' => NULL,
'name' => 'mediaBreakpoint',
];
$renderChildrenClosure69 = ($arguments68['value'] !== null) ? function() use ($arguments68) { return $arguments68['value']; } : $renderChildrenClosure69;
$output55 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext)]);

$output55 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure75 = function() use ($renderingContext) {
return NULL;
};

$arguments74 = [
'value' => '',
'name' => 'mediaQuery',
];
$renderChildrenClosure75 = ($arguments74['value'] !== null) ? function() use ($arguments74) { return $arguments74['value']; } : $renderChildrenClosure75;
$output55 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext)]);

$output55 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array77 = [
'0' => $renderingContext->getVariableProvider()->getByPath('mediaBreakpoint'),
];

$expression78 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments76 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression78(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array77)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output79 = '';

$output79 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure81 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('mediaBreakpoint');
};

$arguments80 = [
'value' => NULL,
'name' => 'mediaQuery',
];
$renderChildrenClosure81 = ($arguments80['value'] !== null) ? function() use ($arguments80) { return $arguments80['value']; } : $renderChildrenClosure81;
$output79 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext)]);

$output79 .= '
                        ';
return $output79;
},
];

$output55 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments76, static fn() => '', $renderingContext)
;

$output55 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array83 = [
'0' => $renderingContext->getVariableProvider()->getByPath('sizeDppx'),
'1' => ' > 1',
];

$expression84 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};

$arguments82 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression84(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array83)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output85 = '';

$output85 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure87 = function() use ($renderingContext) {
$output88 = '';

$output88 .= '(-webkit-min-device-pixel-ratio: ';

$output88 .= $renderingContext->getVariableProvider()->getByPath('sizeDppx');

$output88 .= ')';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array90 = [
'0' => $renderingContext->getVariableProvider()->getByPath('mediaBreakpoint'),
];

$expression91 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments89 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression91(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array90)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output92 = '';

$output92 .= ' and ';

$output92 .= $renderingContext->getVariableProvider()->getByPath('mediaBreakpoint');
return $output92;
},
];

$output88 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments89, static fn() => '', $renderingContext)
;
return $output88;
};

$arguments86 = [
'value' => NULL,
'name' => 'mediaQuery',
];
$renderChildrenClosure87 = ($arguments86['value'] !== null) ? function() use ($arguments86) { return $arguments86['value']; } : $renderChildrenClosure87;
$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments86, $renderChildrenClosure87, $renderingContext)]);

$output85 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure94 = function() use ($renderingContext) {
$output95 = '';

$output95 .= $renderingContext->getVariableProvider()->getByPath('mediaQuery');

$output95 .= ', (min-resolution: ';

$output95 .= $renderingContext->getVariableProvider()->getByPath('sizeDppx');

$output95 .= 'dppx)';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array97 = [
'0' => $renderingContext->getVariableProvider()->getByPath('mediaBreakpoint'),
];

$expression98 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments96 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression98(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array97)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output99 = '';

$output99 .= ' and ';

$output99 .= $renderingContext->getVariableProvider()->getByPath('mediaBreakpoint');
return $output99;
},
];

$output95 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments96, static fn() => '', $renderingContext)
;
return $output95;
};

$arguments93 = [
'value' => NULL,
'name' => 'mediaQuery',
];
$renderChildrenClosure94 = ($arguments93['value'] !== null) ? function() use ($arguments93) { return $arguments93['value']; } : $renderChildrenClosure94;
$output85 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext)]);

$output85 .= '
                        ';
return $output85;
},
];

$output55 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments82, static fn() => '', $renderingContext)
;

$output55 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure101 = function() use ($renderingContext) {
$output102 = '';

$output102 .= $renderingContext->getVariableProvider()->getByPath('variantStyle');

$output102 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array104 = [
'0' => $renderingContext->getVariableProvider()->getByPath('mediaQuery'),
];

$expression105 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments103 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression105(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array104)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output106 = '';

$output106 .= '@media ';

$output106 .= $renderingContext->getVariableProvider()->getByPath('mediaQuery');

$output106 .= ' { ';
return $output106;
},
];

$output102 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments103, static fn() => '', $renderingContext)
;

$output102 .= '#';

$output102 .= $renderingContext->getVariableProvider()->getByPath('backgroundImageIdentifier');

$output102 .= ' { background-image: url(\'';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure108 = function() use ($renderingContext) {
return NULL;
};

$arguments107 = [
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

$output102 .= TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);

$output102 .= '\'); }';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array110 = [
'0' => $renderingContext->getVariableProvider()->getByPath('mediaQuery'),
];

$expression111 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments109 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression111(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array110)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
return ' }';
},
];

$output102 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments109, static fn() => '', $renderingContext)
;
return $output102;
};

$arguments100 = [
'value' => NULL,
'name' => 'variantStyle',
];
$renderChildrenClosure101 = ($arguments100['value'] !== null) ? function() use ($arguments100) { return $arguments100['value']; } : $renderChildrenClosure101;
$output55 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext)]);

$output55 .= '
                    ';
return $output55;
};

$arguments53 = [
'each' => $renderingContext->getVariableProvider()->getByPath('variant.sizes'),
'as' => 'sizeConfig',
'key' => 'sizeKey',
'reverse' => false,
'iteration' => 'iteration',
];

$output50 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output50 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure113 = function() use ($renderingContext) {
return NULL;
};
$output114 = '';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Format\TrimViewHelper
$renderChildrenClosure116 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('variantStyle');
};

$arguments115 = [
];

$output114 .= BK2K\BootstrapPackage\ViewHelpers\Format\TrimViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext);

$output114 .= ' ';

$output114 .= $renderingContext->getVariableProvider()->getByPath('styles');

$arguments112 = [
'value' => $output114,
'name' => 'styles',
];
$renderChildrenClosure113 = ($arguments112['value'] !== null) ? function() use ($arguments112) { return $arguments112['value']; } : $renderChildrenClosure113;
$output50 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext)]);

$output50 .= '
                ';
return $output50;
},
];

$output38 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments47, static fn() => '', $renderingContext)
;

$output38 .= '
            ';
return $output38;
};

$arguments36 = [
'each' => $renderingContext->getVariableProvider()->getByPath('variants'),
'as' => 'variant',
'key' => 'name',
'reverse' => false,
'iteration' => NULL,
];

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output4 .= '
            <style>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure118 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('styles');
};

$arguments117 = [
'value' => NULL,
];

$output4 .= isset($arguments117['value']) ? $arguments117['value'] : $renderChildrenClosure118();

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