<!DOCTYPE html>
<html>
<head>
    <?php
    require 'data.php';
    ?>
    <link rel="stylesheet" type="text/css" href="css/stely.css">
</head>

<body>

    <form class="1">
        <input type="txt" name='id'>
        <input type="submit" value="Kiem tra " placeholder="nhap so cau thu vao">
    </form>
        <?php 
        if (empty($_GET['id'])) 
        {
        }
        else
        {
            for ($i=0; $i < 4 ; $i++) 
            { 
                if($users[$i]['id']== $_GET['id'] )
            {
        ?>
                 <table>
                    <tr>
                        <tr>
                            <td>ID</td>
                            <td>Name</td>
                            <td>Gmail</td>
                        </tr>
                                <tr>
                                <td><?php echo $users[$i]['id']; ?></td>
                                <td><?php echo $users[$i]['name']; ?></td>
                                <td><?php echo $users[$i]['email']['gmail']; ?></td>
                                </tr>
                        </tr>
                </table>
                <?php 
                break;
            }
            else
            {
                if($i==1)
                {
                    echo "Khong tim thay!";
                }
            }
        }
    }
    ?>

        </body>
        </html>
                            