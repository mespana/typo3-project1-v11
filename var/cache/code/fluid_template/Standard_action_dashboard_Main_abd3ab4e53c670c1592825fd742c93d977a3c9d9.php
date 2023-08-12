<?php
class Standard_action_dashboard_Main_abd3ab4e53c670c1592825fd742c93d977a3c9d9 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
<div class="dashboard-header">

    <div class="dashboard-tabs">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
$output3 = '';

$output3 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure5 = function() use ($renderingContext) {
$output11 = '';

$output11 .= '
                ';

$output11 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('dashboard.title')]);

$output11 .= '
            ';
return $output11;
};

$array6 = [
'action' => 'setActiveDashboard',
'currentDashboard' => $renderingContext->getVariableProvider()->getByPath('dashboardKey'),
];
$output7 = '';

$output7 .= 'dashboard-tab ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array9 = [
'0' => $renderingContext->getVariableProvider()->getByPath('dashboardKey'),
'1' => ' == ',
'2' => $renderingContext->getVariableProvider()->getByPath('currentDashboard.identifier'),
];

$expression10 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

$arguments8 = [
'then' => 'dashboard-tab--active',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression10(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array9)),
    $renderingContext
),
];

$output7 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments8, static fn() => '', $renderingContext)
;

$arguments4 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'route' => 'dashboard',
'parameters' => $array6,
'referenceType' => 'absolute',
'name' => NULL,
'rel' => NULL,
'rev' => NULL,
'target' => NULL,
'class' => $output7,
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
];

$output3 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext);

$output3 .= '
        ';
return $output3;
};

$arguments1 = [
'each' => $renderingContext->getVariableProvider()->getByPath('availableDashboards'),
'as' => 'dashboard',
'key' => 'dashboardKey',
'reverse' => false,
'iteration' => NULL,
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
        <a href="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('addDashboardUri')]);

$output0 .= '" class="js-dashboard-modal dashboard-button dashboard-button-tab-add" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure13 = function() use ($renderingContext) {
return NULL;
};

$arguments12 = [
'key' => 'dashboard.add',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => 'dashboard',
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext)]);

$output0 .= '" data-modal-identifier="add" data-modal-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure15 = function() use ($renderingContext) {
return NULL;
};

$arguments14 = [
'key' => 'dashboard.add',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => 'dashboard',
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext)]);

$output0 .= '" data-button-close-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure17 = function() use ($renderingContext) {
return NULL;
};

$arguments16 = [
'key' => 'dashboard.add.button.close',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => 'dashboard',
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext)]);

$output0 .= '" data-button-ok-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure19 = function() use ($renderingContext) {
return NULL;
};

$arguments18 = [
'key' => 'dashboard.add.button.ok',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => 'dashboard',
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext)]);

$output0 .= '">
            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure21 = function() use ($renderingContext) {
return NULL;
};

$arguments20 = [
'identifier' => 'actions-add',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => 'inline',
];

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext);

$output0 .= '<span class="visually-hidden">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure23 = function() use ($renderingContext) {
return NULL;
};

$arguments22 = [
'key' => 'dashboard.add',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => 'dashboard',
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext)]);

$output0 .= '</span>
        </a>
    </div>

    <div class="dashboard-configuration btn-toolbar" role="toolbar">
        <a href="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('configureDashboardUri')]);

$output0 .= '" class="js-dashboard-modal btn btn-default btn-sm" data-modal-identifier="configure" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure25 = function() use ($renderingContext) {
return NULL;
};

$arguments24 = [
'key' => 'dashboard.configure',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => 'dashboard',
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext)]);

$output0 .= '" data-modal-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure27 = function() use ($renderingContext) {
return NULL;
};

$arguments26 = [
'key' => 'dashboard.configure',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => 'dashboard',
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext)]);

$output0 .= '" data-button-close-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure29 = function() use ($renderingContext) {
return NULL;
};

$arguments28 = [
'key' => 'dashboard.configure.button.close',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => 'dashboard',
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext)]);

$output0 .= '" data-button-ok-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure31 = function() use ($renderingContext) {
return NULL;
};

$arguments30 = [
'key' => 'dashboard.configure.button.ok',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => 'dashboard',
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext)]);

$output0 .= '">
            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure33 = function() use ($renderingContext) {
return NULL;
};

$arguments32 = [
'identifier' => 'actions-cog',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => 'inline',
];

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output0 .= '<span class="visually-hidden">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure35 = function() use ($renderingContext) {
return NULL;
};

$arguments34 = [
'key' => 'dashboard.configure',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => 'dashboard',
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext)]);

$output0 .= '</span>
        </a>
        <a href="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('deleteDashboardUri')]);

$output0 .= '" class="js-dashboard-delete btn btn-default btn-sm" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure37 = function() use ($renderingContext) {
return NULL;
};

$arguments36 = [
'key' => 'dashboard.delete',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => 'dashboard',
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext)]);

$output0 .= '" data-modal-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure39 = function() use ($renderingContext) {
return NULL;
};

$arguments38 = [
'key' => 'dashboard.delete',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => 'dashboard',
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext)]);

$output0 .= '" data-modal-question="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure41 = function() use ($renderingContext) {
return NULL;
};

$arguments40 = [
'key' => 'dashboard.delete.sure',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => 'dashboard',
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext)]);

$output0 .= '" data-modal-ok="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure43 = function() use ($renderingContext) {
return NULL;
};

$arguments42 = [
'key' => 'dashboard.delete.ok',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => 'dashboard',
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext)]);

$output0 .= '" data-modal-cancel="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure45 = function() use ($renderingContext) {
return NULL;
};

$arguments44 = [
'key' => 'dashboard.delete.cancel',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => 'dashboard',
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext)]);

$output0 .= '" >
            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure47 = function() use ($renderingContext) {
return NULL;
};

$arguments46 = [
'identifier' => 'actions-delete',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => 'inline',
];

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output0 .= '<span class="visually-hidden">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure49 = function() use ($renderingContext) {
return NULL;
};

$arguments48 = [
'key' => 'dashboard.delete',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => 'dashboard',
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext)]);

$output0 .= '</span>
        </a>
    </div>

</div>

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array51 = [
'0' => $renderingContext->getVariableProvider()->getByPath('currentDashboard.widgets'),
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
        <div class="dashboard-grid">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure55 = function() use ($renderingContext) {
$output56 = '';

$output56 .= '
                <div class="dashboard-item dashboard-item--w-';

$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('widget.width')]);

$output56 .= ' dashboard-item--h-';

$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('widget.height')]);

$output56 .= ' ';

$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('widget.additionalCssClasses')]);

$output56 .= ' dashboard-item--enableSelect" data-widget-hash="';

$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('widgetHash')]);

$output56 .= '" data-widget-key="';

$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('widget.identifier')]);

$output56 .= '">
                    <div class="dashboard-item-content">
                        <div class="widget widget-identifier-';

$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('widget.identifier')]);

$output56 .= '">
                            <div class="widget-waiting">
                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure58 = function() use ($renderingContext) {
return NULL;
};

$arguments57 = [
'identifier' => 'spinner-circle',
'size' => 'large',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
];

$output56 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output56 .= '
                            </div>
                            <div class="widget-content hide"></div>
                            <div class="widget-error hide">
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure60 = function() use ($renderingContext) {
return NULL;
};

$arguments59 = [
'key' => 'widget.error',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => 'dashboard',
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext)]);

$output56 .= '
                            </div>
                            <div class="widget-actions">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array62 = [
'0' => $renderingContext->getVariableProvider()->getByPath('currentDashboard.widgetOptions.{widgetHash}.refreshAvailable'),
];

$expression63 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments61 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression63(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array62)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output64 = '';

$output64 .= '
                                    <typo3-dashboard-widget-refresh>
                                        <button type="button" class="widget-action widget-action-refresh btn btn-link">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure66 = function() use ($renderingContext) {
return NULL;
};

$arguments65 = [
'identifier' => 'actions-refresh',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => 'inline',
];

$output64 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);

$output64 .= '
                                        </button>
                                    </typo3-dashboard-widget-refresh>
                                ';
return $output64;
},
];

$output56 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments61, static fn() => '', $renderingContext)
;

$output56 .= '
                                <div class="widget-action widget-action-move js-dashboard-move-widget">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure68 = function() use ($renderingContext) {
return NULL;
};

$arguments67 = [
'identifier' => 'actions-move',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => 'inline',
];

$output56 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);

$output56 .= '
                                </div>
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure70 = function() use ($renderingContext) {
$output81 = '';

$output81 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure83 = function() use ($renderingContext) {
return NULL;
};

$arguments82 = [
'identifier' => 'actions-delete',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => 'inline',
];

$output81 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output81 .= '
                                ';
return $output81;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure73 = function() use ($renderingContext) {
return NULL;
};

$arguments72 = [
'key' => 'widget.remove.confirm.title',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => 'dashboard',
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure75 = function() use ($renderingContext) {
return NULL;
};

$arguments74 = [
'key' => 'widget.remove.confirm.message',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => 'dashboard',
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure77 = function() use ($renderingContext) {
return NULL;
};

$arguments76 = [
'key' => 'widget.remove.button.ok',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => 'dashboard',
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure79 = function() use ($renderingContext) {
return NULL;
};

$arguments78 = [
'key' => 'widget.remove.button.close',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => 'dashboard',
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$array71 = [
'modal-title' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments72, $renderChildrenClosure73, $renderingContext),
'modal-question' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext),
'modal-ok' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments76, $renderChildrenClosure77, $renderingContext),
'modal-cancel' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext),
];

$array80 = [
'action' => 'removeWidget',
'widgetHash' => $renderingContext->getVariableProvider()->getByPath('widgetHash'),
];

$arguments69 = [
'additionalAttributes' => NULL,
'data' => $array71,
'aria' => NULL,
'route' => 'dashboard',
'parameters' => $array80,
'referenceType' => 'absolute',
'name' => NULL,
'rel' => NULL,
'rev' => NULL,
'target' => NULL,
'class' => 'widget-action widget-action-remove js-dashboard-remove-widget',
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
];

$output56 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);

$output56 .= '
                            </div>
                        </div>
                    </div>
                </div>
            ';
return $output56;
};

$arguments54 = [
'each' => $renderingContext->getVariableProvider()->getByPath('currentDashboard.widgets'),
'as' => 'widget',
'key' => 'widgetHash',
'reverse' => false,
'iteration' => 'widgetIterator',
];

$output53 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext);

$output53 .= '
        </div>
    ';
return $output53;
},
'__else' => function() use ($renderingContext) {
$output84 = '';

$output84 .= '
        <div class="dashboard-empty">
            <div class="dashboard-empty-content">
                <h3>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure86 = function() use ($renderingContext) {
return NULL;
};

$arguments85 = [
'key' => 'dashboard.empty.content.title',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => 'dashboard',
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext)]);

$output84 .= '</h3>
                <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure88 = function() use ($renderingContext) {
return NULL;
};

$arguments87 = [
'key' => 'dashboard.empty.content.description',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => 'dashboard',
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext)]);

$output84 .= '</p>
                <button class="js-dashboard-addWidget btn dashboard-button hide" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure90 = function() use ($renderingContext) {
return NULL;
};

$arguments89 = [
'key' => 'widget.add',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => 'dashboard',
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments89, $renderChildrenClosure90, $renderingContext)]);

$output84 .= '" data-modal-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure92 = function() use ($renderingContext) {
return NULL;
};

$arguments91 = [
'key' => 'widget.add',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => 'dashboard',
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext)]);

$output84 .= '" data-button-close-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure94 = function() use ($renderingContext) {
return NULL;
};

$arguments93 = [
'key' => 'widget.add.button.close',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => 'dashboard',
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext)]);

$output84 .= '" data-button-ok-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure96 = function() use ($renderingContext) {
return NULL;
};

$arguments95 = [
'key' => 'widget.add.button.ok',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => 'dashboard',
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext)]);

$output84 .= '">
                    <span class="dashboard-button-icon">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure98 = function() use ($renderingContext) {
return NULL;
};

$arguments97 = [
'identifier' => 'actions-add',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => 'inline',
];

$output84 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);

$output84 .= '</span>
                    <span class="dashboard-button-text">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure100 = function() use ($renderingContext) {
return NULL;
};

$arguments99 = [
'key' => 'dashboard.empty.content.button',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => 'dashboard',
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments99, $renderChildrenClosure100, $renderingContext)]);

$output84 .= '</span>
                </button>
            </div>
        </div>
    ';
return $output84;
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments50, static fn() => '', $renderingContext)
;

$output0 .= '

<div class="dashboard-add-item">
    <button class="js-dashboard-addWidget btn dashboard-button dashboard-button-add hide" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure102 = function() use ($renderingContext) {
return NULL;
};

$arguments101 = [
'key' => 'widget.add',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => 'dashboard',
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext)]);

$output0 .= '" data-modal-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure104 = function() use ($renderingContext) {
return NULL;
};

$arguments103 = [
'key' => 'widget.add',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => 'dashboard',
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext)]);

$output0 .= '" data-button-close-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure106 = function() use ($renderingContext) {
return NULL;
};

$arguments105 = [
'key' => 'widget.add.button.close',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => 'dashboard',
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext)]);

$output0 .= '" data-button-ok-text="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure108 = function() use ($renderingContext) {
return NULL;
};

$arguments107 = [
'key' => 'widget.add.button.ok',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => 'dashboard',
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext)]);

$output0 .= '">
        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure110 = function() use ($renderingContext) {
return NULL;
};

$arguments109 = [
'identifier' => 'actions-add',
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => 'inline',
];

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);

$output0 .= '<span class="visually-hidden">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure112 = function() use ($renderingContext) {
return NULL;
};

$arguments111 = [
'key' => 'widget.add',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => 'dashboard',
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext)]);

$output0 .= '</span>
    </button>
</div>

<div id="widgetSelector" class="hide">
    <div class="dashboard-modal-tabpanel" role="tabpanel">
        <ul class="nav nav-tabs t3js-tabs" id="widget-selector" role="tablist">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure114 = function() use ($renderingContext) {
return NULL;
};

$arguments113 = [
'value' => 'false',
'name' => 'firstGroupActive',
];
$renderChildrenClosure114 = ($arguments113['value'] !== null) ? function() use ($arguments113) { return $arguments113['value']; } : $renderChildrenClosure114;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext)]);

$output0 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure116 = function() use ($renderingContext) {
$output117 = '';

$output117 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array119 = [
'0' => $renderingContext->getVariableProvider()->getByPath('groupConfiguration.widgets'),
];

$expression120 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments118 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression120(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array119)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output121 = '';

$output121 .= '
                    <li class="t3js-tabmenu-item nav-item">
                        <a id="dashboard-widgetgroup-tab-';

$output121 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('groupConfiguration.identifier')]);

$output121 .= '" class="nav-link ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array123 = [
'0' => $renderingContext->getVariableProvider()->getByPath('firstGroupActive'),
'1' => ' == \'false\'',
];

$expression124 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'false');};

$arguments122 = [
'then' => 'active',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression124(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array123)),
    $renderingContext
),
];

$output121 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments122, static fn() => '', $renderingContext)
;

$output121 .= '" data-bs-toggle="tab" href="#dashboard-widgetgroup-';

$output121 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('groupConfiguration.identifier')]);

$output121 .= '" role="tab" aria-controls="dashboard-widgetgroup-';

$output121 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('groupConfiguration.identifier')]);

$output121 .= '" aria-selected="true">';

$output121 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('groupConfiguration.title')]);

$output121 .= '</a>
                    </li>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure126 = function() use ($renderingContext) {
return NULL;
};

$arguments125 = [
'value' => 'true',
'name' => 'firstGroupActive',
];
$renderChildrenClosure126 = ($arguments125['value'] !== null) ? function() use ($arguments125) { return $arguments125['value']; } : $renderChildrenClosure126;
$output121 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments125, $renderChildrenClosure126, $renderingContext)]);

$output121 .= '
                ';
return $output121;
},
];

$output117 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments118, static fn() => '', $renderingContext)
;

$output117 .= '
            ';
return $output117;
};

$arguments115 = [
'each' => $renderingContext->getVariableProvider()->getByPath('widgetGroups'),
'as' => 'groupConfiguration',
'key' => NULL,
'reverse' => false,
'iteration' => 'iterator',
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext);

$output0 .= '
        </ul>
        <div class="tab-content">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure128 = function() use ($renderingContext) {
return NULL;
};

$arguments127 = [
'value' => 'false',
'name' => 'firstGroupActive',
];
$renderChildrenClosure128 = ($arguments127['value'] !== null) ? function() use ($arguments127) { return $arguments127['value']; } : $renderChildrenClosure128;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext)]);

$output0 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure130 = function() use ($renderingContext) {
$output131 = '';

$output131 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array133 = [
'0' => $renderingContext->getVariableProvider()->getByPath('groupConfiguration.widgets'),
];

$expression134 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments132 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression134(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array133)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output135 = '';

$output135 .= '
                    <div class="tab-pane ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array137 = [
'0' => $renderingContext->getVariableProvider()->getByPath('firstGroupActive'),
'1' => ' == \'false\'',
];

$expression138 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'false');};

$arguments136 = [
'then' => 'active',
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression138(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array137)),
    $renderingContext
),
];

$output135 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments136, static fn() => '', $renderingContext)
;

$output135 .= '" id="dashboard-widgetgroup-';

$output135 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('groupConfiguration.identifier')]);

$output135 .= '" role="tabpanel" aria-labelledby="dashboard-widgetgroup-';

$output135 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('groupConfiguration.identifier')]);

$output135 .= '-tab">
                        <div class="dashboard-modal-items ">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure140 = function() use ($renderingContext) {
$output141 = '';

$output141 .= '
                                <div class="dashboard-modal-item">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper
$renderChildrenClosure143 = function() use ($renderingContext) {
$output145 = '';

$output145 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array147 = [
'0' => $renderingContext->getVariableProvider()->getByPath('widgetConfiguration.iconIdentifier'),
];

$expression148 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments146 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression148(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array147)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output149 = '';

$output149 .= '
                                            <div class="dashboard-modal-item-icon">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure151 = function() use ($renderingContext) {
return NULL;
};

$arguments150 = [
'identifier' => $renderingContext->getVariableProvider()->getByPath('widgetConfiguration.iconIdentifier'),
'size' => 'default',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => 'inline',
];

$output149 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments150, $renderChildrenClosure151, $renderingContext);

$output149 .= '
                                            </div>
                                        ';
return $output149;
},
];

$output145 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments146, static fn() => '', $renderingContext)
;

$output145 .= '
                                        <div class="dashboard-modal-item-details">
                                            <div class="dashboard-modal-item-title">
                                                ';

$output145 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('widgetConfiguration.title')]);

$output145 .= '
                                            </div>
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array153 = [
'0' => $renderingContext->getVariableProvider()->getByPath('widgetConfiguration.description'),
];

$expression154 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments152 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression154(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array153)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output155 = '';

$output155 .= '
                                                <div class="dashboard-modal-item-description">
                                                    ';

$output155 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('widgetConfiguration.description')]);

$output155 .= '
                                                </div>
                                            ';
return $output155;
},
];

$output145 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments152, static fn() => '', $renderingContext)
;

$output145 .= '
                                        </div>
                                    ';
return $output145;
};

$array144 = [
'action' => 'addWidget',
'widget' => $renderingContext->getVariableProvider()->getByPath('widgetIdentifier'),
];

$arguments142 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'route' => 'dashboard',
'parameters' => $array144,
'referenceType' => 'absolute',
'name' => NULL,
'rel' => NULL,
'rev' => NULL,
'target' => 'list_frame',
'class' => 'dashboard-modal-item-block',
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
];

$output141 .= TYPO3\CMS\Fluid\ViewHelpers\Be\LinkViewHelper::renderStatic($arguments142, $renderChildrenClosure143, $renderingContext);

$output141 .= '
                                </div>
                            ';
return $output141;
};

$arguments139 = [
'each' => $renderingContext->getVariableProvider()->getByPath('groupConfiguration.widgets'),
'as' => 'widgetConfiguration',
'key' => 'widgetIdentifier',
'reverse' => false,
'iteration' => NULL,
];

$output135 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments139, $renderChildrenClosure140, $renderingContext);

$output135 .= '
                        </div>
                    </div>
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure157 = function() use ($renderingContext) {
return NULL;
};

$arguments156 = [
'value' => 'true',
'name' => 'firstGroupActive',
];
$renderChildrenClosure157 = ($arguments156['value'] !== null) ? function() use ($arguments156) { return $arguments156['value']; } : $renderChildrenClosure157;
$output135 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments156, $renderChildrenClosure157, $renderingContext)]);

$output135 .= '
                ';
return $output135;
},
];

$output131 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments132, static fn() => '', $renderingContext)
;

$output131 .= '
            ';
return $output131;
};

$arguments129 = [
'each' => $renderingContext->getVariableProvider()->getByPath('widgetGroups'),
'as' => 'groupConfiguration',
'key' => NULL,
'reverse' => false,
'iteration' => 'iterator',
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments129, $renderChildrenClosure130, $renderingContext);

$output0 .= '
        </div>
    </div>
</div>

<div id="dashboardModal-add" class="hide">
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure159 = function() use ($renderingContext) {
$output160 = '';

$output160 .= '
        <div class="form-group">
            <label for="dashboardModalAdd-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure162 = function() use ($renderingContext) {
return NULL;
};

$arguments161 = [
'key' => 'dashboard.title',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => 'dashboard',
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output160 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments161, $renderChildrenClosure162, $renderingContext)]);

$output160 .= '</label>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure164 = function() use ($renderingContext) {
return NULL;
};

$array165 = [
'0' => 'required',
];

$expression166 = function($context) {return "required";};

$arguments163 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'name' => 'dashboard-title',
'value' => NULL,
'property' => NULL,
'autofocus' => NULL,
'disabled' => NULL,
'maxlength' => NULL,
'readonly' => NULL,
'size' => NULL,
'placeholder' => NULL,
'pattern' => NULL,
'errorClass' => 'f3-form-error',
'class' => 'form-control',
'dir' => NULL,
'id' => 'dashboardModalAdd-title',
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'required' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression166(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array165)),
    $renderingContext
),
'type' => 'text',
];

$output160 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments163, $renderChildrenClosure164, $renderingContext);

$output160 .= '
        </div>

        <div class="dashboard-modal-items">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure168 = function() use ($renderingContext) {
return NULL;
};

$arguments167 = [
'value' => 'false',
'name' => 'dashboardShown',
];
$renderChildrenClosure168 = ($arguments167['value'] !== null) ? function() use ($arguments167) { return $arguments167['value']; } : $renderChildrenClosure168;
$output160 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments167, $renderChildrenClosure168, $renderingContext)]);

$output160 .= '
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure170 = function() use ($renderingContext) {
$output171 = '';

$output171 .= '
                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array173 = [
'0' => $renderingContext->getVariableProvider()->getByPath('availableDashboardPreset.showInWizard'),
];

$expression174 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments172 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression174(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array173)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output175 = '';

$output175 .= '
                    <div class="dashboard-modal-item">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\RadioViewHelper
$renderChildrenClosure177 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array180 = [
'0' => $renderingContext->getVariableProvider()->getByPath('dashboardShown'),
];

$expression181 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments179 = [
'then' => 'false',
'else' => 'true',
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression181(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array180)),
    $renderingContext
),
];

$array178 = [
'0' => TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments179, static fn() => '', $renderingContext)
,
];

$expression182 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$output183 = '';

$output183 .= 'dashboardKey-';

$output183 .= $renderingContext->getVariableProvider()->getByPath('availableDashboardKey');

$arguments176 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'name' => 'dashboard',
'value' => $renderingContext->getVariableProvider()->getByPath('availableDashboardKey'),
'property' => NULL,
'errorClass' => 'f3-form-error',
'checked' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression182(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array178)),
    $renderingContext
),
'class' => 'dashboard-modal-item-checkBox',
'dir' => NULL,
'id' => $output183,
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'disabled' => NULL,
];

$output175 .= TYPO3\CMS\Fluid\ViewHelpers\Form\RadioViewHelper::renderStatic($arguments176, $renderChildrenClosure177, $renderingContext);

$output175 .= '
                        <label for="dashboardKey-';

$output175 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('availableDashboardKey')]);

$output175 .= '" class="dashboard-modal-item-block">
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array185 = [
'0' => $renderingContext->getVariableProvider()->getByPath('availableDashboardPreset.iconIdentifier'),
];

$expression186 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments184 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression186(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array185)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output187 = '';

$output187 .= '
                                <span class="dashboard-modal-item-icon">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure189 = function() use ($renderingContext) {
return NULL;
};

$arguments188 = [
'identifier' => $renderingContext->getVariableProvider()->getByPath('availableDashboardPreset.iconIdentifier'),
'size' => 'default',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => 'inline',
];

$output187 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments188, $renderChildrenClosure189, $renderingContext);

$output187 .= '
                                </span>
                            ';
return $output187;
},
];

$output175 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments184, static fn() => '', $renderingContext)
;

$output175 .= '
                            <span class="dashboard-modal-item-details">
                                <span class="dashboard-modal-item-title">
                                    ';

$output175 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('availableDashboardPreset.title')]);

$output175 .= '
                                </span>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array191 = [
'0' => $renderingContext->getVariableProvider()->getByPath('availableDashboardPreset.description'),
];

$expression192 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments190 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression192(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array191)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output193 = '';

$output193 .= '
                                    <span class="dashboard-modal-item-description">
                                            ';

$output193 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('availableDashboardPreset.description')]);

$output193 .= '
                                    </span>
                                ';
return $output193;
},
];

$output175 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments190, static fn() => '', $renderingContext)
;

$output175 .= '
                            </span>
                        </label>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure195 = function() use ($renderingContext) {
return NULL;
};

$arguments194 = [
'value' => 'true',
'name' => 'dashboardShown',
];
$renderChildrenClosure195 = ($arguments194['value'] !== null) ? function() use ($arguments194) { return $arguments194['value']; } : $renderChildrenClosure195;
$output175 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments194, $renderChildrenClosure195, $renderingContext)]);

$output175 .= '
                    </div>
                ';
return $output175;
},
];

$output171 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments172, static fn() => '', $renderingContext)
;

$output171 .= '
            ';
return $output171;
};

$arguments169 = [
'each' => $renderingContext->getVariableProvider()->getByPath('dashboardPresets'),
'as' => 'availableDashboardPreset',
'key' => 'availableDashboardKey',
'reverse' => false,
'iteration' => NULL,
];

$output160 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments169, $renderChildrenClosure170, $renderingContext);

$output160 .= '
        </div>
    ';
return $output160;
};

$arguments158 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'action' => NULL,
'arguments' => [],
'controller' => NULL,
'extensionName' => NULL,
'pluginName' => NULL,
'pageUid' => NULL,
'object' => NULL,
'pageType' => 0,
'noCache' => false,
'section' => '',
'format' => '',
'additionalParams' => [],
'absolute' => false,
'addQueryString' => false,
'argumentsToBeExcludedFromQueryString' => [],
'addQueryStringMethod' => NULL,
'fieldNamePrefix' => NULL,
'actionUri' => $renderingContext->getVariableProvider()->getByPath('addDashboardUri'),
'objectName' => NULL,
'hiddenFieldClassName' => NULL,
'enctype' => NULL,
'method' => NULL,
'name' => NULL,
'onreset' => NULL,
'onsubmit' => NULL,
'target' => 'list_frame',
'novalidate' => NULL,
'class' => 'dashboardModal-form',
'dir' => NULL,
'id' => 'formAddDashboard',
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
];

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments158, $renderChildrenClosure159, $renderingContext);

$output0 .= '
</div>

<div id="dashboardModal-configure" class="hide">
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure197 = function() use ($renderingContext) {
$output198 = '';

$output198 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure200 = function() use ($renderingContext) {
return NULL;
};

$arguments199 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'name' => 'currentDashboard',
'value' => $renderingContext->getVariableProvider()->getByPath('currentDashboard.identifier'),
'property' => NULL,
'class' => NULL,
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'respectSubmittedDataValue' => true,
];

$output198 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments199, $renderChildrenClosure200, $renderingContext);

$output198 .= '
        <div class="form-group">
            <label for="dashboardModalConfigure-title">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure202 = function() use ($renderingContext) {
return NULL;
};

$arguments201 = [
'key' => 'dashboard.title',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => 'dashboard',
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output198 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments201, $renderChildrenClosure202, $renderingContext)]);

$output198 .= '</label>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure204 = function() use ($renderingContext) {
return NULL;
};

$array205 = [
'0' => 'required',
];

$expression206 = function($context) {return "required";};

$arguments203 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'name' => 'dashboard[title]',
'value' => $renderingContext->getVariableProvider()->getByPath('currentDashboard.title'),
'property' => NULL,
'autofocus' => NULL,
'disabled' => NULL,
'maxlength' => NULL,
'readonly' => NULL,
'size' => NULL,
'placeholder' => NULL,
'pattern' => NULL,
'errorClass' => 'f3-form-error',
'class' => 'form-control',
'dir' => NULL,
'id' => 'dashboardModalConfigure-title',
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'required' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression206(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array205)),
    $renderingContext
),
'type' => 'text',
];

$output198 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments203, $renderChildrenClosure204, $renderingContext);

$output198 .= '
        </div>
    ';
return $output198;
};

$arguments196 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'action' => NULL,
'arguments' => [],
'controller' => NULL,
'extensionName' => NULL,
'pluginName' => NULL,
'pageUid' => NULL,
'object' => NULL,
'pageType' => 0,
'noCache' => false,
'section' => '',
'format' => '',
'additionalParams' => [],
'absolute' => false,
'addQueryString' => false,
'argumentsToBeExcludedFromQueryString' => [],
'addQueryStringMethod' => NULL,
'fieldNamePrefix' => NULL,
'actionUri' => $renderingContext->getVariableProvider()->getByPath('configureDashboardUri'),
'objectName' => NULL,
'hiddenFieldClassName' => NULL,
'enctype' => NULL,
'method' => NULL,
'name' => NULL,
'onreset' => NULL,
'onsubmit' => NULL,
'target' => 'list_frame',
'novalidate' => NULL,
'class' => 'dashboardModal-form',
'dir' => NULL,
'id' => 'configureDashboardForm',
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
];

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments196, $renderChildrenClosure197, $renderingContext);

$output0 .= '
</div>

';

    return $output0;
}

}

#