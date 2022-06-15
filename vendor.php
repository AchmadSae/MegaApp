<?php include "temp/header.php" ?>
<div class="container-page">
    <div class="row">

        <div class="address col s12">
            <span><a href="./">Home</a> / <span class="second-text">vendor</span></span>
            <h1>vendor</h1>
        </div>

    </div>

    <div class="row valign-wrapper">

        <div class="input-field col s9 ">
            <i class="material-icons prefix">search</i>
            <input id="icon_prefix" type="text" class="validate" placeholder="Search vendor">
        </div>
        <div class="col s3">

            <a class="waves-effect waves-light main-btn right">
                <i class="material-icons prefix left">add</i>New vendor</a>

        </div>

    </div>
    <table class="highlight data-table box">

        <thead>

            <th>Name</th>
            <th>Country</th>

        </thead>

        <tbody>

            <?php
            $data = select_vendor('*');
            foreach ($data as $d) { ?>
                <tr class="row table-content">
                    <td class="col s5" name="<?php echo $d['id'] ?>">
                        <p><?php echo $d['name'] ?></p>
                    </td>
                    <td class="col s5" name="<?php echo $d['id'] ?>">
                        <p><?php echo $d['country'] ?></p>
                    </td>
                    <td class="col s2 valign-wrapper">
                        <a class="waves-effect waves-light btn"><i class="material-icons left">search</i>View</a>
                    </td>
                </tr>

            <?php } ?>
        </tbody>

    </table>

    <div id="vendor-edit" class="modal">

        <form action="process/vendor.act" type="post">

            <div class="modal-content">
                <h4>Please input new name</h4>
                <input type="text" id="vendor-name" name="name">
                <input type="text" id="vendor-id" name="id" hidden>
                <input type="text" id="vendor-action" name="action" value="update" hidden>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn-flat">Confirm</button>
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancel</a>
            </div>

        </form>

    </div>

    <script>
        $('.edit-trigger').on('click', function() {

            $('#vendor-name').val($(this).parent().parent().children().children('p').text());
            $('#vendor-id').val($(this).attr('name'));
        })

        $('#vendor-name').on('click', function() {

            $(this).select();
        })

        $('#icon_prefix').on('keyup', function() {

            var value = $(this).val().toLowerCase();
            $('.table-content').filter(function() {

                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
            })

        })
    </script>


    <?php include "temp/footer.php" ?>