<?php
    $sql = "SELECT titulo, autor, ano, genero, quantidade FROM livros";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table border='1'>";
        echo "<tr><th>titulo</th><th>autor</th><th>ano</th></tr><tr><th>genero<tr><th>quantidade<tr><th>";
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { // Using associative array
            echo "<tr>";
            echo "<td>" . $row['titulo'] . "</td>";
            echo "<td>" . $row['autor'] . "</td>";
            echo "<td>" . $row['ano'] . "</td>";
            echo "<td>" . $row['genero'] . "</td>";
            echo "<td>" . $row['quantidade'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
?>