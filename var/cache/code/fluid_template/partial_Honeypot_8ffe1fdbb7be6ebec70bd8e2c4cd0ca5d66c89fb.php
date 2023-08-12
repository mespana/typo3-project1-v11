<?php
class partial_Honeypot_8ffe1fdbb7be6ebec70bd8e2c4cd0ca5d66c89fb extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
'0' => $renderingContext->getVariableProvider()->getByPath('element.properties.renderAsHiddenField'),
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
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure6 = function() use ($renderingContext) {
return NULL;
};

$array7 = [
'autocomplete' => $renderingContext->getVariableProvider()->getByPath('element.identifier'),
];

$arguments5 = [
'additionalAttributes' => $array7,
'data' => NULL,
'aria' => NULL,
'name' => NULL,
'value' => NULL,
'property' => $renderingContext->getVariableProvider()->getByPath('element.identifier'),
'class' => NULL,
'dir' => NULL,
'id' => $renderingContext->getVariableProvider()->getByPath('element.uniqueIdentifier'),
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'respectSubmittedDataValue' => true,
];

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output4 .= '
    ';
return $output4;
},
'__else' => function() use ($renderingContext) {
$output8 = '';

$output8 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure10 = function() use ($renderingContext) {
return NULL;
};

$array11 = [
'autocomplete' => $renderingContext->getVariableProvider()->getByPath('element.identifier'),
'aria-hidden' => 'true',
];

$arguments9 = [
'additionalAttributes' => $array11,
'data' => NULL,
'aria' => NULL,
'name' => NULL,
'value' => NULL,
'property' => $renderingContext->getVariableProvider()->getByPath('element.identifier'),
'autofocus' => NULL,
'disabled' => NULL,
'maxlength' => NULL,
'readonly' => NULL,
'size' => NULL,
'placeholder' => NULL,
'pattern' => NULL,
'errorClass' => 'f3-form-error',
'class' => $renderingContext->getVariableProvider()->getByPath('element.properties.elementClassAttribute'),
'dir' => NULL,
'id' => $renderingContext->getVariableProvider()->getByPath('element.uniqueIdentifier'),
'lang' => NULL,
'style' => $renderingContext->getVariableProvider()->getByPath('element.properties.styleAttribute'),
'title' => NULL,
'accesskey' => NULL,
'tabindex' => -1,
'onclick' => NULL,
'required' => false,
'type' => 'text',
];

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output8 .= '
    ';
return $output8;
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