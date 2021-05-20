<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
include ('./managedb/connect_db.php');
final class TrueTest extends TestCase{

    public function testManage_databaseex(): void{
        $this->assertTrue(class_exist('Manage_database'));
    }
    public function testConnection_database(): void{
        $this->assertTrue(connection_status('$mysqli'));
    }



}