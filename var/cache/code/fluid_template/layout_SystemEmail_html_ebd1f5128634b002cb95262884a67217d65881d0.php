<?php
class layout_SystemEmail_html_ebd1f5128634b002cb95262884a67217d65881d0 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
  'v' => NULL,
  'o' => NULL,
));
    }
    /**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output0 = '';

$output0 .= '<!doctype html>

<head>
    <!--[if gte mso 15]>
    <xml>
        ';

$output0 .= '<o:OfficeDocumentSettings>';

$output0 .= '
            ';

$output0 .= '<o:AllowPNG/>';

$output0 .= '
            ';

$output0 .= '<o:PixelsPerInch>';

$output0 .= '96';

$output0 .= '</o:PixelsPerInch>';

$output0 .= '
        ';

$output0 .= '</o:OfficeDocumentSettings>';

$output0 .= '
    </xml>
    <![endif]-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <style type="text/css">
        p {
            margin:10px 0;
            padding:0;
        }
        table {
            border-collapse:collapse;
        }
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            display:block;
            margin:0;
            padding:0;
        }
        img,
        a img {
            border:0;
            height:auto;
            outline:none;
            text-decoration:none;
        }
        body,
        #bodyTable,
        #bodyCell {
            height:100%;
            margin:0;
            padding:0;
            width:100%;
        }
        #outlook a {
            padding:0;
        }
        img {
            -ms-interpolation-mode:bicubic;
        }
        table {
            mso-table-lspace:0pt;
            mso-table-rspace:0pt;
        }
        .ReadMsgBody {
            width:100%;
        }
        .ExternalClass {
            width:100%;
        }
        p,
        a,
        td {
            mso-line-height-rule:exactly;
        }
        a[href^=tel],
        a[href^=sms] {
            color:inherit;
            cursor:default;
            text-decoration:none;
        }
        p,
        a,
        td,
        body,
        table,
        blockquote {
            -ms-text-size-adjust:100%;
            -webkit-text-size-adjust:100%;
        }
        .ExternalClass,
        .ExternalClass p,
        .ExternalClass td,
        .ExternalClass div,
        .ExternalClass span,
        .ExternalClass font {
            line-height:100%;
        }
        a[x-apple-data-detectors]{
            color:inherit !important;
            text-decoration:none !important;
            font-size:inherit !important;
            font-family:inherit !important;
            font-weight:inherit !important;
            line-height:inherit !important;
        }

        .templateContainer {
            max-width:600px !important;
        }
        a.button {
            display:block;
        }
        .image,.retinaImage {
            vertical-align:bottom;
        }
        .textContent {
            word-break:break-word;
        }
        .textContent img {
            height:auto !important;
        }
        .dividerBlock {
            table-layout:fixed !important;
        }
        h1 {
            color:#222222;
            font-family:\'Helvetica Neue\', Helvetica, Arial, Verdana, sans-serif;
            font-size:40px;
            font-style:normal;
            font-weight:bold;
            line-height:150%;
            letter-spacing:normal;
            text-align:center;
        }
        h2 {
            color:#222222;
            font-family:\'Helvetica Neue\', Helvetica, Arial, Verdana, sans-serif;
            font-size:34px;
            font-style:normal;
            font-weight:bold;
            line-height:150%;
            letter-spacing:normal;
            text-align:left;
        }
        h3 {
            color:#444444;
            font-family:\'Helvetica Neue\', Helvetica, Arial, Verdana, sans-serif;
            font-size:22px;
            font-style:normal;
            font-weight:bold;
            line-height:150%;
            letter-spacing:normal;
            text-align:left;
        }
        h4 {
            color:#999999;
            font-family:\'Helvetica Neue\', Helvetica, Arial, Verdana, sans-serif;
            font-size:20px;
            font-style:italic;
            font-weight:normal;
            line-height:125%;
            letter-spacing:normal;
            text-align:left;
        }
        #templateHeader {
            background-image:none;
            background-repeat:no-repeat;
            background-position:center;
            background-size:cover;
            border-top:0;
            border-bottom:0;
            padding-top:36px;
            padding-bottom:0;
        }
        .headerContainer {
            background-color:#ffffff;
            background-image:none;
            background-repeat:no-repeat;
            background-position:center;
            background-size:cover;
            border-top:1px none ;
            border-bottom:0;
            padding-top:36px;
            padding-bottom:36px;
        }
        .headerContainer .textContent,
        .headerContainer .textContent p {
            color:#808080;
            font-family:\'Helvetica Neue\', Helvetica, Arial, Verdana, sans-serif;
            font-size:16px;
            line-height:150%;
            text-align:left;
        }
        .headerContainer .textContent a,
        .headerContainer .textContent p a {
            color:#538bb3;
            font-weight:normal;
            text-decoration:underline;
        }
        #templateBody {
            background-color:#f2f2f2;
            background-image:none;
            background-repeat:no-repeat;
            background-position:center;
            background-size:cover;
            border-top:0;
            border-bottom:0;
            padding-top:0;
            padding-bottom:0;
        }
        .bodyContainer {
            background-color:#ffffff;
            background-image:none;
            background-repeat:no-repeat;
            background-position:center;
            background-size:cover;
            border-top:0;
            border-bottom:0;
            padding-top:0;
            padding-bottom:18px;
        }
        .bodyContainer .textContent,
        .bodyContainer .textContent p {
            color:#808080;
            font-family:\'Helvetica Neue\', Helvetica, Arial, Verdana, sans-serif;
            font-size:16px;
            line-height:150%;
            text-align:left;
        }
        .bodyContainer .textContent a,
        .bodyContainer .textContent p a {
            color:#538bb3;
            font-weight:normal;
            text-decoration:underline;
        }
        .bodyContainer table.statistics th,
        .bodyContainer table.statistics td {
            padding: 0 5px;
        }
        .bodyContainer table.statistics th:first-child,
        .bodyContainer table.statistics td:first-child {
            padding-left: 0;
        }
        .bodyContainer table.statistics th:last-child,
        .bodyContainer table.statistics td:last-child {
            padding-right: 0;
        }
        #templateFooter{
            background-color:#f2f2f2;
            background-image:none;
            background-repeat:no-repeat;
            background-position:center;
            background-size:cover;
            border-top:1px none ;
            border-bottom:0;
            padding-top:0;
            padding-bottom:36px;
        }
        .footerContainer{
            background-color:#313131;
            background-image:none;
            background-repeat:no-repeat;
            background-position:center;
            background-size:cover;
            border-top:0;
            border-bottom:0;
            padding-top:45px;
            padding-bottom:45px;
        }
        .footerContainer .textContent,
        .footerContainer .textContent p {
            color:#FFFFFF;
            font-family:\'Helvetica Neue\', Helvetica, Arial, Verdana, sans-serif;
            font-size:12px;
            line-height:150%;
            text-align:center;
        }
        .footerContainer .textContent a,
        .footerContainer .textContent p a {
            color:#FFFFFF;
            font-weight:normal;
            text-decoration:underline;
        }
        @media only screen and (min-width:768px){
            .templateContainer {
                width:600px !important;
            }
        }
        @media only screen and (max-width: 480px){
            body,
            table,
            td,
            p,
            a {
                -webkit-text-size-adjust:none !important;
            }
            body {
                width:100% !important;
                min-width:100% !important;
            }
            h1 {
                font-size:30px !important;
                line-height:125% !important;
            }
            h2 {
                font-size:26px !important;
                line-height:125% !important;
            }
            h3 {
                font-size:20px !important;
                line-height:150% !important;
            }
            h4 {
                font-size:18px !important;
                line-height:150% !important;
            }
            .headerContainer .textContent,
            .headerContainer .textContent p {
                font-size:16px !important;
                line-height:150% !important;
            }
            .bodyContainer .textContent,
            .bodyContainer .textContent p {
                font-size:16px !important;
                line-height:150% !important;
            }
        }
    </style>
</head>
<body>


<center>
    <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable"><tr><td align="center" valign="top" id="bodyCell">
        <table border="0" cellpadding="0" cellspacing="0" width="100%">

            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array2 = [
'0' => $renderingContext->getVariableProvider()->getByPath('typo3.systemConfiguration.backend.loginHighlightColor'),
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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure6 = function() use ($renderingContext) {
return NULL;
};

$arguments5 = [
'value' => $renderingContext->getVariableProvider()->getByPath('typo3.systemConfiguration.backend.loginHighlightColor'),
'name' => 'backgroundColor',
];
$renderChildrenClosure6 = ($arguments5['value'] !== null) ? function() use ($arguments5) { return $arguments5['value']; } : $renderChildrenClosure6;
$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext)]);

$output4 .= '
                ';
return $output4;
},
'__else' => function() use ($renderingContext) {
$output7 = '';

$output7 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure9 = function() use ($renderingContext) {
return NULL;
};

$arguments8 = [
'value' => '#ff8700',
'name' => 'backgroundColor',
];
$renderChildrenClosure9 = ($arguments8['value'] !== null) ? function() use ($arguments8) { return $arguments8['value']; } : $renderChildrenClosure9;
$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext)]);

$output7 .= '
                ';
return $output7;
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, static fn() => '', $renderingContext)
;

$output0 .= '

            <!-- HEADER START -->
            <tr><td align="center" valign="top" id="templateHeader" style="background-color: ';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('backgroundColor')]);

$output0 .= '">

                <!--[if (gte mso 9)|(IE)]><table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;"><tr><td align="center" valign="top" width="600" style="width:600px;"><![endif]-->
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer"><tr><td valign="top" class="headerContainer">
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" class="textBlock" style="min-width:100%;"><tbody class="textBlockOuter"><tr><td valign="top" class="textBlockInner" style="padding-top:9px;">

                        <!--[if mso]><table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;"><tr><td valign="top" width="600" style="width:600px;"><![endif]-->
                        <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:100%; min-width:100%;" width="100%" class="textContentContainer">
                            <tbody>
                            <tr>
                                <td valign="top" class="image" align="center" style="padding: 0px 36px; padding-bottom: 20px; color: #222222;text-align: center;">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array11 = [
'0' => $renderingContext->getVariableProvider()->getByPath('typo3.systemConfiguration.backend.loginLogo'),
];

$expression12 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments10 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression12(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array11)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output13 = '';

$output13 .= '
                                            <img src="';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\NormalizedUrlViewHelper
$renderChildrenClosure15 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('typo3.systemConfiguration.backend.loginLogo');
};

$arguments14 = [
'pathOrUrl' => NULL,
];
$renderChildrenClosure15 = ($arguments14['pathOrUrl'] !== null) ? function() use ($arguments14) { return $arguments14['pathOrUrl']; } : $renderChildrenClosure15;
$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Core\ViewHelpers\NormalizedUrlViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext)]);

$output13 .= '" alt="Logo" height="41" width="150" />
                                        ';
return $output13;
},
'__else' => function() use ($renderingContext) {
$output21 = '';

$output21 .= '
                                            <img src="';

$output21 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('normalizedParams.siteUrl')]);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure23 = function() use ($renderingContext) {
return NULL;
};

$arguments22 = [
'path' => 'Images/typo3_orange.svg',
'extensionName' => 'core',
'absolute' => false,
];

$output21 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext)]);

$output21 .= '" alt="TYPO3 Logo" height="41" width="150" />
                                        ';
return $output21;
},
'__elseIf' => [
    0 => [
        'condition' => function() use ($renderingContext) {

$array16 = [
'0' => $renderingContext->getVariableProvider()->getByPath('typo3.systemConfiguration.backend.loginHighlightColor'),
];

$expression17 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression17(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array16)),
    $renderingContext
);
},
        'body' => function() use ($renderingContext) {
$output18 = '';

$output18 .= '
                                            <img src="';

$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('normalizedParams.siteUrl')]);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure20 = function() use ($renderingContext) {
return NULL;
};

$arguments19 = [
'path' => 'Images/typo3_black.svg',
'extensionName' => 'core',
'absolute' => false,
];

$output18 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext)]);

$output18 .= '" alt="TYPO3 Logo" height="41" width="150" />
                                        ';
return $output18;
}
    ],
],
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments10, static fn() => '', $renderingContext)
;

$output0 .= '
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" class="textContent" style="padding: 0px 36px;color: #222222;font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, Verdana, sans-serif;font-size: 24px;text-align: center;">
                                    <strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure25 = function() use ($renderingContext) {
return NULL;
};

$array26 = [
'0' => 'true',
];

$expression27 = function($context) {return TRUE;};

$arguments24 = [
'section' => 'Title',
'partial' => NULL,
'delegate' => NULL,
'arguments' => [],
'optional' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression27(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array26)),
    $renderingContext
),
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output0 .= '</strong>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <!--[if mso]></td></tr></table><![endif]-->

                    </td></tr></tbody></table>
                </td></tr></table>
                <!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]-->

            </td></tr>
            <!-- HEADER END -->


            <!-- BODY START -->
            <tr><td align="center" valign="top" id="templateBody">

                <!--[if (gte mso 9)|(IE)]><table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;"><tr><td align="center" valign="top" width="600" style="width:600px;"><![endif]-->
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer"><tr><td valign="top" class="bodyContainer">
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" class="textBlock" style="min-width:100%;"><tbody class="textBlockOuter"><tr><td valign="top" class="textBlockInner" style="padding: 36px 0px;">

                        <!--[if mso]><table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;"><tr><td valign="top" width="600" style="width:600px;"><![endif]-->
                        <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:100%; min-width:100%;" width="100%" class="textContentContainer">
                            <tbody>
                            <tr>
                                <td valign="top" class="textContent" style="padding: 0px 36px;">

                                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure29 = function() use ($renderingContext) {
return NULL;
};

$arguments28 = [
'section' => 'Main',
'partial' => NULL,
'delegate' => NULL,
'arguments' => [],
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
];

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output0 .= '

                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <!--[if mso]></td></tr></table><![endif]-->

                    </td></tr></tbody></table>
                </td></tr></table>
                <!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]-->

            </td></tr>
            <!-- BODY END -->

            <!-- FOOTER START -->
            <tr><td align="center" valign="top" id="templateFooter">

                <!--[if (gte mso 9)|(IE)]><table align="center" border="0" cellspacing="0" cellpadding="0" width="600" style="width:600px;"><tr><td align="center" valign="top" width="600" style="width:600px;"><![endif]-->
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" class="templateContainer"><tr><td valign="top" class="footerContainer">
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" class="textBlock" style="min-width:100%;"><tbody class="textBlockOuter"><tr><td valign="top" class="textBlockInner">

                        <!--[if mso]><table align="left" border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;"><tr><td valign="top" width="600" style="width:600px;"><![endif]-->
                        <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:100%; min-width:100%;" width="100%" class="textContentContainer"><tbody><tr><td valign="top" class="textContent" style="padding:0 36px;">

                            <p style="margin-top: 0;">
                                This email was sent by <strong>';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('typo3.sitename')]);

$output0 .= '</strong> from URL: <a href="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('normalizedParams.siteUrl')]);

$output0 .= '" target="_blank" rel="noopener">';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('normalizedParams.siteUrl')]);

$output0 .= '</a> - Please contact your site administrator if you feel you received this email by accident.
                            </p>
                            <p style="margin-top: 0;">
                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure31 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('typo3.information.copyrightNotice');
};

$arguments30 = [
'value' => NULL,
];

$output0 .= isset($arguments30['value']) ? $arguments30['value'] : $renderChildrenClosure31();

$output0 .= '
                            </p>

                        </td></tr></tbody></table>
                        <!--[if mso]></td></tr></table><![endif]-->

                    </td></tr></tbody></table>
                </td></tr></table>
                <!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]-->


            </td></tr>
            <!-- FOOTER END -->

        </table>
    </td></tr></table>
</center>

</body>

';

    return $output0;
}

}

#