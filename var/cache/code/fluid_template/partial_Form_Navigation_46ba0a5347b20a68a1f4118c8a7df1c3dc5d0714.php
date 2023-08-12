<?php
class partial_Form_Navigation_46ba0a5347b20a68a1f4118c8a7df1c3dc5d0714 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
<nav class="form-navigation">
    <div class="btn-toolbar" role="toolbar">
        <div class="btn-group" role="group">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array2 = [
'0' => $renderingContext->getVariableProvider()->getByPath('form.previousPage'),
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
                <span class="btn-group previous">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure6 = function() use ($renderingContext) {
return NULL;
};

$array7 = [
'0' => 'false',
];

$expression8 = function($context) {return FALSE;};

$arguments5 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'name' => NULL,
'value' => $renderingContext->getVariableProvider()->getByPath('form.previousPage.index'),
'property' => '__currentPage',
'class' => NULL,
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'respectSubmittedDataValue' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression8(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array7)),
    $renderingContext
),
];

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext);

$output4 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper
$renderChildrenClosure10 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure13 = function() use ($renderingContext) {
return NULL;
};

$arguments12 = [
'element' => $renderingContext->getVariableProvider()->getByPath('form.currentPage'),
'property' => NULL,
'renderingOptionProperty' => 'previousButtonLabel',
];
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext)]);
};
$output11 = '';

$output11 .= 'document.forms[\'';

$output11 .= $renderingContext->getVariableProvider()->getByPath('form.formDefinition.identifier');

$output11 .= '\'].submit();';

$arguments9 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'name' => NULL,
'value' => NULL,
'property' => NULL,
'autofocus' => NULL,
'disabled' => NULL,
'form' => NULL,
'formaction' => NULL,
'formenctype' => NULL,
'formmethod' => NULL,
'formnovalidate' => 'formnovalidate',
'formtarget' => NULL,
'class' => 'btn btn-cancel',
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => $output11,
'type' => 'button',
];

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output4 .= '
                </span>
            ';
return $output4;
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, static fn() => '', $renderingContext)
;

$output0 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array15 = [
'0' => $renderingContext->getVariableProvider()->getByPath('form.nextPage'),
];

$expression16 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments14 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression16(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array15)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output17 = '';

$output17 .= '
                    <span class="btn-group next">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper
$renderChildrenClosure19 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure21 = function() use ($renderingContext) {
return NULL;
};

$arguments20 = [
'element' => $renderingContext->getVariableProvider()->getByPath('form.currentPage'),
'property' => NULL,
'renderingOptionProperty' => 'nextButtonLabel',
];
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext)]);
};

$arguments18 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'name' => NULL,
'value' => $renderingContext->getVariableProvider()->getByPath('form.nextPage.index'),
'property' => '__currentPage',
'autofocus' => NULL,
'disabled' => NULL,
'form' => NULL,
'formaction' => NULL,
'formenctype' => NULL,
'formmethod' => NULL,
'formnovalidate' => NULL,
'formtarget' => NULL,
'class' => 'btn btn-primary',
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'type' => 'submit',
];

$output17 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output17 .= '
                    </span>
                ';
return $output17;
},
'__else' => function() use ($renderingContext) {
$output22 = '';

$output22 .= '
                    <span class="btn-group next submit">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper
$renderChildrenClosure24 = function() use ($renderingContext) {
$output27 = '';

$output27 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper
$renderChildrenClosure29 = function() use ($renderingContext) {
return NULL;
};

$arguments28 = [
'element' => $renderingContext->getVariableProvider()->getByPath('form'),
'property' => NULL,
'renderingOptionProperty' => 'submitButtonLabel',
];

$output27 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Form\ViewHelpers\TranslateElementPropertyViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext)]);

$output27 .= '
                        ';
return $output27;
};
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure26 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('form.pages');
};

$arguments25 = [
'subject' => NULL,
];
$renderChildrenClosure26 = ($arguments25['subject'] !== null) ? function() use ($arguments25) { return $arguments25['subject']; } : $renderChildrenClosure26;
$arguments23 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'name' => NULL,
'value' => TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext),
'property' => '__currentPage',
'autofocus' => NULL,
'disabled' => NULL,
'form' => NULL,
'formaction' => NULL,
'formenctype' => NULL,
'formmethod' => NULL,
'formnovalidate' => NULL,
'formtarget' => NULL,
'class' => 'btn btn-primary',
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'type' => 'submit',
];

$output22 .= TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output22 .= '
                    </span>
                ';
return $output22;
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments14, static fn() => '', $renderingContext)
;

$output0 .= '
        </div>
    </div>
</nav>

';

    return $output0;
}

}

#