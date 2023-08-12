<?php
class Standard_action_systemInformationDropDown_02f1a9bf5a2276e1b24456e0775c3b29ed3775bf extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
<span class="systeminformationtoolbaritem-container t3js-systeminformation-container" data-count="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('count')]);

$output0 .= '"
            data-severityclass="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('severityBadgeClass')]);

$output0 .= '"></span>

<h3 class="dropdown-headline">
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$arguments1 = [
'key' => 'systemmessage.header',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '
</h3>
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array4 = [
'0' => $renderingContext->getVariableProvider()->getByPath('environmentToolUrl'),
];

$expression5 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments3 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression5(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array4)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output6 = '';

$output6 .= '
    <p class="dropdown-text typo3-module-menu-item submodule mod-tools_toolsenvironment" data-modulename="tools_toolsenvironment">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure8 = function() use ($renderingContext) {
$output9 = '';

$output9 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure11 = function() use ($renderingContext) {
return NULL;
};

$array12 = [
'0' => $renderingContext->getVariableProvider()->getByPath('environmentToolUrl'),
];

$arguments10 = [
'key' => 'systemmessage.intro',
'id' => NULL,
'default' => NULL,
'arguments' => $array12,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output9 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output9 .= '
        ';
return $output9;
};

$arguments7 = [
'value' => NULL,
];

$output6 .= isset($arguments7['value']) ? $arguments7['value'] : $renderChildrenClosure8();

$output6 .= '
    </p>
';
return $output6;
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments3, static fn() => '', $renderingContext)
;

$output0 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array14 = [
'0' => $renderingContext->getVariableProvider()->getByPath('systemInformation'),
];

$expression15 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments13 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression15(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array14)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output16 = '';

$output16 .= '
    <hr>
    <div class="dropdown-table">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure18 = function() use ($renderingContext) {
$output19 = '';

$output19 .= '
            <div class="dropdown-table-row">
                <div class="dropdown-table-column dropdown-table-column-top dropdown-table-icon">
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array21 = [
'0' => $renderingContext->getVariableProvider()->getByPath('info.iconIdentifier'),
];

$expression22 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments20 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression22(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array21)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output23 = '';

$output23 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure25 = function() use ($renderingContext) {
return NULL;
};

$arguments24 = [
'identifier' => $renderingContext->getVariableProvider()->getByPath('info.iconIdentifier'),
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => 'inline',
];

$output23 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output23 .= '
                        ';
return $output23;
},
'__else' => function() use ($renderingContext) {
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure27 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('info.icon');
};

$arguments26 = [
'value' => NULL,
];
return isset($arguments26['value']) ? $arguments26['value'] : $renderChildrenClosure27();
},
];

$output19 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments20, static fn() => '', $renderingContext)
;

$output19 .= '
                </div>
                <div class="dropdown-table-column dropdown-table-column-top dropdown-table-title">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure29 = function() use ($renderingContext) {
return NULL;
};

$arguments28 = [
'key' => $renderingContext->getVariableProvider()->getByPath('info.title'),
'id' => NULL,
'default' => $renderingContext->getVariableProvider()->getByPath('info.title'),
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output19 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext)]);

$output19 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array31 = [
'0' => $renderingContext->getVariableProvider()->getByPath('info.titleAddition'),
];

$expression32 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments30 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression32(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array31)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output33 = '';

$output33 .= ' (';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure35 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('info.titleAddition');
};

$arguments34 = [
'value' => NULL,
'keepQuotes' => false,
'encoding' => 'UTF-8',
'doubleEncode' => true,
];
$value36 = ($arguments34['value'] !== NULL ? $arguments34['value'] : $renderChildrenClosure35());

$output33 .= !is_string($value36) && !(is_object($value36) && method_exists($value36, '__toString')) ? $value36 : htmlspecialchars($value36, ($arguments34['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments34['encoding'], $arguments34['doubleEncode']);

$output33 .= ')';
return $output33;
},
];

$output19 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments30, static fn() => '', $renderingContext)
;

$output19 .= '
                </div>
                <div
                    class="dropdown-table-column dropdown-table-column-top dropdown-table-value ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$output38 = '';

$output38 .= 'text-';

$output38 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('info.status')]);

$array39 = [
'0' => $renderingContext->getVariableProvider()->getByPath('info.status'),
];

$expression40 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments37 = [
'then' => $output38,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression40(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array39)),
    $renderingContext
),
];

$output19 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments37, static fn() => '', $renderingContext)
;

$output19 .= '">
                    ';

$output19 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('info.value')]);

$output19 .= '
                </div>
            </div>
        ';
return $output19;
};

$arguments17 = [
'each' => $renderingContext->getVariableProvider()->getByPath('systemInformation'),
'as' => 'info',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output16 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output16 .= '
    </div>
';
return $output16;
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments13, static fn() => '', $renderingContext)
;

$output0 .= '

<hr>

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure44 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('messages');
};

$arguments43 = [
'subject' => NULL,
];
$renderChildrenClosure44 = ($arguments43['subject'] !== null) ? function() use ($arguments43) { return $arguments43['subject']; } : $renderChildrenClosure44;
$array42 = [
'0' => TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext),
'1' => ' > 0',
];

$expression45 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 0);};

$arguments41 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression45(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array42)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output46 = '';

$output46 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure48 = function() use ($renderingContext) {
$output49 = '';

$output49 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array51 = [
'0' => $renderingContext->getVariableProvider()->getByPath('message.module'),
];

$expression52 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments50 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression52(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array51)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output53 = '';

$output53 .= '
                    <p id="systeminformation_';

$output53 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('message.module')]);

$output53 .= '"
                        class="dropdown-text t3js-systeminformation-module typo3-module-menu-item submodule mod-';

$output53 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('message.module')]);

$output53 .= '"
                        data-modulename="';

$output53 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('message.module')]);

$output53 .= '" data-moduleparams="';

$output53 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('message.params')]);

$output53 .= '">
                        <span class="text-';

$output53 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('message.status')]);

$output53 .= '">';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure55 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('message.text');
};

$arguments54 = [
'value' => NULL,
];

$output53 .= isset($arguments54['value']) ? $arguments54['value'] : $renderChildrenClosure55();

$output53 .= '</span>
                    </p>
                ';
return $output53;
},
'__else' => function() use ($renderingContext) {
$output56 = '';

$output56 .= '
                    <p class="dropdown-text text-';

$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('message.status')]);

$output56 .= '">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure58 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('message.text');
};

$arguments57 = [
'value' => NULL,
];

$output56 .= isset($arguments57['value']) ? $arguments57['value'] : $renderChildrenClosure58();

$output56 .= '
                    </p>
                ';
return $output56;
},
];

$output49 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments50, static fn() => '', $renderingContext)
;

$output49 .= '
        ';
return $output49;
};

$arguments47 = [
'each' => $renderingContext->getVariableProvider()->getByPath('messages'),
'as' => 'message',
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
];

$output46 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output46 .= '
    ';
return $output46;
},
'__else' => function() use ($renderingContext) {
$output59 = '';

$output59 .= '
        <p class="dropdown-text text-success">
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper
$renderChildrenClosure61 = function() use ($renderingContext) {
$output62 = '';

$output62 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure64 = function() use ($renderingContext) {
return NULL;
};

$arguments63 = [
'key' => 'systemmessage.allgood',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output62 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext)]);

$output62 .= '
            ';
return $output62;
};

$arguments60 = [
'value' => NULL,
];
$renderChildrenClosure61 = ($arguments60['value'] !== null) ? function() use ($arguments60) { return $arguments60['value']; } : $renderChildrenClosure61;
$output59 .= TYPO3\CMS\Fluid\ViewHelpers\Format\Nl2brViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output59 .= '
        </p>
    ';
return $output59;
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments41, static fn() => '', $renderingContext)
;

$output0 .= '

';

    return $output0;
}

}

#