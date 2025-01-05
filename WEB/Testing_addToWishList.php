<?php
use PHPUnit\Framework\TestCase;

class WishListTest extends TestCase {

    // Mock the database connection
    private $mockConn;

    // Set up a mock database connection before each test
    protected function setUp(): void {
        $this->mockConn = $this->createMock(mysqli::class);
    }

    // Test adding a laptop to the wish list
    public function testAddLaptopToWishList() {
        // Simulate successful insert
        $this->mockConn->method('query')->willReturn(true);

        // Assume $_GET['add'] contains the Laptop ID to add to the wish list
        $_GET['add'] = 1;

        // Call the function that adds the laptop to the wish list
        // You will need to refactor your application to move the code into functions for better testability
        $sql = 'INSERT INTO wish_list (Laptop_ID) VALUES (' . $_GET['add'] . ')';
        $result = $this->mockConn->query($sql);

        // Check if the query was successful
        $this->assertTrue($result);

        // Check that the right query was executed
        $this->mockConn->expects($this->once())->method('query')->with($this->stringContains("INSERT INTO wish_list"));
    }

    // Test removing a laptop from the wish list
    public function testRemoveLaptopFromWishList() {
        // Simulate successful delete
        $this->mockConn->method('query')->willReturn(true);

        // Assume $_GET['remove'] contains the Laptop ID to remove from the wish list
        $_GET['remove'] = 1;

        // Simulate deletion query
        $sql = 'DELETE FROM wish_list WHERE Laptop_ID = ' . $_GET['remove'];
        $result = $this->mockConn->query($sql);

        // Check if the query was successful
        $this->assertTrue($result);

        // Check that the right query was executed
        $this->mockConn->expects($this->once())->method('query')->with($this->stringContains("DELETE FROM wish_list"));
    }
}
