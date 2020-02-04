<?php

/**
 * @param TreeNode $root
 * @param Integer $val
 * @return TreeNode
 */
function searchBST($root, $val) {
    while(!is_null($root)) {
        if($root->val == $val) {
            return $root;
        } elseif($root->val > $val) {
            $root = $root->left;
        } else {
            $root = $root->right;
        }
    }
    return NULL;
}