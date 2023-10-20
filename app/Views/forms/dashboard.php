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


<table>
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

</body>
</html>

</body>
</html>