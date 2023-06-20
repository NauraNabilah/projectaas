<?php
class Login
{
    private $db;
    private $error;

    public function __construct($db_conn)
    {
        $this->db = $db_conn;
        session_start();
    }

    public function login($username, $password)
    {
        try {
            $stmt = $this->db->prepare("SELECT * FROM user WHERE username = ? AND password = ?");
            $stmt->execute(array($username, $password));
            $data = $stmt->fetch();

            if ($stmt->rowCount() > 0) {
                $_SESSION['user_session'] = $data['id_user'];
                return true;
            } else {
                $this->error = "Username atau Password salah";
                return false;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function isLoggedIn()
    {
        if (isset($_SESSION['user_session'])) {
            return true;
        }
    }

    public function logout()
    {
        session_destroy();
        unset($_SESSION['user_session']);
        return true;
    }

    public function getUser()
    {
        // Cek apakah sudah login
        if (!$this->isLoggedIn()) {
            return false;
        }

        try {
            $stmt = $this->db->prepare("SELECT * FROM user WHERE id_user = :id_user");
            $stmt->bindParam(":id_user", $_SESSION['user_session']);
            $stmt->execute();

            return $stmt->fetch();
        } catch (PDOException $e) {
            echo $e->getMessage();

            return false;
        }
    }

    public function getLastError()
    {
        return $this->error;
    }

}
