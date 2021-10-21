<?php

class MySQL
{
    private $dsn;
    private $username;
    private $password;
    private $options;
    private $connection;

    private static $instance = null;

    /**
     * @return self
     */
    public static function getInstance()
    {
        if (null === self::$instance) {
            $config = require_once 'config.php';
            $db = $config['db'];
            self::$instance = new self($db['dsn'], $db['user'], $db['password'], $db['options']);
        }
        return self::$instance;
    }

    private function __construct(string $dsn, string $username, string $password, array $options)
    {
        $this->dsn = $dsn;
        $this->username = $username;
        $this->password = $password;
        $this->options = $options;

        $this->connect();
    }

    private function __clone()
    {
    }

    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize singleton");
    }
    protected function connect()
    {
        try {
            $this->connection = new PDO($this->dsn, $this->username, $this->password, $this->options);
        } catch (Throwable $e) {
            print "Ошибка подключения к базе данных: {$e->getMessage()} <br/>";
        }
    }

    public function getConnection()
    {
        return $this->connection;
    }

}

