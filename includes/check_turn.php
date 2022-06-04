<?php

function check_turn($turn_id, $turns)
{
    if(!isset($_POST['submitButton']))
    {
        ?>
        <td>
            <label class="form-check-label" for="checkbox">رزرو</label>
            <input class="form-check-input" type="radio" name="turn_id" id="checkbox" value="<?php echo "$turn_id"?>" disabled>
        </td>
        <?php
    }
    else
    {
        for ($i=0; $i < 42; $i++)
        {
            if (isset($turns[$i]))
            {
                if ($turns[$i]==$turn_id)
                {
                    ?>
                    <td>
                        <label class="form-check-label text-danger" for="checkbox">رزرو شده</label>
                        <input class="form-check-input" type="radio" name="turn_id" id="checkbox" value="<?php echo "$turn_id"?>" disabled>
                    </td>
                    <?php
                    return;
                }
            }
        }
        ?>
        <td>
            <label class="form-check-label text-success" for="checkbox">رزرو</label>
            <input class="form-check-input" type="radio" name="turn_id" id="checkbox" value="<?php echo "$turn_id"?>">
        </td>
        <?php
    }
}

?>
