<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>        
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Class</th>
                <th scope="col">Heading</th>
                <th scope="col">Heading</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Default</th>
                <td>Cell</td>
                <td>Cell</td>
              </tr>
        
                <tr class="table-primary">
                  <th scope="row">Primary</th>
                  <td>Cell</td>
                  <td>Cell</td>
                </tr>
                <tr class="table-secondary">
                  <th scope="row">Secondary</th>
                  <td>Cell</td>
                  <td>Cell</td>
                </tr>
                <tr class="table-success">
                  <th scope="row">Success</th>
                  <td>Cell</td>
                  <td>Cell</td>
                </tr>
                <tr class="table-danger">
                  <th scope="row">Danger</th>
                  <td>Cell</td>
                  <td>Cell</td>
                </tr>
                <tr class="table-warning">
                  <th scope="row">Warning</th>
                  <td>Cell</td>
                  <td>Cell</td>
                </tr>
                <tr class="table-info">
                  <th scope="row">Info</th>
                  <td>Cell</td>
                  <td>Cell</td>
                </tr>
                <tr class="table-light">
                  <th scope="row">Light</th>
                  <td>Cell</td>
                  <td>Cell</td>
                </tr>
                <tr class="table-dark">
                  <th scope="row">Dark</th>
                  <td>Cell</td>
                  <td>Cell</td>
                </tr>
            </tbody>
          </table>
    </body>
</html>
