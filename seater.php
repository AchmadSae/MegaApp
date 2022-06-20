<?php include "temp/header.php" ?>
<div class="container-page">
    <div class="row">

        <div class="address col s12">
            <span><a href="./">Home</a> / <span class="second-text">seater</span></span>
            <h4>Seater</h4>
        </div>

    </div>

    <div class="row valign-wrapper">

        <div class="input-field col s9 ">
            <i class="material-icons prefix">search</i>
            <input id="icon_prefix" type="text" class="validate" placeholder="Search seater">
        </div>
        <div class="col s3">

            <a class="waves-effect waves-light main-btn right">
                <i class="material-icons prefix left">add</i>New seater</a>

        </div>

    </div>
    <table class="highlight data-table box">

        <thead>

            <th>Name</th>

        </thead>

        <tbody>

            <?php
            $data = select_seater('*');
            foreach ($data as $d) { ?>
                <tr class="row table-content">
                    <td class="col s10" name="<?php echo $d['id'] ?>">
                        <p><?php echo $d['name'] ?></p>
                    </td>
                    <td class="col s2">
                        <a name="<?php echo $d['id'] ?>" class="modal-trigger edit-trigger" href="#seater-edit">Edit</a> | <a href="process/seater.act?id=<?php echo $d['id'] ?>&action=delete">Delete</a>
                    </td>
                </tr>

            <?php } ?>
        </tbody>

    </table>

    <div id="seater-edit" class="modal">

        <form action="process/seater.act" type="post">

            <div class="modal-content">
                <h4>Please input new name</h4>
                <input type="text" id="seater-name" name="name">
                <input type="text" id="seater-id" name="id" hidden>
                <input type="text" id="seater-action" name="action" value="update" hidden>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn-flat">Confirm</button>
                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancel</a>
            </div>

        </form>

    </div>

    <script>
        $('.edit-trigger').on('click', function() {

            $('#seater-name').val($(this).parent().parent().children().children('p').text());
            $('#seater-id').val($(this).attr('name'));
        })

        $('#seater-name').on('click', function() {

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