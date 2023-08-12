<?php
class partial_Header_SubHeader_e162af06475cbccb8d5e423ee3766e5614a2b82d extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
'0' => $renderingContext->getVariableProvider()->getByPath('subheader'),
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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure6 = function() use ($renderingContext) {
$output45 = '';

$output45 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure47 = function() use ($renderingContext) {
$output48 = '';

$output48 .= '
            <h2 class="';

$output48 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class')]);

$output48 .= ' ';

$output48 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass')]);

$output48 .= '">
                <span>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure50 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('subheader');
};

$array52 = [
'0' => 'false',
];

$expression53 = function($context) {return FALSE;};

$arguments49 = [
'value' => NULL,
'keepQuotes' => false,
'encoding' => 'UTF-8',
'doubleEncode' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression53(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array52)),
    $renderingContext
),
];
$value51 = ($arguments49['value'] !== NULL ? $arguments49['value'] : $renderChildrenClosure50());

$output48 .= !is_string($value51) && !(is_object($value51) && method_exists($value51, '__toString')) ? $value51 : htmlspecialchars($value51, ($arguments49['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments49['encoding'], $arguments49['doubleEncode']);

$output48 .= '</span>
            </h2>
        ';
return $output48;
};

$arguments46 = [
'value' => 1,
];

$output45 .= '';

$output45 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure55 = function() use ($renderingContext) {
$output56 = '';

$output56 .= '
            <h3 class="';

$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class')]);

$output56 .= ' ';

$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass')]);

$output56 .= '">
                <span>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure58 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('subheader');
};

$array60 = [
'0' => 'false',
];

$expression61 = function($context) {return FALSE;};

$arguments57 = [
'value' => NULL,
'keepQuotes' => false,
'encoding' => 'UTF-8',
'doubleEncode' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression61(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array60)),
    $renderingContext
),
];
$value59 = ($arguments57['value'] !== NULL ? $arguments57['value'] : $renderChildrenClosure58());

$output56 .= !is_string($value59) && !(is_object($value59) && method_exists($value59, '__toString')) ? $value59 : htmlspecialchars($value59, ($arguments57['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments57['encoding'], $arguments57['doubleEncode']);

$output56 .= '</span>
            </h3>
        ';
return $output56;
};

$arguments54 = [
'value' => 2,
];

$output45 .= '';

$output45 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure63 = function() use ($renderingContext) {
$output64 = '';

$output64 .= '
            <h4 class="';

$output64 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class')]);

$output64 .= ' ';

$output64 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass')]);

$output64 .= '">
                <span>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure66 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('subheader');
};

$array68 = [
'0' => 'false',
];

$expression69 = function($context) {return FALSE;};

$arguments65 = [
'value' => NULL,
'keepQuotes' => false,
'encoding' => 'UTF-8',
'doubleEncode' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression69(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array68)),
    $renderingContext
),
];
$value67 = ($arguments65['value'] !== NULL ? $arguments65['value'] : $renderChildrenClosure66());

$output64 .= !is_string($value67) && !(is_object($value67) && method_exists($value67, '__toString')) ? $value67 : htmlspecialchars($value67, ($arguments65['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments65['encoding'], $arguments65['doubleEncode']);

$output64 .= '</span>
            </h4>
        ';
return $output64;
};

$arguments62 = [
'value' => 3,
];

$output45 .= '';

$output45 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure71 = function() use ($renderingContext) {
$output72 = '';

$output72 .= '
            <h5 class="';

$output72 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class')]);

$output72 .= ' ';

$output72 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass')]);

$output72 .= '">
                <span>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure74 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('subheader');
};

$array76 = [
'0' => 'false',
];

$expression77 = function($context) {return FALSE;};

$arguments73 = [
'value' => NULL,
'keepQuotes' => false,
'encoding' => 'UTF-8',
'doubleEncode' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression77(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array76)),
    $renderingContext
),
];
$value75 = ($arguments73['value'] !== NULL ? $arguments73['value'] : $renderChildrenClosure74());

$output72 .= !is_string($value75) && !(is_object($value75) && method_exists($value75, '__toString')) ? $value75 : htmlspecialchars($value75, ($arguments73['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments73['encoding'], $arguments73['doubleEncode']);

$output72 .= '</span>
            </h5>
        ';
return $output72;
};

$arguments70 = [
'value' => 4,
];

$output45 .= '';

$output45 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure79 = function() use ($renderingContext) {
$output80 = '';

$output80 .= '
            <h6 class="';

$output80 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class')]);

$output80 .= ' ';

$output80 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass')]);

$output80 .= '">
                <span>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure82 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('subheader');
};

$array84 = [
'0' => 'false',
];

$expression85 = function($context) {return FALSE;};

$arguments81 = [
'value' => NULL,
'keepQuotes' => false,
'encoding' => 'UTF-8',
'doubleEncode' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression85(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array84)),
    $renderingContext
),
];
$value83 = ($arguments81['value'] !== NULL ? $arguments81['value'] : $renderChildrenClosure82());

$output80 .= !is_string($value83) && !(is_object($value83) && method_exists($value83, '__toString')) ? $value83 : htmlspecialchars($value83, ($arguments81['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments81['encoding'], $arguments81['doubleEncode']);

$output80 .= '</span>
            </h6>
        ';
return $output80;
};

$arguments78 = [
'value' => 5,
];

$output45 .= '';

$output45 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\DefaultCaseViewHelper
$renderChildrenClosure87 = function() use ($renderingContext) {
$output88 = '';

$output88 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array90 = [
'0' => $renderingContext->getVariableProvider()->getByPath('default'),
];

$expression91 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments89 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression91(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array90)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output92 = '';

$output92 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure94 = function() use ($renderingContext) {
return NULL;
};

$array95 = [
'subheader' => $renderingContext->getVariableProvider()->getByPath('subheader'),
'class' => $renderingContext->getVariableProvider()->getByPath('class'),
'positionClass' => $renderingContext->getVariableProvider()->getByPath('positionClass'),
'layout' => $renderingContext->getVariableProvider()->getByPath('default'),
];

$arguments93 = [
'section' => NULL,
'partial' => 'Header/SubHeader',
'delegate' => NULL,
'arguments' => $array95,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output92 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

$output92 .= '
            ';
return $output92;
},
];

$output88 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments89, static fn() => '', $renderingContext)
;

$output88 .= '
        ';
return $output88;
};

$arguments86 = [
];

$output45 .= '';

$output45 .= '
    ';
return $output45;
};

$arguments5 = [
'expression' => $renderingContext->getVariableProvider()->getByPath('layout'),
];

$output4 .= call_user_func_array(function($arguments) use ($renderingContext) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext) {

return 1;
}): return call_user_func(function() use ($renderingContext) {
$output7 = '';

$output7 .= '
            <h2 class="';

$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class')]);

$output7 .= ' ';

$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass')]);

$output7 .= '">
                <span>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure9 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('subheader');
};

$array11 = [
'0' => 'false',
];

$expression12 = function($context) {return FALSE;};

$arguments8 = [
'value' => NULL,
'keepQuotes' => false,
'encoding' => 'UTF-8',
'doubleEncode' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression12(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array11)),
    $renderingContext
),
];
$value10 = ($arguments8['value'] !== NULL ? $arguments8['value'] : $renderChildrenClosure9());

$output7 .= !is_string($value10) && !(is_object($value10) && method_exists($value10, '__toString')) ? $value10 : htmlspecialchars($value10, ($arguments8['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments8['encoding'], $arguments8['doubleEncode']);

$output7 .= '</span>
            </h2>
        ';
return $output7;
});
case call_user_func(function() use ($renderingContext) {

return 2;
}): return call_user_func(function() use ($renderingContext) {
$output13 = '';

$output13 .= '
            <h3 class="';

$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class')]);

$output13 .= ' ';

$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass')]);

$output13 .= '">
                <span>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure15 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('subheader');
};

$array17 = [
'0' => 'false',
];

$expression18 = function($context) {return FALSE;};

$arguments14 = [
'value' => NULL,
'keepQuotes' => false,
'encoding' => 'UTF-8',
'doubleEncode' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression18(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array17)),
    $renderingContext
),
];
$value16 = ($arguments14['value'] !== NULL ? $arguments14['value'] : $renderChildrenClosure15());

$output13 .= !is_string($value16) && !(is_object($value16) && method_exists($value16, '__toString')) ? $value16 : htmlspecialchars($value16, ($arguments14['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments14['encoding'], $arguments14['doubleEncode']);

$output13 .= '</span>
            </h3>
        ';
return $output13;
});
case call_user_func(function() use ($renderingContext) {

return 3;
}): return call_user_func(function() use ($renderingContext) {
$output19 = '';

$output19 .= '
            <h4 class="';

$output19 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class')]);

$output19 .= ' ';

$output19 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass')]);

$output19 .= '">
                <span>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure21 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('subheader');
};

$array23 = [
'0' => 'false',
];

$expression24 = function($context) {return FALSE;};

$arguments20 = [
'value' => NULL,
'keepQuotes' => false,
'encoding' => 'UTF-8',
'doubleEncode' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression24(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array23)),
    $renderingContext
),
];
$value22 = ($arguments20['value'] !== NULL ? $arguments20['value'] : $renderChildrenClosure21());

$output19 .= !is_string($value22) && !(is_object($value22) && method_exists($value22, '__toString')) ? $value22 : htmlspecialchars($value22, ($arguments20['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments20['encoding'], $arguments20['doubleEncode']);

$output19 .= '</span>
            </h4>
        ';
return $output19;
});
case call_user_func(function() use ($renderingContext) {

return 4;
}): return call_user_func(function() use ($renderingContext) {
$output25 = '';

$output25 .= '
            <h5 class="';

$output25 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class')]);

$output25 .= ' ';

$output25 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass')]);

$output25 .= '">
                <span>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure27 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('subheader');
};

$array29 = [
'0' => 'false',
];

$expression30 = function($context) {return FALSE;};

$arguments26 = [
'value' => NULL,
'keepQuotes' => false,
'encoding' => 'UTF-8',
'doubleEncode' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression30(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array29)),
    $renderingContext
),
];
$value28 = ($arguments26['value'] !== NULL ? $arguments26['value'] : $renderChildrenClosure27());

$output25 .= !is_string($value28) && !(is_object($value28) && method_exists($value28, '__toString')) ? $value28 : htmlspecialchars($value28, ($arguments26['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments26['encoding'], $arguments26['doubleEncode']);

$output25 .= '</span>
            </h5>
        ';
return $output25;
});
case call_user_func(function() use ($renderingContext) {

return 5;
}): return call_user_func(function() use ($renderingContext) {
$output31 = '';

$output31 .= '
            <h6 class="';

$output31 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('class')]);

$output31 .= ' ';

$output31 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('positionClass')]);

$output31 .= '">
                <span>';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure33 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('subheader');
};

$array35 = [
'0' => 'false',
];

$expression36 = function($context) {return FALSE;};

$arguments32 = [
'value' => NULL,
'keepQuotes' => false,
'encoding' => 'UTF-8',
'doubleEncode' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression36(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array35)),
    $renderingContext
),
];
$value34 = ($arguments32['value'] !== NULL ? $arguments32['value'] : $renderChildrenClosure33());

$output31 .= !is_string($value34) && !(is_object($value34) && method_exists($value34, '__toString')) ? $value34 : htmlspecialchars($value34, ($arguments32['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments32['encoding'], $arguments32['doubleEncode']);

$output31 .= '</span>
            </h6>
        ';
return $output31;
});
default: return call_user_func(function() use ($renderingContext) {
$output37 = '';

$output37 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array39 = [
'0' => $renderingContext->getVariableProvider()->getByPath('default'),
];

$expression40 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments38 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression40(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array39)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output41 = '';

$output41 .= '
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure43 = function() use ($renderingContext) {
return NULL;
};

$array44 = [
'subheader' => $renderingContext->getVariableProvider()->getByPath('subheader'),
'class' => $renderingContext->getVariableProvider()->getByPath('class'),
'positionClass' => $renderingContext->getVariableProvider()->getByPath('positionClass'),
'layout' => $renderingContext->getVariableProvider()->getByPath('default'),
];

$arguments42 = [
'section' => NULL,
'partial' => 'Header/SubHeader',
'delegate' => NULL,
'arguments' => $array44,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output41 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext);

$output41 .= '
            ';
return $output41;
},
];

$output37 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments38, static fn() => '', $renderingContext)
;

$output37 .= '
        ';
return $output37;
});
}
}, array($arguments5));

$output4 .= '
';
return $output4;
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