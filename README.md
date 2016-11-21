# grvocative
STIL GETTING THIS
Make gender , title , vocative names for greek names

# Installation

Require this package with composer:

```bash
composer require hellfull/grvocative
```
After updating composer, add the ServiceProvider to the providers array in config/app.php
```php
Hellfull\Grvocative\GrvocativeServiceProvider::class
```

# Usage
```php
// Make a new class instance
$introduce = new Grvocative\Introduce();

// Get attributes separately:

$gender = $introduce->getGender(somefirstname);
// will output "female" or "male"

$title = $introduce->makeTitle(somefirstname);
// will output "ΚΥΡΙΕ" or "ΚΥΡΙΑ"

$nickName = $introduce->makeNickName(somefirstname,somelastname);
// for somefirstname = "ΤΥΧΑΙΟΣ", somelastname = "ΤΥΧΑΙΪΔΗΣ"  
// will output "TYXAIE ΤΥΧΑΙΪΔΗ"

// You can get all attributes in object with
// attributes gender, title, nickName doing :

$vocatives = $introduce->vocatives(somefirstname, somelastname);

echo $vocatives->title . " " . $vocatives->nickName;
// "ΚΥΡΙΕ ΤΥΧΑΙΕ ΤΥΧΑΙΟΠΟΥΛΕ"
```
