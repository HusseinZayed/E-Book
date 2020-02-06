<?php
require_once('DB.php');

class user
{
    private $first_name = "";
    private $last_name = "";
    public  $email = "";
    public $password = "";
    private $phone = "";
    private $location = "";
    private $birthdate = "";
    private $role = "user";
    private $status = "active";
    public $avatar = "img/uploaded/user/default.png";
    private $table = "user";
    public $connection = null;

    public function __construct()
    {
        $this->connection = (new DB())->connect();
    }
    public function validateDate($date, $format = "y-m-d")
    {
        $d = DateTime::createFromFormat($format, $date);
        return $d && $d->format($format) === $date;
    }
    public function remove_tage_slashes_quotes($input)
    {
        $input = trim($input, " ");
        $input = strip_tags($input);
        $input = htmlspecialchars($input);
        $input = htmlentities($input);
        $input = str_replace("'", "", $input);
        $input = str_replace('"', "", $input);
        $input = str_replace('\\', "", $input);
        $input = str_replace('/', "", $input);
        return $input;
    }
    public function validation($name, $value)
    {
        if ($name == 'first_name') {
            $value = $this->remove_tage_slashes_quotes($value);
            if (empty($value)) {
                // unset($this->first_name);
                return " * First Name Must Not Be Empty<br>";
            } else {
                if (strlen($value) < 5) {
                    //unset($this->first_name);
                    return " * First Name Must Be More Than Or Equal 5 Length<br>";
                } else {
                    $this->first_name = $value;
                }
            }
        } else if ($name == 'last_name') {
            $value = $this->remove_tage_slashes_quotes($value);
            if (empty($value)) {
                // unset($this->last_name);
                return " * Last Name Must Not Be Empty<br>";
            } else {
                if (strlen($value) < 5) {
                    //unset($this->last_name);
                    return " * Last Name Must Be More Than Or Equal 5 Length<br>";
                } else {
                    $this->last_name = $value;
                }
            }
        } else if ($name == 'phone') {
            $value = $this->remove_tage_slashes_quotes($value);
            if (empty($value)) {
                // unset($this->phone);
                return " * Phone Must Not Be Empty<br>";
            } else {
                if (strlen($value) < 11) {
                    //unset($this->phone);
                    return " * Phone Must Be More Than Or Equal 13 Length<br>";
                } else {
                    if (is_numeric($value)) {
                        $this->phone = $value;
                    } else {
                        //  unset($this->phone);
                        return " * Phone Must Be Only Numberes<br>";
                    }
                }
            }
        } else if ($name == 'birthdate') {
            //$value=$this->remove_tage_slashes_quotes($value);
            if (empty($value)) {
                //  unset($this->birthdate);
                return " * Date Must Not Be Empty<br>";
            } else {
                $value = date_format(date_create($value), "y-m-d");
                if ($this->validateDate($value)) {
                    $this->birthdate = $value;
                } else {
                    //  unset($this->birthdate);
                    return " * Invalid Date Format<br>";
                }
            }
        } else if ($name == "location") {
            if (empty($value)) {
                //unset($this->location);
                return " * Location Must Not Be Empty<br>";
            } else {
                if (strlen($value) > 4) {
                    $this->location = $value;
                } else {
                    //unset($this->location);
                    return " * Location Must Be More Than Or Equal 5 Length<br>";
                }
            }
        } else if ($name == 'password') {
            if (empty($value)) {
                //  unset($this->password);
                return " * Password Must Not Be Empty<br>";
            } else {
                $value = str_replace("'", "", $value);
                $value = str_replace('"', "", $value);
                $arr = str_split($value);
                $upper = 0;
                $lower = 0;
                $digit = 0;
                $special = 0;
                if (strlen($value) >= 8) {
                    for ($i = 0; $i < strlen($value); $i++) {
                        if (ctype_lower($arr[$i])) {
                            $lower++;
                        } else if (ctype_upper($arr[$i])) {
                            $upper++;
                        } else if (ctype_digit($arr[$i])) {
                            $digit++;
                        } else {
                            $special++;
                        }
                    }
                    if ($upper > 0 and $lower > 0 and $digit > 0 and $special > 0) {
                        $this->password = $value;
                    } else {
                        // unset($this->password);
                        return " * Password Is Week (Not Match The Password Requirement)<br>";
                    }
                } else {
                    // unset($this->password);
                    return " * Password Must Be More Than Or Equal 8 Length<br>";
                }
            }
        } else if ($name == 'email') {
            if (empty($value)) {
                // unset($this->email);
                return " * Email Must Not Be Empty<br>";
            } else {
                if (filter_var($value, FILTER_VALIDATE_EMAIL)) {
                    if (!$this->CheckEmailExist($value)) {
                        $this->email = $value;
                    } else {
                        // unset($this->email);
                        return " * Email Is Already Exist <br>";
                    }
                } else {
                    // unset($this->email);
                    return " * Invalid Email Address<br>";
                }
            }
        }
    }
    public function CheckDataSet()
    {
        if (isset($this->first_name) and !empty($this->first_name)) {
            if (isset($this->last_name) and !empty($this->last_name)) {
                if (isset($this->phone) and !empty($this->phone)) {
                    if (isset($this->birthdate) and !empty($this->birthdate)) {
                        if (isset($this->location) and !empty($this->location)) {
                            if (isset($this->email) and !empty($this->email)) {
                                if (isset($this->password) and !empty($this->password)) {
                                    return true;
                                } else {
                                    return false;
                                    //return array(false, "Invalid Password");
                                }
                            } else {
                                return false;
                                //return array(false, "Invalid Email Address");
                            }
                        } else {
                            return false;
                            //return array(false, "Invalid Location");
                        }
                    } else {
                        return false;
                        //return array(false, "Invalid Birth Date");
                    }
                } else {
                    return false;
                    // return false;return array(false, "Invalid Phone Number");
                }
            } else {
                return false;
                //return array(false, "Invalid Last Name");
            }
        } else {
            return false;
            //return array(false, "Invalid First Name");
        }
    }
    public function CheckEmailExist($email)
    {
        $query = "select user_email from user where user_email='$email'";
        $result = mysqli_query($this->connection, $query);
        $rows = mysqli_num_rows($result);
        if ($rows == 1)
            return true;
        else
            return false;
    }
    public function UploadImg($image)
    {
        if (isset($_FILES[$image])) {
            if ($_FILES[$image]['size'] > 0) {
                $imgagename = $_FILES[$image]['name'];
                $imagedestination = "img/uploaded/user/";
                $imagesize = $_FILES[$image]['size'];
                $imageerror = $_FILES[$image]['error'];
                $imagetmp = $_FILES[$image]['tmp_name'];
                $allowed = array('png', 'jpg', 'jpeg', 'gif');
                $img_info = explode('.', $imgagename);
                $extension = end($img_info);
                $extension = strtolower($extension);
                if (in_array($extension, $allowed)) {
                    $newName = uniqid("user") .'.'. $extension;
                    $imagedestination .= $newName;
                    $this->avatar = $imagedestination;
                    move_uploaded_file($imagetmp, $imagedestination);
                } else {
                    echo "Please Choose Valid Image";
                }
            } else {
                $this->avatar = $this->avatar;
            }
        } else {
            $this->avatar = $this->avatar;
        }
    }
    public function register()
    {
        $query = "insert into user (user_fname,user_lname,user_phone,user_birth_date,user_email,user_password,user_location,user_role,user_status,user_avatar) Values (
            '$this->first_name','$this->last_name','$this->phone','$this->birthdate','$this->email','$this->password','$this->location','$this->role','$this->status','$this->avatar')";
        $insertDone = mysqli_query($this->connection, $query);
        if ($insertDone) {
            echo '<meta http-equiv="refresh" content="2;login.php"';
        } else { }
    }
    /*public function session($data){
        $row=mysqli_fetch_assoc($data);
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['user_fname'] = $row['user_fname'];
        $_SESSION['user_lname'] = $row['user_lname'];
        $_SESSION['user_email'] = $row['user_email'];
        $_SESSION['user_phone'] = $row['user_phone'];
        $_SESSION['user_location'] = $row['user_location'];
        $_SESSION['user_avatar'] = $row['user_avatar'];
        $_SESSION['user_birth_date'] = $row['user_birth_date'];
        $_SESSION['user_role'] = $row['user_role'];
        $_SESSION['user_status'] = $row['user_status'];
        $_SESSION['user_book_uploaded'] = $row['user_book_uploaded'];
        $_SESSION['user_book_downloaded'] = $row['user_book_downloaded'];
        $_SESSION['user_password'] = $row['user_password'];
     }*/
     /*public function createCookies($email,$password){
         setcookie("email",$email,time()+(3600*30),"/");
         setcookie("password",$password,time()+(3600*30),"/");
     }*/
    /* public function checkCookieValid($email,$password){
        $useremail = trim(mysqli_real_escape_string($this->connection, $email));
        $userpassword = trim(mysqli_real_escape_string($this->connection, $password));
        $query = "select * from user where user_email='$useremail' and user_password='$userpassword' and user_status='active'";
        $result = mysqli_query($this->connection, $query);
        if (mysqli_num_rows($result) > 0) {
            $this->session($result);
          return true;
        }else{
            return false;
        }
     }*/
    public function login($email, $password)
    {
        $useremail = mysqli_real_escape_string($this->connection, $email);
        $userpassword = mysqli_real_escape_string($this->connection, $password);
        if (empty($useremail)) {
            return " * Pleaze Enter The Email<br>";
        } else {
            if (empty($password)) {
                return "Pleaze Enter The Password<br>";
            }
        }
        $query = "select * from user where user_email='$useremail' and user_password='$userpassword' and user_status='active'";
        $result = mysqli_query($this->connection, $query);
        if (mysqli_num_rows($result) > 0) {
                return array($result);
            }else {
                return " Incorrect Email Or Password";
            }
        }
        public function update($id){
            $query="update user set 
            user_fname='$this->first_name',
            user_lname='$this->last_name',
            user_email='$this->email',
            user_password='$this->password',
            user_phone='$this->phone',
            user_location='$this->location',
            user_birth_date='$this->birthdate',
            user_avatar='$this->avatar'
            where user_id=$id
            ";
            if(mysqli_query($this->connection,$query)){
                $query = "select * from user where user_email='$this->email' and user_password='$this->password' and user_status='active'";
                $result = mysqli_query($this->connection, $query);
                return $result;
            }
            else{
                return array('Failed To Update Data');
            }
        }
    }