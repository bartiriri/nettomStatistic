
<?php include('header.php');?>

<div class="container-fluid">
    <div class="row">
        <h2 class="text-center">Page statistic</h2>
    </div>
    <div class="row mb-4">
        <div class="col text-center pt-2">
            <strong> Select statistic type:</strong>
            <select name="select-list">
                <option value="pages">Pages</option>
                <option value="news">News</option>
                <option value="files">Files</option>
            </select>
        </div>
        <div class="col text-center pt-2">
            <strong>Search by date</strong><br>
            <label>From</label>
            <div><input type="date"></div>
            <label>To</label>
            <div><input type="date"></div>
            <div><button class="btn btn-primary mt-1">Filtruj</button></div>
        </div>
    </div>



<table id="tabela">
    <thead>
    <tr>
        <td>Lp.</td>
        <td>Name/Title</td>
        <td>Count</td>
        <td>Action</td>

    </tr>
    </thead>

    <tbody>
    <tr>
        <td>1.</td>
        <td>Strona główna</td>
        <td>100</td>
        <td><a  href="details.php"><img src="image/list-action.png"/></a></td>
    </tr>


    </tbody>

</table>


</div>


<script>
    $(document).ready(function() {
        $('#tabela').DataTable();
    } );
</script>

<?php include('footer.php');?>