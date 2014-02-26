<?php

class __Mustache_711ee20a79fe4b947a7f98226b50f74f extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<!DOCTYPE html>
';
        $buffer .= $indent . '<html lang="en-us" dir="ltr">
';
        $buffer .= $indent . '	<head>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '	</head>
';
        $buffer .= $indent . '	<body>
';
        $buffer .= $indent . '		<h1>Hello ';
        $value = $this->resolveValue($context->find('planet'), $context, $indent);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '!</h1>
';
        $buffer .= $indent . '	</body>
';
        $buffer .= $indent . '</html>';

        return $buffer;
    }
}
