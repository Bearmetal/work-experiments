<?php

class __Mustache_b83e3f2b1b738cc032ffc2d9ca9dc244 extends Mustache_Template
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
        $value = $this->resolveValue($context->find('Planet'), $context, $indent);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '!</h1>
';
        $buffer .= $indent . '	</body>
';
        $buffer .= $indent . '</html>';

        return $buffer;
    }
}
