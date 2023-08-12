<?php
class partial_Media_Rendering_Image_eee0208c594ff10f6bcc87f3e5d612b67af63903 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
<picture>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
$output3 = '';

$output3 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string6 = '{variant.breakpoint as integer}';
$array7 = array (
  0 => '{variant.breakpoint as integer}',
  1 => '{variant.breakpoint as integer}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string6, $array7);
};

$arguments4 = [
'value' => NULL,
'name' => 'breakpoint',
];
$renderChildrenClosure5 = ($arguments4['value'] !== null) ? function() use ($arguments4) { return $arguments4['value']; } : $renderChildrenClosure5;
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext)]);

$output3 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure9 = function() use ($renderingContext) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string10 = '{variant.width as integer}';
$array11 = array (
  0 => '{variant.width as integer}',
  1 => '{variant.width as integer}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string10, $array11);
};

$arguments8 = [
'value' => NULL,
'name' => 'width',
];
$renderChildrenClosure9 = ($arguments8['value'] !== null) ? function() use ($arguments8) { return $arguments8['value']; } : $renderChildrenClosure9;
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext)]);

$output3 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure13 = function() use ($renderingContext) {
return NULL;
};

$arguments12 = [
'value' => '',
'name' => 'height',
];
$renderChildrenClosure13 = ($arguments12['value'] !== null) ? function() use ($arguments12) { return $arguments12['value']; } : $renderChildrenClosure13;
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext)]);

$output3 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array15 = [
'0' => $renderingContext->getVariableProvider()->getByPath('width'),
];

$expression16 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments14 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression16(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array15)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output17 = '';

$output17 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array19 = [
'0' => $renderingContext->getVariableProvider()->getByPath('variant.aspectRatio'),
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
$output21 = '';

$output21 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure23 = function() use ($renderingContext) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string24 = '{variant.aspectRatio as float}';
$array25 = array (
  0 => '{variant.aspectRatio as float}',
  1 => '{variant.aspectRatio as float}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string24, $array25);
};

$arguments22 = [
'value' => NULL,
'name' => 'aspectRatio',
];
$renderChildrenClosure23 = ($arguments22['value'] !== null) ? function() use ($arguments22) { return $arguments22['value']; } : $renderChildrenClosure23;
$output21 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext)]);

$output21 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure27 = function() use ($renderingContext) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode node
$string28 = '{width / aspectRatio}';
$array29 = array (
  0 => '{width / aspectRatio}',
  1 => '{width / aspectRatio}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode::evaluateExpression($renderingContext, $string28, $array29);
};

$arguments26 = [
'value' => NULL,
'name' => 'height',
];
$renderChildrenClosure27 = ($arguments26['value'] !== null) ? function() use ($arguments26) { return $arguments26['value']; } : $renderChildrenClosure27;
$output21 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext)]);

$output21 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure31 = function() use ($renderingContext) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string32 = '{height as integer}';
$array33 = array (
  0 => '{height as integer}',
  1 => '{height as integer}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string32, $array33);
};

$arguments30 = [
'value' => NULL,
'name' => 'height',
];
$renderChildrenClosure31 = ($arguments30['value'] !== null) ? function() use ($arguments30) { return $arguments30['value']; } : $renderChildrenClosure31;
$output21 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext)]);

$output21 .= '
            ';
return $output21;
},
];

$output17 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments18, static fn() => '', $renderingContext)
;

$output17 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure35 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$output37 = '';

$output37 .= 'media="(min-width: ';

$output37 .= $renderingContext->getVariableProvider()->getByPath('breakpoint');

$output37 .= 'px)"';

$array38 = [
'0' => $renderingContext->getVariableProvider()->getByPath('breakpoint'),
];

$expression39 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments36 = [
'then' => $output37,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression39(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array38)),
    $renderingContext
),
];
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments36, static fn() => '', $renderingContext)
;
};

$arguments34 = [
'value' => NULL,
'name' => 'mediaQuery',
];
$renderChildrenClosure35 = ($arguments34['value'] !== null) ? function() use ($arguments34) { return $arguments34['value']; } : $renderChildrenClosure35;
$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext)]);

$output17 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array41 = [
'0' => $renderingContext->getVariableProvider()->getByPath('variant.sizes'),
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
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure45 = function() use ($renderingContext) {
return NULL;
};

$arguments44 = [
'value' => '',
'name' => 'srcset',
];
$renderChildrenClosure45 = ($arguments44['value'] !== null) ? function() use ($arguments44) { return $arguments44['value']; } : $renderChildrenClosure45;
$output43 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext)]);

$output43 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure47 = function() use ($renderingContext) {
$output48 = '';

$output48 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure50 = function() use ($renderingContext) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string51 = '{sizeConfig.multiplier as float}';
$array52 = array (
  0 => '{sizeConfig.multiplier as float}',
  1 => '{sizeConfig.multiplier as float}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string51, $array52);
};

$arguments49 = [
'value' => NULL,
'name' => 'sizeWidth',
];
$renderChildrenClosure50 = ($arguments49['value'] !== null) ? function() use ($arguments49) { return $arguments49['value']; } : $renderChildrenClosure50;
$output48 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext)]);

$output48 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure54 = function() use ($renderingContext) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode node
$string55 = '{sizeWidth * width}';
$array56 = array (
  0 => '{sizeWidth * width}',
  1 => '{sizeWidth * width}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode::evaluateExpression($renderingContext, $string55, $array56);
};

$arguments53 = [
'value' => NULL,
'name' => 'sizeWidth',
];
$renderChildrenClosure54 = ($arguments53['value'] !== null) ? function() use ($arguments53) { return $arguments53['value']; } : $renderChildrenClosure54;
$output48 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext)]);

$output48 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure58 = function() use ($renderingContext) {
return NULL;
};

$arguments57 = [
'value' => '',
'name' => 'sizeHeight',
];
$renderChildrenClosure58 = ($arguments57['value'] !== null) ? function() use ($arguments57) { return $arguments57['value']; } : $renderChildrenClosure58;
$output48 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext)]);

$output48 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array60 = [
'0' => $renderingContext->getVariableProvider()->getByPath('height'),
];

$expression61 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments59 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression61(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array60)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output62 = '';

$output62 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure64 = function() use ($renderingContext) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string65 = '{sizeConfig.multiplier as float}';
$array66 = array (
  0 => '{sizeConfig.multiplier as float}',
  1 => '{sizeConfig.multiplier as float}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string65, $array66);
};

$arguments63 = [
'value' => NULL,
'name' => 'sizeHeight',
];
$renderChildrenClosure64 = ($arguments63['value'] !== null) ? function() use ($arguments63) { return $arguments63['value']; } : $renderChildrenClosure64;
$output62 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext)]);

$output62 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure68 = function() use ($renderingContext) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode node
$string69 = '{sizeHeight * height}';
$array70 = array (
  0 => '{sizeHeight * height}',
  1 => '{sizeHeight * height}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode::evaluateExpression($renderingContext, $string69, $array70);
};

$arguments67 = [
'value' => NULL,
'name' => 'sizeHeight',
];
$renderChildrenClosure68 = ($arguments67['value'] !== null) ? function() use ($arguments67) { return $arguments67['value']; } : $renderChildrenClosure68;
$output62 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext)]);

$output62 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure72 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure74 = function() use ($renderingContext) {
return NULL;
};
$output75 = '';

$output75 .= $renderingContext->getVariableProvider()->getByPath('sizeWidth');

$output75 .= 'c';
$output76 = '';

$output76 .= $renderingContext->getVariableProvider()->getByPath('sizeHeight');

$output76 .= 'c';

$arguments73 = [
'src' => '',
'treatIdAsReference' => false,
'image' => $renderingContext->getVariableProvider()->getByPath('file'),
'crop' => NULL,
'cropVariant' => $renderingContext->getVariableProvider()->getByPath('name'),
'fileExtension' => NULL,
'width' => $output75,
'height' => $output76,
'minWidth' => NULL,
'minHeight' => NULL,
'maxWidth' => NULL,
'maxHeight' => NULL,
'absolute' => false,
];
return TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext);
};

$arguments71 = [
'value' => NULL,
'name' => 'sizeUrl',
];
$renderChildrenClosure72 = ($arguments71['value'] !== null) ? function() use ($arguments71) { return $arguments71['value']; } : $renderChildrenClosure72;
$output62 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext)]);

$output62 .= '
                        ';
return $output62;
},
'__else' => function() use ($renderingContext) {
$output77 = '';

$output77 .= '
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure79 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure81 = function() use ($renderingContext) {
return NULL;
};

$arguments80 = [
'src' => '',
'treatIdAsReference' => false,
'image' => $renderingContext->getVariableProvider()->getByPath('file'),
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
return TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext);
};

$arguments78 = [
'value' => NULL,
'name' => 'sizeUrl',
];
$renderChildrenClosure79 = ($arguments78['value'] !== null) ? function() use ($arguments78) { return $arguments78['value']; } : $renderChildrenClosure79;
$output77 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext)]);

$output77 .= '
                        ';
return $output77;
},
];

$output48 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments59, static fn() => '', $renderingContext)
;

$output48 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure83 = function() use ($renderingContext) {
$output84 = '';

$output84 .= $renderingContext->getVariableProvider()->getByPath('srcset');

$output84 .= $renderingContext->getVariableProvider()->getByPath('sizeUrl');

$output84 .= ' ';

$output84 .= $renderingContext->getVariableProvider()->getByPath('sizeKey');
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array86 = [
'0' => $renderingContext->getVariableProvider()->getByPath('iteration.isLast'),
];

$expression87 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments85 = [
'then' => NULL,
'else' => ',',
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression87(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array86)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
return NULL;
},
];

$output84 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments85, static fn() => '', $renderingContext)
;
return $output84;
};

$arguments82 = [
'value' => NULL,
'name' => 'srcset',
];
$renderChildrenClosure83 = ($arguments82['value'] !== null) ? function() use ($arguments82) { return $arguments82['value']; } : $renderChildrenClosure83;
$output48 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext)]);

$output48 .= '
                ';
return $output48;
};

$arguments46 = [
'each' => $renderingContext->getVariableProvider()->getByPath('variant.sizes'),
'as' => 'sizeConfig',
'key' => 'sizeKey',
'reverse' => false,
'iteration' => 'iteration',
];

$output43 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output43 .= '
            ';
return $output43;
},
];

$output17 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments40, static fn() => '', $renderingContext)
;

$output17 .= '
            <source data-variant="';

$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('name')]);

$output17 .= '" ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$output89 = '';

$output89 .= 'data-width="';

$output89 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('width')]);

$output89 .= '" data-height="';

$output89 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('sizeHeight')]);

$output89 .= '"';
$output90 = '';

$output90 .= 'data-maxwidth="';

$output90 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('width')]);

$output90 .= '"';

$array91 = [
'0' => $renderingContext->getVariableProvider()->getByPath('sizeHeight'),
];

$expression92 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments88 = [
'then' => $output89,
'else' => $output90,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression92(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array91)),
    $renderingContext
),
];

$output17 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments88, static fn() => '', $renderingContext)
;

$output17 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure94 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('mediaQuery');
};

$arguments93 = [
'value' => NULL,
];

$output17 .= isset($arguments93['value']) ? $arguments93['value'] : $renderChildrenClosure94();

$output17 .= ' srcset="';

$output17 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('srcset')]);

$output17 .= '">
        ';
return $output17;
},
];

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments14, static fn() => '', $renderingContext)
;

$output3 .= '
    ';
return $output3;
};

$arguments1 = [
'each' => $renderingContext->getVariableProvider()->getByPath('variants'),
'as' => 'variant',
'key' => 'name',
'reverse' => false,
'iteration' => NULL,
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure96 = function() use ($renderingContext) {
return NULL;
};

$arguments95 = [
'value' => $renderingContext->getVariableProvider()->getByPath('variants.default.width'),
'name' => 'defaultWidth',
];
$renderChildrenClosure96 = ($arguments95['value'] !== null) ? function() use ($arguments95) { return $arguments95['value']; } : $renderChildrenClosure96;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext)]);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure98 = function() use ($renderingContext) {
return NULL;
};

$arguments97 = [
'value' => $renderingContext->getVariableProvider()->getByPath('variants.default.aspectRatio'),
'name' => 'defaultAspectRatio',
];
$renderChildrenClosure98 = ($arguments97['value'] !== null) ? function() use ($arguments97) { return $arguments97['value']; } : $renderChildrenClosure98;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext)]);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array100 = [
'0' => $renderingContext->getVariableProvider()->getByPath('defaultAspectRatio'),
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

$output102 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure104 = function() use ($renderingContext) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string105 = '{defaultAspectRatio as float}';
$array106 = array (
  0 => '{defaultAspectRatio as float}',
  1 => '{defaultAspectRatio as float}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string105, $array106);
};

$arguments103 = [
'value' => NULL,
'name' => 'aspectRatio',
];
$renderChildrenClosure104 = ($arguments103['value'] !== null) ? function() use ($arguments103) { return $arguments103['value']; } : $renderChildrenClosure104;
$output102 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext)]);

$output102 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure108 = function() use ($renderingContext) {
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode node
$string109 = '{defaultWidth / aspectRatio}';
$array110 = array (
  0 => '{defaultWidth / aspectRatio}',
  1 => '{defaultWidth / aspectRatio}',
);
return \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\MathExpressionNode::evaluateExpression($renderingContext, $string109, $array110);
};

$arguments107 = [
'value' => NULL,
'name' => 'defaultHeight',
];
$renderChildrenClosure108 = ($arguments107['value'] !== null) ? function() use ($arguments107) { return $arguments107['value']; } : $renderChildrenClosure108;
$output102 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext)]);

$output102 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure112 = function() use ($renderingContext) {
$output113 = '';
// Rendering TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode node
$string114 = '{defaultHeight as integer}';
$array115 = array (
  0 => '{defaultHeight as integer}',
  1 => '{defaultHeight as integer}',
);

$output113 .= \TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\CastingExpressionNode::evaluateExpression($renderingContext, $string114, $array115);

$output113 .= 'c';
return $output113;
};

$arguments111 = [
'value' => NULL,
'name' => 'defaultHeight',
];
$renderChildrenClosure112 = ($arguments111['value'] !== null) ? function() use ($arguments111) { return $arguments111['value']; } : $renderChildrenClosure112;
$output102 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext)]);

$output102 .= '
    ';
return $output102;
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments99, static fn() => '', $renderingContext)
;

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array117 = [
'0' => $renderingContext->getVariableProvider()->getByPath('defaultHeight'),
];

$expression118 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments116 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression118(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array117)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output119 = '';

$output119 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure121 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure123 = function() use ($renderingContext) {
return NULL;
};

$arguments122 = [
'src' => '',
'treatIdAsReference' => false,
'image' => $renderingContext->getVariableProvider()->getByPath('file'),
'crop' => NULL,
'cropVariant' => 'default',
'fileExtension' => NULL,
'width' => $renderingContext->getVariableProvider()->getByPath('defaultWidth'),
'height' => $renderingContext->getVariableProvider()->getByPath('defaultHeight'),
'minWidth' => NULL,
'minHeight' => NULL,
'maxWidth' => NULL,
'maxHeight' => NULL,
'absolute' => false,
];

$arguments120 = [
'value' => TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments122, $renderChildrenClosure123, $renderingContext),
'name' => 'src',
];
$renderChildrenClosure121 = ($arguments120['value'] !== null) ? function() use ($arguments120) { return $arguments120['value']; } : $renderChildrenClosure121;
$output119 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments120, $renderChildrenClosure121, $renderingContext)]);

$output119 .= '
        ';
return $output119;
},
'__else' => function() use ($renderingContext) {
$output124 = '';

$output124 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure126 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper
$renderChildrenClosure128 = function() use ($renderingContext) {
return NULL;
};

$arguments127 = [
'src' => '',
'treatIdAsReference' => false,
'image' => $renderingContext->getVariableProvider()->getByPath('file'),
'crop' => NULL,
'cropVariant' => 'default',
'fileExtension' => NULL,
'width' => $renderingContext->getVariableProvider()->getByPath('defaultWidth'),
'height' => NULL,
'minWidth' => NULL,
'minHeight' => NULL,
'maxWidth' => NULL,
'maxHeight' => NULL,
'absolute' => false,
];

$arguments125 = [
'value' => TYPO3\CMS\Fluid\ViewHelpers\Uri\ImageViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext),
'name' => 'src',
];
$renderChildrenClosure126 = ($arguments125['value'] !== null) ? function() use ($arguments125) { return $arguments125['value']; } : $renderChildrenClosure126;
$output124 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments125, $renderChildrenClosure126, $renderingContext)]);

$output124 .= '
        ';
return $output124;
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments116, static fn() => '', $renderingContext)
;

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure130 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Data\ImageInfoViewHelper
$renderChildrenClosure132 = function() use ($renderingContext) {
return NULL;
};

$arguments131 = [
'src' => $renderingContext->getVariableProvider()->getByPath('src'),
'property' => 'width',
];

$arguments129 = [
'value' => BK2K\BootstrapPackage\ViewHelpers\Data\ImageInfoViewHelper::renderStatic($arguments131, $renderChildrenClosure132, $renderingContext),
'name' => 'finalWidth',
];
$renderChildrenClosure130 = ($arguments129['value'] !== null) ? function() use ($arguments129) { return $arguments129['value']; } : $renderChildrenClosure130;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext)]);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure134 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Data\ImageInfoViewHelper
$renderChildrenClosure136 = function() use ($renderingContext) {
return NULL;
};

$arguments135 = [
'src' => $renderingContext->getVariableProvider()->getByPath('src'),
'property' => 'height',
];

$arguments133 = [
'value' => BK2K\BootstrapPackage\ViewHelpers\Data\ImageInfoViewHelper::renderStatic($arguments135, $renderChildrenClosure136, $renderingContext),
'name' => 'finalHeight',
];
$renderChildrenClosure134 = ($arguments133['value'] !== null) ? function() use ($arguments133) { return $arguments133['value']; } : $renderChildrenClosure134;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments133, $renderChildrenClosure134, $renderingContext)]);

$output0 .= '
    <img loading="lazy" src="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('src')]);

$output0 .= '" width="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('finalWidth')]);

$output0 .= '" height="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('finalHeight')]);

$output0 .= '" intrinsicsize="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('finalWidth')]);

$output0 .= 'x';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('finalHeight')]);

$output0 .= '" title="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.properties.title')]);

$output0 .= '" alt="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.properties.alternative')]);

$output0 .= '">
</picture>

';

    return $output0;
}

}

#