<?php
class partial_Structure_FooterContent_734de6222947f9abdbb9d97efa2134e164521bb2 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
<section class="section footer-section footer-section-content">
    <div class="container">
        <div class="section-row">
            <div class="section-column footer-section-content-column footer-section-content-column-left">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$array3 = [
'pageUid' => $renderingContext->getVariableProvider()->getByPath('data.uid'),
'colPos' => 10,
'slide' => -1,
];

$arguments1 = [
'data' => $array3,
'typoscriptObjectPath' => 'lib.dynamicContent',
'currentValueKey' => NULL,
'table' => '',
];
$renderChildrenClosure2 = ($arguments1['data'] !== null) ? function() use ($arguments1) { return $arguments1['data']; } : $renderChildrenClosure2;
$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
            </div>
            <div class="section-column footer-section-content-column footer-section-content-column-middle">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
return NULL;
};

$array6 = [
'pageUid' => $renderingContext->getVariableProvider()->getByPath('data.uid'),
'colPos' => 11,
'slide' => -1,
];

$arguments4 = [
'data' => $array6,
'typoscriptObjectPath' => 'lib.dynamicContent',
'currentValueKey' => NULL,
'table' => '',
];
$renderChildrenClosure5 = ($arguments4['data'] !== null) ? function() use ($arguments4) { return $arguments4['data']; } : $renderChildrenClosure5;
$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output0 .= '
            </div>
            <div class="section-column footer-section-content-column footer-section-content-column-right">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure8 = function() use ($renderingContext) {
return NULL;
};

$array9 = [
'pageUid' => $renderingContext->getVariableProvider()->getByPath('data.uid'),
'colPos' => 12,
'slide' => -1,
];

$arguments7 = [
'data' => $array9,
'typoscriptObjectPath' => 'lib.dynamicContent',
'currentValueKey' => NULL,
'table' => '',
];
$renderChildrenClosure8 = ($arguments7['data'] !== null) ? function() use ($arguments7) { return $arguments7['data']; } : $renderChildrenClosure8;
$output0 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output0 .= '
            </div>
        </div>
    </div>
</section>

';

    return $output0;
}

}

#