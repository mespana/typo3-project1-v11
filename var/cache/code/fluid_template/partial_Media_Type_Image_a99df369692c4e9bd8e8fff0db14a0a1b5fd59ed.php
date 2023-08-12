<?php
class partial_Media_Type_Image_a99df369692c4e9bd8e8fff0db14a0a1b5fd59ed extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
<figure class="image">
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array2 = [
'0' => $renderingContext->getVariableProvider()->getByPath('file.properties.link'),
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
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper
$renderChildrenClosure6 = function() use ($renderingContext) {
$output7 = '';

$output7 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure9 = function() use ($renderingContext) {
return NULL;
};

$array10 = [
'file' => $renderingContext->getVariableProvider()->getByPath('file'),
'data' => $renderingContext->getVariableProvider()->getByPath('data'),
'settings' => $renderingContext->getVariableProvider()->getByPath('settings'),
'variants' => $renderingContext->getVariableProvider()->getByPath('variants'),
];

$arguments8 = [
'section' => NULL,
'partial' => 'Media/Rendering/Image',
'delegate' => NULL,
'arguments' => $array10,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output7 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output7 .= '
            ';
return $output7;
};

$arguments5 = [
'parameter' => $renderingContext->getVariableProvider()->getByPath('file.properties.link'),
'target' => '',
'class' => '',
'title' => $renderingContext->getVariableProvider()->getByPath('file.properties.title'),
'language' => NULL,
'additionalParams' => '',
'additionalAttributes' => [],
'addQueryString' => false,
'addQueryStringMethod' => NULL,
'addQueryStringExclude' => '',
'absolute' => false,
'parts-as' => 'typoLinkParts',
'textWrap' => '',
];

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\Link\TypolinkViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output4 .= '
        ';
return $output4;
},
'__else' => function() use ($renderingContext) {
$output11 = '';

$output11 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array13 = [
'0' => $renderingContext->getVariableProvider()->getByPath('data.image_zoom'),
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
$output15 = '';

$output15 .= '
                    ';
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\Link\LightboxViewHelper
$renderChildrenClosure17 = function() use ($renderingContext) {
$output19 = '';

$output19 .= '
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure21 = function() use ($renderingContext) {
return NULL;
};

$array22 = [
'file' => $renderingContext->getVariableProvider()->getByPath('file'),
'data' => $renderingContext->getVariableProvider()->getByPath('data'),
'settings' => $renderingContext->getVariableProvider()->getByPath('settings'),
'variants' => $renderingContext->getVariableProvider()->getByPath('variants'),
];

$arguments20 = [
'section' => NULL,
'partial' => 'Media/Rendering/Image',
'delegate' => NULL,
'arguments' => $array22,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output19 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output19 .= '
                    ';
return $output19;
};
$output18 = '';

$output18 .= $renderingContext->getVariableProvider()->getByPath('settings.lightbox.prefix');

$output18 .= '-';

$output18 .= $renderingContext->getVariableProvider()->getByPath('data.uid');

$arguments16 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'class' => $renderingContext->getVariableProvider()->getByPath('settings.lightbox.cssClass'),
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => $renderingContext->getVariableProvider()->getByPath('file.properties.title'),
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'rel' => $output18,
'caption' => $renderingContext->getVariableProvider()->getByPath('file.properties.description'),
'image' => $renderingContext->getVariableProvider()->getByPath('file'),
'crop' => NULL,
'cropVariant' => 'default',
'width' => NULL,
'height' => NULL,
'minWidth' => NULL,
'minHeight' => NULL,
'maxWidth' => $renderingContext->getVariableProvider()->getByPath('settings.lightbox.image.maxWidth'),
'maxHeight' => $renderingContext->getVariableProvider()->getByPath('settings.lightbox.image.maxHeight'),
'absolute' => false,
];

$output15 .= BK2K\BootstrapPackage\ViewHelpers\Link\LightboxViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output15 .= '
                ';
return $output15;
},
'__else' => function() use ($renderingContext) {
$output23 = '';

$output23 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure25 = function() use ($renderingContext) {
return NULL;
};

$array26 = [
'file' => $renderingContext->getVariableProvider()->getByPath('file'),
'data' => $renderingContext->getVariableProvider()->getByPath('data'),
'settings' => $renderingContext->getVariableProvider()->getByPath('settings'),
'variants' => $renderingContext->getVariableProvider()->getByPath('variants'),
];

$arguments24 = [
'section' => NULL,
'partial' => 'Media/Rendering/Image',
'delegate' => NULL,
'arguments' => $array26,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output23 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output23 .= '
                ';
return $output23;
},
];

$output11 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments12, static fn() => '', $renderingContext)
;

$output11 .= '
        ';
return $output11;
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, static fn() => '', $renderingContext)
;

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array28 = [
'0' => $renderingContext->getVariableProvider()->getByPath('file.properties.description'),
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
        <figcaption class="caption">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure32 = function() use ($renderingContext) {
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('file.properties.description')]);
};

$arguments31 = [
'value' => NULL,
];
$renderChildrenClosure32 = ($arguments31['value'] !== null) ? function() use ($arguments31) { return $arguments31['value']; } : $renderChildrenClosure32;
$output30 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output30 .= '</figcaption>
    ';
return $output30;
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments27, static fn() => '', $renderingContext)
;

$output0 .= '
</figure>

';

    return $output0;
}

}

#