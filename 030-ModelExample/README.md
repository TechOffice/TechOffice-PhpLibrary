# Step 1
update php.ini (PHP Home)

Make sure the following lines are included in php.ini

**Windows**
```
extension=php_mysqli.dll
```

# Step 2
Create Database, Table

**Create Database**
```
CREATE DATABASE TEST
```

```
SHOW DATABASE;
```

```
USE TEST;
```

```
CREATE TABLE TEST (ID INT AUTO_INCREMENT, CONTENT VARCHAR(200), PRIMARY KEY(ID));
```

```
SHOW TABLES;
```

```
INSERT INTO TEST VALUES (1, "TESTING CONTENT 1");
INSERT INTO TEST VALUES (2, "TESTING CONTENT 2");
```

# Step 3
Update application/config/database.php

```
$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'test',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
```

# Step 4
Create Test_model.php in application/models

```
<?php

class Test_model extends CI_Model {
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	public function get_all(){
		$query = $this->db->get('test');
		return $query->result();
	}
	
}
```

# Step 5
Create Test.php in application/controllers
```
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("test_model");
	}
	
	public function index(){
		echo "<h1>Hello</h1>";
		echo json_encode($this->test_model->get_all());
	}
}

```


# Step 6
php -S localhost:9999

# Step 7
Visit http://localhost:9999/Hello

