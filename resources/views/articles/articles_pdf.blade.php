<!DOCTYPE html>
<html>
    <head>
        <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
        <style>
            <?php include(public_path() . '/css/style.css');?>
        </style>
    </head>
    <body>       
        <center>
            <h5>Laporan Artikel</h5>
        </center>
        <table class='table'>
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Isi</th>
                    <th>Gambar</th>
                </tr>
            </thead>
            <tbody>
            @foreach($articles as $a)
                <tr>
                    <td>{{ $a->title }}</td>
                    <td>{{ $a->content }}</td>
                    <td><img width="100px" src="{{ storage_path('app/public/'.$a->featured_image) }}"></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </body>
</html>