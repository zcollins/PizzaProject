
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<body>

<?php if(empty($_POST)) { ?>
    <form action="" method="POST">
        <h1>Order your <font=Red'Pizza!</font></h1>
        <label for="thisSize">Crust Size</label>
        <select  name="thisSize">
            <option value="small">Small</option>
            <option value="medium">Medium</option>
            <option value="large">Large</option>
        </select>
        <br />
        <input type="checkbox" name="thisTopping" value="pepperoni">Pepperoni<br />
        <input type="checkbox" name="thisTopping" value="bbq">BBQ<br />
        <input type="checkbox" name="thisTopping" value="Hawaiian">Hawaiian<br />
        <input type="checkbox" name="thisTopping" value="steak">Steak<br />
        <br />
        <label for="thisDelivery">Delivery Method</label>
        <select  name="thisDelivery">
            <option value="train">Train</option>
            <option value="plane">Plane</option>
            <option value="automobile">Automobile</option>
        </select>
        <br />
        <input type="submit" value="Order">
    </form>
<?php } else {
    $pricing = array(
        'sizes' => array(
            'small' => 5,
            'medium' => 10,
            'large' => 15
        ),
        'toppings' => array(
            'pepperoni' => 9,
            'bbq' => 10,
            'Hawaiian' => 5,
            'steak' => 16
        ),
        'deliveryMethods' => array(
            'train' => 10,
            'plane' => 20,
            'automobile' => 5
        )
    );
    $total = 0;
    $total += $pricing['sizes'][$_POST["thisSize"]] + $pricing['toppings'][$_POST["thisTopping"]] + $total += $pricing['deliveryMethods'][$_POST["thisDelivery"]]; /* insert the var values retrieved from the form here */
    echo $total;


    /* checkboxes for toppings,
    fill out the rest
    Look into reading and writing files

      $pricing = array(
        'sizes' => array(
            'small' => 5,
            'medium' => 10,
            'large' => 15
        )
    );

echo $pricing['sizes'][small];
    */
} ?>
</body>
</html>