<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <script>
        // function getRepos(){
        var request = new XMLHttpRequest();
        request.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {
                data = JSON.parse(this.responseText);
                // console.log(data);
                data.forEach(e => {
                    console.log(e.name);
                });
            }
        };
        request.open(
            "GET",
            "https://api.github.com/users/aymanetech/repos",
            true
        );
        request.send();
        // }
        // getRepos();
    </script>
</body>

</html>