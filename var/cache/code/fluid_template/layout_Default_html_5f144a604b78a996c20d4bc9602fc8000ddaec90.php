<?php
class layout_Default_html_5f144a604b78a996c20d4bc9602fc8000ddaec90 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SpacelessViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
$output3 = '';

$output3 .= '

    ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Data\ImageVariantsViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
return NULL;
};

$arguments4 = [
'as' => 'variants',
'variants' => $renderingContext->getVariableProvider()->getByPath('settings.responsiveimages.variants'),
'multiplier' => NULL,
'gutters' => NULL,
'corrections' => NULL,
'aspectRatio' => NULL,
];

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [BK2K\BootstrapPackage\ViewHelpers\Data\ImageVariantsViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext)]);

$output3 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure7 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('settings.responsiveimages.backendlayout.{backendlayout}');
};

$arguments6 = [
'value' => NULL,
'name' => 'backendlayoutConfig',
];
$renderChildrenClosure7 = ($arguments6['value'] !== null) ? function() use ($arguments6) { return $arguments6['value']; } : $renderChildrenClosure7;
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext)]);

$output3 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure9 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('backendlayoutConfig.{data.colPos}');
};

$arguments8 = [
'value' => NULL,
'name' => 'columnConfig',
];
$renderChildrenClosure9 = ($arguments8['value'] !== null) ? function() use ($arguments8) { return $arguments8['value']; } : $renderChildrenClosure9;
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext)]);

$output3 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array11 = [
'0' => $renderingContext->getVariableProvider()->getByPath('columnConfig'),
];

$expression12 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments10 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression12(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array11)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output13 = '';

$output13 .= '
        ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Data\ImageVariantsViewHelper
$renderChildrenClosure15 = function() use ($renderingContext) {
return NULL;
};

$arguments14 = [
'as' => 'variants',
'variants' => $renderingContext->getVariableProvider()->getByPath('variants'),
'multiplier' => $renderingContext->getVariableProvider()->getByPath('columnConfig.multiplier'),
'gutters' => $renderingContext->getVariableProvider()->getByPath('columnConfig.gutters'),
'corrections' => $renderingContext->getVariableProvider()->getByPath('columnConfig.corrections'),
'aspectRatio' => NULL,
];

$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [BK2K\BootstrapPackage\ViewHelpers\Data\ImageVariantsViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext)]);

$output13 .= '
    ';
return $output13;
},
];

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments10, static fn() => '', $renderingContext)
;

$output3 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array17 = [
'0' => $renderingContext->getVariableProvider()->getByPath('containerContext'),
];

$expression18 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments16 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression18(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array17)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output19 = '';

$output19 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure21 = function() use ($renderingContext) {
$output22 = '';

$output22 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure24 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('settings.responsiveimages.container.{context.CType}');
};

$arguments23 = [
'value' => NULL,
'name' => 'containerConfig',
];
$renderChildrenClosure24 = ($arguments23['value'] !== null) ? function() use ($arguments23) { return $arguments23['value']; } : $renderChildrenClosure24;
$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext)]);

$output22 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure26 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('containerConfig.{data.colPos}');
};

$arguments25 = [
'value' => NULL,
'name' => 'containerColumnConfig',
];
$renderChildrenClosure26 = ($arguments25['value'] !== null) ? function() use ($arguments25) { return $arguments25['value']; } : $renderChildrenClosure26;
$output22 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext)]);

$output22 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array28 = [
'0' => $renderingContext->getVariableProvider()->getByPath('containerColumnConfig'),
];

$expression29 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments27 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression29(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array28)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output30 = '';

$output30 .= '
                ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Data\ImageVariantsViewHelper
$renderChildrenClosure32 = function() use ($renderingContext) {
return NULL;
};

$arguments31 = [
'as' => 'variants',
'variants' => $renderingContext->getVariableProvider()->getByPath('variants'),
'multiplier' => $renderingContext->getVariableProvider()->getByPath('containerColumnConfig.multiplier'),
'gutters' => $renderingContext->getVariableProvider()->getByPath('containerColumnConfig.gutters'),
'corrections' => $renderingContext->getVariableProvider()->getByPath('containerColumnConfig.corrections'),
'aspectRatio' => NULL,
];

$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [BK2K\BootstrapPackage\ViewHelpers\Data\ImageVariantsViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext)]);

$output30 .= '
            ';
return $output30;
},
];

$output22 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments27, static fn() => '', $renderingContext)
;

$output22 .= '
        ';
return $output22;
};

$arguments20 = [
'each' => $renderingContext->getVariableProvider()->getByPath('containerContext'),
'as' => 'context',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output19 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output19 .= '
    ';
return $output19;
},
];

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments16, static fn() => '', $renderingContext)
;

$output3 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure34 = function() use ($renderingContext) {
return 'frame-size-default';
};

$arguments33 = [
'value' => NULL,
'name' => 'frameSize',
];
$renderChildrenClosure34 = ($arguments33['value'] !== null) ? function() use ($arguments33) { return $arguments33['value']; } : $renderChildrenClosure34;
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext)]);

$output3 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure36 = function() use ($renderingContext) {
$output37 = '';

$output37 .= 'frame-';

$output37 .= $renderingContext->getVariableProvider()->getByPath('data.frame_class');
return $output37;
};

$arguments35 = [
'value' => NULL,
'name' => 'frameClass',
];
$renderChildrenClosure36 = ($arguments35['value'] !== null) ? function() use ($arguments35) { return $arguments35['value']; } : $renderChildrenClosure36;
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext)]);

$output3 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure39 = function() use ($renderingContext) {
$output40 = '';

$output40 .= 'frame-type-';

$output40 .= $renderingContext->getVariableProvider()->getByPath('data.CType');
return $output40;
};

$arguments38 = [
'value' => NULL,
'name' => 'typeClass',
];
$renderChildrenClosure39 = ($arguments38['value'] !== null) ? function() use ($arguments38) { return $arguments38['value']; } : $renderChildrenClosure39;
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext)]);

$output3 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure42 = function() use ($renderingContext) {
$output43 = '';

$output43 .= 'frame-layout-';

$output43 .= $renderingContext->getVariableProvider()->getByPath('data.frame_layout');
return $output43;
};

$arguments41 = [
'value' => NULL,
'name' => 'layoutClass',
];
$renderChildrenClosure42 = ($arguments41['value'] !== null) ? function() use ($arguments41) { return $arguments41['value']; } : $renderChildrenClosure42;
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext)]);

$output3 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure45 = function() use ($renderingContext) {
$output46 = '';

$output46 .= 'frame-background-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array48 = [
'0' => $renderingContext->getVariableProvider()->getByPath('data.background_color_class'),
];

$expression49 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments47 = [
'then' => $renderingContext->getVariableProvider()->getByPath('data.background_color_class'),
'else' => 'none',
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression49(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array48)),
    $renderingContext
),
];

$output46 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments47, static fn() => '', $renderingContext)
;
return $output46;
};

$arguments44 = [
'value' => NULL,
'name' => 'backgroundClass',
];
$renderChildrenClosure45 = ($arguments44['value'] !== null) ? function() use ($arguments44) { return $arguments44['value']; } : $renderChildrenClosure45;
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext)]);

$output3 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure51 = function() use ($renderingContext) {
$output52 = '';

$output52 .= 'frame-space-before-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array54 = [
'0' => $renderingContext->getVariableProvider()->getByPath('data.space_before_class'),
];

$expression55 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments53 = [
'then' => $renderingContext->getVariableProvider()->getByPath('data.space_before_class'),
'else' => 'none',
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression55(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array54)),
    $renderingContext
),
];

$output52 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments53, static fn() => '', $renderingContext)
;
return $output52;
};

$arguments50 = [
'value' => NULL,
'name' => 'spaceBeforeClass',
];
$renderChildrenClosure51 = ($arguments50['value'] !== null) ? function() use ($arguments50) { return $arguments50['value']; } : $renderChildrenClosure51;
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext)]);

$output3 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure57 = function() use ($renderingContext) {
$output58 = '';

$output58 .= 'frame-space-after-';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array60 = [
'0' => $renderingContext->getVariableProvider()->getByPath('data.space_after_class'),
];

$expression61 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments59 = [
'then' => $renderingContext->getVariableProvider()->getByPath('data.space_after_class'),
'else' => 'none',
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression61(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array60)),
    $renderingContext
),
];

$output58 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments59, static fn() => '', $renderingContext)
;
return $output58;
};

$arguments56 = [
'value' => NULL,
'name' => 'spaceAfterClass',
];
$renderChildrenClosure57 = ($arguments56['value'] !== null) ? function() use ($arguments56) { return $arguments56['value']; } : $renderChildrenClosure57;
$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext)]);

$output3 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array63 = [
'0' => $renderingContext->getVariableProvider()->getByPath('data.frame_class'),
'1' => ' != none',
];

$expression64 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != "none");};

$arguments62 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression64(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array63)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output65 = '';

$output65 .= '

            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure67 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array69 = [
'0' => $renderingContext->getVariableProvider()->getByPath('backgroundImage.0'),
];

$expression70 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments68 = [
'then' => 'frame-has-backgroundimage',
'else' => 'frame-no-backgroundimage',
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression70(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array69)),
    $renderingContext
),
];
return TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments68, static fn() => '', $renderingContext)
;
};

$arguments66 = [
'value' => NULL,
'name' => 'backgroundImageClass',
];
$renderChildrenClosure67 = ($arguments66['value'] !== null) ? function() use ($arguments66) { return $arguments66['value']; } : $renderChildrenClosure67;
$output65 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext)]);

$output65 .= '
            <div id="c';

$output65 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid')]);

$output65 .= '" class="frame ';

$output65 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('frameSize')]);

$output65 .= ' ';

$output65 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('frameClass')]);

$output65 .= ' ';

$output65 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typeClass')]);

$output65 .= ' ';

$output65 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('layoutClass')]);

$output65 .= ' ';

$output65 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backgroundClass')]);

$output65 .= ' ';

$output65 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backgroundImageClass')]);

$output65 .= ' ';

$output65 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('spaceBeforeClass')]);

$output65 .= ' ';

$output65 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('spaceAfterClass')]);

$output65 .= '">
                <div class="frame-group-container">
                    <div class="frame-group-inner">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure72 = function() use ($renderingContext) {
return NULL;
};

$arguments71 = [
'section' => NULL,
'partial' => 'Frame/General/BackgroundImage',
'delegate' => NULL,
'arguments' => $renderingContext->getVariableProvider()->getAll(),
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output65 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output65 .= '
                        <div class="frame-container frame-container-default">
                            <div class="frame-inner">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array74 = [
'0' => $renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID'),
];

$expression75 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments73 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression75(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array74)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output76 = '';

$output76 .= '
                                    <a id="c';

$output76 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID')]);

$output76 .= '"></a>
                                ';
return $output76;
},
];

$output65 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments73, static fn() => '', $renderingContext)
;

$output65 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure78 = function() use ($renderingContext) {
$output81 = '';

$output81 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure83 = function() use ($renderingContext) {
return NULL;
};

$arguments82 = [
'section' => NULL,
'partial' => 'DropIn/Before/All',
'delegate' => NULL,
'arguments' => $renderingContext->getVariableProvider()->getAll(),
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output81 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output81 .= '
                                ';
return $output81;
};

$array79 = [
'0' => 'true',
];

$expression80 = function($context) {return TRUE;};

$arguments77 = [
'section' => 'Before',
'partial' => NULL,
'delegate' => NULL,
'arguments' => [],
'optional' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression80(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array79)),
    $renderingContext
),
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output65 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output65 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure85 = function() use ($renderingContext) {
$output88 = '';

$output88 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure90 = function() use ($renderingContext) {
return NULL;
};

$arguments89 = [
'section' => NULL,
'partial' => 'Header/All',
'delegate' => NULL,
'arguments' => $renderingContext->getVariableProvider()->getAll(),
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output88 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext);

$output88 .= '
                                ';
return $output88;
};

$array86 = [
'0' => 'true',
];

$expression87 = function($context) {return TRUE;};

$arguments84 = [
'section' => 'Header',
'partial' => NULL,
'delegate' => NULL,
'arguments' => [],
'optional' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression87(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array86)),
    $renderingContext
),
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output65 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments84, $renderChildrenClosure85, $renderingContext);

$output65 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure92 = function() use ($renderingContext) {
return NULL;
};

$array93 = [
'0' => 'true',
];

$expression94 = function($context) {return TRUE;};

$arguments91 = [
'section' => 'Main',
'partial' => NULL,
'delegate' => NULL,
'arguments' => [],
'optional' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression94(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array93)),
    $renderingContext
),
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output65 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext);

$output65 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure96 = function() use ($renderingContext) {
$output99 = '';

$output99 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure101 = function() use ($renderingContext) {
return NULL;
};

$arguments100 = [
'section' => NULL,
'partial' => 'Footer/All',
'delegate' => NULL,
'arguments' => $renderingContext->getVariableProvider()->getAll(),
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output99 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output99 .= '
                                ';
return $output99;
};

$array97 = [
'0' => 'true',
];

$expression98 = function($context) {return TRUE;};

$arguments95 = [
'section' => 'Footer',
'partial' => NULL,
'delegate' => NULL,
'arguments' => [],
'optional' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression98(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array97)),
    $renderingContext
),
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output65 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output65 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure103 = function() use ($renderingContext) {
$output106 = '';

$output106 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure108 = function() use ($renderingContext) {
return NULL;
};

$arguments107 = [
'section' => NULL,
'partial' => 'DropIn/After/All',
'delegate' => NULL,
'arguments' => $renderingContext->getVariableProvider()->getAll(),
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output106 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext);

$output106 .= '
                                ';
return $output106;
};

$array104 = [
'0' => 'true',
];

$expression105 = function($context) {return TRUE;};

$arguments102 = [
'section' => 'After',
'partial' => NULL,
'delegate' => NULL,
'arguments' => [],
'optional' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression105(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array104)),
    $renderingContext
),
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output65 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext);

$output65 .= '
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        ';
return $output65;
},
'__else' => function() use ($renderingContext) {
$output109 = '';

$output109 .= '

            <a id="c';

$output109 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data.uid')]);

$output109 .= '"></a>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array111 = [
'0' => $renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID'),
];

$expression112 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments110 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression112(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array111)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output113 = '';

$output113 .= '
                <a id="c';

$output113 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('data._LOCALIZED_UID')]);

$output113 .= '"></a>
            ';
return $output113;
},
];

$output109 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments110, static fn() => '', $renderingContext)
;

$output109 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array115 = [
'0' => $renderingContext->getVariableProvider()->getByPath('data.space_before_class'),
];

$expression116 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments114 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression116(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array115)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output117 = '';

$output117 .= '
                <div class="frame-space-before ';

$output117 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('spaceBeforeClass')]);

$output117 .= '"></div>
            ';
return $output117;
},
];

$output109 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments114, static fn() => '', $renderingContext)
;

$output109 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure119 = function() use ($renderingContext) {
$output122 = '';

$output122 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure124 = function() use ($renderingContext) {
return NULL;
};

$arguments123 = [
'section' => NULL,
'partial' => 'DropIn/Before/All',
'delegate' => NULL,
'arguments' => $renderingContext->getVariableProvider()->getAll(),
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output122 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments123, $renderChildrenClosure124, $renderingContext);

$output122 .= '
            ';
return $output122;
};

$array120 = [
'0' => 'true',
];

$expression121 = function($context) {return TRUE;};

$arguments118 = [
'section' => 'Before',
'partial' => NULL,
'delegate' => NULL,
'arguments' => [],
'optional' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression121(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array120)),
    $renderingContext
),
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output109 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext);

$output109 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure126 = function() use ($renderingContext) {
$output129 = '';

$output129 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure131 = function() use ($renderingContext) {
return NULL;
};

$arguments130 = [
'section' => NULL,
'partial' => 'Header/All',
'delegate' => NULL,
'arguments' => $renderingContext->getVariableProvider()->getAll(),
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output129 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);

$output129 .= '
            ';
return $output129;
};

$array127 = [
'0' => 'true',
];

$expression128 = function($context) {return TRUE;};

$arguments125 = [
'section' => 'Header',
'partial' => NULL,
'delegate' => NULL,
'arguments' => [],
'optional' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression128(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array127)),
    $renderingContext
),
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output109 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments125, $renderChildrenClosure126, $renderingContext);

$output109 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure133 = function() use ($renderingContext) {
return NULL;
};

$array134 = [
'0' => 'true',
];

$expression135 = function($context) {return TRUE;};

$arguments132 = [
'section' => 'Main',
'partial' => NULL,
'delegate' => NULL,
'arguments' => [],
'optional' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression135(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array134)),
    $renderingContext
),
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output109 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments132, $renderChildrenClosure133, $renderingContext);

$output109 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure137 = function() use ($renderingContext) {
$output140 = '';

$output140 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure142 = function() use ($renderingContext) {
return NULL;
};

$arguments141 = [
'section' => NULL,
'partial' => 'Footer/All',
'delegate' => NULL,
'arguments' => $renderingContext->getVariableProvider()->getAll(),
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output140 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext);

$output140 .= '
            ';
return $output140;
};

$array138 = [
'0' => 'true',
];

$expression139 = function($context) {return TRUE;};

$arguments136 = [
'section' => 'Footer',
'partial' => NULL,
'delegate' => NULL,
'arguments' => [],
'optional' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression139(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array138)),
    $renderingContext
),
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output109 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments136, $renderChildrenClosure137, $renderingContext);

$output109 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure144 = function() use ($renderingContext) {
$output147 = '';

$output147 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure149 = function() use ($renderingContext) {
return NULL;
};

$arguments148 = [
'section' => NULL,
'partial' => 'DropIn/After/All',
'delegate' => NULL,
'arguments' => $renderingContext->getVariableProvider()->getAll(),
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output147 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments148, $renderChildrenClosure149, $renderingContext);

$output147 .= '
            ';
return $output147;
};

$array145 = [
'0' => 'true',
];

$expression146 = function($context) {return TRUE;};

$arguments143 = [
'section' => 'After',
'partial' => NULL,
'delegate' => NULL,
'arguments' => [],
'optional' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression146(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array145)),
    $renderingContext
),
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output109 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments143, $renderChildrenClosure144, $renderingContext);

$output109 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array151 = [
'0' => $renderingContext->getVariableProvider()->getByPath('data.space_after_class'),
];

$expression152 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments150 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression152(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array151)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output153 = '';

$output153 .= '
                <div class="frame-space-after ';

$output153 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('spaceAfterClass')]);

$output153 .= '"></div>
            ';
return $output153;
},
];

$output109 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments150, static fn() => '', $renderingContext)
;

$output109 .= '

        ';
return $output109;
},
];

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments62, static fn() => '', $renderingContext)
;

$output3 .= '
';
return $output3;
};

$arguments1 = [
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\SpacelessViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';

    return $output0;
}

}

#