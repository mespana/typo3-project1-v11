<?php
class FormFrontend_action_form_e773941ec47f485593e13fb780b00db22e10ecbb extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\FormViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
$output10 = '';

$output10 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure12 = function() use ($renderingContext) {
return NULL;
};

$array13 = [
'page' => $renderingContext->getVariableProvider()->getByPath('form.currentPage'),
];

$arguments11 = [
'section' => NULL,
'partial' => $renderingContext->getVariableProvider()->getByPath('form.currentPage.templateName'),
'delegate' => NULL,
'arguments' => $array13,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output10 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output10 .= '
            <div class="actions">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure15 = function() use ($renderingContext) {
return NULL;
};

$array16 = [
'form' => $renderingContext->getVariableProvider()->getByPath('form'),
];

$arguments14 = [
'section' => NULL,
'partial' => 'Form/Navigation',
'delegate' => NULL,
'arguments' => $array16,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output10 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output10 .= '
            </div>
        ';
return $output10;
};
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure7 = function() use ($renderingContext) {
return NULL;
};

$arguments6 = [
'element' => $renderingContext->getVariableProvider()->getByPath('form'),
'property' => 'fluidAdditionalAttributes',
'renderingOptionProperty' => NULL,
];

$array8 = [
'0' => $renderingContext->getVariableProvider()->getByPath('form.renderingOptions.addQueryString'),
];

$expression9 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments4 = [
'additionalAttributes' => TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext),
'data' => NULL,
'aria' => NULL,
'action' => $renderingContext->getVariableProvider()->getByPath('form.renderingOptions.controllerAction'),
'arguments' => [],
'controller' => NULL,
'extensionName' => NULL,
'pluginName' => NULL,
'pageUid' => NULL,
'object' => $renderingContext->getVariableProvider()->getByPath('form'),
'pageType' => 0,
'noCache' => false,
'section' => $renderingContext->getVariableProvider()->getByPath('form.identifier'),
'format' => '',
'additionalParams' => $renderingContext->getVariableProvider()->getByPath('form.renderingOptions.additionalParams'),
'absolute' => false,
'addQueryString' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression9(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array8)),
    $renderingContext
),
'argumentsToBeExcludedFromQueryString' => $renderingContext->getVariableProvider()->getByPath('form.renderingOptions.argumentsToBeExcludedFromQueryString'),
'addQueryStringMethod' => NULL,
'fieldNamePrefix' => NULL,
'actionUri' => NULL,
'objectName' => NULL,
'hiddenFieldClassName' => NULL,
'enctype' => $renderingContext->getVariableProvider()->getByPath('form.renderingOptions.httpEnctype'),
'method' => $renderingContext->getVariableProvider()->getByPath('form.renderingOptions.httpMethod'),
'name' => NULL,
'onreset' => NULL,
'onsubmit' => NULL,
'target' => NULL,
'novalidate' => NULL,
'class' => NULL,
'dir' => NULL,
'id' => $renderingContext->getVariableProvider()->getByPath('form.identifier'),
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
];

$output3 .= TYPO3\CMS\Form\ViewHelpers\FormViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
';
return $output3;
};

$arguments1 = [
'renderable' => $renderingContext->getVariableProvider()->getByPath('form'),
];

$output0 .= TYPO3\CMS\Form\ViewHelpers\RenderRenderableViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';

    return $output0;
}

}

#