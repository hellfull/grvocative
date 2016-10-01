# grvocative

Make gender , title , vocative names for greek names 

Use this to get gender (Male / Female) , a title like (ΚΥΡΙΕ / ΚΥΡΙΑ) an a vocative type (ΓΕΩΡΓΙΕ ΠΑΠΑΔΟΠΟΥΛΕ) .

replace lines to composer.json 
"psr-4": {
            "App\\": "app/",
	          "Hellfull\\Grvocative\\":"packages/hellfull/grvocative/src"

        }
        
add provider to config/app.php

Hellfull\Grvocative\GrvocativeServiceProvider::class
