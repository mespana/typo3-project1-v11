<?php
class partial_DocHeader_96f1a1ab24060311f1312ff668e5966695243272 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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

$output0 .= '<div class="module-loading-indicator"></div>
<div class="module-docheader t3js-module-docheader">
    <div class="module-docheader-bar module-docheader-bar-navigation t3js-module-docheader-bar t3js-module-docheader-bar-navigation row">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return 'module-docheader-bar-column-left col-12 text-end';
};

$arguments1 = [
'value' => NULL,
'name' => 'columnCssClass',
];
$renderChildrenClosure2 = ($arguments1['value'] !== null) ? function() use ($arguments1) { return $arguments1['value']; } : $renderChildrenClosure2;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array4 = [
'0' => $renderingContext->getVariableProvider()->getByPath('docHeader.menus'),
];

$expression5 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments3 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression5(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array4)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output6 = '';

$output6 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure10 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('docHeader.menus');
};

$arguments9 = [
'subject' => NULL,
];
$renderChildrenClosure10 = ($arguments9['subject'] !== null) ? function() use ($arguments9) { return $arguments9['subject']; } : $renderChildrenClosure10;
$array8 = [
'0' => TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext),
'1' => ' > 1',
];

$expression11 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};

$arguments7 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression11(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array8)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output12 = '';

$output12 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure14 = function() use ($renderingContext) {
return 'module-docheader-bar-column-right col-12 col-sm-7 col-md-6 col-lg-8 text-end';
};

$arguments13 = [
'value' => NULL,
'name' => 'columnCssClass',
];
$renderChildrenClosure14 = ($arguments13['value'] !== null) ? function() use ($arguments13) { return $arguments13['value']; } : $renderChildrenClosure14;
$output12 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext)]);

$output12 .= '
                    <div class="module-docheader-bar-column-left col-12 col-sm-5 col-md-6 col-lg-4">
                        <div class="row-cols-auto row">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure16 = function() use ($renderingContext) {
$output17 = '';

$output17 .= '
                                <div class="form-group form-group-sm col">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure19 = function() use ($renderingContext) {
return NULL;
};

$array20 = [
'menu' => $renderingContext->getVariableProvider()->getByPath('menu'),
];

$arguments18 = [
'section' => NULL,
'partial' => 'Menus/SelectBoxJumpMenu',
'delegate' => NULL,
'arguments' => $array20,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output17 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output17 .= '
                                </div>
                            ';
return $output17;
};

$arguments15 = [
'each' => $renderingContext->getVariableProvider()->getByPath('docHeader.menus'),
'as' => 'menu',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output12 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output12 .= '
                        </div>
                    </div>
                ';
return $output12;
},
'__else' => function() use ($renderingContext) {
$output21 = '';

$output21 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure23 = function() use ($renderingContext) {
return 'module-docheader-bar-column-right col-12 col-sm-9 text-end';
};

$arguments22 = [
'value' => NULL,
'name' => 'columnCssClass',
];
$renderChildrenClosure23 = ($arguments22['value'] !== null) ? function() use ($arguments22) { return $arguments22['value']; } : $renderChildrenClosure23;
$output21 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext)]);

$output21 .= '
                    <div class="module-docheader-bar-column-left col">
                        <div class="row-cols-auto row">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure25 = function() use ($renderingContext) {
$output26 = '';

$output26 .= '
                                <div class="col">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure28 = function() use ($renderingContext) {
return NULL;
};

$array29 = [
'menu' => $renderingContext->getVariableProvider()->getByPath('menu'),
];

$arguments27 = [
'section' => NULL,
'partial' => 'Menus/SelectBoxJumpMenu',
'delegate' => NULL,
'arguments' => $array29,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output26 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output26 .= '
                                </div>
                            ';
return $output26;
};

$arguments24 = [
'each' => $renderingContext->getVariableProvider()->getByPath('docHeader.menus'),
'as' => 'menu',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output21 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output21 .= '
                        </div>
                    </div>
                ';
return $output21;
},
];

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments7, static fn() => '', $renderingContext)
;

$output6 .= '
        ';
return $output6;
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments3, static fn() => '', $renderingContext)
;

$output0 .= '
        <div class="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('columnCssClass')]);

$output0 .= '">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array31 = [
'0' => $renderingContext->getVariableProvider()->getByPath('docHeader.metaInformation.recordInformation'),
];

$expression32 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments30 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression32(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array31)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output33 = '';

$output33 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array35 = [
'0' => $renderingContext->getVariableProvider()->getByPath('docHeader.metaInformation.fileOrFolder'),
];

$expression36 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments34 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression36(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array35)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output37 = '';

$output37 .= '
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure39 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('docHeader.metaInformation.path');
};

$arguments38 = [
'value' => NULL,
];

$output37 .= isset($arguments38['value']) ? $arguments38['value'] : $renderChildrenClosure39();

$output37 .= '
                    ';
return $output37;
},
'__else' => function() use ($renderingContext) {
$output40 = '';

$output40 .= '
                        <span class="typo3-docheader-pagePath">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure42 = function() use ($renderingContext) {
return NULL;
};

$arguments41 = [
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.path',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output40 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext)]);

$output40 .= ': ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure44 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('docHeader.metaInformation.path');
};

$arguments43 = [
'value' => NULL,
];

$output40 .= isset($arguments43['value']) ? $arguments43['value'] : $renderChildrenClosure44();

$output40 .= '
                        </span>
                    ';
return $output40;
},
];

$output33 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments34, static fn() => '', $renderingContext)
;

$output33 .= '
                <strong>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure46 = function() use ($renderingContext) {
$output47 = '';

$output47 .= '
                        ';

$output47 .= $renderingContext->getVariableProvider()->getByPath('docHeader.metaInformation.recordInformationIcon');

$output47 .= ' ';

$output47 .= $renderingContext->getVariableProvider()->getByPath('docHeader.metaInformation.recordInformationTitle');

$output47 .= ' ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array49 = [
'0' => $renderingContext->getVariableProvider()->getByPath('docHeader.metaInformation.recordInformationUid'),
];

$expression50 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments48 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression50(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array49)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output51 = '';

$output51 .= '[';

$output51 .= $renderingContext->getVariableProvider()->getByPath('docHeader.metaInformation.recordInformationUid');

$output51 .= ']';
return $output51;
},
];

$output47 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments48, static fn() => '', $renderingContext)
;

$output47 .= '
                    ';
return $output47;
};

$arguments45 = [
'value' => NULL,
];

$output33 .= isset($arguments45['value']) ? $arguments45['value'] : $renderChildrenClosure46();

$output33 .= '
                </strong>
                ';

$output33 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('docHeader.metaInformation.recordInformationAdditionalInfo')]);

$output33 .= '
            ';
return $output33;
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments30, static fn() => '', $renderingContext)
;

$output0 .= '
        </div>
    </div>
    <div class="module-docheader-bar module-docheader-bar-buttons t3js-module-docheader-bar t3js-module-docheader-bar-buttons">
        <div class="module-docheader-bar-column-left">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure53 = function() use ($renderingContext) {
return NULL;
};

$array54 = [
'buttons' => $renderingContext->getVariableProvider()->getByPath('docHeader.buttons.left'),
];

$arguments52 = [
'section' => NULL,
'partial' => 'ButtonBar',
'delegate' => NULL,
'arguments' => $array54,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output0 .= '
        </div>
        <div class="module-docheader-bar-column-right">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure56 = function() use ($renderingContext) {
return NULL;
};

$array57 = [
'buttons' => $renderingContext->getVariableProvider()->getByPath('docHeader.buttons.right'),
];

$arguments55 = [
'section' => NULL,
'partial' => 'ButtonBar',
'delegate' => NULL,
'arguments' => $array57,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output0 .= '
        </div>
    </div>
</div>
';

    return $output0;
}

}

#