# grvocative
STIL GETTING THIS 
Make gender , title , vocative names for greek names 

Use this to get gender (Male / Female) , a title like (ΚΥΡΙΕ / ΚΥΡΙΑ) an a vocative type (ΓΕΩΡΓΙΕ ΠΑΠΑΔΟΠΟΥΛΕ) .

# MANUAL INSTALL

Download master 

create folders path packages\hellfull\grvocative and paste /src folder 

add providers section in config/app.php

Hellfull\Grvocative\GrvocativeServiceProvider::class        

add in composer.json psr-4: 

"Hellfull\\Grvocative\\": "packages/hellfull/grvocative/src"

add in class you want to use 

use Hellfull\Grvocative;

#Examples

//Make a new class instance
$introduce = new Grvocative\Introduce();

Get attributes separately: 

$gender = $introduce->getGender(somefirstname);
// will output "female" or "male"

$title = $introduce->makeTitle(somefirstname);
// will output "ΚΥΡΙΕ" or "ΚΥΡΙΑ"

$nickName = $introduce->makeNickName(somefirstname,somelastname);
// for somefirstname = "ΤΥΧΑΙΟΣ", somelastname = "ΤΥΧΑΙΪΔΗΣ"  
// will output "TYXAIE ΤΥΧΑΙΪΔΗ"
 
You can get all attributes in array with

$vocatives = $introduce->vocatives(somefirstname, somelastname);


