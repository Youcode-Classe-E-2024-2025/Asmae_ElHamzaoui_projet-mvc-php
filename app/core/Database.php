
<?php
class Database {
    private static $instance;

    public static function getInstance() {
        if (null === static::$instance) {
            static::$instance = new PDO('pgsql:host=localhost;dbname=article', 'postgres', '1234');
        }
        return static::$instance;
    }
}
