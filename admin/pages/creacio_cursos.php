<section class="card">
    <h1>Creació de cursos</h1>
    <p>Aquesta és la pàgina per a crear cursos.</p>
    <form method="post">
        <div class="mb-3">
            <label for="nom" class="form-label">Nom del curs</label>
            <input type="text" class="form-control" id="nom" name="nom" required>
        </div>

        <div class="mb-3">
            <label for="desc" class="form-label">Descripció</label>
            <textarea class="form-control" id="desc" name="desc" rows="3" required></textarea>
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Tipus de curs</label>
            <select class="form-select" id="type" name="type" required>
                <option value="">Seleccioni una opció</option>
                <option value="bp">BP</option>
                <option value="dpi">DPI</option>
            </select>
        </div>
        <!-- sortides laborals i competencies -->
        <div class="form-check mb-4">
            <input class="form-check-input" type="checkbox" id="disponible" name="disponible" value="1">
            <label class="form-check-label" for="disponible">
                Disponible
            </label>
        </div>

        <button type="submit" name="submit" class="btn btn-primary w-100">Crear</button>
    </form>

</section>
<?php
// require_once './inc/mySQLcon.php';
// if (isset($_POST['submit'])) {
//     $query = "INSERT INTO cursos (nom, tipus, descripcio, disponible)
//           VALUES ('$nom', '$tipus', '$descripcio', $disponible)";
//     mysqli_query($conexion, query: $query);
// }
require_once './inc/mySQLcon.php';

if (isset($_POST['submit'])) {
    $nom = $_POST['nom'];
    $tipus = $_POST['type'];
    $descripcio = $_POST['desc'];
    $disponible = isset($_POST['disponible']) ? 1 : 0;

    $stmt = $conexion->prepare("INSERT INTO cursos (nom, tipus, descripcio, disponible) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sssi", $nom, $tipus, $descripcio, $disponible);

    if ($stmt->execute()) {
        echo "<div class='alert alert-success'>Curs creat correctament!</div>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . $stmt->error . "</div>";
    }

    $stmt->close();
    $conexion->close();
}
?>