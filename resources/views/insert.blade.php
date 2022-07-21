<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="/css/bootstrap.css" rel="stylesheet">

    <script src="/js/jQuery.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.js"></script>
    <title>insert</title>

    <script>

        $(document).ready(function () {
            $("#add-answer").click(function () {
                $("#answers").append($('<div class="form-group" id="answers">\n' +
                    '                        <label for="exampleInputEmail1" class="float-left">Text Answer</label>\n' +
                    '                        <input type="text" name="text_answer[]" class="form-control"\n' +
                    '                               placeholder="please enter Text Answer">\n' +
                    '                    </div>'));
            })

            $("#remove-answer").click(function () {
                $("#answers").children().last().remove()
            })
        })

    </script>

</head>
<body>
<div class="row  ">
    <div class="col">
        <div class="card border-info mb-3 mt-2 mx-auto shadow rounded" style="max-width: 25rem;">
            <div class="card-header text-dark shadow text-center"> Insert question and answer</div>
            <div class="card-body text-info">


                <form method="post" action="/add">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="float-left text-danger">Text Question</label>
                        <input type="text" name="text_question" class="form-control bg-light "
                               placeholder="please enter Text Question">
                    </div>

                    <button type="button" id="add-answer" class="btn btn-success rounded-circle">+</button>
                    <button type="button" id="remove-answer" class="btn btn-danger rounded-circle">-</button>

                    <div class="form-group">
                        <label for="exampleInputEmail1" class="float-left">Text Answer</label>
                        <input type="text" name="text_answer[]" class="form-control"
                               placeholder="please enter Text Answer">
                    </div>

                    <div class="form-group" id="answers">
                        <label for="exampleInputEmail1" class="float-left">Text Answer</label>
                        <input type="text" name="text_answer[]" class="form-control"
                               placeholder="please enter Text Answer">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1" class="float-left">Correct Answer Number</label>
                        <input type="number" name="is_true" class="form-control"
                               placeholder="please enter correct answer">
                    </div>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">

                    <button name="save" type="submit" class="btn btn-success btn-block rounded shadow text-warning">SAVE</button>

                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>