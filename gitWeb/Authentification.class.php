<?php
class Authentification {
    
    private $nameUser = "login";
    private $namePassword = "password";
    
    private $sql = "SELECT * FROM users WHERE login=:login AND mdp=:password";
    
    private $handle;
    
    public $userid;
    public $username;
    
    private $redirect;
    
    public function __construct($db,$redirect){
        $this->handle = $db->prepare($this->sql);
        $this->redirect = $redirect;
    }
    
    public function authentificate($request=null,$session=null,$server=null){
        if(is_null($request)) $request = $_POST;
        if(is_null($session)) $session = &$_SESSION;
        if(is_null($server)) $server = $_SERVER;
        
        if (isset($session["AUTH_TOKEN"])){
                $this->userid = $session['AUTH_USER_ID'];
                $this->username = $session['AUTH_USER_LOGIN'];
            return true;
        }
        
        if (!isset($request[$this->nameUser]) || !isset($request[$this->namePassword])){
            $a = $this->redirect;

            $a(true);
            return false;
        } else {
            $pass = md5($request[$this->namePassword]);
            $this->handle->execute(['login'=>$request[$this->nameUser],'password'=>$pass]);
            $res = $this->handle->fetch();
            if($res){
                $this->userid = $res['id'];
                $this->username = $res['login'];
                $session["AUTH_TOKEN"] = md5($request[$this->nameUser].time());
                $session['AUTH_USER_ID'] = $this->userid;
                $session['AUTH_USER_LOGIN'] = $this->username;
                return true;
            }else{
                $a = $this->redirect;
                $a(false);
                return false;
            } 
                
        }
    }
    
}
?>