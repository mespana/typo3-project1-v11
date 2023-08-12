<?php
class layout_Login_html_a97af2c37e67d35c7d65bf4abad7dfde455ae429 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
<div class="typo3-login">
    <div class="typo3-login-inner">
        <div class="typo3-login-container">
            <div class="typo3-login-wrap">
                <div class="card card-login">
                    <header class="card-heading">
                        <h1 class="visually-hidden">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$arguments1 = [
'key' => 'login.header',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '</h1>
                        <div class="typo3-login-logo">
                            <img src="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logo')]);

$output0 .= '" class="typo3-login-image" alt="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logoAlt')]);

$output0 .= '" />
                        </div>
                    </header>
                    <main class="card-body">
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array4 = [
'0' => $renderingContext->getVariableProvider()->getByPath('action'),
'1' => ' == \'login\'',
];

$expression5 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 'login');};

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
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array8 = [
'0' => $renderingContext->getVariableProvider()->getByPath('hasLoginError'),
];

$expression9 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments7 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression9(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array8)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output10 = '';

$output10 .= '
                                    <div class="t3js-login-error mb-2" id="t3-login-error">
                                        <div class="alert alert-danger">
                                            <strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure12 = function() use ($renderingContext) {
return NULL;
};

$arguments11 = [
'key' => 'login.error.message',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext)]);

$output10 .= '</strong>
                                            <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure14 = function() use ($renderingContext) {
return NULL;
};

$arguments13 = [
'key' => 'login.error.description',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output10 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext)]);

$output10 .= '</p>
                                        </div>
                                    </div>
                                ';
return $output10;
},
];

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments7, static fn() => '', $renderingContext)
;

$output6 .= '
                                <noscript>
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure16 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure18 = function() use ($renderingContext) {
return NULL;
};

$arguments17 = [
'key' => 'login.error.javascript',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$arguments15 = [
'message' => call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext)]),
'title' => NULL,
'state' => 2,
'iconName' => NULL,
'disableIcon' => false,
];
$renderChildrenClosure16 = ($arguments15['message'] !== null) ? function() use ($arguments15) { return $arguments15['message']; } : $renderChildrenClosure16;
$output6 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output6 .= '
                                </noscript>
                                <div class="hidden t3js-login-error-nocookies">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure20 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure22 = function() use ($renderingContext) {
return NULL;
};

$arguments21 = [
'key' => 'login.error.cookies',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$arguments19 = [
'message' => call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext)]),
'title' => NULL,
'state' => 2,
'iconName' => NULL,
'disableIcon' => false,
];
$renderChildrenClosure20 = ($arguments19['message'] !== null) ? function() use ($arguments19) { return $arguments19['message']; } : $renderChildrenClosure20;
$output6 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext);

$output6 .= '
                                </div>
                                <div class="hidden t3js-login-error-noreferrer">
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure24 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure26 = function() use ($renderingContext) {
return NULL;
};

$arguments25 = [
'key' => 'login.error.referrer',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$arguments23 = [
'message' => call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext)]),
'title' => NULL,
'state' => 2,
'iconName' => NULL,
'disableIcon' => false,
];
$renderChildrenClosure24 = ($arguments23['message'] !== null) ? function() use ($arguments23) { return $arguments23['message']; } : $renderChildrenClosure24;
$output6 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output6 .= '
                                </div>
                                <div class="typo3-login-form t3js-login-formfields">
                                    <form action="';

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formActionUrl')]);

$output6 .= '" method="post" name="loginform" id="typo3-login-form" spellcheck="false">
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure28 = function() use ($renderingContext) {
return NULL;
};

$arguments27 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'name' => 'login_status',
'value' => 'login',
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

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);

$output6 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure30 = function() use ($renderingContext) {
return NULL;
};

$arguments29 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'name' => 'userident',
'value' => '',
'property' => NULL,
'class' => 't3js-login-userident-field',
'dir' => NULL,
'id' => 't3-field-userident',
'lang' => NULL,
'style' => NULL,
'title' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'respectSubmittedDataValue' => true,
];

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output6 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure32 = function() use ($renderingContext) {
return NULL;
};

$arguments31 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'name' => 'redirect_url',
'value' => $renderingContext->getVariableProvider()->getByPath('redirectUrl'),
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

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output6 .= '
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure34 = function() use ($renderingContext) {
return NULL;
};

$arguments33 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'name' => 'loginRefresh',
'value' => $renderingContext->getVariableProvider()->getByPath('loginRefresh'),
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

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output6 .= '

                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure36 = function() use ($renderingContext) {
return NULL;
};

$arguments35 = [
'section' => 'loginFormFields',
'partial' => NULL,
'delegate' => NULL,
'arguments' => [],
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments35, $renderChildrenClosure36, $renderingContext);

$output6 .= '

                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure38 = function() use ($renderingContext) {
return NULL;
};

$arguments37 = [
'section' => NULL,
'partial' => 'Login/InterfaceSelector',
'delegate' => NULL,
'arguments' => $renderingContext->getVariableProvider()->getAll(),
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output6 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);

$output6 .= '

                                        <div class="form-group mb-2" id="t3-login-submit-section">
                                            <button class="btn btn-block btn-login t3js-login-submit" id="t3-login-submit" type="submit" name="commandLI" data-loading-text="<i class=\'fa fa-circle-o-notch fa-spin\'></i> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure40 = function() use ($renderingContext) {
return NULL;
};

$arguments39 = [
'key' => 'login.process',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext)]);

$output6 .= '" autocomplete="off">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure42 = function() use ($renderingContext) {
return NULL;
};

$arguments41 = [
'key' => 'login.submit',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext)]);

$output6 .= '
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array44 = [
'0' => $renderingContext->getVariableProvider()->getByPath('enablePasswordReset'),
];

$expression45 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments43 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression45(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array44)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output46 = '';

$output46 .= '
                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure48 = function() use ($renderingContext) {
return NULL;
};

$array49 = [
'0' => 'true',
];

$expression50 = function($context) {return TRUE;};

$arguments47 = [
'section' => 'ResetPassword',
'partial' => NULL,
'delegate' => NULL,
'arguments' => $renderingContext->getVariableProvider()->getAll(),
'optional' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression50(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array49)),
    $renderingContext
),
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output46 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output46 .= '
                                ';
return $output46;
},
];

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments43, static fn() => '', $renderingContext)
;

$output6 .= '
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure54 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('loginProviders');
};

$arguments53 = [
'subject' => NULL,
];
$renderChildrenClosure54 = ($arguments53['subject'] !== null) ? function() use ($arguments53) { return $arguments53['subject']; } : $renderChildrenClosure54;
$array52 = [
'0' => TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext),
'1' => ' > 1',
];

$expression55 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};

$arguments51 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression55(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array52)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output56 = '';

$output56 .= '
                                    <nav aria-label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure58 = function() use ($renderingContext) {
return NULL;
};

$arguments57 = [
'key' => 'login.navigation.loginProvider',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext)]);

$output56 .= '">
                                        ';

$output56 .= '';

$output56 .= '
                                        <ul class="list-unstyled typo3-login-links" role="list">
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure60 = function() use ($renderingContext) {
$output61 = '';

$output61 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array63 = [
'0' => $renderingContext->getVariableProvider()->getByPath('provider.label'),
];

$expression64 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments62 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression64(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array63)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output65 = '';

$output65 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array67 = [
'0' => $renderingContext->getVariableProvider()->getByPath('loginProviderIdentifier'),
'1' => ' != ',
'2' => $renderingContext->getVariableProvider()->getByPath('providerKey'),
];

$expression68 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) != TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

$arguments66 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression68(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array67)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output69 = '';

$output69 .= '
                                                        <li class="t3js-loginprovider-switch" data-providerkey="';

$output69 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('providerKey')]);

$output69 .= '">
                                                            <a href="?loginProvider=';

$output69 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('providerKey')]);

$output69 .= '">
                                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array71 = [
'0' => $renderingContext->getVariableProvider()->getByPath('provider.iconIdentifier'),
];

$expression72 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments70 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression72(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array71)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output73 = '';

$output73 .= '
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure75 = function() use ($renderingContext) {
return NULL;
};

$arguments74 = [
'identifier' => $renderingContext->getVariableProvider()->getByPath('provider.iconIdentifier'),
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
];

$output73 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output73 .= '
                                                                    ';
return $output73;
},
'__else' => function() use ($renderingContext) {
$output76 = '';

$output76 .= '
                                                                        <i class="fa fa-fw ';

$output76 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('provider.icon-class')]);

$output76 .= '"></i>
                                                                    ';
return $output76;
},
];

$output69 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments70, static fn() => '', $renderingContext)
;

$output69 .= '
                                                                <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure78 = function() use ($renderingContext) {
return NULL;
};

$arguments77 = [
'key' => $renderingContext->getVariableProvider()->getByPath('provider.label'),
'id' => NULL,
'default' => $renderingContext->getVariableProvider()->getByPath('provider.label'),
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output69 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext)]);

$output69 .= '</span>
                                                            </a>
                                                        </li>
                                                    ';
return $output69;
},
];

$output65 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments66, static fn() => '', $renderingContext)
;

$output65 .= '
                                                ';
return $output65;
},
];

$output61 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments62, static fn() => '', $renderingContext)
;

$output61 .= '
                                            ';
return $output61;
};

$arguments59 = [
'each' => $renderingContext->getVariableProvider()->getByPath('loginProviders'),
'as' => 'provider',
'key' => 'providerKey',
'reverse' => false,
'iteration' => NULL,
];

$output56 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output56 .= '
                                        </ul>
                                    </nav>
                                ';
return $output56;
},
];

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments51, static fn() => '', $renderingContext)
;

$output6 .= '
                            ';
return $output6;
},
'__else' => function() use ($renderingContext) {
$output84 = '';

$output84 .= '
                                <form action="';

$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('formActionUrl')]);

$output84 .= '" method="post" name="loginform">
                                    <input type="hidden" name="login_status" value="logout" />
                                    <div class="t3-login-box-body">
                                        <div class="t3-login-logout-form">
                                            <div class="t3-login-username">
                                                <div class="t3-login-label t3-username">
                                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure86 = function() use ($renderingContext) {
return NULL;
};

$arguments85 = [
'key' => 'login.username',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext)]);

$output84 .= '
                                                </div>
                                                <div class="t3-username-current">
                                                    ';

$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backendUser.username')]);

$output84 .= '
                                                </div>
                                            </div>
                                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array88 = [
'0' => $renderingContext->getVariableProvider()->getByPath('showInterfaceSelector'),
];

$expression89 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments87 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression89(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array88)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output90 = '';

$output90 .= '
                                                    <div class="t3-login-interface">
                                                        <div class="t3-login-label t3-interface-selector">
                                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure92 = function() use ($renderingContext) {
return NULL;
};

$arguments91 = [
'key' => 'login.interface',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output90 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext)]);

$output90 .= '
                                                        </div>
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure94 = function() use ($renderingContext) {
return NULL;
};

$arguments93 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'name' => 'users',
'value' => NULL,
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
'size' => NULL,
'disabled' => NULL,
'options' => $renderingContext->getVariableProvider()->getByPath('interfaces'),
'optionsAfterContent' => false,
'optionValueField' => 'jumpScript',
'optionLabelField' => 'label',
'sortByOptionLabel' => false,
'selectAllByDefault' => false,
'errorClass' => 'f3-form-error',
'prependOptionLabel' => NULL,
'prependOptionValue' => NULL,
'multiple' => false,
'required' => false,
];

$output90 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext);

$output90 .= '
                                                    </div>
                                                ';
return $output90;
},
'__else' => function() use ($renderingContext) {
$output95 = '';

$output95 .= '
                                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array97 = [
'0' => $renderingContext->getVariableProvider()->getByPath('interface'),
];

$expression98 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments96 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression98(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array97)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output99 = '';

$output99 .= '
                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure101 = function() use ($renderingContext) {
return NULL;
};

$arguments100 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'name' => 'interface',
'value' => $renderingContext->getVariableProvider()->getByPath('interface'),
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

$output99 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments100, $renderChildrenClosure101, $renderingContext);

$output99 .= '
                                                    ';
return $output99;
},
];

$output95 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments96, static fn() => '', $renderingContext)
;

$output95 .= '
                                                ';
return $output95;
},
];

$output84 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments87, static fn() => '', $renderingContext)
;

$output84 .= '
                                            <input type="hidden" name="p_field" value="" />
                                            <input class="btn btn-block btn-lg" type="submit" name="commandLO" value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure103 = function() use ($renderingContext) {
return NULL;
};

$arguments102 = [
'key' => 'login.submit',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output84 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments102, $renderChildrenClosure103, $renderingContext)]);

$output84 .= '" id="t3-login-submit" />
                                        </div>
                                    </div>
                                </form>
                            ';
return $output84;
},
'__elseIf' => [
    0 => [
        'condition' => function() use ($renderingContext) {

$array79 = [
'0' => $renderingContext->getVariableProvider()->getByPath('enablePasswordReset'),
];

$expression80 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression80(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array79)),
    $renderingContext
);
},
        'body' => function() use ($renderingContext) {
$output81 = '';

$output81 .= '
                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure83 = function() use ($renderingContext) {
return NULL;
};

$arguments82 = [
'section' => 'ResetPassword',
'partial' => NULL,
'delegate' => NULL,
'arguments' => $renderingContext->getVariableProvider()->getAll(),
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output81 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output81 .= '
                            ';
return $output81;
}
    ],
],
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments3, static fn() => '', $renderingContext)
;

$output0 .= '
                    </main>
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure105 = function() use ($renderingContext) {
return NULL;
};

$arguments104 = [
'section' => NULL,
'partial' => 'LoginNews',
'delegate' => NULL,
'arguments' => $renderingContext->getVariableProvider()->getAll(),
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);

$output0 .= '
                    <footer class="card-footer">
                        <div class="typo3-login-copyright-wrap">
                            <a href="#loginCopyright" class="typo3-login-copyright-link t3js-login-copyright-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="loginCopyright">
                                <span>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure107 = function() use ($renderingContext) {
return NULL;
};

$arguments106 = [
'key' => 'login.copyrightLink',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext)]);

$output0 .= '</span>
                                ';

$output0 .= '';

$output0 .= '
                                <img src="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('images.typo3')]);

$output0 .= '" alt="" width="70" height="20" />
                            </a>
                            <div id="loginCopyright" class="collapse">
                                <div class="typo3-login-copyright-text">
                                    <p>
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure109 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('copyright');
};

$arguments108 = [
'value' => NULL,
];

$output0 .= isset($arguments108['value']) ? $arguments108['value'] : $renderChildrenClosure109();

$output0 .= '
                                    </p>
                                    <nav aria-label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure111 = function() use ($renderingContext) {
return NULL;
};

$arguments110 = [
'key' => 'login.navigation.typo3',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments110, $renderChildrenClosure111, $renderingContext)]);

$output0 .= '">
                                        ';

$output0 .= '';

$output0 .= '
                                        <ul class="list-unstyled" role="list">
                                            <li><a href="https://typo3.org" target="_blank" rel="noreferrer" class="t3-login-link-typo3"><i class="fa fa-external-link"></i> TYPO3.org</a></li>
                                            <li><a href="https://typo3.org/donate/online-donation/" target="_blank" rel="noreferrer" class="t3-login-link-donate"><i class="fa fa-external-link"></i> ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure113 = function() use ($renderingContext) {
return NULL;
};

$arguments112 = [
'key' => 'login.donate',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext)]);

$output0 .= '</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array115 = [
'0' => $renderingContext->getVariableProvider()->getByPath('loginFootnote'),
];

$expression116 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments114 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression116(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array115)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output117 = '';

$output117 .= '
            <aside class="typo3-login-footnote" aria-label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure119 = function() use ($renderingContext) {
return NULL;
};

$arguments118 = [
'key' => 'login.region.footnote',
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
];

$output117 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext)]);

$output117 .= '">
                <p>';

$output117 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('loginFootnote')]);

$output117 .= '</p>
            </aside>
        ';
return $output117;
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments114, static fn() => '', $renderingContext)
;

$output0 .= '
    </div>
    ';

$output0 .= '';

$output0 .= '
    <a href="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('loginUrl')]);

$output0 .= '" id="t3js-login-url" data-referrer-check-enabled="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array121 = [
'0' => $renderingContext->getVariableProvider()->getByPath('referrerCheckEnabled'),
];

$expression122 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments120 = [
'then' => 1,
'else' => 0,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression122(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array121)),
    $renderingContext
),
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments120, static fn() => '', $renderingContext)
;

$output0 .= '" aria-hidden="true" tabindex="-1"></a>
</div>

';

    return $output0;
}

}

#