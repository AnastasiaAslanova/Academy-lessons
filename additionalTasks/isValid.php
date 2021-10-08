<?php
function checkIfBalanced($expression)
{
    $stack = [];
    $startSymbols = ['{', '(', '<', '['];
    $pairs = ['{}', '()', '<>', '[]'];
    $len = strlen($expression);
    for ($i = 0;  $i < $len; $i++) {
        $curr = $expression[$i];
        if (in_array($curr, $startSymbols)) {
            array_push($stack, $curr);
        } else {
            $prev = array_pop($stack);
            $pair = "$prev$curr";
            if (!in_array($pair, $pairs)) {
                return false;
            }
        }
    }
    return count($stack) === 0;
}

//var_dump(checkIfBalanced('[')); // => bool(false)
//var_dump(checkIfBalanced('}{')); // => bool(false)
//var_dump(checkIfBalanced('(([<>]){})')); // => bool(true)
//var_dump(checkIfBalanced('([{]})')); // => bool(false)

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid(string $s): bool
    {
        $stack = [];
        $startSymbols = ['(', '{', '[', '<'];
        $pairs = ['()', '{}', '[]', '<>'];

        for ($i = 0; $i < strlen($s) ; $i++) {
            $current = $s[$i];
            if (in_array($current, $startSymbols)) {
                array_push($stack, $current);
            } else {
                $prefix = array_pop($stack);
                $pair = "$prefix$current";
                if (!in_array($pair, $pairs)) {
                    return false;
                }
            }
        }
        return count($stack) === 0;
    }
}

 var_dump((new Solution)->isValid('(>') );
