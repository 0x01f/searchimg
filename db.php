

<?php
header('Content-Type: text/html; charset=utf-8');
class functionalDB {
    /**
     * Mysql check and insert table
     */
    
    public function createArray() {
        $conn = new mysqli("185.198.164.6", "deron47096_img", "pQ2dH3kU6fyM4u", "deron47096_img");
        if($conn->connect_error) {
            die("Ошибка: " . $conn->connect_error);
        }
        $sql = "SELECT image_name, image_hash FROM hash";
        $result = $conn->query($sql);
        for ($rows = array(); $row = $result->fetch_array(MYSQLI_NUM); $rows[] = $row);
        
        $conn->close();
        return $rows;

    }

    // public function checkHash($arrayDB, $imgHash) {
    //         foreach ($arrayDB as $item) {
    //             $main = $item[0];
    //             if ($item[1] === $imgHash) {
    //                 echo 'Исходное изображение: ' . $main . 'Дубликаты изображения: ' . $item[0];
    //             }
    //         }
    // }

    public function createItem($image_name, $image_hash) {
        $conn = new mysqli("185.198.164.6", "deron47096_img", "pQ2dH3kU6fyM4u", "deron47096_img");
        if($conn->connect_error) {
            die("Ошибка: " . $conn->connect_error);
        }
        $sql = "INSERT INTO `hash` (`image_name`, `image_hash`) VALUES ('$image_name', '$image_hash')";
        if($conn->query($sql)) {
             
        } else {
            echo 'Ошибка: ' . $conn->error;
        }
        $conn->close();
    }
    
    public function deleteItem($image_name) {
        $conn = new mysqli("185.198.164.6", "deron47096_img", "pQ2dH3kU6fyM4u", "deron47096_img");
        if($conn->connect_error) {
            die("Ошибка: " . $conn->connect_error);
        }
        $sql = "DELETE FROM `hash` WHERE image_name='$image_name'";
        if($conn->query($sql)) {

        } else {
            echo 'Ошибка: ' . $conn->error;
        }
        $conn->close();
    }
}
?>