<?php

namespace Hellfull\Grvocative;

class Introduce {
    
    function detectEncoding($val){
        $encoding = mb_detect_encoding($fname);
        return $encoding;
    }
        
     function vocatives($fname, $lname) {
        
        //$encoding = detectEncoding($fname);
        
        $this->gender = $this->getGender($fname);
        $gender = $this->gender;
        
        $this->title = $this->makeTitle($fname);
        
        $this->nickName = $this->makeNickName($fname, $lname, $gender);
        
                
        return $this;
    } 

    function getGender($val /*, $encoding */) {
        
        //$encoding = detectEncoding($val);
        
        $lastTwoDigits = mb_substr($val, -2);
        $lastOneDigits = mb_substr($val, -1);

        if ($lastTwoDigits == "ος" || $lastTwoDigits == "οσ" || $lastTwoDigits == "ΟΣ" || $lastTwoDigits == "os" || $lastTwoDigits == "OS" ||
                $lastTwoDigits == "ασ" || $lastTwoDigits == "ας" || $lastTwoDigits == "ΑΣ" || $lastTwoDigits == "as" || $lastTwoDigits == "AS" ||
                $lastTwoDigits == "ων" || $lastTwoDigits == "ον" || $lastTwoDigits == "ΟΝ" || $lastTwoDigits == "ΩΝ" || $lastTwoDigits == "on" || $lastTwoDigits == "ON" ||
                $lastTwoDigits == "ης" || $lastTwoDigits == "ησ" || $lastTwoDigits == "ΗΣ" || $lastTwoDigits == "hs" || $lastTwoDigits == "HS" ||
                $lastTwoDigits == "ιμ" || $lastTwoDigits == "ίμ" || $lastTwoDigits == "im" || $lastTwoDigits == "IM" ||
                $lastTwoDigits == "ηφ" || $lastTwoDigits == "hf" || $lastTwoDigits == "if" || $lastTwoDigits == "HF" ||
                $lastTwoDigits == "ετ" || $lastTwoDigits == "έτ" || $lastTwoDigits == "ΕΤ" || $lastTwoDigits == "ET" ||
                $lastTwoDigits == "ωρ" || $lastTwoDigits == "ώρ" || $lastTwoDigits == "ΩΡ" || $lastTwoDigits == "or" ||
                $lastTwoDigits == "άμ" || $lastTwoDigits == "ΑΜ" || $lastTwoDigits == "am" || $lastTwoDigits == "AM" ||
                $lastTwoDigits == "αξ" || $lastTwoDigits == "ΑΞ" || $lastTwoDigits == "ax" || $lastTwoDigits == "AX" ||
                $lastTwoDigits == "ηλ" || $lastTwoDigits == "ήλ" || $lastTwoDigits == "ΗΛ" || $lastTwoDigits == "hl" || $lastTwoDigits == "HL" ||
                $lastTwoDigits == "ιν" || $lastTwoDigits == "ίν" || $lastTwoDigits == "ΙΝ" || $lastTwoDigits == "in" || $lastTwoDigits == "IN" ||
                $lastTwoDigits == "αρ" || $lastTwoDigits == "άρ" || $lastTwoDigits == "ΑΡ" || $lastTwoDigits == "ar" || $lastTwoDigits == "AR" ||
                $lastTwoDigits == "ιδ" || $lastTwoDigits == "ίδ" || $lastTwoDigits == "ΙΔ" || $lastTwoDigits == "id" || $lastTwoDigits == "ID" ||
                $lastTwoDigits == "ηρ" || $lastTwoDigits == "ήρ" || $lastTwoDigits == "ΗΡ" || $lastTwoDigits == "HR" || $lastTwoDigits == "hr") {
            return "Male";
        } else if ($lastOneDigits == "α" || $lastOneDigits == "ά" || $lastOneDigits == "a" || $lastOneDigits == "Α" ||
                $lastOneDigits == "ω" || $lastOneDigits == "ώ" || $lastOneDigits == "w" || $lastOneDigits == "o" || $lastOneDigits == "Ο" || $lastOneDigits == "Ω" ||
                $lastTwoDigits == "υς" || $lastTwoDigits == "ύς" || $lastTwoDigits == "υσ" || $lastTwoDigits == "ύσ" || $lastTwoDigits == "us" || $lastOneDigits == "ΥΣ" || $lastOneDigits == "YS" ||
                $lastOneDigits == "η" || $lastOneDigits == "ή" || $lastOneDigits == "i" || $lastOneDigits == "ι" || $lastOneDigits == "Ι" || $lastOneDigits == "I" || $lastOneDigits == "h" || $lastOneDigits == "Η" || $lastOneDigits == "H" ||
                $lastTwoDigits == "ϊς" || $lastTwoDigits == "ϊσ" || $lastTwoDigits == "ισ" || $lastTwoDigits == "ις" || $lastOneDigits == "ΙΣ" || $lastOneDigits == "IS" ||
                $lastTwoDigits == "ίς" || $lastTwoDigits == "ίσ" || $lastTwoDigits == "is" ||
                $lastTwoDigits == "ηρ" || $lastTwoDigits == "ήρ" || $lastOneDigits == "ΗΡ" || $lastOneDigits == "HR" ||
                $lastTwoDigits == "ελ" || $lastTwoDigits == "έλ" || $lastTwoDigits == "el" || $lastOneDigits == "ΕΛ" || $lastOneDigits == "EL" ||
                $lastTwoDigits == "εμ" || $lastTwoDigits == "έμ" || $lastTwoDigits == "em" || $lastOneDigits == "ΕΜ" || $lastOneDigits == "EM") {
            return "Female";
        } else {
            return "Unknown";
        }
    }

    function makeTitle($fname) {
        
        $gender = $this->getGender($fname);
                
        if ($gender == "Male") {
            return "ΚΥΡΙΕ";
        } else if ($gender == "Female") {
            return "ΚΥΡΙΑ";
        } else {
            return "N/A";
        }
    }

    function makeNickName($fname, $lname) {
        
        $gender = $this->getGender($fname);
        
        if ($gender == "Male") {
            $fnickName = $this->makeMaleNickFirstName($fname);
            $lnickName = $this->makeMaleNickLastName($lname);
        }

        if ($gender == "Female") {
            $fnickName = $this->makeFemaleNickFirstName($fname);
            $lnickName = $this->makeFemaleNickLastName($lname);
        }

        if ($gender == "Unknown") {
            $fnickName = $fname;
            $lnickName = $lname;
        }
        return $fnickName . " " . $lnickName;
    }

    function makeMaleNickLastName($val) {
        $wordAr = mb_strlen($val) - 2;
        $ls = mb_substr($val, -2, 2);
        $valOut = mb_substr($val, 0, $wordAr);

        $lnickName = $val;

        if ($ls == "ΟΣ" || $ls == "οσ" || $ls == "ος") {
            $lnickName = $valOut . "Ε";
        }

        if ($ls == "ΑΣ" || $ls == "ασ" || $ls == "ας") {
            $lnickName = $valOut . "Α";
        }

        if ($ls == "ΗΣ" || $ls == "ησ" || $ls == "ης") {
            $lnickName = $valOut . "Η";
        }

        if ($ls == "ΕΣ" || $ls == "εσ" || $ls == "ες") {
            $lnickName = $valOut . "Ε";
        }

        return $lnickName;
    }

    function makeFemaleNickLastName($val) {
        $wordAr = mb_strlen($val) - 2;
        $ls = mb_substr($val, -2, 2);
        $valOut = mb_substr($val, 0, $wordAr);

        $lnickName = $val;
        return $lnickName;
    }

    function makeFemaleNickFirstName($val) {

        $wordAr = mb_strlen($val) - 1;
        $ls = mb_substr($val, -2, 2);
        $valOut = mb_substr($val, 0, $wordAr);

        $fnickName = $val;

        if ($ls == "ΙΣ" || $ls == "ισ" || $ls == "ις") {
            $fnickName = $valOut . "ΔΑ";
        }

        /* GRAMMAR EXCEPTION */
        if ($valOut == "Αρτεμι" || $valOut == "Αρτεμη" || $valOut == "ΑΡΤΕΜΗ" || $valOut == "ΑΡΤΕΜΙ" || $valOut == "αρτεμι" || $valOut == "αρτεμη") {
            $fnickName = $valOut;
        }

        return $fnickName;
    }

    function makeMaleNickFirstName($val) {
        $wordAr = mb_strlen($val) - 2;
        $ls = mb_substr($val, -2, 2);
        $valOut = mb_substr($val, 0, $wordAr);

        $fnickName = $val;

        if ($ls == "ασ" || $ls == "ας" || $ls == "ΑΣ") {
            $fnickName = $valOut . "Α";
        }

        if ($ls == "ων" || $ls == "ον" || $ls == "ΩΝ" || $ls == "ΟΝ") {
            $fnickName = $valOut . $ls . "Α";
        }

        if ($ls == "ΟΣ" || $ls == "ος" || $ls == "οσ") {
            if (mb_strlen($valOut) < 4) {
                $fnickName = $valOut . "Ο";
            } else {
                $fnickName = $valOut . "Ε";
            }
        }

        if ($ls == "ΗΣ" || $ls == "ης" || $ls == "ησ") {
            $fnickName = $valOut . "Η";
        }

        /* GRAMMAR EXCEPTIONS */

        if ($valOut == "χρηστ" || $valOut == "ΧΡΗΣΤ") {
            $fnickName = $valOut . "Ο";
        }
        
        if ($valOut == "κυριάκ" || $valOut == "ΚΥΡΙΑΚ" || $valOut == "Κυριάκ") {
            $fnickName = $valOut . "Ο";
        }

        return $fnickName;
    }

}
