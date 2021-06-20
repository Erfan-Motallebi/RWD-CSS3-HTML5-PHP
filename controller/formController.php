<?php
// we pre-decalre the variables to have them all as a global variable being sanitized
$email = $subject = $name = $message = '';




function Sanitizer($data) {
    // removing the extra space around the specific item
        $data = trim($data);
        // it'll strip the slashes in the field 
        $data = stripcslashes($data);
        // for special characters in html like < / >
        $data = htmlspecialchars($data);
        return $data;
{}

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = Sanitizer($_POST['name']);
    $email = Sanitizer($_POST['email']);
    $message = Sanitizer($_POST['message']);
    $subject = Sanitizer($_POST['subject']);
   
}
$wholeCheckedInputs = vsprintf("these are the inputs from the from", array($name, $email, $subject, $message));
print_r($wholeCheckedInputs);
/**
 * we can use Php filters like filter_var() / filter_input() <- for a single argument
 * or we can even check out multiple arguments using filter_input_array()
 */

}
?>