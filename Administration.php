<?php
include("include/head.php");
include("include/nav.php");
?>

    <body>
        <div class="container">
            <section>
                <h1><span class="glyphicon glyphicon-cog"></span> Administration</h1>

                <ul class="nav nav-tabs nav-justified" id="table-admin">
                    <li role="presentation" class="active"><a href="#">Films</a></li>
                    <li role="presentation"><a href="#">Utilisateurs</a></li>
                </ul>
                <div class="table-responsive" id="table-film">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Films</th>
                                <th>Réalisateur</th>
                                <th>Année de sortie</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Le loup de Wall-Street</td>
                                <td>Martin Scorsese</td>
                                <td>2014</td>
                                <td>
                                    <button type="button" class="btn btn-info"><span class="glyphicon glyphicon-edit"></span></button>
                                    <button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button>
                                </td>
                            </tr>
                            <tr>
                                <td>Vice-versa</td>
                                <td>Peter Docter</td>
                                <td>2015</td>
                                <td>
                                    <button type="button" class="btn btn-info"><span class="glyphicon glyphicon-edit"></span></button>
                                    <button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button>
                                </td>
                            </tr>
                            <tr>
                                <td>Babysitting</td>
                                <td>Philippe Lacheau et Nicolas Benamou</td>
                                <td>2013</td>
                                <td>
                                    <button type="button" class="btn btn-info"><span class="glyphicon glyphicon-edit"></span></button>
                                    <button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <?php include ("include/footer.php"); ?>
        </div>
    </body>

    ?>