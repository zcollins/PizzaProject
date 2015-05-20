
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<body>

<?php if(empty($_POST)) { ?>
    <form action="" method="POST">
        <h1>Order your <font=Red'Pizza!</font></h1>
        <label for="size">Crust Size</label>
        <select  name="size">
            <option value="small">Small</option>
            <option value="medium">Medium</option>
            <option value="large">Large</option>
        </select>
        <br />
        <input type="checkbox" name="toppings" value="pepperoni">Pepperoni<br />
        <input type="checkbox" name="toppings" value="bbq">BBQ<br />
        <input type="checkbox" name="toppings" value="Hawaiian">Hawaiian<br />
        <input type="checkbox" name="toppings" value="steak">Steak<br />
        <br />
        <label for="delivery">Delivery Method</label>
        <select  name="delivery">
            <option value="train">Train</option>
            <option value="plane">Medium</option>
            <option value="automobile">Large</option>
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
    $total = $pricing['sizes']; /* insert the var values retrieved from the form here */
    echo $total;


    /* checkboxes for toppings,
    fill out the rest
    Look into reading and writing files*/
} ?>
</body>
</html>