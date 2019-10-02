<?php
/**
 * @param $emails
 * @return int
 */
function numUniqueEmails($emails) {
    $result = 0;
    if(count($emails) > 100 || count($emails) < 1) {
        return $result;
    }

    foreach($emails as $email) {
        $splited = explode("@",$email);
        $first = $splited[0];
        $second = $splited[1];

        $first = str_replace(".","",$first);
        $temp = substr($first, 0, strpos($first, "+"));
        $first = !empty($temp) ? $temp : $first;
        array_push($result, $first."@".$second);
    }
    $result = array_unique($result);
    return count($result);
}

$result = numUniqueEmails(["test.email+alex@leetcode.com","test.e.mail+bob.cathy@leetcode.com","testemail+david@lee.tcode.com"]);
var_dump($result);
$result = numUniqueEmails(["testemail@leetcode.com","testemail1@leetcode.com","testemail+david@lee.tcode.com"]);
var_dump($result);
