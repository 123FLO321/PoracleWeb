<div class="modal-header">
    <h5 class="modal-title" id="<?php echo $raid_unique_id ?>DeleteModalTitle">
        <?php echo i8ln("Delete tracking for Invasions"); ?>
        <?php echo $row['level']; ?>
    </h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<div class="modal-body">
    <?php echo i8ln("This will delete tracking for invasion type"); ?>
    <?php echo i8ln($row['grunt_type']); ?><br>
    <?php echo i8ln("Are you sure?"); ?>
</div>
<div class="modal-footer">
    <form action='./actions/invasions.php' method='POST'>
        <?php echo "
            <input type='hidden' id='type' name='type' value='invasions'>
            <input type='hidden' id='grunt_type' name='grunt_type' value='" . $row['grunt_type'] . "'>
            <input type='hidden' id='cur_distance' name='cur_distance' value='" . $row['distance'] . "'>
            <input type='hidden' id='cur_gender' name='cur_gender' value='" . $row['gender'] . "'>
            " ?>
        <input class="btn btn-danger" type='submit' name='delete'
            value='<?php echo i8ln("DELETE"); ?>'>
    </form>
    <button type="button" class="btn btn-secondary"
        data-dismiss="modal"><?php echo i8ln("CANCEL"); ?></button>
</div>
