<html>

<body>


    <?php
    function add(int $a, $b)
    {
        return $a + $b;
    }
    echo add(10, 11)
        ?>
    <br>
    <?php
    class calculator
    {
        public $x;
        public $y;
        function add(int $x, int $y)
        {
            return $x + $y;
        }
    }

    $addition = new calculator();
    echo $addition->add(12, 21);

    ?>
    <br>

    <?php
    class student
    {
        public $id;
        public $name;

        function __construct($id, $name)
        {
            $this->id = $id;
            $this->name = $name;
        }

        function display()
        {
            echo "id: " . $this->id . " " . "Name: " . $this->name . "";
        }
    }
    $student = new student(100, "rofiq");
    $student->display();

    ?>
    <br>
    <br>
    <?php
    $var = 10;
    echo $var + 5;

    echo "5" + "130 apples";


    echo empty("0");

    ?>
</body>

</html>