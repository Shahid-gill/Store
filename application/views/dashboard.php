<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Welcome to Dashboard</title>

        <style type="text/css">

            ::selection { background-color: #E13300; color: white; }
            ::-moz-selection { background-color: #E13300; color: white; }

            body {
                background-color: #fff;
                margin: 40px;
                font: 13px/20px normal Helvetica, Arial, sans-serif;
                color: #4F5155;
            }

            a {
                color: #003399;
                background-color: transparent;
                font-weight: normal;
                text-decoration: none;
            }

            a:hover {
                color: #97310e;
            }

            h1 {
                color: #444;
                background-color: transparent;
                border-bottom: 1px solid #D0D0D0;
                font-size: 19px;
                font-weight: normal;
                margin: 0 0 14px 0;
                padding: 14px 15px 10px 15px;
            }

            code {
                font-family: Consolas, Monaco, Courier New, Courier, monospace;
                font-size: 12px;
                background-color: #f9f9f9;
                border: 1px solid #D0D0D0;
                color: #002166;
                display: block;
                margin: 14px 0 14px 0;
                padding: 12px 10px 12px 10px;
            }

            #body {
                margin: 0 15px 0 15px;
                min-height: 96px;
            }

            p {
                margin: 0 0 10px;
                padding:0;
            }

            p.footer {
                text-align: right;
                font-size: 11px;
                border-top: 1px solid #D0D0D0;
                line-height: 32px;
                padding: 0 10px 0 10px;
                margin: 20px 0 0 0;
            }

            #container {
                margin: 10px;
                border: 1px solid #D0D0D0;
                box-shadow: 0 0 8px #D0D0D0;
            }
        </style>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>

        <div id="container">
            <h1>Welcome to Dashboard!</h1>
            
            <div id="body">
                <h2>User Portion</h2>
                <p><label>(3.1) Active & Verified Users Count:</label>  <?php echo $active_users; ?></p>
                <p><label>(3.1.1) InActive Users Count:  </label> <?php echo $in_active_users; ?></p>
                <p><label>(3.1.2) Not Verified Users Count:  </label> <?php echo $not_verified_users; ?></p>
                <p><label>(3.2) Count of active and verified users who have attached active products : </label> <?php echo $users_have_products[0]->user_count; ?></p>
                <p><label>(3.2.1) Count of active users who have not attached active products : </label> <?php echo $users_not_have_products[0]->user_count; ?></p>
                <hr>
                <h2>Product Portion</h2>
                <p><label>(3.3) Active Products Counts :</label> <?php echo $active_products; ?></p>
                <p><label>3.3.1 Inactive Products Counts : </label> <?php echo $in_active_products; ?></p>
                <p><label>3.4. Count of active products which don't belong to any user :</label> <?php echo $products_not_belong[0]->product_count; ?></p>
                <p><label>3.4.1 Count of active products which belong to users :</label> <?php echo $products_belong[0]->product_count; ?></p>
               
                
                <hr>
                <h2>Summarized User & Product Data</h2>
                <p><label>3.5. Amount of all active attached products :</label>  <?php echo $number_of_active_products; ?></p>
                <p><label>3.6. A3.6. Summarized price of all active attached products :</label>  <?php echo $price_of_active_products; ?></p>
                <p><label>3.7. Summarized prices of all active products per user :</label> </p>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Total Sum</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($per_user_sum as $user) {
                            ?>
                            <tr>
                                <th scope="row"><?php echo $user->id; ?></th>
                                <td><?php echo $user->name; ?></td>
                                <td>&dollar;<?php echo $user->totalPrice; ?></td>
                            </tr>
                        <?php  } ?>
                    </tbody>
                </table>
                <br><br>
                <hr>
                <h2>Exchange Rate Api Integration</h2>
                <p>Exchange Rate, The Amount is <strong>$<?php echo number_format($exchangerates_data->query->amount,2); ?></strong> In USD. I have converted into EUR <strong>&euro;<?php echo number_format($exchangerates_data->result,2); ?></strong></p>
                
            </div>
        </div>

    </body>
</html>
