<?php require_once APPROOT . '/views/inc/header.php'; ?>
<h1><?php echo $data['title']; ?></h1>
<div class="row mb-3">
    <div class="col-md-6"><a href="<?php echo URLROOT ?>/partners/add" class="btn btn-primary">Lisa partner</a></div>
    <button class="col-md-2 btn btn-primary" onclick="sortTable()">Järjesta</button>
</div>
<!-- table -->
<table class="table table-striped" id="myTable">
    <thead>
    <tr>
        <th scope="col">nr</th>
        <th scope="col">Nimi</th>
        <th scope="col">Registri kood</th>
        <th scope="col">E-post</th>
        <th scope="col">Telefon</th>
        <th scope="col">Tegevusala</th>
        <th scope="col">Asukoht</th>
        <th scope="col">Detailne info</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($data['partners'] as $partner): ?>
        <tr>
            <th scope="row"><?php echo $partner->partner_id; ?></th>
            <td><?php echo $partner->partner_name; ?></td>
            <td><?php echo $partner->reg_nr; ?></td>
            <td><?php echo $partner->email; ?></td>
            <td><?php echo $partner->phone; ?></td>
            <td><?php echo $partner->partner_activity; ?></td>
            <td><?php echo $partner->location; ?></td>
            <td><a href="<?php echo URLROOT . '/partners/show/' . $partner->partner_id; ?>">Vaata</a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<!-- table -->
<script>
    function sortTable() {
        var table, rows, switching, i, x, y, shouldSwitch;
        table = document.getElementById("myTable");
        switching = true;
        while (switching) {
            switching = false;
            rows = table.rows;
            for (i = 1; i < (rows.length - 1); i++) {
                shouldSwitch = false;
                x = rows[i].getElementsByTagName("TD")[0];
                y = rows[i + 1].getElementsByTagName("TD")[0];
                if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                    shouldSwitch = true;
                    break;
                }
            }
            if (shouldSwitch) {
                rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                switching = true;
            }
        }
    }
</script>
<?php require_once APPROOT . '/views/inc/footer.php'; ?>
