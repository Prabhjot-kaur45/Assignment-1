<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Order Form</title>
    <!--link the provided CSS to style the form-->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
      <strong><h1>  Order for Yummy Pizza </h1></strong>
    </header>

    <main>
      <img src="pizza.jpg" alt="Pizza "  >
        <form method="post" name="forms" action="index.php" width=70%>
        <!--Add a fieldset and legend element to encapsulate the Personal information fields--> 
        <fieldset>
            <legend>Personal Informatiom</legend>
            
            <!--Build an input element for First Name, Last Name, mobile, Address-->
            <label for> First Name:</label> <input type="text" name="fname" size=25/>
            <label> Last Name:</label> <input type="text" name="lname" size=25/><br>
            <label> Mobile #:</label> <input type="text" name="mobile" size=25/>
            <label>Address: <textarea col=70 rows=1 name="address"></textarea></label> 
</fieldset>

<fieldset>
    <legend>Order Details</legend>
    <select name="size">
        <option>Select Pizza Size</option>
        <option value="1">Small</option>
        <option value="2">Medium</option>
        <option value="3">Large</option>
        <option value="4">Family</option>
</select>
<select name="Quantity">
        <option>Select Quantity</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
</select>
<select name="Shape">
        <option>Select Shape</option>
        <option value="1">Square</option>
        <option value="2">Round</option>
</select>
</fieldset>

<!--Add a fieldset and legend element for Toppings-->
<fieldset>
    <legend>Choose Toppings</legend>
    <!--Build an input element Checkbox for Toppings-->

    <input type="checkbox" name="topping" value="1" />Roasted Garlic
    <input type="checkbox" name="topping" value="2" />Red Onions
    <input type="checkbox" name="topping" value="3" />Green Olives
    <input type="checkbox" name="topping" value="4" />Broccoli
    <input type="checkbox" name="topping" value="5" />Sausage
</fieldset>
<!--Add a fieldset and legend element for Cheeses-->
<!--Build an input element Radio for Chesses--> 
<fieldset>
    <legend> Chesses</legend>
    <input type="radio" name="Cheese" value="1" />Mozzarella
    <input type="radio" name="Cheese" value="2" />Reduced Fat
    <input type="radio" name="Cheese" value="3"/> Feta
    <input type="radio" name="Cheese" value="4" />Cheddar
</fieldset>

   <!--SAUCES-->
   <fieldset>
    <legend> Sauces</legend>
     <input type="checkbox" name="sauce" value="1" />Pizza Sauce
    <input type="checkbox" name="sauce" value="2" />Garlic Sauce
    <input type="checkbox" name="sauce" value="3" />Hummus
    <input type="checkbox" name="sauce" value="4" />Creamy Bechmel Sauce
</fieldset>

<!--Add a fieldset and legend element for Toppings-->
<!--Build an input element Radio for Crust--> 

<fieldset>
    <legend>Choose Crust</legend>
    <input type="radio" name="crust" value="1" />Deep
    <input type="radio" name="crust" value="1" />Thin
    <input type="radio" name="crust" value="1"/> Regular
</fieldset>
  <!--Add a fieldset and legend element for Date and Time-->
  <fieldset>
    <legend>Date & Time</legend>
    <label>Date:</label><input type="date" name="date"/>
    <label>Time:</label><input type="time" name="time"/>
</fieldset>
     <!-- Add a fieldset and legend element for Payment Method-->
     
     <fieldset>
        <legend>Payment Method</legend>
        <select name="payment">
            <option>Select Payment Method</option>
            <option value="1">Credit Card</option>
            <option value="2">Debit Card</option>
            <option value="3">Cash </option>
</fieldset>

<fieldset>
    <input type="checkbox" name="Takeaway" value="1"/> Takeaway
    <input type="checkbox" name="Delivery" value="2"/> Delivery
    <input type="checkbox" name="Eat in" value="3"/> Eat in 
</fieldset>

<footer>
    <div>
<!--Buttons-->
<input type="submit" value="PLACE YOUR ORDER"/>
<input type="reset" value="START OVER"/>
</div>
</footer>
</main>

</form>
</body>
</html>