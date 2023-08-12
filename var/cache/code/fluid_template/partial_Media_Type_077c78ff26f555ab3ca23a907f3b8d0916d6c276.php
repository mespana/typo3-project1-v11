<?php
class partial_Media_Type_077c78ff26f555ab3ca23a907f3b8d0916d6c276 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\File\IsImageViewHelper
$renderChildrenClosure4 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('file');
};

$arguments3 = [
];

$arguments1 = [
'value' => BK2K\BootstrapPackage\ViewHelpers\File\IsImageViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext),
'name' => 'isImage',
];
$renderChildrenClosure2 = ($arguments1['value'] !== null) ? function() use ($arguments1) { return $arguments1['value']; } : $renderChildrenClosure2;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure6 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\File\IsAudioViewHelper
$renderChildrenClosure8 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('file');
};

$arguments7 = [
];

$arguments5 = [
'value' => BK2K\BootstrapPackage\ViewHelpers\File\IsAudioViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext),
'name' => 'isAudio',
];
$renderChildrenClosure6 = ($arguments5['value'] !== null) ? function() use ($arguments5) { return $arguments5['value']; } : $renderChildrenClosure6;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext)]);

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure10 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper BK2K\BootstrapPackage\ViewHelpers\File\IsMediaViewHelper
$renderChildrenClosure12 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('file');
};

$arguments11 = [
];

$arguments9 = [
'value' => BK2K\BootstrapPackage\ViewHelpers\File\IsMediaViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext),
'name' => 'isMedia',
];
$renderChildrenClosure10 = ($arguments9['value'] !== null) ? function() use ($arguments9) { return $arguments9['value']; } : $renderChildrenClosure10;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext)]);

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure14 = function() use ($renderingContext) {
$output27 = '';

$output27 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure29 = function() use ($renderingContext) {
$output30 = '';

$output30 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure32 = function() use ($renderingContext) {
return NULL;
};

$array33 = [
'file' => $renderingContext->getVariableProvider()->getByPath('file'),
'data' => $renderingContext->getVariableProvider()->getByPath('data'),
'settings' => $renderingContext->getVariableProvider()->getByPath('settings'),
'variants' => $renderingContext->getVariableProvider()->getByPath('variants'),
];

$arguments31 = [
'section' => NULL,
'partial' => 'Media/Type/Image',
'delegate' => NULL,
'arguments' => $array33,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output30 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output30 .= '
    ';
return $output30;
};

$arguments28 = [
'value' => $renderingContext->getVariableProvider()->getByPath('isImage'),
];

$output27 .= '';

$output27 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure35 = function() use ($renderingContext) {
$output36 = '';

$output36 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure38 = function() use ($renderingContext) {
return NULL;
};

$array39 = [
'file' => $renderingContext->getVariableProvider()->getByPath('file'),
'data' => $renderingContext->getVariableProvider()->getByPath('data'),
'settings' => $renderingContext->getVariableProvider()->getByPath('settings'),
];

$arguments37 = [
'section' => NULL,
'partial' => 'Media/Type/Audio',
'delegate' => NULL,
'arguments' => $array39,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output36 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output36 .= '
    ';
return $output36;
};

$arguments34 = [
'value' => $renderingContext->getVariableProvider()->getByPath('isAudio'),
];

$output27 .= '';

$output27 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure41 = function() use ($renderingContext) {
$output42 = '';

$output42 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure44 = function() use ($renderingContext) {
return NULL;
};

$array45 = [
'file' => $renderingContext->getVariableProvider()->getByPath('file'),
'data' => $renderingContext->getVariableProvider()->getByPath('data'),
'settings' => $renderingContext->getVariableProvider()->getByPath('settings'),
];

$arguments43 = [
'section' => NULL,
'partial' => 'Media/Type/Video',
'delegate' => NULL,
'arguments' => $array45,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output42 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);

$output42 .= '
    ';
return $output42;
};

$arguments40 = [
'value' => $renderingContext->getVariableProvider()->getByPath('isMedia'),
];

$output27 .= '';

$output27 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\DefaultCaseViewHelper
$renderChildrenClosure47 = function() use ($renderingContext) {
return '
        <!-- NOT SUPPORTED MEDIA TYPE -->
    ';
};

$arguments46 = [
];

$output27 .= '';

$output27 .= '
';
return $output27;
};

$arguments13 = [
'expression' => 1,
];

$output0 .= call_user_func_array(function($arguments) use ($renderingContext) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext) {

return $renderingContext->getVariableProvider()->getByPath('isImage');
}): return call_user_func(function() use ($renderingContext) {
$output15 = '';

$output15 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure17 = function() use ($renderingContext) {
return NULL;
};

$array18 = [
'file' => $renderingContext->getVariableProvider()->getByPath('file'),
'data' => $renderingContext->getVariableProvider()->getByPath('data'),
'settings' => $renderingContext->getVariableProvider()->getByPath('settings'),
'variants' => $renderingContext->getVariableProvider()->getByPath('variants'),
];

$arguments16 = [
'section' => NULL,
'partial' => 'Media/Type/Image',
'delegate' => NULL,
'arguments' => $array18,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output15 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output15 .= '
    ';
return $output15;
});
case call_user_func(function() use ($renderingContext) {

return $renderingContext->getVariableProvider()->getByPath('isAudio');
}): return call_user_func(function() use ($renderingContext) {
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
];

$arguments20 = [
'section' => NULL,
'partial' => 'Media/Type/Audio',
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
});
case call_user_func(function() use ($renderingContext) {

return $renderingContext->getVariableProvider()->getByPath('isMedia');
}): return call_user_func(function() use ($renderingContext) {
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
];

$arguments24 = [
'section' => NULL,
'partial' => 'Media/Type/Video',
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
});
default: return call_user_func(function() use ($renderingContext) {
return '
        <!-- NOT SUPPORTED MEDIA TYPE -->
    ';
});
}
}, array($arguments13));

$output0 .= '

';

    return $output0;
}

}

#