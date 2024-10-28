<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Печенье</title>
</head>
<body>

<?php
class Cookie {
    private $type;

    private $cookies = ['тульские', 'сдобное', 'овсяное'];
    
    public function setType($type) {
        if (in_array($type, $this->cookies)) {
            $this->type = $type;
        } else {
            echo "<div class='cookie-output error'>Печенье $type нет в наличии</div>";
        }
    }

    public function getType() {
        return $this->type ? $this->type : "Такого печенья нет";
    }
}

$cookie = new Cookie();

echo "<h1>Выбор печенья</h1>";

$cookie->setType('тульские');
echo "<div class='cookie-output'>Печенье " . $cookie->getType() . "</div><br>";

$cookie->setType('сдобное');
echo "<div class='cookie-output'>Печенье " . $cookie->getType() . "</div><br>";

$cookie->setType('Крекеры');
?>

</body>
</html>



<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
    color: #333;
    margin: 20px;
}

h1 {
    color: #5a6268;
}

.cookie-output {
    background-color: #ffffff;
    border: 1px solid #dee2e6;
    border-radius: 5px;
    padding: 15px;
    margin-top: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.error {
    color: #dc3545; 
}
</style>