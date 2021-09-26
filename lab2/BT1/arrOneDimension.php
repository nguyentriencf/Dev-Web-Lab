<?php
class ArrayProcess
{
    private $array;
    public function __construct($arr)
    {
        $this->array = $arr;
    }
    public  function inputArr($arr)
    {
    }
    public  function outputArr()
    {
?>
        <h1>Mảng các phần tử ngẫu nhiên</h1>
        <p>Số lượng phần tử: <?php echo count($this->array) ?></p>
        <ul>
            <?php foreach ($this->array as $item) : ?>
                <li><?= $item ?></li>
            <?php endforeach; ?>
        </ul>
    <?php

    }
    public  function search_max()
    {
    ?>
        <h1>Giá trị tối đa: <?php echo max($this->array) ?></h1>
    <?php
    }
    public  function search_min()
    {
    ?>
        <h1>Giá trị tối thiểu : <?php echo min($this->array) ?></h1>
    <?php
    }

    public  function order_Asd()
    {
        $temp_arr = $this->array;
        sort($temp_arr);

    ?>
        <h1>Mảng tăng dần</h1>
        <p>số phần tử của mảng là: <?php echo count($temp_arr); ?></p>
        <?php foreach ($temp_arr as $item) : ?>
            <li><?= $item; ?></li>
        <?php endforeach ?>
    <?php

    }
    public  function order_Des()
    {
        $temp_arr = $this->array;
        rsort($temp_arr);

    ?>
        <h1>Mảng tăng giảm dần</h1>
        <p>số phần tử của mảng là: <?php echo count($temp_arr); ?></p>
        <?php foreach ($temp_arr as $item) : ?>
            <li><?= $item; ?></li>
        <?php endforeach ?>
    <?php
    }

    public  function search_x($value)
    {
        $is_exist = in_array($value, $this->array);
        $index = null;
        if ($is_exist) {
            foreach ($this->array as $key => $val) {
                if ($val == $value) {
                    $index = $key;
                }
            }
        }
        if ($is_exist) {
            echo '<h4>Phan tu ' . $value . 'co ton tai trong mang </h4>';
            echo '<p>tai vi tri: ' . $index . '</p>';
        } else {
            echo '<h4>Phan tu ' . $value . ' khong ton tai trong mang </h4>';
        }
    }
    public  function update_x($value, $valUpdate)
    {
        $is_exist = in_array($value, $this->array);
        $index = null;
        $temp_arr = $this->array;
        if ($is_exist) {
            foreach ($this->array as $key => $val) {
                if ($val == $value) {
                    $index = $key;
                    $val = $valUpdate;
                }
            }
        }
        if ($is_exist) {
            echo '<h4>Da thay replace ' . $value . 'thanh ' . $valUpdate . ' </h4>';
            echo '<p>tai vi tri: ' . $index . '</p>';
        } else {
            echo '<h4>Phan tu ' . $value . ' khong ton tai trong mang </h4>';
        }
    }
    public  function del_x($value)
    {
        $is_exist = in_array($value, $this->array);
        $index = null;
        $temp_arr = [];
        if (!$is_exist) {
            echo "<h1>khong tim thay phan tu</h1>";
        }
        foreach ($this->array as $key => $val) {
            if ($val != $value) {
                $temp_arr[] = $val;
            }
        }
    ?>
        <?php if($is_exist):?>
        <h1>Mang sau khi xoa la</h1>
        <p>số phần tử của mảng là: <?php echo count($temp_arr); ?></p>
        <?php foreach ($temp_arr as $item) : ?>
            <li><?= $item; ?></li>
        <?php endforeach ?>
        <?php endif?>

<?php
    }
};

?>