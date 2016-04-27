<?php

######################################################################################################
# Function Name: string fnEncrypt($strString,$strKey)
# Created By: Clarion Tech.		
# Created On:
# Purpose: To encrypt a given string using the defined key
# Parameters: string $strString: The string to be encrypted
#				string $strKey:	The encrytion key				
# ON SUCCESS: Returns the encrypted key
#	ON FAILURE: Returns empty string
######################################################################################################

function fnEncrypt($strString, $strKey)
{
    srand((double)microtime() * 1000000);
    $strEncryptKey = md5(rand(0, 32000));
    $intCtr = 0;
    $strTemp = "";

    for ($i = 0; $i < strlen($strString); $i++) {
        if ($intCtr == strlen($strEncryptKey))
            $intCtr = 0;
        $strTemp .= substr($strEncryptKey, $intCtr, 1) . (substr($strString, $i, 1) ^ substr($strEncryptKey, $intCtr, 1));
        $intCtr++;
    }

    return base64_encode(fnKeyED($strTemp, $strKey));
}

?>
<?php

//6. Function 6 
######################################################################################################
# Function Name: string fnDecrypt($strString,$strKey)
# Created By: Clarion Tech.		
# Created On:
# Purpose: To decrypt a given string using the defined key
# Parameters: string $strString: The string to be decrypted
#				string $strKey:	The decrytion key				
# ON SUCCESS: Returns the decrypted key
#	ON FAILURE: Returns empty string
######################################################################################################
function fnDecrypt($strString, $strKey)
{
    $strString = fnKeyED(base64_decode($strString), $strKey);
    $strTemp = "";
    for ($i = 0; $i < strlen($strString); $i++) {
        $strMD5 = substr($strString, $i, 1);
        $i++;
        $strTemp .= (substr($strString, $i, 1) ^ $strMD5);
    }

    return $strTemp;
}

######################################################################################################
# Function Name: string fnKeyED($strString,$strKey)
# Created By: Clarion Tech.		
# Created On:
# Purpose: To encrypt/decrypt the key. This function is not called directly. 
#			 The fnEncrypt() and fnDecrypt() functions call this function internally
# Parameters: string $strString: The encryption/decryption string
#				string $strKey:	The encryption/decryption key				
# ON SUCCESS: Returns the encrypted/decrypted key
#	ON FAILURE: Returns empty string
######################################################################################################

function fnKeyED($strString, $strEncryptKey)
{
    $strEncryptKey = md5($strEncryptKey);
    $intCtr = 0;
    $strTemp = "";
    for ($i = 0; $i < strlen($strString); $i++) {
        if ($intCtr == strlen($strEncryptKey))
            $intCtr = 0;
        $strTemp .= substr($strString, $i, 1) ^ substr($strEncryptKey, $intCtr, 1);
        $intCtr++;
    }
    return $strTemp;
}


echo fnEncrypt("naveed","key");
echo "<br>";
echo fnEncrypt("CjRUZlN3AT0AP1Iy","key");