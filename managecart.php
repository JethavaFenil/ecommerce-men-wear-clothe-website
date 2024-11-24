<?php
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['add-cart']))
    {
        if(isset($_SESSION['carti']))
        {
            $myitems=array_column($_SESSION['carti'],'item_id');
            if(in_array($_POST['item_id'],$myitems))
            {
                echo"<script>
                   alert('Item Already Added');
                   window.location.href='home.php';
                </script>";
            }
            else
            {
                $count=count($_SESSION['carti']);
                $_SESSION['carti'][$count]=array('item_id'=>$_POST['item_id'],'quantity'=>1);
                echo"<script>
                   alert('Item Added');
                   window.location.href='home.php';
                </script>";
            }
        }
        else
        {
            $_SESSION['carti'][0]=array('item_id'=>$_POST['item_id'],'quantity'=>1);
            echo"<script>
                   alert('Item Added');
                   window.location.href='home.php';
                </script>";
        }
    }
    if(isset($_POST['remove-item']))
    {
        echo"if";
        foreach($_SESSION['carti'] as $key => $value)
        {echo"foreach";
            if($value['item_id']==$_POST['item_id'])
            {echo"secondif";
                unset($_SESSION['carti'][$key]);
                $_SESSION['carti']=array_values($_SESSION['carti']);
                echo "<script>
                  alert('Item Removed');
                  window.location.href='cart.php';
                </script>";
            }
        }
    }
}

?>