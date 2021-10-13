<!doctype html>
<html lang="en">

<head>
    <title>bootstrap</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <p>
        <a class="btn btn-primary" data-toggle="collapse" href="#contentId" aria-expanded="false"
           aria-controls="contentId">
            this
        </a>
    <div class="jumbotron">
        <h1 class="display-3">Jumbo heading</h1>
        <p class="lead">Jumbo helper text</p>
        <hr class="my-2">
        <p>More info</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" onclick='$("#mybut").click();' href="#" role="button">Jumbo action
                name</a>
        </p>
    </div>
    <div class="list-group">
        <button type="button" class="list-group-item list-group-item-action active">Active item</button>
        <button type="button" class="list-group-item list-group-item-action">Item</button>
        <button type="button" class="list-group-item list-group-item-action disabled">Disabled item</button>
    </div>
    <button type="button" class="btn btn-outline-primary"></button>

    </p>
    <div class="collapse" id="contentId">
        <style>
        div {
            position: relative;
        }
        </style>
        <!-- Button trigger modal -->
        <button id="mybut" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modelId">
            Launch
        </button>

        <script>
        $(' svg.svg').appendTo('h1 .display-3');
        $('*').each(function(index, element) { // element==this
            $('index').val(rand('5'));
            $.getJSON(
                "http://budget.gov.ru/epbs/faces/p/%D0%91%D1%8E%D0%B4%D0%B6%D0%B5%D1%82/%D0%A0%D0%B0%D1%81%D1%85%D0%BE%D0%B4%D1%8B/%D0%A0%D0%B5%D0%B5%D1%81%D1%82%D1%80%20%D1%83%D1%87%D0%B0%D1%81%D1%82%D0%BD%D0%B8%D0%BA%D0%BE%D0%B2%20%D0%B8%20%D0%BD%D0%B5%D1%83%D1%87%D0%B0%D1%81%D1%82%D0%BD%D0%B8%D0%BA%D0%BE%D0%B2%20%D0%B1%D1%8E%D0%B4%D0%B6%D0%B5%D1%82%D0%BD%D0%BE%D0%B3%D0%BE%20%D0%BF%D1%80%D0%BE%D1%86%D0%B5%D1%81%D1%81%D0%B0?search=&_adf.ctrl-state=11p21215j7_4&regionId=45",
                data,
                function(data, textStatus, jqXHR) {});
        });
        </script>

        <!-- Modal -->
        <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <ul class="nav nav-pills">
                                <li class="nav-item">
                                    <a href="#" class="nav-link active">Active</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Action</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Another link</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link disabled">Disabled</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
        $('#exampleModal').on('show.bs.modal', event => {
            var button = $(event.relatedTarget);
            var modal = $(this);
            // Use above variables to manipulate the DOM

        });
        </script>
        <div data-spy="scroll" data-target="#navId">

            <div id="navId">
                <ul class="nav nav-tabs" role="tablist">
                    <?php include 'svg.svg'; ?>
                </ul>
            </div>

        </div>


        <script>
        $('div{1:div|body}').scrollspy({
            target: '#navId'
        });
        </script>
    </div>
    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading"></h4>
        <p></p>
        <p class="mb-0"></p>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>