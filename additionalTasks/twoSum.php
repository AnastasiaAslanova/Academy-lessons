<?php

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
$nums = [2,7,11,15];
$target = 9;
    function twoSum($nums, $target) {
        for ($i = 0; $i < count($nums); $i++) {
            for ($j = $i + 1; $j < count($nums); $j++) {
                if ($nums[$j] + $nums[$i] === $target) {
                    return [$i, $j];
                }
            }
        }
    }
    var_dump(twoSum($nums,$target));
//function twoSum(array $nums, int $target): array
//{
//    foreach ($nums as $key => $val) {
//        unset($nums[$key]);
//        $nextKey = array_search(($target - $val), $nums);
//        if ($nextKey) {
//            return [$key, $nextKey];
//        }
//    }
//    return [];
//}
