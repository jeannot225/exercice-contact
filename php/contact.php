
<?php 

// premier instance d'execution 
$array = array( "name" => "",  "firstname" => "",  "email" => "",  "phone" => "",  "message" => "", 
"nameERROR" => "",  "firstnameERROR" => "",  "emailERROR" => "",  "phoneERROR" => "",  "messageERROR" => "",  "isSuccess" => false );
$emailTo = "j87004291@gmail.com"; 

// second instance d'execution 
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $array["name"] = verifyInput($_POST["name"]);
    $array["firstname"] = verifyInput($_POST["firstname"]);
    $array["email"] = verifyInput($_POST["email"]);
    $array["phone"] = verifyInput($_POST["phone"]);
    $array["message"] = verifyInput($_POST["message"]);
    $array["isSuccess"] = true;
    $emailText = "";


    if(empty($array["name"]))
    {
        $array["nameERROR"] = " veillez saisi votre nom !";
        $array["isSuccess"] = false;
    }
    else
    {
        $emailText .= "name:{$array["name"]}\n";
    }


    if(empty($array["firstname"]))
    {
        $array["firstnameERROR"] = " veillez saisi votre prénom !";
        $array["isSuccess"] = false;
    }
    else
    {
        $emailText .= "firsName: {$array["firstname"]}\n";
    }


    if(!isEmail($array["email"]))
    {
        $array["emailERROR"] = "ceci n'est pas un email !";
        $array["isSuccess"] = false;
    }
    else
    {
        $emailText .= "email: {$array["email"]}\n";
    }


    if(!isPhone($array["phone"]))
    {
        $array["phoneERROR"] = "veillez saisi votre numero de téléphone ";
        $array["isSuccess"] = false;
    }
    else
    {
        $emailText .= "phone: {$array["phone"]}\n";
    }


    if(empty($array["message"]))
    {
        $array["messageERROR"]= " veillez saisi votre message !";
        $array["isSuccess"] = false;
    }
    else
    {
        $emailText .= "message:{$array["message"]}\n";
    }

    // l'envoi de email
    if($array["isSuccess"]) 
    {
        $headers = "From: {$array["name"]} {$array["firstname"]} <{$array["email"]}>\r\nReply-To: {$array["email"]}";
        mail($emailTo, "un message de votre site", $emailText, $headers);   
    }

    echo json_encode($array);

}




function isPhone($var)
{
    return preg_match("/^[0-9 ]*$/", $var);
}


function isEmail($var)
{
    return filter_var($var, FILTER_VALIDATE_EMAIL);
}


/*fonction de securité */
function verifyInput($var) 
{
    $var = trim($var);
    $var = stripslashes($var);
    $var = htmlspecialchars($var);
    return $var; 
}

?>