<?php
    class Database {
        private $servername = "localhost";
        private $username = "root";
        private $password = "";
        private $database = "multiple_choice_question";

        private $conn = null;
        private $result = null;

        // Create and check connection
        public function connect() {
            // Create connection
            $this->conn = mysqli_connect($this->servername,$this->username,$this->password,$this->database);

            // Check connection
            if ($this->conn->connect_error) {
                die("Connection failed: " . $this->conn->connect_error);
            }
            else {
                mysqli_set_charset($this->conn,'UTF8');
            }

            return $this->conn;
        }

        // Execute query
        public function execute($sql) {
            $this->result = $this->conn->query($sql);
            return $this->result;
        }

        // Get data
        public function getData() {
            if($this->result) {
                $data = mysqli_fetch_array($this->result);
            }
            else {
                $data = 0;
            }

            return $data;
        }

        //Count row table
        public function num_rows() {
            if($this->result) {
                $num = mysqli_num_rows($this->result);
            }
            else {
                $num = 0;
            }

            return $num;
        }

        // LOGIN
        public function Login($username, $password) {
            $sql = "SELECT * FROM tbl_users WHERE username = '$username' AND password = '$password'";
            $this->execute($sql);
            
            if($this->num_rows()==0) {
                $data = 0;
            }
            else {
                while($datas = $this->getData()) {
                    $data[] = $datas;
                }
            }

            return $data;
        }

        // GET ALL
        public function getAllData($table) {
            $sql = "SELECT * FROM $table ORDER BY id DESC";
            $this->execute($sql);
            
            if($this->num_rows()==0) {
                $data = 0;
            }
            else {
                while($datas = $this->getData()) {
                    $data[] = $datas;
                }
            }

            return $data;
        }

        // GET DATA BY ID
        public function getDataByID($table, $id) {
            $sql = "SELECT * FROM $table WHERE id = '$id'";
            $this->execute($sql);

            if($this->num_rows() != 0) {
                $data = mysqli_fetch_array($this->result);
            }
            else {
                $data = 0;
            }

            return $data;
        }

        // INSERT
        public function InsertData($table, $params, $values) {
            $sql = "INSERT INTO $table($params)
            VALUES($values)";
            
            return $this->execute($sql);
        }

        // UPDATE
        public function UpdateData($table, $id, $params, $values) {
            $sql = "UPDATE $table 
            SET $params = '$values' 
            WHERE id = '$id'";

            return $this->execute($sql);
        }

        // GET RANDOM EXAM
        public function getRandomExam()
        {
            $sql = "SELECT * FROM tbl_exams ORDER BY RAND() LIMIT 1";
            $this->execute($sql);

            if ($this->num_rows() != 0) {
                $data = mysqli_fetch_array($this->result);
            } else {
                $data = 0;
            }

            return $data;
        }
        // GET RANDOM QUESTION
        public function getRandomQuestion($id, $limit)
        {
            $sql = "SELECT * FROM tbl_questions WHERE idExam = '$id' ORDER BY RAND() LIMIT $limit";
            $this->execute($sql);

            if ($this->num_rows() != 0) {
                $data = mysqli_fetch_array($this->result);
            } else {
                $data = 0;
            }

            return $data;
        }        
    }
?>



