<?php
class Consent_action_consent_b6a8f0cb29a56743f16d0c31c1801376a19ac7f6 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
  'we' => 
  array (
    0 => 'Websedit\\WeCookieConsent\\ViewHelpers',
  ),
));
    }
    /**
 * section content
 */
public function section_040f06fd774092478d450774f5ba30c5da78acc8(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    return NULL;
}
/**
 * section HeaderAssets
 */
public function section_ba899a404d6fea8094b8d87b2983a229af79a9ab(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output0 = '';

$output0 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SpacelessViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
$output3 = '';

$output3 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
$output6 = '';

$output6 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure8 = function() use ($renderingContext) {
return NULL;
};
$output9 = '';

$output9 .= 'Service/';

$output9 .= $renderingContext->getVariableProvider()->getByPath('service.provider');

$array10 = [
'service' => $renderingContext->getVariableProvider()->getByPath('service'),
];

$array11 = [
'0' => 1,
];

$expression12 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments7 = [
'section' => 'Header',
'partial' => $output9,
'delegate' => NULL,
'arguments' => $array10,
'optional' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression12(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array11)),
    $renderingContext
),
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output6 .= '
			';
return $output6;
};

$arguments4 = [
'each' => $renderingContext->getVariableProvider()->getByPath('services'),
'as' => 'service',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

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
/**
 * section FooterAssets
 */
public function section_ac7df9b7a8559a75845195bef206d48655bdf514(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output13 = '';

$output13 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SpacelessViewHelper
$renderChildrenClosure15 = function() use ($renderingContext) {
$output16 = '';

$output16 .= '
			<script type="text/javascript">var klaroConfig = ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper
$renderChildrenClosure18 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper Websedit\WeCookieConsent\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure20 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('klaroConfig');
};

$arguments19 = [
'value' => NULL,
'forceObject' => false,
];

$arguments17 = [
'value' => Websedit\WeCookieConsent\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext),
'keepQuotes' => false,
'encoding' => NULL,
];
$renderChildrenClosure18 = ($arguments17['value'] !== null) ? function() use ($arguments17) { return $arguments17['value']; } : $renderChildrenClosure18;
$output16 .= TYPO3\CMS\Fluid\ViewHelpers\Format\HtmlentitiesDecodeViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output16 .= '</script>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure22 = function() use ($renderingContext) {
$output23 = '';

$output23 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure25 = function() use ($renderingContext) {
return NULL;
};
$output26 = '';

$output26 .= 'Service/';

$output26 .= $renderingContext->getVariableProvider()->getByPath('service.provider');

$array27 = [
'service' => $renderingContext->getVariableProvider()->getByPath('service'),
];

$array28 = [
'0' => 1,
];

$expression29 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments24 = [
'section' => 'Footer',
'partial' => $output26,
'delegate' => NULL,
'arguments' => $array27,
'optional' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression29(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array28)),
    $renderingContext
),
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output23 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output23 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure31 = function() use ($renderingContext) {
return NULL;
};

$array32 = [
'service' => $renderingContext->getVariableProvider()->getByPath('service'),
];

$arguments30 = [
'section' => NULL,
'partial' => 'Klaro/Service',
'delegate' => NULL,
'arguments' => $array32,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output23 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output23 .= '
			';
return $output23;
};

$arguments21 = [
'each' => $renderingContext->getVariableProvider()->getByPath('services'),
'as' => 'service',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output16 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output16 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array34 = [
'0' => $renderingContext->getVariableProvider()->getByPath('settings.klaro.stylePrefix'),
];

$expression35 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments33 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression35(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array34)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output36 = '';

$output36 .= '
					<script type="text/javascript" src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure38 = function() use ($renderingContext) {
return NULL;
};

$arguments37 = [
'path' => 'Library/klaro/klaro.js',
'extensionName' => NULL,
'absolute' => false,
];

$output36 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext)]);

$output36 .= '"></script>
				';
return $output36;
},
'__else' => function() use ($renderingContext) {
$output39 = '';

$output39 .= '
					<script type="text/javascript" src="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure41 = function() use ($renderingContext) {
return NULL;
};

$arguments40 = [
'path' => 'Library/klaro/klaro-no-css.js',
'extensionName' => NULL,
'absolute' => false,
];

$output39 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext)]);

$output39 .= '"></script>
				';
return $output39;
},
];

$output16 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments33, static fn() => '', $renderingContext)
;

$output16 .= '
		';
return $output16;
};

$arguments14 = [
];

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\SpacelessViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);

$output13 .= '
	';

    return $output13;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output42 = '';

$output42 .= '
	';

$output42 .= '';

$output42 .= '

	';

$output42 .= '';

$output42 .= '

	';

$output42 .= '';

$output42 .= '

	';

$output42 .= '';

$output42 .= '
';

    return $output42;
}

}

#