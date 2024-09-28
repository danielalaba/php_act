<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Menu</h1>

    <table>
        <tr>Order
            <td>Burger</td>
            <td>Fries</td>
            <td>Steak</td>
        </tr>
        <tr>Amount
            <td>50</td>
            <td>75</td>
            <td>150</td>
        </tr>
    </table>

    <h2>Select an order</h2>
    <select name="menu" id="menu">
        <option value="burger">Burger</option>
        <option value="fries">Fries</option>
        <option value="steak">Steak</option>
    </select>

    <form action="">
        <label for="qty">Quantity</label>
        <input type="number" name="qty">
        <label for="cash">Cash</label>
        <input type="number" name="cash">
    </form>

    <button type="submit">Submit</button>
</body>
</html>