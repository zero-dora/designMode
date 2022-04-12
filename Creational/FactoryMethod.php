<?php
declare(strict_types=1);

//发帖抽象类
abstract class SocialNetworkPoster
{
    abstract public function getSocialNetwork(): SocialNetworkConnector;

    public function post($content): void
    {
        $network = $this->getSocialNetwork();
        $network->login();
        $network->createPost($content);
        $network->logOut();
    }
}

//QQ平台发帖
class QQPoster extends SocialNetworkPoster
{
    private $login, $password;

    public function __construct($login, $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new QQConnect($this->login, $this->password);
    }

}

//百度平台发帖
class BiaduPoster extends SocialNetworkPoster
{
    private $email, $password;

    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new BaiDuConnet($this->email, $this->password);
    }

}


//社交平台第三方接口
interface SocialNetworkConnector
{
    public function login(): void;

    public function logOut(): void;

    public function createPost($content): void;
}

//QQ社交平台连接器（提供QQ平台操作api）
class QQConnect implements SocialNetworkConnector
{
    private $login, $password;

    public function __construct($login, $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function login(): void
    {
        echo "调用qq平台登录接口api：帐号： $this->login, " .
            "密码： $this->password\n";
    }

    public function createPost($content): void
    {
        echo "调用qq平台发帖接口api：\n";
    }

    public function logOut(): void
    {
        echo "调用qq平台登出接口api：帐号：$this->login\n";
    }

}

class BaiDuConnet implements SocialNetworkConnector
{
    private $email, $password;

    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function login(): void
    {
        echo "调用百度平台登录接口api：帐号： $this->email, " .
            "密码： $this->password\n";
    }

    public function createPost($content): void
    {
        echo "调用百度平台发帖接口api：\n";
    }

    public function logOut(): void
    {
        echo "调用百度平台登出接口api：帐号：$this->email\n";
    }
}

function clientCode(SocialNetworkPoster $poster)
{
    $poster->post("hello word");
    $poster->post("第一次发帖");
}

clientCode(new QQPoster("ZERO","123456"));
echo "\n\n";
clientCode(new BiaduPoster("zero@123.com","123456"));