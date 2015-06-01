<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<body>
<?php
include('Ordering/Order.php')

?>

<?php if(empty($_POST)) { ?>
    <form action="" method="POST">
        <h1>Order your Pizza!</h1>
        <label for="size">Crust Size</label>
        <select  name="size">
            <option value="small">Small</option>
            <option value="medium">Medium</option>
            <option value="large">Large</option>
        </select>
        <br />
        <input type="checkbox" name="toppings[]" value="pepperoni">Pepperoni<br />
        <input type="checkbox" name="toppings[]" value="bbq">BBQ<br />
        <input type="checkbox" name="toppings[]" value="hawaiian">Hawaiian<br />
        <input type="checkbox" name="toppings[]" value="steak">Steak<br />
        <br />
        <label for="delivery">Delivery Method</label>
        <select  name="delivery">
            <option value="train">Train</option>
            <option value="plane">Plane</option>
            <option value="automobile">Automobile</option>
        </select>
        <br />
        <input type="submit" value="Order">
    </form>


<?php } else {

    $customer = new \Customers\Customer();

    $customer->setName('Zac', 'Jacob', 'Collins');
    $order = new Ordering\Order($customer);
    //have database thrown into object and access from there, get a specific row or document from the database etc.

    $order->getDeliveryEmail();

    $pricing = array(
          'sizes' => array(
            'small'     => 5,
            'medium'    => 10,
            'large'     => 15
        ),
        'toppings' => array(
            'pepperoni'     => 9,
            'bbq'           => 10,
            'Hawaiian'      => 5,
            'steak'         => 16
        ),
        'deliveryMethods' => array(
            'train'         => 10,
            'plane'         => 20,
            'automobile'    => 5
        )
    );

    $price = 0;
    $file = fopen('orders.json', 'r+');
    $orders = json_decode(fread($file, filesize($file)), true);

    $order = array(
        'size'      => null,
        'toppings'  => array(),
        'delivery'  => null
    );

    if(empty($pricing['sizes'][$_POST['size']])) {
        throw new Exception('Please enter a valid size');
    } else {
        $price += $pricing['sizes'][$_POST['size']];
        $order['size'] = $_POST['size'];
    }

    foreach($_POST['toppings'] as $topping) {
        if(!in_array($topping, $pricing['toppings'])) {
            throw new Exception("{$topping} is not a valid topping.");
        } else {
            $price += $pricing['toppings'][$topping];
            $order['toppings'][] = $topping;
        }
    }

    if(empty($pricing['deliveryMethods'][$_POST['delivery']])) {
        throw new Exception('Please enter a delivery method');
    } else {
        $price += $pricing['deliveryMethods'][$_POST['delivery']];
        $order['delivery'] = $_POST['delivery'];
    }

    $orders[] = $order;

    $written = fwrite($file, json_encode($orders));

    if($written === 0) {
        throw new \Exception('Error writing to file');
    }

    fclose($file);

} ?>
</body>
</html>