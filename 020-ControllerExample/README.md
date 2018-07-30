# Step 1

create Hello.php in application/controllers
```
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello extends CI_Controller {
	
	public function index()
	{
		echo "Hello World";
	}
}

```

# Step 2 
php -S localhost:9999


# Step 3
Visit http:localhost:9999/hello

