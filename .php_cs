<?php

return PhpCsFixer\Config::create()
    ->setRiskyAllowed(true)
    ->setRules([
        '@PSR2'                             => true,
        'combine_consecutive_unsets'        => true,
        'concat_space'                      => ['spacing' => 'one'],
        'hash_to_slash_comment'             => true,
        'is_null'                           => ['use_yoda_style' => false],
        'linebreak_after_opening_tag'       => true,
        'lowercase_cast'                    => true,
        'mb_str_functions'                  => true,
        'modernize_types_casting'           => true,
        'native_function_casing'            => true,
        'native_function_invocation'        => true,
        'new_with_braces'                   => true,
        'no_alias_functions'                => true,
        'no_blank_lines_after_phpdoc'       => true,
        'no_empty_comment'                  => false,
        'no_empty_phpdoc'                   => false,
        'no_empty_statement'                => true,
        'no_leading_namespace_whitespace'   => true,
        'no_mixed_echo_print'               => true,
        'no_unreachable_default_argument_value' => true,
        'no_unneeded_control_parentheses'   => true,
        'no_unused_imports'                 => true,
        'no_useless_return'                 => true,
        'no_whitespace_in_blank_line'       => true,
        'normalize_index_brace'             => true,
        'object_operator_without_whitespace'=> true,
        'phpdoc_add_missing_param_annotation' => true,
        'phpdoc_annotation_without_dot'     => true,
        'phpdoc_no_alias_tag'               => true,
        'phpdoc_no_useless_inheritdoc'      => true,
        'phpdoc_order'                      => true,
        'phpdoc_scalar'                     => true,
        'phpdoc_summary'                    => false,
        'pow_to_exponentiation'             => true,
        'psr4'                              => true,
        'random_api_migration'              => true,
        'short_scalar_cast'                 => true,
        'standardize_not_equals'            => true,
        'trailing_comma_in_multiline_array' => true,
        'declare_strict_types'              => true,

    ])
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->in('src')
            ->in('tests')
    )
;
