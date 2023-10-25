<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            font-family: Arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        th {
            background-color: #f2f2f2;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .username-label {
            color: green;
            font-size: 2em;
            font-family: arial;
            font-weight: bold;
        }
        .email-label {
            color: green;
            font-family: arial;
            font-size: 1.2em;
        }
    </style>
</head>
<body>
<?php
    
    $users = isset($all_users) ? $all_users: array();
    $keys = [];
    if (count($users)) {
        $keys = array_keys($users[0]) ;
    }
?>
    <?php $login_user = session()->get('loginUser'); ?>
    <label class="username-label">Welcome, <?php echo ucfirst($login_user['username']);?></label><br>
    <label class="email-label">Your login Email is: <?php echo ucfirst($login_user['email']);?></label>

    <table style="margin-bottom : 20px;">
        <?php if (count($keys)) : ?> 
        <tr>
            <?php foreach($keys as $k) {
                echo '<th>' . $k . '</th>';
            }
            ?>
        </tr>
        <?php endif;?>
            <?php if(count($users)): ?>
                <?php foreach($users as $rows): ?>   
                    <tr>
                        <?php foreach($keys as $k2) {
                            echo '<td>'. $rows[$k2] . '</td>';
                        } ?>
                    </tr>
                <?php endforeach; ?>    
            <?php endif; ?>
    </table>
    <button style="padding: 5px; margin"><a href="<?= site_url('/change-password')?>" style="text-decoration:none; color: black; font-weight: bolder;">CHANGE PASSWORD</a></button>
    <button style="padding: 5px; margin"><a href="<?= site_url('/')?>" style="text-decoration:none; color: black; font-weight: bolder;">LOG OUT</a></button>



</body>
</html>

</body>
</html>