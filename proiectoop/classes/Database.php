<?php
// https://phpenthusiast.com/blog/the-singleton-design-pattern-in-php
class Database
{

    private $connection;
    private static $instance = null;
    private function __construct()
    {
        $this->connect_db();
    }

    public function connect_db()
    {
        $this->connection = mysqli_connect('localhost', 'root', '', 'demo');
        if (mysqli_connect_error()) {
            die("Database Connection Failed" . mysqli_connect_error() . mysqli_connect_errno());
        }
    }
    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new Database();
        }

        return self::$instance;
	}
	public function getConnection()
  {
    return $this->connection;
  }

    public function create($fname, $lname, $email, $gender, $age)
    {
        $sql = "INSERT INTO `crud` (firstname, lastname, email, gender, age) VALUES ('$fname', '$lname', '$email', '$gender', '$age')";
        $res = mysqli_query($this->connection, $sql);
        if ($res) {
            return true;
        } else {
            return false;
        }
    }

    public function read($id = null)
    {
        $sql = "SELECT * FROM `crud`";
        if ($id) {$sql .= " WHERE id=$id";}
        $res = mysqli_query($this->connection, $sql);
        return $res;
    }

    public function update($fname, $lname, $email, $gender, $age, $id)
    {
        $sql = "UPDATE `crud` SET firstname='$fname', lastname='$lname', email='$email', gender='$gender', age='$age' WHERE id=$id";
        $res = mysqli_query($this->connection, $sql);
        if ($res) {
            return true;
        } else {
            return false;
        }
    }

    public function delete($id)
    {
        $sql = "DELETE FROM `crud` WHERE id=$id";
        $res = mysqli_query($this->connection, $sql);
        if ($res) {
            return true;
        } else {
            return false;
        }
    }

    public function sanitize($var)
    {
        $return = mysqli_real_escape_string($this->connection, $var);
        return $return;
    }

}
//use 
/*
$instance = new Database();
$conn = $instance->getConnection();

*/
