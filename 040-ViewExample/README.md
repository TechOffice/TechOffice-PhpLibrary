
# Step 1 
Create home_message.php in application/views

```
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
</head>
<body>
	<h1>Hello World</h1>
</body>
```

# Step 2
Create Home.php in application/controllers

```
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('home_message');
	}
}

```

# Step 3 
```
php -S localhost:9999
```

# Step 4 
Visit http://localhost:9999/Home