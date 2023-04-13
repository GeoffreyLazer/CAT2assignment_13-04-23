<?php
function caesarCipher($str, $key){
    $result = "";
    $str = strtoupper($str);
    for ($i = 0; $i < strlen($str); $i++){
        $char = ord($str[$i]);
        if ($char >= 65 && $char <= 90){
            $char = ($char + $key - 65) % 26 + 65;
        }
        $result .= chr($char);
    }
    return $result;
}

if(isset($_POST['encrypt'])){
    $plainText = $_POST['plainText'];
    $key = $_POST['key'];

    $cipherText = caesarCipher($plainText, $key);

    echo "Plain Text: " . $plainText . "<br>";
    echo "Key: " . $key . "<br>";
    echo "Cipher Text: " . $cipherText . "<br>";
}
?>

<form method="post" action="">
    Plain Text: <input type="text" name="plainText" required><br><br>
    Key: <input type="number" name="key" required><br><br>
    <input type="submit" name="encrypt" value="Encrypt">
</form>
