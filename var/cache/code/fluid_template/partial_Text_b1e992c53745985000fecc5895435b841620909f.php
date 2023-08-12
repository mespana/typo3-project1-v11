<?php
class partial_Text_b1e992c53745985000fecc5895435b841620909f extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure9 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure11 = function() use ($renderingContext) {
return NULL;
};

$arguments10 = [
'element' => $renderingContext->getVariableProvider()->getByPath('element'),
'property' => 'fluidAdditionalAttributes',
'renderingOptionProperty' => NULL,
];
$output12 = '';

$output12 .= $renderingContext->getVariableProvider()->getByPath('element.properties.elementClassAttribute');

$output12 .= ' form-control';

$arguments8 = [
'additionalAttributes' => TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext),
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
'errorClass' => $renderingContext->getVariableProvider()->getByPath('element.properties.elementErrorClassAttribute'),
'class' => $output12,
'dir' => NULL,
'id' => $renderingContext->getVariableProvider()->getByPath('element.uniqueIdentifier'),
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'required' => false,
'type' => 'text',
];

$output7 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

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