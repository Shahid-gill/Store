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
            <?php
//                            echo '<pre>';
//                            print_r($active_users);
//                            exit;
            ?>
            <div id="body">
                <h2>(3.1) Active & Verified Users Count:  (<?php echo $active_users; ?>)</h2>
<!--                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
//                        foreach ($active_users as $user) {
                            ?>
                            <tr>
                                <th scope="row"><?php echo $user->id; ?></th>
                                <td><?php echo $user->name; ?></td>
                                <td><?php echo $user->email; ?></td>
                            </tr>
                        <?php // } ?>
                    </tbody>
                </table>-->
                <h2>U3.2. Count of active and verified users who have attached active products : <?php echo $users_have_products[0]->user_count; ?></h2>
                <h2>3.2.1 Count of active users who have not attached active products : <?php echo $users_not_have_products[0]->user_count; ?></h2><br>
                
                <h2>3.3 Active Products Counts : (<?php echo $active_products; ?>)</h2>
                <h2>3.4. Count of active products which don't belong to any user : <?php echo $products_not_belong[0]->product_count; ?></h2>
                <br>
<!--                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                       // foreach ($active_products as $product) {
                            ?>
                            <tr>
                                <th scope="row"><?php echo $product->id; ?></th>
                                <td><?php echo $product->title; ?></td>
                                <td><?php echo $product->description; ?></td>
                            </tr>
                        <?php// } ?>
                    </tbody>
                </table>-->
                
                
            </div>
        </div>

    </body>
</html>
