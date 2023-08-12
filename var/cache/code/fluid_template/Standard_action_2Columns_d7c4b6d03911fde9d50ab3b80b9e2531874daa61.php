<?php
class Standard_action_2Columns_d7c4b6d03911fde9d50ab3b80b9e2531874daa61 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
        return (string)'Default';
    }
    public function hasLayout() {
        return true;
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
 * section Border
 */
public function section_5d10d3f42121c3aa0d7923d1f05cccf56ef176e5(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output0 = '';

$output0 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$array3 = [
'pageUid' => $renderingContext->getVariableProvider()->getByPath('data.uid'),
'colPos' => 3,
'slide' => $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.3.slide'),
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

';

    return $output0;
}
/**
 * section Main
 */
public function section_62bce9422ff2d14f69ab80a154510232fc8a9afd(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output4 = '';

$output4 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure6 = function() use ($renderingContext) {
return NULL;
};

$array7 = [
'pageUid' => $renderingContext->getVariableProvider()->getByPath('data.uid'),
'colPos' => 8,
'slide' => $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.8.slide'),
];

$arguments5 = [
'data' => $array7,
'typoscriptObjectPath' => 'lib.dynamicContent',
'currentValueKey' => NULL,
'table' => '',
];
$renderChildrenClosure6 = ($arguments5['data'] !== null) ? function() use ($arguments5) { return $arguments5['data']; } : $renderChildrenClosure6;
$output4 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output4 .= '

    <div class="section section-default">
        <div class="container">
            <div class="section-row">
                <main class="section-column maincontent-wrap" role="main">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure9 = function() use ($renderingContext) {
return NULL;
};

$array10 = [
'pageUid' => $renderingContext->getVariableProvider()->getByPath('data.uid'),
'colPos' => 0,
'slide' => $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.0.slide'),
];

$arguments8 = [
'data' => $array10,
'typoscriptObjectPath' => 'lib.dynamicContent',
'currentValueKey' => NULL,
'table' => '',
];
$renderChildrenClosure9 = ($arguments8['data'] !== null) ? function() use ($arguments8) { return $arguments8['data']; } : $renderChildrenClosure9;
$output4 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext);

$output4 .= '
                </main>
                <div class="section-column subcontent-wrap">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure12 = function() use ($renderingContext) {
return NULL;
};

$array13 = [
'pageUid' => $renderingContext->getVariableProvider()->getByPath('data.uid'),
'colPos' => 2,
'slide' => $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.2.slide'),
];

$arguments11 = [
'data' => $array13,
'typoscriptObjectPath' => 'lib.dynamicContent',
'currentValueKey' => NULL,
'table' => '',
];
$renderChildrenClosure12 = ($arguments11['data'] !== null) ? function() use ($arguments11) { return $arguments11['data']; } : $renderChildrenClosure12;
$output4 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);

$output4 .= '
                </div>
            </div>
        </div>
    </div>

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper
$renderChildrenClosure15 = function() use ($renderingContext) {
return NULL;
};

$array16 = [
'pageUid' => $renderingContext->getVariableProvider()->getByPath('data.uid'),
'colPos' => 9,
'slide' => $renderingContext->getVariableProvider()->getByPath('theme.pagelayout.{pagelayout}.colPos.9.slide'),
];

$arguments14 = [
'data' => $array16,
'typoscriptObjectPath' => 'lib.dynamicContent',
'currentValueKey' => NULL,
'table' => '',
];
$renderChildrenClosure15 = ($arguments14['data'] !== null) ? function() use ($arguments14) { return $arguments14['data']; } : $renderChildrenClosure15;
$output4 .= TYPO3\CMS\Fluid\ViewHelpers\CObjectViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output4 .= '

';

    return $output4;
}
/**
 * section Footer
 */
public function section_26c01e70a337f208f56dae1c3bc18f60c4bff453(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output17 = '';

$output17 .= '

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure19 = function() use ($renderingContext) {
return NULL;
};

$arguments18 = [
'section' => NULL,
'partial' => 'Structure/FooterContent',
'delegate' => NULL,
'arguments' => $renderingContext->getVariableProvider()->getAll(),
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output17 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output17 .= '

';

    return $output17;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output20 = '';

$output20 .= '
';

$output20 .= '';

$output20 .= '
';

$output20 .= '';

$output20 .= '
';

$output20 .= '';

$output20 .= '
';

$output20 .= '';

$output20 .= '

';

    return $output20;
}

}

#