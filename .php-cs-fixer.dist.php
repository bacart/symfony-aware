<?php

declare(strict_types=1);

$fileHeaderComment = <<<COMMENT
This file is part of the Bacart package.

(c) Alex Bacart <alex@bacart.net>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
COMMENT;

$finder = (new PhpCsFixer\Finder())->in(__DIR__);

return (new PhpCsFixer\Config())
    ->setRules([
        '@Symfony'                              => true,
        'array_syntax'                          => ['syntax' => 'short'],
        'binary_operator_spaces'                => ['default' => 'align'],
        'phpdoc_add_missing_param_annotation'   => ['only_untyped' => false],
        'native_function_invocation'            => ['include' => ['@compiler_optimized']],
        'header_comment'                        => ['header' => $fileHeaderComment, 'separate' => 'both'],
        'self_accessor'                         => false,
        'fopen_flags'                           => false,
        'combine_consecutive_unsets'            => true,
        'declare_strict_types'                  => true,
        'linebreak_after_opening_tag'           => true,
        'no_unreachable_default_argument_value' => true,
        'no_useless_else'                       => true,
        'no_useless_return'                     => true,
        'ordered_class_elements'                => true,
        'ordered_imports'                       => true,
        'php_unit_strict'                       => true,
        'phpdoc_order'                          => true,
        'semicolon_after_instruction'           => true,
        'strict_comparison'                     => true,
        'strict_param'                          => true,
        'final_internal_class'                  => true,
    ])
    ->setRiskyAllowed(true)
    ->setFinder($finder);
