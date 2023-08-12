<?php
class partial_SingleSelect_00bc32b13d610f3a27a956fa134baa068ea04901 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\RenderRenderableViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
$output3 = '';

$output3 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
$output7 = '';

$output7 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array9 = [
'0' => $renderingContext->getVariableProvider()->getByPath('element.properties.prependOptionLabel'),
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
$output11 = '';

$output11 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure13 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure15 = function() use ($renderingContext) {
return NULL;
};

$arguments14 = [
'element' => $renderingContext->getVariableProvider()->getByPath('element'),
'property' => 'fluidAdditionalAttributes',
'renderingOptionProperty' => NULL,
];
$output16 = '';

$output16 .= $renderingContext->getVariableProvider()->getByPath('element.properties.elementClassAttribute');

$output16 .= ' form-control';
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure18 = function() use ($renderingContext) {
return NULL;
};

$arguments17 = [
'element' => $renderingContext->getVariableProvider()->getByPath('element'),
'property' => 'options',
'renderingOptionProperty' => NULL,
];
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure20 = function() use ($renderingContext) {
return NULL;
};

$arguments19 = [
'element' => $renderingContext->getVariableProvider()->getByPath('element'),
'property' => 'prependOptionLabel',
'renderingOptionProperty' => NULL,
];
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure22 = function() use ($renderingContext) {
return NULL;
};

$arguments21 = [
'element' => $renderingContext->getVariableProvider()->getByPath('element'),
'property' => 'prependOptionValue',
'renderingOptionProperty' => NULL,
];

$arguments12 = [
'additionalAttributes' => TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext),
'data' => NULL,
'aria' => NULL,
'name' => NULL,
'value' => NULL,
'property' => $renderingContext->getVariableProvider()->getByPath('element.identifier'),
'class' => $output16,
'dir' => NULL,
'id' => $renderingContext->getVariableProvider()->getByPath('element.uniqueIdentifier'),
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'size' => NULL,
'disabled' => NULL,
'options' => TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext),
'optionsAfterContent' => false,
'optionValueField' => NULL,
'optionLabelField' => NULL,
'sortByOptionLabel' => false,
'selectAllByDefault' => false,
'errorClass' => $renderingContext->getVariableProvider()->getByPath('element.properties.elementErrorClassAttribute'),
'prependOptionLabel' => TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext),
'prependOptionValue' => TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext),
'multiple' => false,
'required' => false,
];

$output11 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);

$output11 .= '
            ';
return $output11;
},
'__else' => function() use ($renderingContext) {
$output23 = '';

$output23 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure25 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure27 = function() use ($renderingContext) {
return NULL;
};

$arguments26 = [
'element' => $renderingContext->getVariableProvider()->getByPath('element'),
'property' => 'fluidAdditionalAttributes',
'renderingOptionProperty' => NULL,
];
$output28 = '';

$output28 .= $renderingContext->getVariableProvider()->getByPath('element.properties.elementClassAttribute');

$output28 .= ' form-control';
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure30 = function() use ($renderingContext) {
return NULL;
};

$arguments29 = [
'element' => $renderingContext->getVariableProvider()->getByPath('element'),
'property' => 'options',
'renderingOptionProperty' => NULL,
];

$arguments24 = [
'additionalAttributes' => TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext),
'data' => NULL,
'aria' => NULL,
'name' => NULL,
'value' => NULL,
'property' => $renderingContext->getVariableProvider()->getByPath('element.identifier'),
'class' => $output28,
'dir' => NULL,
'id' => $renderingContext->getVariableProvider()->getByPath('element.uniqueIdentifier'),
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'size' => NULL,
'disabled' => NULL,
'options' => TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext),
'optionsAfterContent' => false,
'optionValueField' => NULL,
'optionLabelField' => NULL,
'sortByOptionLabel' => false,
'selectAllByDefault' => false,
'errorClass' => $renderingContext->getVariableProvider()->getByPath('element.properties.elementErrorClassAttribute'),
'prependOptionLabel' => NULL,
'prependOptionValue' => NULL,
'multiple' => false,
'required' => false,
];

$output23 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output23 .= '
            ';
return $output23;
},
];

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments8, static fn() => '', $renderingContext)
;

$output7 .= '
    ';
return $output7;
};

$array6 = [
'element' => $renderingContext->getVariableProvider()->getByPath('element'),
];

$arguments4 = [
'section' => NULL,
'partial' => 'Field/Field',
'delegate' => NULL,
'arguments' => $array6,
'optional' => false,
'default' => NULL,
'contentAs' => 'elementContent',
'debug' => true,
];

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
';
return $output3;
};

$arguments1 = [
'renderable' => $renderingContext->getVariableProvider()->getByPath('element'),
];

$output0 .= TYPO3\CMS\Form\ViewHelpers\RenderRenderableViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';

    return $output0;
}

}

#