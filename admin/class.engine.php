<?php

class WordpressCodeAdmin {

	private $mysqli;

	/*
	Function: __construct
	Purpose: Connect to the database
	*/
	
	function __construct() {
    
		// Get the main settings from array we just loaded
		$host = DB_HOST;
		$user = DB_USER;
		$pass = DB_PASSWORD;
		$name = DB_NAME;

		// Connect to the database
		$this->mysqli = new mysqli($host,$user,$pass,$name);
		if(mysqli_connect_errno()) {
			die('Connection Error!');
		}
	}
	function redirect() {
		header("Location: /");
		exit();
	}
	function login($user, $pass) {
	//	$_SESSION = array();
		$password = md5($pass);
		$query = "SELECT * FROM codeUpdates_users WHERE username='".$user."' && password='".$password."'";
		if($result = $this->query($query)) {
			$row = $result->fetch_assoc();
			if(is_array($row)): 
				$_SESSION["user_id"] = $row['id'];
				$_SESSION["username"] = $row['username'];
				$this->redirect();
			else:
				$message = "Invalid Username or Password!";
				return $message;				
			endif;
		}
	}
	function logout() {
		session_destroy();
		exit();
	}
  
  
  
  
	function form_item($array) {
		extract($array);
		
	?>
									<div class="form-group">
										<label for="<?php echo $id; ?>"><?php echo $display_name; ?>:</label>
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-<?php echo $icon; ?>"></i>
											</div>
											<input name="<?php echo $id; ?>" id="<?php echo $id; ?>" type="text" class="form-control" />
										</div><!-- /.input group -->
									</div><!-- /.form group -->
	<?php
		
	}
	
	function submit_form($form) {
		switch($form):
			case "submit_add_package":
				if (isset($_POST['submit_add_package']) && $_POST['submit_add_package']==1) {
					$name = $_POST['package_name'];
					$info = $_POST['url'];
					$query = "INSERT INTO codeUpdates_packages (name, info) VALUES  ('".$name."', '".$info."')";
					$this->query($query);
				}
			break;
		
		
		default:
		break;
		endswitch;
	}
	
	function package_select_list() {
		$query = "SELECT name, id FROM codeUpdates_packages";
		if($result = $this->query($query)) {
			while($row = $result->fetch_assoc()) {
				$packages[$row['id']] = $row['name'];
			}
		}
		
	return $packages;
	}



	function display_versions_table() {
		$colours = array('primary', 'success', 'danger', 'warning'); 
		foreach ($this->get_packages(1) as $package):
			

			foreach ($package['versions'] as $version):
						$random_keys=array_rand($colours);
 ?>
				 <tr>
					 <td><?php echo $version['name']; ?></td>
					 <td>
						<span class="badge badge-<?php echo $colours[$random_keys]; ?>"><?php echo $version['downloaded']; ?></span>
					</td>
					<td><span class="badge badge-<?php echo $colours[$random_keys]; ?>"><?php echo $version['version']; ?></span></td>
				</tr>
			<?php endforeach;
		endforeach;
	}
	

	function get_packages($limit=100) {
		$query = "SELECT * FROM codeUpdates_packages";
		if ($result = $this->query($query)) {

			/* fetch associative array */
			while ($row = $result->fetch_assoc()) {
				$packages[$row['name']]['versions'] = $this->get_versions($row['id'], $limit);
				$packages[$row['name']]['info']['url'] = $row['info'];
			}

			/* free result set */
			$result->free();
			return $packages;
		}
		
	}


	function get_versions($package_id, $limit=100) {
		
		$query = "SELECT * FROM codeUpdates_versions WHERE package_id=".$package_id." ORDER BY version DESC LIMIT ".$limit;
		if ($result = $this->query($query)) {
			while($row = $result->fetch_assoc()) {
				$versions[$row['version']] = $row; 
			}
			$result->free();
			return $versions;
		}

	}
	


  /*
  Function: query
  Purpose: Execute a database query
  */
  function query($query) {

    $result = $this->mysqli->query($query);
    if(mysqli_errno($this->mysqli))
    {
    	var_dump(mysqli_errno($this->mysqli));
        die('Query Error!');
    }
    return $result;
  
  }
  
  /*
  Function: fetchArray
  Purpose: Get array of query results
  */
  function fetchArray($result) {
  
    return $result->fetch_array(MYSQLI_ASSOC); /* *** THE PROBLEMATIC LINE! *** */ 
  
  }
  
  /*
  Function: close
  Purpose: Close the connection
  */
  function close() {

    $mysqli->close();
  
  }
  
}