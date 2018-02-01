<?php
/**
 *
 * declare constants
 *
 */
define('PUNCTUATION', ['!', '~', '`','^', '(', ')', '_','{','}','[',']','|','\\', ';', ':','"', "'", ',', '.', '?']);
define('WORDCHARS', ['@','#','%','$','&','+','-','=','<','>','*', '/']);
define('VOWELS', ['a', 'e', 'i', 'o', 'u', 'y']);
define('input', filter_input(INPUT_POST, 'text'));
/**
 *
 * spaces
 *
 */
function spaces()
{
    return substr_count(input, " ");
}
/**
 *
 * letters
 *
 */
function letters()
{
    $result = [];
    for ($i = 0; $i <= strlen(input) - 1; $i++) {
        if (ctype_alpha(input[$i])) {
            $result[] = input[$i];
        }
    }
    return count($result);
}
/**
 *
 * consonants
 *
 */
function consonants()
{
    $result = [];
    $vowels = 0;
    $consonant = 0;
    for ($i = 0; $i <= strlen(input) - 1; $i++) {
        if (ctype_alpha(input[$i])) {
            if (in_array(input[$i], VOWELS) != true) {
                $consonant++;
            } else {
                $vowels++;
            }
        }
    }
    return $consonant;
}
/**
 *
 * digit
 *
 */
function digit()
{
    return strlen(filter_var(input, FILTER_SANITIZE_NUMBER_INT));
}
/**
 *
 * characters
 *
 */
function characters()
{
    return mb_strlen(input, 'utf8');
}
/**
 *
 * word characters
 *
 */
function wordcharacters()
{
    $result = [];
    $wordchars = 0;
    $others = 0;
    for ($i = 0; $i <= strlen(input) - 1; $i++) {
        if (in_array(input[$i], WORDCHARS)) {
            $wordchars++;
        } else {
            $others++;
        }
    }
    return $wordchars;
}
/**
 *
 * punctuation
 *
 */
function punctuation()
{
    $result = [];
    $punctuate = 0;
    $others = 0;
    for ($i = 0; $i <= strlen(input) - 1; $i++) {
        if (in_array(input[$i], PUNCTUATION)) {
            $punctuate++;
        } else {
            $others++;
        }
    }
    return $punctuate;
}